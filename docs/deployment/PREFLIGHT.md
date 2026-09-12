# steepstep.com deployment preflight

Date: 2026-09-12

Scope: read-only preflight for publishing the Astro site to `pirateglobal/steepstep.com` and deploying to the All-Inkl domain directory `/steepstep.com/`.

## Findings

- The working tree is currently the Resonance repository, on `main`, with `origin` pointing to `https://github.com/manusco/resonance.git`.
- The website is a separate Astro project under `site/`. It currently declares Astro `^7.3.0` and builds to `site/dist/`.
- There is no deployment workflow in this working tree. Existing `.github/workflows/` files belong to the Resonance framework.
- `gh auth status` reports an invalid login for the `manusco` account. The GitHub API and `git ls-remote` checks could not resolve `github.com` in this sandbox, so the target repository existence, permissions, default branch, Actions settings, and secret names remain unverified.
- No All-Inkl host, username, port, or credential was found in repository files. No secret values were read or printed.

## Target boundary

The only permitted remote deployment destination is the exact All-Inkl directory `/steepstep.com/`. The workflow must upload only the generated static output from `site/dist/` to that directory. It must not use a server root, parent directory, wildcard target, cleanup flag, or any path containing `..`.

The workflow should build first, then deploy from the artifact or checkout output. Do not upload the repository, `node_modules`, `.git`, docs, source files, or Astro cache.

## Recommended GitHub shape

Create or use `https://github.com/pirateglobal/steepstep.com` as a dedicated repository whose checked-out website lives at repository root, or keep this repository and set the workflow working directory to `site/`. The second option carries the Resonance framework and its unrelated workflows into the new repository, so a dedicated site repository is the cleaner boundary.

Before pushing, confirm the exact target repository and branch with an authenticated GitHub session. The current local `origin` is not the requested destination and must not be overwritten without an explicit, reviewable repository setup step.

## Recommended workflow shape

Use a protected `production` environment. Trigger CI on pull requests and deploy only on a push to the protected default branch, with an optional manual `workflow_dispatch`. Set least-privilege permissions, for example `contents: read`, and serialize deployments with a concurrency group. Pin third-party actions to an audited commit or exact release tag.

Build gate:

```yaml
- uses: actions/checkout@v6
- uses: actions/setup-node@v6
  with:
    node-version-file: site/.nvmrc # or the repository's chosen Node version
    cache: npm
    cache-dependency-path: site/package-lock.json
- run: npm ci
  working-directory: site
- run: npm run check && npm run build
  working-directory: site
```

For All-Inkl, prefer SFTP on port 22 if the hosting plan exposes SSH. All-Inkl documents SFTP for plans with SSH access. If SFTP is unavailable, use explicit FTPS on port 21 with certificate verification enabled. Do not use plain FTP.

The deployment action must receive:

- local directory: `site/dist/` or the downloaded build artifact
- remote directory: `/steepstep.com/`
- server, username, and password or key from GitHub environment secrets
- a narrow exclude list for `.git`, `node_modules`, and deployment metadata
- no remote delete or clean-slate option until a separately approved rollback and backup procedure exists

`SamKirkland/FTP-Deploy-Action` documents `server-dir`, FTPS protocol selection, and a sync state file. It is a viable FTPS fallback, but the action must be pinned and its exact input behavior tested against an isolated All-Inkl FTP user restricted to the domain directory. For SFTP, use a pinned, maintained action that supports a remote path and does not delete outside it, or invoke the system `sftp` client in a small reviewed script with strict path arguments.

## Secret names

Use environment-scoped secrets with names such as `ALLINKL_HOST`, `ALLINKL_USERNAME`, `ALLINKL_PASSWORD` for FTPS, or `ALLINKL_SSH_PRIVATE_KEY` for SFTP. These are names only, not values. Add an environment approval rule before the production deploy job can access them. Never put credentials in YAML, repository files, build output, or logs.

All-Inkl states that its servers support explicit FTP over SSL/TLS and that SFTP uses port 22 where SSH access is available. Its FAQ also recommends checking the hosting plan for SFTP availability. Confirm the actual hostname, protocol, port, certificate hostname, FTP user's home directory, and permissions in KAS before implementation.

## Safe rollout and rollback

1. Create a domain-scoped All-Inkl user whose home is `/steepstep.com/`, if KAS permits that restriction.
2. Test a dry run or upload to a disposable directory only if the user authorizes that directory. This preflight does not authorize any remote write.
3. Deploy a unique build and verify the domain, HTTPS, redirects, canonical URLs, `robots.txt`, assets, and every generated route.
4. Keep the previous static release as a local GitHub Actions artifact or tagged commit. Roll back by redeploying the previous artifact to the same exact directory.
5. Keep `delete: false` initially. If stale-file deletion is later required, first prove that the action scopes deletion to `/steepstep.com/` and record a backup and restore check.

## Blockers before push or deploy

- Authenticated access for the `pirateglobal` GitHub account is missing in this environment.
- Target repository existence, ownership, branch, and Actions permission settings are unverified because GitHub was unreachable from this sandbox.
- The repository boundary is unresolved: dedicated site repository versus the current Resonance repository with a `site/` working directory.
- All-Inkl connection details and whether SFTP is enabled are unknown.
- Production workflow and secret names do not yet exist.
- The public site still contains preview/legal/content gates recorded in the website brief. Deployment infrastructure can be prepared, but public launch claims require the approved practice details and legal copy.

## Sources checked on 2026-09-12

- [GitHub deployment environments](https://docs.github.com/en/actions/concepts/workflows-and-actions/deployment-environments), for protected environments and environment-scoped secrets.
- [GitHub workflow syntax](https://docs.github.com/en/actions/reference/workflows-and-actions/workflow-syntax), for least-privilege `permissions`.
- [GitHub using secrets](https://docs.github.com/en/actions/how-tos/write-workflows/choose-what-workflows-do/use-secrets), for repository and environment secret handling.
- [All-Inkl FAQ](https://all-inkl.com/index.php?open=faq&sek=wichtig), for explicit FTPS and conditional SFTP availability.
- [All-Inkl SSH activation](https://all-inkl.com/wichtig/anleitungen/kas/ssh/dateiverwaltung/aktivierung-von-ssh-nur-im-hauptaccount-moeglich_395.html), for plan and KAS prerequisites.
- [SamKirkland FTP Deploy Action](https://github.com/SamKirkland/FTP-Deploy-Action), for documented FTPS and `server-dir` inputs. This is a third-party action and needs pinning and review.

Status: **NEEDS_CONTEXT** for external authentication and All-Inkl connection facts. The local site build shape is clear; no external mutation was performed.
