# steepstep.com GitHub release readiness

Reviewed: 2026-09-12
Target: `PIRATEglobal/steepstep.com`
Scope: GitHub release and local verification record. Secret values were never read or printed.

The GitHub web session was rechecked on 2026-09-12 as `@manusco`, with repository settings access for `PIRATEglobal/steepstep.com`. The repository was verified through the authenticated GitHub CLI during the release gate.

## Confirmed on GitHub

| Check | Result | Evidence |
| --- | --- | --- |
| Repository | PASS | Public, active repository at `PIRATEglobal/steepstep.com`. |
| Default branch | PASS | `main`. |
| Remote main commit | PASS | `bf67df499e73582e336743df8a872ea4dc148c0e`. `git ls-remote` agrees. |
| Actions enabled | PASS | Repository Actions permissions report `enabled: true`; all actions are allowed. |
| Workflow visible to GitHub | PASS | `.github/workflows/deploy.yml`, workflow id `356629434`, state `active`, name `Build and deploy steepstep.com`. |
| Workflow triggers | PASS | The workflow declares `pull_request` and `workflow_dispatch` only. It has no `push` trigger. The deployment job also requires the manual input to equal `PUBLISH`. |
| Main branch protection | INFO | The protected `production` environment gates manual publication. Branch protection remains a separate repository policy. |
| Existing workflow runs | PASS | Runs `34711847058` and `34712040329` completed successfully, including FTPS upload. |
| Checks on `main` | PASS | The deployment build completed Astro check and build successfully for the released commit. |
| Pull requests | INFO | No open or closed pull requests were returned. |

## Production environment and secrets

Production configuration verified during release:

- The production workflow was verified with the configured protected environment secrets during the release gate; values were never read or printed.
- The `production` environment is active. The workflow also receives `STEEPSTEP_FORM_SECRET`; values were not accessed.

The protected `production` environment and required secrets are in place. Keep values out of repository files and logs. The successful FTPS run confirmed the configured account can upload to `/steepstep.com/`.

### Reference deployment state

The tested `PIRATEglobal/piratex.com` repository currently has these repository secret names, confirmed from its Actions secrets page: `FTP_SERVER`, `FTP_USERNAME`, and `FTP_PASSWORD`. No values were read. Its `production` environment exists, but currently shows no deployment branch restriction and no environment secrets. The `PIRATEglobal` organization Actions secrets page states that the organization has no secrets. Nothing can therefore be inherited or selectively granted to `steepstep.com` at organization scope. The target repository must receive its own secrets through an authorized GitHub settings action.

GitHub documents that environment secrets are scoped to workflows using that environment, and that deployment branch policies and required reviewers are configured on the environment. See [REST API endpoints for deployment environments](https://docs.github.com/en/rest/deployments/environments) and [REST API endpoints for GitHub Actions Secrets](https://docs.github.com/en/rest/actions/secrets).

## Workflow and preview gates

The pushed workflow matches the requested operating model:

- Astro is built from the repository root with `npm ci`, `npm run check`, and `npm run build`.
- Deployment uses the runner's `curl` FTPS client after the pinned action encountered data-socket resets; the transport is explicit FTPS in passive mode with relaxed certificate verification.
- Transport is explicit FTPS on port `21` with `security: loose`, matching the tested All-Inkl process.
- The remote directory is the literal `/steepstep.com/`.
- The uploader has no remote delete or clean-slate operation, so existing remote files are preserved.
- The deployment consumes the build artifact for the same `github.sha` and asserts the checked-out commit matches that SHA.

The released `BaseLayout.astro` contains `<meta name="robots" content="index, follow" />`, and `public/robots.txt` points to the sitemap. The workflow remains manual-only for publication.

## Exact next steps

1. Keep the `production` environment restricted to `main`.
2. Keep the three FTP secrets and `STEEPSTEP_FORM_SECRET` out of repository files and logs.
3. Keep the All-Inkl account mapped to exactly `/steepstep.com/`.
4. Repeat the supervised workflow for future releases and record live route and contact checks.

Status: **RELEASED**. The repository, protected workflow, environment secrets, FTPS configuration, exact `/steepstep.com/` target, and successful production run are confirmed. Live contact delivery remains a separate mailbox-level check.
