# QA, Performance, SEO, Accessibility, Security, And Launch Checklist

This document defines the complete launch-readiness checklist for the ARKON Group WordPress and Bricks Builder website.

The checklist covers the five confirmed ARKON Group companies only:

1. ARKON Engineering Consultancy Co.
2. ELITE Security Consultancy Co.
3. Integrated Building Systems
4. Quality Inspection Company
5. Turning Point Digital Marketing Co.

Use this checklist on staging before production launch, then repeat the critical checks after production DNS, SSL, caching, and indexing are configured. Mark every item as Pass, Fail, N/A, or Needs Fix.

## A. Pre-Launch QA Overview

### Purpose Of QA

The purpose of QA is to confirm that the website is complete, accurate, fast, accessible, secure, bilingual, and ready for public launch without exposing unfinished content or confidential files.

QA must confirm:

- [ ] Pass / Fail: Website content reflects the confirmed ARKON Group structure.
- [ ] Pass / Fail: WordPress and Bricks Builder templates render correctly.
- [ ] Pass / Fail: English and Arabic versions are separated and linked correctly.
- [ ] Pass / Fail: Forms submit correctly and route to the right recipients.
- [ ] Pass / Fail: SEO metadata, schema, and indexing settings are launch-ready.
- [ ] Pass / Fail: Performance meets the practical Core Web Vitals targets in section D.
- [ ] Pass / Fail: Security, backups, and access controls are configured.
- [ ] Pass / Fail: No confidential files are publicly exposed.

### Staging Vs Production Checklist

Staging:

- [ ] Pass / Fail: Staging site is blocked from indexing.
- [ ] Pass / Fail: Staging content is complete enough for final review.
- [ ] Pass / Fail: All page layouts are built in Bricks.
- [ ] Pass / Fail: Forms are tested with staging recipients or clearly marked test recipients.
- [ ] Pass / Fail: Performance settings are tested without disrupting editing.
- [ ] Pass / Fail: Client/internal review comments are tracked and resolved.

Production:

- [ ] Pass / Fail: Production domain resolves correctly.
- [ ] Pass / Fail: SSL is active.
- [ ] Pass / Fail: Production indexing is enabled only after approval.
- [ ] Pass / Fail: Forms send to final confirmed recipients.
- [ ] Pass / Fail: Caching, CDN, and image optimization are active.
- [ ] Pass / Fail: Sitemap is submitted after final SEO review.
- [ ] Pass / Fail: Analytics and conversion tracking are active.

### Who Should Review Before Launch

Required reviewers:

- [ ] Pass / Fail: Website developer or Bricks Builder implementer.
- [ ] Pass / Fail: ARKON Group business owner or assigned stakeholder.
- [ ] Pass / Fail: English content reviewer.
- [ ] Pass / Fail: Arabic content reviewer.
- [ ] Pass / Fail: SEO reviewer.
- [ ] Pass / Fail: Forms and lead-routing owner.
- [ ] Pass / Fail: Hosting, DNS, and security owner.

### Required Sign-Off Areas

Sign-off areas:

- [ ] Pass / Fail: Content accuracy.
- [ ] Pass / Fail: Company and service structure.
- [ ] Pass / Fail: English and Arabic pages.
- [ ] Pass / Fail: Visual layout and mobile responsiveness.
- [ ] Pass / Fail: Forms and lead capture.
- [ ] Pass / Fail: Download center and file access.
- [ ] Pass / Fail: SEO and schema.
- [ ] Pass / Fail: Performance and Core Web Vitals readiness.
- [ ] Pass / Fail: Security and backups.
- [ ] Pass / Fail: Analytics and launch monitoring.

## B. Page Completion Checklist

Apply the same pass/fail standard to every page type. Do not launch a page with placeholder content unless the stakeholder has explicitly accepted the placeholder.

### Homepage

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: Schema is added where required.
- [ ] Pass / Fail: Spline or 3D hero uses mobile fallback.
- [ ] Pass / Fail: H1 and H2 hierarchy is correct.

### About ARKON Group

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Group story and operating model are accurate.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: Organization schema is reviewed if used.

### Company Pages

Company pages to review:

- ARKON Engineering Consultancy Co.
- ELITE Security Consultancy Co.
- Integrated Building Systems
- Quality Inspection Company
- Turning Point Digital Marketing Co.

Checklist:

- [ ] Pass / Fail: Content is complete for each company.
- [ ] Pass / Fail: Company names match the approved source of truth.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links to related services and companies work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: LocalBusiness or ProfessionalService schema is used only where appropriate.
- [ ] Pass / Fail: No unsupported formal-status or prestige claims appear.

### Services Hub

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Five service categories are represented.
- [ ] Pass / Fail: Each service category links to the related company.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: BreadcrumbList schema is added.

### Individual Service Pages

- [ ] Pass / Fail: Content is complete for each published service page.
- [ ] Pass / Fail: H1 matches the specific service.
- [ ] Pass / Fail: Related company is clear.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: Service schema is added where required.
- [ ] Pass / Fail: FAQ schema is added only when visible FAQ content exists.

### Industries Page

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Industry labels are clear and relevant.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links to relevant services work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: BreadcrumbList schema is added.

### Credentials / Download Center

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Download categories match `docs/assets-and-download-center.md`.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: BreadcrumbList schema is added.
- [ ] Pass / Fail: Gated/request-only documents do not expose public URLs.

### Contact / Request Proposal Page

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Request Proposal form is present.
- [ ] Pass / Fail: Contact form is present if required.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete.
- [ ] Pass / Fail: Form labels, validation, and success messages work.

### Arabic Pages

- [ ] Pass / Fail: Arabic content is complete.
- [ ] Pass / Fail: Arabic copy is proofread by a qualified reviewer.
- [ ] Pass / Fail: RTL layout is complete.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTAs work.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete in Arabic.
- [ ] Pass / Fail: Arabic pages are linked to English counterparts.
- [ ] Pass / Fail: Hreflang or language links are configured.

### 404 Page

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Layout is complete in Bricks.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: CTA back to Home works.
- [ ] Pass / Fail: CTA to Contact works.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO plugin does not index the 404 template as a normal page.
- [ ] Pass / Fail: Arabic 404 experience is available or acceptable fallback is confirmed.

### Privacy Policy Page

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Form, analytics, cookies, and file upload handling are covered.
- [ ] Pass / Fail: Layout is complete in Bricks or WordPress editor.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: Footer link works.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete if the page is indexed.
- [ ] Pass / Fail: Arabic privacy page is complete if required for launch.

### Terms / Disclaimer Page

- [ ] Pass / Fail: Content is complete.
- [ ] Pass / Fail: Download, proposal, and website-use disclaimers are covered.
- [ ] Pass / Fail: Layout is complete in Bricks or WordPress editor.
- [ ] Pass / Fail: Mobile layout is checked.
- [ ] Pass / Fail: Footer link works.
- [ ] Pass / Fail: Internal links work.
- [ ] Pass / Fail: SEO title and meta description are complete if the page is indexed.
- [ ] Pass / Fail: Arabic terms page is complete if required for launch.

## C. Responsive Design QA

Test real devices where possible, then supplement with browser responsive tools.

### Breakpoints And Devices

- [ ] Pass / Fail: Desktop wide screen is checked.
- [ ] Pass / Fail: Laptop viewport is checked.
- [ ] Pass / Fail: Tablet portrait and landscape are checked.
- [ ] Pass / Fail: iPhone viewport is checked.
- [ ] Pass / Fail: Android viewport is checked.
- [ ] Pass / Fail: Small mobile screens around 360px width are checked.
- [ ] Pass / Fail: Arabic RTL pages are checked at each major breakpoint.

### Navigation And Header

- [ ] Pass / Fail: Desktop navigation fits without wrapping awkwardly.
- [ ] Pass / Fail: Dropdowns open on hover, click, and keyboard focus.
- [ ] Pass / Fail: Mobile hamburger opens and closes reliably.
- [ ] Pass / Fail: Mobile menu links are readable and tappable.
- [ ] Pass / Fail: Language switcher is visible and usable.
- [ ] Pass / Fail: Sticky header does not cover page content or anchors.

### Layout Components

- [ ] Pass / Fail: Forms fit mobile without horizontal scrolling.
- [ ] Pass / Fail: Cards and grids stack cleanly.
- [ ] Pass / Fail: Download cards keep CTA buttons visible.
- [ ] Pass / Fail: Service cards do not become uneven or unreadable.
- [ ] Pass / Fail: Footer columns stack cleanly.
- [ ] Pass / Fail: Text does not overlap images, icons, or buttons.

### Hero And Visual Fallback

- [ ] Pass / Fail: Desktop hero renders correctly.
- [ ] Pass / Fail: Mobile uses static fallback image instead of heavy 3D by default.
- [ ] Pass / Fail: Reduced-motion users see an appropriate fallback.
- [ ] Pass / Fail: Save-data users see an appropriate fallback.
- [ ] Pass / Fail: Hero fallback image is compressed and readable.
- [ ] Pass / Fail: Hero CTAs remain visible on mobile.

## D. Performance Checklist

### Media And Assets

- [ ] Pass / Fail: Images are compressed before upload.
- [ ] Pass / Fail: WebP or AVIF is used where possible.
- [ ] Pass / Fail: Hero fallback image is optimized for mobile.
- [ ] Pass / Fail: PDF downloads are compressed.
- [ ] Pass / Fail: Unused images and media files are removed before launch.
- [ ] Pass / Fail: Image dimensions are appropriate for display size.

### Loading Behavior

- [ ] Pass / Fail: Lazy loading is enabled for below-the-fold images.
- [ ] Pass / Fail: Spline/3D is disabled on mobile by default.
- [ ] Pass / Fail: Static fallback image is used on mobile.
- [ ] Pass / Fail: Reduced-motion support is active.
- [ ] Pass / Fail: Save-data support is active.
- [ ] Pass / Fail: No heavy 3D scene blocks first paint.

### CSS, JS, And Fonts

- [ ] Pass / Fail: CSS minification is enabled after visual QA.
- [ ] Pass / Fail: JS minification is enabled after interaction QA.
- [ ] Pass / Fail: Critical UI is not broken by optimization settings.
- [ ] Pass / Fail: Font loading is optimized.
- [ ] Pass / Fail: Font weights are limited to only what is needed.
- [ ] Pass / Fail: Unused scripts are removed or disabled.

### WordPress And Hosting

- [ ] Pass / Fail: Caching plugin is configured.
- [ ] Pass / Fail: Cloudflare CDN/WAF is configured.
- [ ] Pass / Fail: Browser caching headers are active.
- [ ] Pass / Fail: Gzip or Brotli compression is active.
- [ ] Pass / Fail: Unused plugins are removed.
- [ ] Pass / Fail: Database cleanup is completed.
- [ ] Pass / Fail: Autoloaded options are reviewed if the site is slow.

### Core Web Vitals Guidance

Targets:

- [ ] Pass / Fail: Largest Contentful Paint target is under 2.5 seconds on representative pages.
- [ ] Pass / Fail: Interaction to Next Paint target is under 200 ms.
- [ ] Pass / Fail: Cumulative Layout Shift target is under 0.1.
- [ ] Pass / Fail: Mobile performance score is acceptable after caching and image optimization.
- [ ] Pass / Fail: Homepage, service page, and contact page are tested separately.

## E. SEO Checklist

### Metadata And Structure

- [ ] Pass / Fail: SEO titles are complete.
- [ ] Pass / Fail: Meta descriptions are complete.
- [ ] Pass / Fail: Every primary page has exactly one H1.
- [ ] Pass / Fail: H2 hierarchy is logical.
- [ ] Pass / Fail: Canonical URLs are correct.
- [ ] Pass / Fail: No duplicate English and Arabic content appears on the same URL.
- [ ] Pass / Fail: Image alt text is present where images convey meaning.

### Indexing And Discovery

- [ ] Pass / Fail: XML sitemap is generated.
- [ ] Pass / Fail: Sitemap includes public pages only.
- [ ] Pass / Fail: Robots.txt is reviewed.
- [ ] Pass / Fail: Staging site is noindexed.
- [ ] Pass / Fail: Production site is indexable only after approval.
- [ ] Pass / Fail: Confidential PDFs and private URLs are noindexed or protected.
- [ ] Pass / Fail: Sensitive PDF URLs are not listed in sitemaps.

### Schema JSON-LD

- [ ] Pass / Fail: Organization schema is valid.
- [ ] Pass / Fail: WebSite schema is valid.
- [ ] Pass / Fail: BreadcrumbList schema is present on internal pages.
- [ ] Pass / Fail: Service schema is used on service pages where appropriate.
- [ ] Pass / Fail: FAQ schema is used only where visible FAQ content exists.
- [ ] Pass / Fail: Schema claims are conservative and supported by project files.
- [ ] Pass / Fail: JSON-LD validates without syntax errors.

### Internal Linking And Bilingual SEO

- [ ] Pass / Fail: Header and footer links work.
- [ ] Pass / Fail: Company pages link to related services.
- [ ] Pass / Fail: Service pages link back to related company pages.
- [ ] Pass / Fail: Credentials/download links are accurate.
- [ ] Pass / Fail: Arabic hreflang or language links are configured.
- [ ] Pass / Fail: Language switcher maps equivalent pages where available.
- [ ] Pass / Fail: Arabic SEO titles and meta descriptions are present.

## F. Accessibility Checklist

### Keyboard And Focus

- [ ] Pass / Fail: Website can be navigated with keyboard only.
- [ ] Pass / Fail: Header menus are keyboard accessible.
- [ ] Pass / Fail: Dropdowns expose visible focus states.
- [ ] Pass / Fail: Mobile menu can be opened, navigated, and closed by keyboard.
- [ ] Pass / Fail: Modal forms, if used, trap focus appropriately and close reliably.
- [ ] Pass / Fail: Skip link is added if the final layout benefits from it.

### Visual Accessibility

- [ ] Pass / Fail: Text contrast is checked on dark navy, blue, silver, and gold treatments.
- [ ] Pass / Fail: Button contrast is sufficient.
- [ ] Pass / Fail: Body font sizes are readable on mobile.
- [ ] Pass / Fail: Line height supports English and Arabic readability.
- [ ] Pass / Fail: Links are distinguishable without relying only on color.

### Content And Forms

- [ ] Pass / Fail: Meaningful images have alt text.
- [ ] Pass / Fail: Decorative images are handled appropriately.
- [ ] Pass / Fail: Form fields have visible labels.
- [ ] Pass / Fail: Error messages identify the field and the problem.
- [ ] Pass / Fail: Required fields are indicated in text, not color alone.
- [ ] Pass / Fail: Aria labels are added where icon-only controls are used.

### Motion And Bilingual Accessibility

- [ ] Pass / Fail: Reduced-motion preference is respected.
- [ ] Pass / Fail: Animations do not block reading or form completion.
- [ ] Pass / Fail: Arabic pages use correct text direction.
- [ ] Pass / Fail: Mixed Arabic/English terms remain readable.
- [ ] Pass / Fail: Language attributes are correct for English and Arabic pages.

## G. Security Checklist

### WordPress Access And Updates

- [ ] Pass / Fail: SSL is active.
- [ ] Pass / Fail: Admin usernames are hardened.
- [ ] Pass / Fail: Strong passwords are enforced.
- [ ] Pass / Fail: 2FA is recommended or enabled for administrators.
- [ ] Pass / Fail: WordPress core is updated.
- [ ] Pass / Fail: Plugins are updated.
- [ ] Pass / Fail: Theme and child theme are reviewed.
- [ ] Pass / Fail: WordPress user roles are checked.
- [ ] Pass / Fail: Unused administrator accounts are removed.

### Uploads, Forms, And Files

- [ ] Pass / Fail: File upload restrictions are configured.
- [ ] Pass / Fail: Allowed upload file types are limited.
- [ ] Pass / Fail: SVG upload is blocked or sanitized by a trusted security plugin.
- [ ] Pass / Fail: Form anti-spam is active.
- [ ] Pass / Fail: CAPTCHA or Cloudflare Turnstile is active.
- [ ] Pass / Fail: Confidential files are not public.
- [ ] Pass / Fail: Download links are reviewed before launch.

### Backups And Indexing

- [ ] Pass / Fail: Backup plugin or hosting backups are configured.
- [ ] Pass / Fail: Backup restore process is known.
- [ ] Pass / Fail: Staging is noindexed.
- [ ] Pass / Fail: Production indexing is enabled only after approval.
- [ ] Pass / Fail: Security scan is completed.
- [ ] Pass / Fail: File permissions are reviewed by hosting owner if needed.

## H. Forms QA

### Request Proposal Form

- [ ] Pass / Fail: Form loads on English contact page.
- [ ] Pass / Fail: Form loads on Arabic contact page.
- [ ] Pass / Fail: Required fields are enforced.
- [ ] Pass / Fail: Company/service dropdown contains only the five confirmed company groups.
- [ ] Pass / Fail: File upload works.
- [ ] Pass / Fail: File upload rejects unsafe file types.
- [ ] Pass / Fail: Success message displays after submission.
- [ ] Pass / Fail: Error messages are readable.

### Contact Form

- [ ] Pass / Fail: Short contact form loads where intended.
- [ ] Pass / Fail: Required fields are enforced.
- [ ] Pass / Fail: Email validation works.
- [ ] Pass / Fail: User confirmation email sends.
- [ ] Pass / Fail: Admin notification email sends.
- [ ] Pass / Fail: Arabic form layout is RTL.

### Download Form

- [ ] Pass / Fail: Download form loads on gated download flow.
- [ ] Pass / Fail: Interested Company options are correct.
- [ ] Pass / Fail: Download request notification includes document title.
- [ ] Pass / Fail: Gated file access behaves as intended.
- [ ] Pass / Fail: User confirmation email does not expose restricted file links unless intended.

### Routing, Spam, And Tracking

- [ ] Pass / Fail: Notification routing matches `docs/forms-and-lead-capture-setup.md`.
- [ ] Pass / Fail: Engineering inquiries route to the correct inbox.
- [ ] Pass / Fail: Security consultancy inquiries route to the correct inbox.
- [ ] Pass / Fail: IBS inquiries route to the correct inbox.
- [ ] Pass / Fail: QIC inquiries route to the correct inbox.
- [ ] Pass / Fail: Turning Point inquiries route to the correct inbox.
- [ ] Pass / Fail: Spam protection works.
- [ ] Pass / Fail: Zoho CRM / lead capture works if connected.
- [ ] Pass / Fail: UTM capture hidden fields work.
- [ ] Pass / Fail: Page URL and language hidden fields work.

## I. Bilingual / Arabic QA

### Arabic Content

- [ ] Pass / Fail: Arabic copy is proofread.
- [ ] Pass / Fail: Arabic page titles are correct.
- [ ] Pass / Fail: Arabic menu labels are correct.
- [ ] Pass / Fail: Arabic CTA labels are short and clear.
- [ ] Pass / Fail: Arabic form labels are complete.
- [ ] Pass / Fail: Arabic footer is complete.
- [ ] Pass / Fail: Arabic privacy and terms pages are ready if required for launch.

### Company And Service Names

- [ ] Pass / Fail: ARKON Engineering Consultancy Co. Arabic name is consistent.
- [ ] Pass / Fail: ELITE Security Consultancy Co. Arabic name is consistent.
- [ ] Pass / Fail: Integrated Building Systems Arabic name is consistent.
- [ ] Pass / Fail: Quality Inspection Company Arabic name is consistent.
- [ ] Pass / Fail: Turning Point Digital Marketing Co. Arabic name is consistent.
- [ ] Pass / Fail: Service names are clear and consistent.
- [ ] Pass / Fail: Mixed Arabic/English terms such as MEP, HCIS, SAIS, PDF, and CRM are readable.

### RTL And Language Switching

- [ ] Pass / Fail: RTL layout is active on Arabic pages.
- [ ] Pass / Fail: Arabic mobile menu works.
- [ ] Pass / Fail: Arabic dropdowns align correctly.
- [ ] Pass / Fail: Language switcher maps English and Arabic equivalents.
- [ ] Pass / Fail: Hreflang or language links are configured.
- [ ] Pass / Fail: Arabic breadcrumbs read correctly.
- [ ] Pass / Fail: Arabic page URLs follow the agreed structure.

## J. Browser Compatibility

Test the approved staging or production URL in these browsers:

- [ ] Pass / Fail: Chrome desktop.
- [ ] Pass / Fail: Safari desktop.
- [ ] Pass / Fail: Edge desktop.
- [ ] Pass / Fail: Firefox desktop.
- [ ] Pass / Fail: iOS Safari.
- [ ] Pass / Fail: Android Chrome.

Browser-specific checks:

- [ ] Pass / Fail: Header and mobile menu work.
- [ ] Pass / Fail: Forms submit correctly.
- [ ] Pass / Fail: Dropdowns and accordions work.
- [ ] Pass / Fail: Fallback hero image loads.
- [ ] Pass / Fail: Download links work.
- [ ] Pass / Fail: Arabic RTL rendering is correct.

## K. Analytics And Tracking

### Analytics Setup

- [ ] Pass / Fail: Google Analytics or privacy-friendly analytics is installed.
- [ ] Pass / Fail: Google Search Console is configured.
- [ ] Pass / Fail: Bing Webmaster Tools is configured if required.
- [ ] Pass / Fail: Internal traffic filtering is considered.
- [ ] Pass / Fail: Consent/cookie requirements are reviewed.

### Conversion Events

- [ ] Pass / Fail: Request Proposal form submission is tracked.
- [ ] Pass / Fail: Contact form submission is tracked.
- [ ] Pass / Fail: Download form submission is tracked.
- [ ] Pass / Fail: CTA clicks are tracked.
- [ ] Pass / Fail: Download clicks are tracked.
- [ ] Pass / Fail: Phone clicks are tracked.
- [ ] Pass / Fail: Email clicks are tracked.
- [ ] Pass / Fail: Language switcher usage is tracked if useful.

### UTM Tracking

- [ ] Pass / Fail: UTM source is captured.
- [ ] Pass / Fail: UTM medium is captured.
- [ ] Pass / Fail: UTM campaign is captured.
- [ ] Pass / Fail: UTM term is captured where available.
- [ ] Pass / Fail: UTM content is captured where available.
- [ ] Pass / Fail: UTM data passes into forms or CRM if connected.

## L. Final Launch Sequence

Follow this sequence when the site is ready to move from staging to production.

1. Freeze content.
   - [ ] Pass / Fail: No further page edits are made except approved fixes.
2. Backup staging.
   - [ ] Pass / Fail: Staging backup is complete and restorable.
3. Final QA.
   - [ ] Pass / Fail: Sections A through K are reviewed.
4. Client/internal approval.
   - [ ] Pass / Fail: Required sign-off is recorded.
5. Configure DNS.
   - [ ] Pass / Fail: DNS records are updated and propagation is monitored.
6. Enable SSL.
   - [ ] Pass / Fail: HTTPS works on production domain.
7. Disable staging noindex only after production review.
   - [ ] Pass / Fail: Production indexing is enabled only after final review.
8. Submit sitemap.
   - [ ] Pass / Fail: XML sitemap is submitted to search tools.
9. Test forms.
   - [ ] Pass / Fail: Request Proposal, Contact, and Download forms work on production.
10. Monitor errors.
    - [ ] Pass / Fail: Server logs, analytics, and Search Console are monitored.
11. Post-launch review after 48 hours.
    - [ ] Pass / Fail: Forms, indexing, speed, and broken links are reviewed again.

## M. Post-Launch Maintenance Checklist

### Weekly

- [ ] Pass / Fail: Plugin updates are reviewed and applied safely.
- [ ] Pass / Fail: Form submissions are checked.
- [ ] Pass / Fail: Security alerts are reviewed.
- [ ] Pass / Fail: Backups are confirmed.

### Monthly

- [ ] Pass / Fail: Backup restore readiness is checked.
- [ ] Pass / Fail: Request Proposal form is tested.
- [ ] Pass / Fail: Contact form is tested.
- [ ] Pass / Fail: Download form is tested if active.
- [ ] Pass / Fail: Broken link scan is performed.
- [ ] Pass / Fail: Basic performance report is reviewed.

### Quarterly

- [ ] Pass / Fail: Content is reviewed for accuracy.
- [ ] Pass / Fail: Company and service pages are reviewed.
- [ ] Pass / Fail: PDF downloads are reviewed.
- [ ] Pass / Fail: SEO performance is reviewed.
- [ ] Pass / Fail: Search Console issues are reviewed.
- [ ] Pass / Fail: Security scan is performed.
- [ ] Pass / Fail: User roles and administrator access are reviewed.

## N. Sign-Off Table

Use this table during final launch review.

| Area | Responsible person | Status | Notes | Date |
|---|---|---|---|---|
| Content accuracy | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| English copy | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Arabic copy | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Bricks layout | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Mobile responsiveness | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Forms and routing | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Downloads and confidential files | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| SEO and schema | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Accessibility | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Performance | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Security and backups | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Analytics and tracking | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| DNS and SSL | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
| Final launch approval | `[name]` | Pass / Fail / Needs Fix | `[notes]` | `[date]` |
