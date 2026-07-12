# WordPress Deployment Handoff Guide

This is the final practical handoff guide for deploying the ARKON Group WordPress and Bricks Builder website from this repository to a staging WordPress environment and then to production.

The website covers the five confirmed ARKON Group companies only:

1. ARKON Engineering Consultancy Co.
2. ELITE Security Consultancy Co.
3. Integrated Building Systems
4. Quality Inspection Company
5. Turning Point Digital Marketing Co.

Use this guide together with `AGENTS.md`, the child theme, Bricks section snippets, content packs, schema files, and launch QA documents in this repository.

## A. Project Summary

### Website Objective

Build a premium bilingual ARKON Group website that presents one integrated project-support ecosystem across five specialized companies. The website should support credibility, service discovery, company exploration, proposal requests, document downloads, and English/Arabic lead generation.

### Target Domain

- Production domain: `arkongroup.com.sa`
- Recommended staging domain: `staging.arkongroup.com.sa` or a protected hosting staging URL

### Technology Stack

- WordPress
- Bricks Builder
- ARKON Bricks child theme from `arkon-child-theme/`
- Rank Math or Yoast for SEO
- WPML or Polylang for bilingual English/Arabic management
- Fluent Forms or Gravity Forms for lead capture
- LiteSpeed Cache or WP Rocket for caching and performance
- Cloudflare for DNS, CDN, SSL/TLS, WAF, and edge caching
- Spline for desktop 3D hero if performance targets are met
- Static fallback image for mobile, reduced-motion, and save-data users

### Design Direction

Use a premium Saudi project command-center style:

- Dark navy base
- ARKON royal blue
- Silver and light gray technical accents
- Restrained gold highlights
- High readability
- Clean enterprise-grade layouts
- Bricks-managed visual sections
- Controlled 3D or glass/grid effects where performance allows

### Bilingual Requirement

The site must support:

- English primary pages
- Arabic RTL pages
- Language switcher mapping equivalent pages where available
- Arabic menus, footer labels, form labels, CTAs, SEO metadata, and page content
- No duplicate full English and Arabic content on the same URL

### Five-Company Structure

Use this structure across navigation, pages, forms, schema, downloads, and internal links:

| Company | Short label | Arabic display name |
|---|---|---|
| ARKON Engineering Consultancy Co. | AEC | شركة أركون للاستشارات الهندسية |
| ELITE Security Consultancy Co. | ELITE | شركة إيليت للاستشارات الأمنية |
| Integrated Building Systems | IBS | شركة أنظمة المباني المتكاملة |
| Quality Inspection Company | QIC | شركة فحوصات الجودة |
| Turning Point Digital Marketing Co. | TP Digital | شركة نقطة تحول للتسويق الرقمي |

## B. Repository Overview

### `AGENTS.md`

Primary build instructions for Codex and future implementers. It defines company scope, WordPress/Bricks stack, visual direction, homepage order, SEO priorities, performance rules, and quality checklist.

### `README.md`

Repository starter overview. Use it to understand what the build pack includes and the intended high-level workflow.

### `arkon-child-theme/`

WordPress child theme for the site. It contains theme enqueue logic, reusable CSS, JavaScript interactions, 3D loading/fallback logic, schema helpers, and shortcodes.

Key files:

- `style.css`
- `functions.php`
- `assets/css/arkon-global.css`
- `assets/js/arkon-animations.js`
- `assets/js/arkon-3d-loader.js`
- `inc/schema.php`
- `inc/shortcodes.php`

### `assets/`

Brand, logo, and 3D planning assets. Use this folder for source assets, preview files, and creative direction before uploading final optimized assets to WordPress Media Library.

### `bricks-sections/`

Bricks-ready homepage HTML snippets. These are implementation starting points for the homepage sections and should be pasted into Bricks, then refined into editable Bricks elements where appropriate.

### `codex-prompts/`

Prompt files used during repository development. These are useful for understanding the sequence of build tasks and the intended output of each phase.

### `content/`

Structured content source files. Use `content/companies.json` as the source of truth for company names, Arabic names, descriptions, and service families.

### `docs/`

Implementation guides, content packs, launch checklists, page architecture documents, and handoff material. This deployment handoff should be used as the final execution guide.

### `schema/`

Reusable JSON-LD schema examples for Organization, WebSite, BreadcrumbList, Service, FAQPage, and ProfessionalService patterns. Use these conservatively and only where the page content supports them.

## C. WordPress Environment Requirements

### WordPress Version Recommendation

- Use the latest stable WordPress release available from the hosting provider.
- Avoid launching on outdated WordPress core.
- Confirm Bricks Builder compatibility before major WordPress upgrades.

### PHP Version Recommendation

- Recommended: PHP 8.2 or PHP 8.3 if supported by the hosting stack and plugins.
- Minimum practical target: PHP 8.1.
- Confirm Bricks Builder, multilingual plugin, forms plugin, cache plugin, and SEO plugin compatibility before production launch.

### HTTPS / SSL

- SSL must be active on staging if form testing and file uploads are used.
- SSL must be active on production before public launch.
- Use HTTPS in WordPress Address and Site Address.
- Confirm no mixed-content warnings appear after launch.

### Staging Environment

Staging should include:

- Protected access or noindex.
- Same theme and plugin stack planned for production.
- Enough PHP memory for Bricks editing.
- SMTP configured for form testing.
- Backup system active before content import.
- Separate form test recipients or clearly marked test submissions.

### Backup System

Before editing:

- Configure daily automated backups.
- Confirm manual backup option exists.
- Confirm restore process is known.
- Take a full backup before migration to production.

### File Upload Limits

Recommended starting values:

- PHP upload limit: at least 32 MB.
- WordPress media upload: enough for optimized PDFs and fallback images.
- Form upload field: follow the limits in `docs/forms-and-lead-capture-setup.md`.

### Permalink Settings

Use:

- Settings > Permalinks > Post name
- Resulting format: `/%postname%/`

Confirm English and Arabic page URLs follow the agreed structure in `docs/navigation-header-footer-system.md`.

### Media Library Organization

Recommended folders or naming groups:

- Logos
- Hero images
- Company images
- Downloads
- Arabic downloads
- Form uploads
- Temporary staging assets

Use clear file names and avoid duplicate media uploads.

## D. Required Plugins

Install only the plugins needed for the build. Keep the stack lean.

### Core Build Plugins

- Bricks Builder
  - Required visual layout system.
  - Use for templates, headers, footers, and page sections.
- Bricks child theme setup
  - Use the repository folder `arkon-child-theme/`.
  - Activate it as the active theme after Bricks is installed.
- WPML or Polylang
  - Required for English/Arabic structure.
  - Choose one before building final pages.
- Rank Math or Yoast
  - Use for metadata, sitemaps, robots settings, canonical URLs, and optional schema insertion.
- Fluent Forms or Gravity Forms
  - Use for Request Proposal, Contact, and Download/Credentials forms.

### Performance, Security, And Operations Plugins

- LiteSpeed Cache or WP Rocket
  - Use one caching plugin only.
  - Test carefully with Bricks, forms, multilingual pages, and 3D fallback logic.
- Security plugin
  - Use a reputable WordPress security plugin suited to the hosting environment.
- Backup plugin
  - Use if hosting backups are not sufficient or if the team needs WordPress-level restores.
- SMTP plugin
  - Required for reliable form notifications and user confirmation emails.
- SVG security plugin if SVG uploads are required
  - Use a trusted sanitizer.
  - Upload SVGs only when necessary.
- Analytics/Search Console integration plugin if needed
  - Use only if analytics cannot be inserted through the theme, tag manager, or SEO plugin.

## E. Child Theme Deployment

### Step-By-Step Deployment

1. Compress `arkon-child-theme/`.
   - Create a ZIP file containing the child theme folder and its files.
   - Confirm the ZIP root contains `style.css` and `functions.php`.
2. Upload to WordPress themes.
   - Go to Appearance > Themes > Add New > Upload Theme.
   - Upload the ZIP.
   - Alternatively, upload the folder to `wp-content/themes/` by SFTP.
3. Activate child theme.
   - Confirm Bricks Builder remains active.
   - Confirm the ARKON child theme is the active WordPress theme.
4. Confirm CSS is loading.
   - Inspect frontend source or browser network panel.
   - Confirm `arkon-global.css` loads.
   - Confirm homepage sections receive expected dark navy, royal blue, silver, and gold styling.
5. Confirm JS is loading.
   - Confirm `arkon-animations.js` loads.
   - Confirm `arkon-3d-loader.js` loads where needed.
   - Confirm there are no console errors.
6. Confirm shortcodes are registered.
   - Review `arkon-child-theme/inc/shortcodes.php`.
   - Add a test shortcode only on staging if needed.
7. Confirm schema functions are available.
   - Review `arkon-child-theme/inc/schema.php`.
   - Confirm JSON-LD output is valid when enabled.
8. Confirm no PHP errors.
   - Enable WordPress debug logging on staging if needed.
   - Check PHP error logs after theme activation.
   - Disable public error display before production launch.

## F. Bricks Builder Page Build Sequence

Build in this order to reduce rework:

1. Global styles
   - Colors, typography, container width, buttons, cards, spacing, RTL basics.
2. Header template
   - Logo, navigation, dropdowns, language switcher, Request Proposal CTA, mobile menu.
3. Footer template
   - Group overview, company links, service links, contact placeholders, legal links, downloads.
4. Homepage
   - Use `bricks-sections/` snippets and homepage copy sources.
5. About page
   - Use content from `docs/website-content-expansion-pack.md` and Arabic guidance from `docs/arabic-content-pack.md`.
6. Company pages
   - Build five company pages only.
   - Use `docs/company-pages-build-guide.md` and `content/companies.json`.
7. Services hub
   - Use `docs/service-pages-architecture.md`.
8. Individual service pages
   - Build priority service pages first, then expand.
9. Industries page
   - Connect industry sections to relevant services and companies.
10. Credentials / Download Center
   - Use `docs/assets-and-download-center.md`.
11. Contact / Request Proposal page
   - Use `docs/forms-and-lead-capture-setup.md`.
12. Arabic duplicated pages
   - Duplicate English pages through WPML or Polylang.
   - Replace content with Arabic copy and verify RTL.
13. 404 page
   - Create a useful Bricks 404 template with links to Home, Services, Companies, and Contact.
14. Privacy / Terms pages
   - Add final legal content or stakeholder-provided drafts before launch.

## G. How To Use Bricks Section Snippets

### Snippet Location

Homepage snippets are located in:

- `bricks-sections/01-hero-command-center.html`
- `bricks-sections/02-group-company-cards.html`
- `bricks-sections/03-core-capabilities.html`
- `bricks-sections/04-compliance-command-center.html`
- `bricks-sections/05-industries-served.html`
- `bricks-sections/06-why-arkon-group.html`
- `bricks-sections/07-credentials-downloads.html`
- `bricks-sections/08-project-request-cta.html`

### Copy / Paste Workflow

1. Open the target page in Bricks.
2. Add a new section.
3. Add a Code or HTML element.
4. Copy the snippet from the matching file.
5. Paste into Bricks.
6. Save and preview.
7. Convert static portions into native Bricks elements if the client needs easier editing.

### CSS Classes

- Keep existing `arkon-*` classes from the snippets.
- Reuse global classes from `arkon-child-theme/assets/css/arkon-global.css`.
- Add section-specific classes only when needed.
- Avoid inline styling unless it is temporary during staging.

### Replace Placeholder Copy

Use:

- `docs/website-content-expansion-pack.md` for English copy.
- `docs/arabic-content-pack.md` for Arabic copy.
- `content/companies.json` for company names and service families.
- `docs/service-pages-architecture.md` for service copy direction.

### Connect CTAs

Use consistent URLs:

- Request Proposal: `/contact/#request-proposal`
- Services: `/services/`
- Companies: `/companies/`
- Credentials: `/credentials/`
- Arabic Request Proposal: `/ar/contact/#request-proposal`

### Test Mobile Behavior

After each section:

- Test at 360px, 390px, 430px, 768px, and 1024px.
- Confirm no text overlaps.
- Confirm CTAs remain visible.
- Confirm cards and grids stack cleanly.

### Arabic RTL Versions

For Arabic pages:

- Duplicate English page through the multilingual plugin.
- Replace copy with Arabic.
- Set page direction to RTL.
- Review heading breaks and button widths.
- Keep English acronyms readable.

## H. 3D Hero / Spline Deployment

### Desktop Spline Embed

Use Spline only on desktop after the static homepage is stable.

Deployment steps:

1. Publish the Spline scene.
2. Copy the Spline embed URL.
3. Add the URL to the hero visual wrapper as the agreed `data-spline` value.
4. Keep a fallback image URL in the hero wrapper.
5. Confirm `arkon-3d-loader.js` handles load decisions.

### Mobile Fallback Image

Mobile must use a static fallback image by default.

Checklist:

- [ ] Mobile does not request the heavy Spline scene.
- [ ] Fallback image is compressed.
- [ ] Fallback image is visually aligned with the desktop hero.
- [ ] Hero text remains readable over or beside the fallback.

### Reduced-Motion Fallback

Visitors with reduced-motion preference should receive the static fallback.

Test:

- Enable reduced motion in OS or browser settings.
- Reload the page.
- Confirm Spline does not load.

### Save-Data Fallback

Visitors with save-data preference should receive the static fallback.

Test:

- Simulate save-data where possible.
- Confirm the fallback image loads instead of Spline.

### Performance Safeguards

- Do not block first paint with 3D.
- Lazy load the Spline scene.
- Keep mobile fallback under practical file-size targets.
- Provide alt/title text or accessible labeling for the visual area.
- Keep CTAs functional even if 3D fails.

### Testing Mobile Does Not Load Heavy 3D

Use browser dev tools:

1. Set viewport to mobile width.
2. Clear cache.
3. Reload page.
4. Open network panel.
5. Confirm no Spline scene or large 3D asset is requested.
6. Confirm fallback image is requested.

## I. Forms Deployment

Use `docs/forms-and-lead-capture-setup.md` as the detailed form source.

### Main Request Proposal Form

Create a full project intake form with:

- Full Name
- Company Name
- Job Title
- Email
- Mobile Number
- Project Location
- Project Type
- Required Company / Service
- Project Description
- Required Timeline
- Upload Drawings / Documents
- Preferred Contact Method
- Consent checkbox

### Contact Form

Create a shorter contact form with:

- Name
- Company
- Email
- Mobile
- Message
- Consent checkbox

### Download / Credentials Form

Create an optional gated-download form with:

- Name
- Company
- Email
- Mobile
- Interested Company
- Consent checkbox

### Notification Routing Emails

Configure conditional routing:

| Lead type | Recipient |
|---|---|
| General group inquiries | `info@arkonec.com` |
| ARKON Engineering | `info@arkonec.com` |
| ELITE | `info@elitsc.com` |
| IBS | `info@ibscksa.com` |
| QIC | `info@fhosat.com` |
| Turning Point | `info@tpointdigital.com` |

Confirm final routing before production launch.

### SMTP Setup

- Install and configure an SMTP plugin.
- Use a site-owned sender address once confirmed.
- Set reply-to as the submitted user email.
- Test delivery to every routed recipient.

### Spam Protection

- Enable CAPTCHA or Cloudflare Turnstile.
- Enable honeypot if available.
- Add rate limiting if spam appears.
- Keep form protection user-friendly.

### File Upload Testing

- Confirm allowed file types.
- Confirm file size limits.
- Confirm upload links are not exposed in user confirmation emails.
- Confirm uploaded files are accessible only to authorized administrators.

### User Confirmation Email Testing

- Test English confirmation email.
- Test Arabic confirmation email.
- Confirm response-time placeholder is replaced before launch.
- Confirm the signature uses ARKON Group language.

### Zoho CRM Integration Notes

If Zoho CRM is connected:

- Map every required field.
- Capture UTM values.
- Capture page URL.
- Capture language.
- Route lead owner or queue by selected company/service.
- Keep form plugin database backup entries enabled.

## J. Content Deployment

### `docs/website-content-expansion-pack.md`

Use this as the expanded English copy source for homepage, about page, company pages, services hub, contact page, CTAs, and microcopy.

### `docs/arabic-content-pack.md`

Use this as the Arabic copy source. Review with an Arabic-speaking business reviewer before launch.

### `content/companies.json`

Use this as the source of truth for:

- Company names
- Short names
- Arabic company names
- Descriptions
- Confirmed service families

### `docs/service-pages-architecture.md`

Use this for:

- Services hub structure
- Company-specific service pages
- Suggested URLs
- Page objectives
- H1s
- CTAs
- Related internal links
- Schema recommendations

### `docs/navigation-header-footer-system.md`

Use this for:

- English navigation
- Arabic navigation
- Companies dropdown
- Services dropdown
- Header build guidance
- Footer structure
- CTA labels
- URL structure
- Breadcrumb patterns

### `docs/assets-and-download-center.md`

Use this for:

- Credentials page structure
- Download categories
- Recommended downloadable assets
- Download card fields
- File naming convention
- Gated vs open download rules
- Arabic download labels

## K. SEO And Schema Deployment

### Schema Types

Use schema files from `schema/`:

- Organization schema
- WebSite schema
- BreadcrumbList schema
- Service schema
- FAQPage schema
- ProfessionalService schema where appropriate

### Deployment Rules

- Add Organization and WebSite schema on the homepage.
- Add BreadcrumbList schema on internal pages.
- Add Service schema on service pages where the visible content supports it.
- Add FAQ schema only when the FAQ is visible on the page.
- Keep claims conservative and supported by project files.
- Validate JSON-LD syntax before launch.

### Metadata Setup

For every public page:

- Add SEO title.
- Add meta description.
- Confirm canonical URL.
- Confirm one H1.
- Confirm logical H2/H3 structure.
- Add image alt text where images convey meaning.

### Sitemap Submission

Before production launch:

- Keep staging noindexed.
- Generate XML sitemap on production.
- Exclude private pages and gated confirmations.
- Submit sitemap to Google Search Console.
- Submit sitemap to Bing Webmaster Tools if required.

### Robots.txt

Review robots settings:

- Staging should discourage indexing.
- Production should allow public pages after final approval.
- Sensitive PDF URLs should not be intentionally exposed.

### Arabic Hreflang / Language Linking

Configure WPML or Polylang so:

- English pages link to Arabic counterparts.
- Arabic pages link to English counterparts.
- Language switcher maps equivalent pages where available.
- Arabic pages use `/ar/` URL structure.

## L. Performance Setup

### Images And Media

- Compress all images before upload.
- Use WebP or AVIF where possible.
- Upload only necessary logo formats.
- Compress PDFs before adding to the Download Center.
- Use correctly sized hero and card images.

### Caching And CDN

- Configure LiteSpeed Cache or WP Rocket.
- Configure Cloudflare DNS/CDN/WAF.
- Enable browser caching.
- Enable Gzip or Brotli compression.
- Clear WordPress, plugin, browser, and Cloudflare caches after major changes.

### Minification

- Enable CSS minification after layout QA.
- Enable JS minification after interaction QA.
- Test Bricks, forms, mobile menu, language switcher, and Spline fallback after minification.

### Font Optimization

- Use limited font weights.
- Preload only critical fonts if needed.
- Confirm Arabic typography remains readable.
- Avoid loading unused icon/font libraries.

### Lazy Loading

- Lazy load below-the-fold images.
- Avoid lazy loading critical hero text.
- Lazy load 3D scene only on eligible desktop views.

### 3D Performance

- Keep Spline disabled on mobile by default.
- Use fallback for reduced-motion and save-data.
- Measure homepage before and after enabling Spline.
- Defer 3D launch if performance targets are not met.

### Mobile Testing

Test:

- 360px
- 390px
- 430px
- 768px
- 1024px
- iOS Safari
- Android Chrome

### Core Web Vitals Checks

Practical targets:

- Largest Contentful Paint under 2.5 seconds on representative pages.
- Interaction to Next Paint under 200 ms.
- Cumulative Layout Shift under 0.1.
- No heavy 3D requests on mobile by default.

## M. Security Setup

### SSL

- Enable SSL before launch.
- Force HTTPS.
- Confirm no mixed content.

### Admin Accounts

- Use strong administrator usernames.
- Use strong passwords.
- Enable or recommend 2FA for administrators.
- Remove temporary users after launch.

### Updates

- Update WordPress core.
- Update plugins.
- Update Bricks Builder.
- Review child theme changes.
- Take a backup before major updates.

### Backups

- Configure automatic backups.
- Confirm backup retention.
- Confirm restore workflow.
- Take manual backup before launch.

### Upload Restrictions

- Limit file upload types.
- Restrict form uploads to safe file types.
- Set file size limits.
- Store sensitive uploads securely.

### Confidential PDF Handling

- Do not upload confidential PDFs to public media URLs by default.
- Use gated or request-only workflows.
- Exclude private URLs from sitemaps.
- Review public media URLs before launch.

### SVG Handling

- Upload SVG only if required.
- Use a sanitizer plugin.
- Prefer PNG/WebP for simpler logo display where possible.

### Form Spam Protection

- Use CAPTCHA or Cloudflare Turnstile.
- Use honeypot fields where available.
- Test forms after enabling anti-spam controls.

### User Roles

- Review all WordPress users.
- Keep administrator access limited.
- Use editor roles for content-only users.
- Remove unused accounts.

## N. Launch Plan

Follow this launch sequence:

1. Complete staging build.
   - Confirm all English pages, Arabic pages, templates, forms, downloads, and schema are ready.
2. Internal review.
   - Review company structure, services, CTAs, and visual layout.
3. Arabic proofreading.
   - Confirm Arabic tone, RTL layout, service names, menu labels, and forms.
4. Mobile QA.
   - Test core pages on iPhone, Android, tablet, and small mobile screens.
5. Form testing.
   - Test Request Proposal, Contact, and Download forms with final routing.
6. SEO/schema validation.
   - Validate metadata, sitemap, robots settings, canonical URLs, and JSON-LD.
7. Performance testing.
   - Test cache, Cloudflare, image optimization, fonts, lazy loading, and 3D fallback.
8. Security check.
   - Confirm SSL, updates, backups, upload restrictions, form protection, and user roles.
9. Backup staging.
   - Take a full backup before migration or DNS changes.
10. Point domain / DNS.
    - Configure DNS for `arkongroup.com.sa`.
    - Keep rollback plan available.
11. Enable SSL.
    - Confirm production HTTPS works.
12. Remove production noindex.
    - Enable indexing only after production review.
13. Submit sitemap.
    - Submit production XML sitemap.
14. Monitor errors for 48 hours.
    - Watch forms, analytics, Search Console, server logs, broken links, and performance.

## O. Final Handoff Checklist

Use this table as the handoff tracker.

| Item | Location/file | Responsible person | Status | Notes |
|---|---|---|---|---|
| Repository reviewed | `README.md`, `AGENTS.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Child theme installed | `arkon-child-theme/` | `[name]` | Not started / In progress / Done | `[notes]` |
| Global CSS loaded | `arkon-child-theme/assets/css/arkon-global.css` | `[name]` | Not started / In progress / Done | `[notes]` |
| Animation JS loaded | `arkon-child-theme/assets/js/arkon-animations.js` | `[name]` | Not started / In progress / Done | `[notes]` |
| 3D loader configured | `arkon-child-theme/assets/js/arkon-3d-loader.js` | `[name]` | Not started / In progress / Done | `[notes]` |
| Header built | `docs/navigation-header-footer-system.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Footer built | `docs/navigation-header-footer-system.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Homepage built | `bricks-sections/`, `content/homepage-sections.json` | `[name]` | Not started / In progress / Done | `[notes]` |
| Company pages built | `docs/company-pages-build-guide.md`, `content/companies.json` | `[name]` | Not started / In progress / Done | `[notes]` |
| Services built | `docs/service-pages-architecture.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Forms configured | `docs/forms-and-lead-capture-setup.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Download Center built | `docs/assets-and-download-center.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| English content loaded | `docs/website-content-expansion-pack.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Arabic content loaded | `docs/arabic-content-pack.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Schema deployed | `schema/`, `arkon-child-theme/inc/schema.php` | `[name]` | Not started / In progress / Done | `[notes]` |
| SEO metadata complete | SEO plugin | `[name]` | Not started / In progress / Done | `[notes]` |
| Performance configured | Cache plugin, Cloudflare | `[name]` | Not started / In progress / Done | `[notes]` |
| Security configured | Security plugin, hosting panel | `[name]` | Not started / In progress / Done | `[notes]` |
| QA completed | `docs/qa-performance-launch-checklist.md` | `[name]` | Not started / In progress / Done | `[notes]` |
| Production launch complete | `arkongroup.com.sa` | `[name]` | Not started / In progress / Done | `[notes]` |

## P. Post-Launch Maintenance

### Weekly Updates

- Review plugin updates.
- Apply updates safely after backup.
- Check form submissions.
- Review security alerts.

### Monthly Backup Check

- Confirm backups are running.
- Confirm backup retention is sufficient.
- Perform a restore-readiness review if hosting workflow allows.

### Monthly Form Test

- Submit Request Proposal form.
- Submit Contact form.
- Submit Download/Credentials form if active.
- Confirm routing and confirmation emails.
- Confirm CRM capture if connected.

### Quarterly Content Update

- Review homepage copy.
- Review company pages.
- Review service pages.
- Review Arabic content.
- Update outdated links or CTAs.

### Quarterly Credentials / PDF Review

- Review public downloads.
- Review gated and request-only files.
- Update versions and last updated dates.
- Remove outdated or duplicate files.
- Confirm confidential files are not public.

### SEO Review

- Review Search Console.
- Review indexed pages.
- Review sitemap status.
- Review metadata for new pages.
- Review internal linking and broken links.

### Security Scan

- Run security plugin scan.
- Review administrator accounts.
- Review file uploads.
- Review plugin and theme status.

### Broken Link Scan

- Scan internal links.
- Scan download links.
- Scan CTA links.
- Scan English and Arabic navigation.
- Fix redirects or missing pages promptly.
