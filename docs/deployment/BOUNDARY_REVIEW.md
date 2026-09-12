# Deployment boundary review

Reviewed 2026-09-12 against the tested PIRATEx workflow at `/Users/piratex/Documents/projects/piratex.com/.github/workflows/deploy.yml` and the revised workflow at [`site/.github/workflows/deploy.yml`](../../.github/workflows/deploy.yml).

## Verdict

**PASS WITH EXTERNAL PRE-DEPLOY CHECKS.** The revised workflow now matches the tested PIRATEx transport: explicit FTPS on port 21 with the pinned FTP Deploy Action and `security: loose`. It targets only `/steepstep.com/`, uploads only the built static output, disables the action's clean-slate deletion behavior, and asserts that each job checks out `GITHUB_SHA`. Before the first production run, confirm the FTP account's document-root mapping in KAS.

## Boundary checks

| Check | Result | Evidence and action |
| --- | --- | --- |
| Exact remote directory | PASS | Every deploy attempt passes the literal `server-dir: /steepstep.com/` to the action. |
| No parent or wildcard target | PASS | The target rejects `..`, `*`, and `?`, and requires the exact absolute path. No user-controlled target is accepted. |
| Local build root | PASS | The workflow runs from the `site/` repository root. `package-lock.json`, `dist/`, and the Astro scripts resolve there. |
| Upload scope | PASS | The build job publishes `dist/`; the deploy job downloads that artifact and runs `lcd "$GITHUB_WORKSPACE/dist"` followed by `put -r *`. Source files, docs, `.git`, dependencies, and Astro caches are not uploaded. |
| Remote deletion/synchronisation | PASS | Every attempt sets `dangerous-clean-slate: false`; no remote delete or mirror operation is requested. Existing remote files are retained. This is the safe behavior for a first deployment. |
| Shell and action inputs | PASS | The remote target and local directory are fixed YAML values, while credentials are passed as secrets. The workflow does not accept a user-controlled remote path. |
| Transport security | PASS WITH KNOWN LIMITATION | The workflow uses the tested explicit FTPS configuration: `protocol: ftps`, port `21`, and `security: loose`. Loose mode does not verify certificate identity, but it is the known working All-Inkl endpoint configuration. Never fall back to plain FTP. |
| Credentials | PASS | Credentials are protected environment secrets and no secret values appear in repository files. The FTP account still must be restricted in KAS to the steepstep.com document root. |
| Trigger safety | PASS | Pull requests only build. Deployment requires manual dispatch plus the exact `PUBLISH` input and the protected `production` environment. Concurrency queues deployments. |
| Source integrity | PASS | The artifact name includes `github.sha`, the deploy job consumes the paired build artifact, and both jobs assert `git rev-parse HEAD = GITHUB_SHA`. |
| Action references | PASS | `SamKirkland/FTP-Deploy-Action` is pinned to the same reviewed commit as PIRATEx. The GitHub maintained actions use release tags, which is consistent with the current repository convention. Pin them separately if the repository adopts immutable refs as a policy. |
| Deployment documentation | PASS | `DEPLOYMENT.md` describes FTPS, the exact target, the three required environment secrets, the protected production environment, and rollback behavior. |

## Required preflight before first deploy

1. Confirm in All-Inkl KAS that the account is a domain-scoped user whose effective home/document root is `/steepstep.com/`, and that it cannot access sibling sites.
2. Confirm the FTPS hostname and account mapping in KAS. The account must resolve to the steepstep.com document root and have no access to sibling site directories.
3. Run the build/check job from the target repository before authorizing `PUBLISH`; the workflow already asserts the source commit in both jobs.
4. Perform one supervised upload, then inspect only `https://steepstep.com/` and its generated routes. Do not use a parent directory or enable a cleanup/sync deletion flag during this first run.

## Scope statement

This review covers the GitHub Actions workflow and its local build/deployment paths. It does not verify the external All-Inkl account, credentials, DNS, certificate, SSH host key, or live document root. Those facts require a KAS check or a supervised deployment.
