# steepstep.com deployment

This site deploys as static files to All-Inkl over explicit FTPS. The repository root is the current `site/` directory, published as `pirateglobal/steepstep.com`. The workflow is intentionally manual while the public content, legal text, and practice details are being approved.

## Remote boundary

The only permitted deployment directory is the exact absolute path:

```text
/steepstep.com/
```

The workflow uploads the contents of `dist/` only. It does not upload source files, the repository, dependencies, Astro caches, or documentation. It does not use plain FTP or an SFTP assumption. The action runs in incremental mode with `dangerous-clean-slate: false`, so it never clears the remote directory before upload. Any action-managed sync state is written within the declared target directory only.

The FTPS user should be restricted in All-Inkl KAS to this domain directory where the hosting plan allows it. Do not use a main account or a user whose home directory contains other sites.

## GitHub setup

Create a protected GitHub environment named `production`. Require reviewer approval for that environment. Add these environment secrets, without committing their values:

| Secret | Value |
| --- | --- |
| `FTP_SERVER` | All-Inkl FTPS hostname from KAS |
| `FTP_USERNAME` | Domain-scoped FTP username |
| `FTP_PASSWORD` | Password for that FTP account |

The workflow uses explicit FTPS on port `21` and the tested `security: loose` setting required by the existing All-Inkl deployment. This setting does not verify certificate identity, so the transport limitation is accepted only for this provider endpoint, with credentials scoped to the Steepstep directory and the production environment protected by reviewer approval. Revisit this setting if All-Inkl provides a certificate chain that supports strict verification.

## Running a deployment

1. Open **Actions → Build and deploy steepstep.com → Run workflow**.
2. Enter `PUBLISH` in the `publish` field.
3. Wait for the `production` environment approval.
4. Review the build and check jobs before approving.
5. After FTPS completes, check `https://steepstep.com/` and the generated routes, assets, canonical links, HTTPS, and `robots.txt`.

Pull requests run the check and build job but can never deploy. A push to a branch also cannot deploy. This prevents an unfinished preview from reaching the public domain by accident. The site currently contains preview/noindex gates, so production publication still depends on the content and legal approvals recorded in the site README and website brief.

## Rollback

Each successful build is retained as a GitHub Actions artifact for 14 days. To roll back, run the workflow from the earlier commit, enter `PUBLISH`, and approve the protected environment. The same FTPS upload restores the earlier build in `/steepstep.com/` without a clean-slate operation. If a stale file must be removed, inspect it and remove it manually through an approved All-Inkl process after taking a backup. Never add a remote delete or cleanup flag to this workflow without a separate review.

## Local verification

From the repository root, which is the `site/` directory in this workspace:

```sh
npm ci
npm run check
npm run build
```

No local command in this document connects to All-Inkl. The workflow is the only deployment path defined here.

## Required pre-deploy checks

- The target GitHub repository is `pirateglobal/steepstep.com`.
- The `production` environment has required reviewers.
- The three environment secrets exist and contain verified values.
- The FTPS account is limited to `/steepstep.com/`.
- The public practice identity, clinical safety path, privacy notice, terms, prices, contact details, and booking route have been approved.
- A previous artifact or commit is available for rollback.
