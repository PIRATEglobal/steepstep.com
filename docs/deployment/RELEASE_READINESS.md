# steepstep.com GitHub release readiness

Reviewed: 2026-09-12
Target: `PIRATEglobal/steepstep.com`
Scope: read-only GitHub and local release checks. No deployment was started and no secret values were read.

The GitHub web session was rechecked on 2026-09-12 as `@manusco`, with repository settings access for `PIRATEglobal/steepstep.com`. The local `gh` token is invalid, so these GitHub observations come from the authenticated web session and local repository inspection.

## Confirmed on GitHub

| Check | Result | Evidence |
| --- | --- | --- |
| Repository | PASS | Public, active repository at `PIRATEglobal/steepstep.com`. |
| Default branch | PASS | `main`. |
| Remote main commit | PASS | `253843ce63e4b8d1293364a8bc99616762de4047`. `git ls-remote` and the branch API agree. |
| Actions enabled | PASS | Repository Actions permissions report `enabled: true`; all actions are allowed. |
| Workflow visible to GitHub | PASS | `.github/workflows/deploy.yml`, workflow id `356629434`, state `active`, name `Build and deploy steepstep.com`. |
| Workflow triggers | PASS | The workflow declares `pull_request` and `workflow_dispatch` only. It has no `push` trigger. The deployment job also requires the manual input to equal `PUBLISH`. |
| Main branch protection | INFO | `protected: false`; no branch rules were returned. Branch protection is not required for the manual deployment gate, but should be added if direct pushes must be prevented. |
| Existing workflow runs | INFO | No workflow runs are recorded for the repository yet. The build and deployment path has not been exercised on GitHub. |
| Checks on `main` | INFO | No check runs are attached to the current main commit. |
| Pull requests | INFO | No open or closed pull requests were returned. |

## Production environment and secrets

These are the blockers for an operable production deployment:

- The `production` environment does not exist. The repository Environments page shows “There are no environments for this repository.”
- Because the environment does not exist, no environment protection rule or required reviewer is configured.
- No repository secrets are present. The repository secret listing returned an empty set.
- No environment secret listing can be returned until `production` exists. The requested names are `FTP_SERVER`, `FTP_USERNAME`, and `FTP_PASSWORD`; their values were not accessed.

Create the `production` environment in the target repository, add at least one required reviewer, and add those three secrets at environment scope. Keep the values out of the repository and workflow logs. Confirm in All-Inkl that the FTP account is restricted to `/steepstep.com/` before approving a run.

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

The pushed `BaseLayout.astro` contains `<meta name="robots" content="noindex, nofollow" />`, and `public/robots.txt` allows crawling. The noindex tag is the effective preview gate until the public launch facts and legal copy are approved. It must be removed or made environment-aware before SEO launch. The workflow itself remains manual-only for publication.

## Exact next steps

1. Create the `production` environment and restrict deployments to `main`.
2. Add at least one required reviewer if a specific reviewer identity is confirmed. No reviewer identity was guessed during this check.
3. Add environment secrets named `FTP_SERVER`, `FTP_USERNAME`, and `FTP_PASSWORD` without exposing their values.
4. Confirm the All-Inkl FTPS hostname and the FTP user's effective document root is exactly `/steepstep.com/`.
5. Run the workflow's build/check path on GitHub and inspect its artifact.
6. Start one supervised manual run with `publish: PUBLISH`, approve the environment only after reviewing the build job, then verify the live routes and assets.
7. Record the first run's result and live URL checks in the deployment log.

Status: **BLOCKED for production deployment** until the protected environment, environment secrets, and All-Inkl account mapping exist. The repository, main commit, active workflow, Actions setting, manual trigger, FTPS configuration, and preview noindex gate are confirmed.
