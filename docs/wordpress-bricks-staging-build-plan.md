# WordPress + Bricks Staging Build Plan

This plan describes how to build the ARKON Group website on a WordPress staging environment using Bricks Builder, the ARKON child theme, Bricks-ready section snippets, structured content, and reusable JSON-LD schema patterns.

## 1. Required WordPress Plugins And Components

Install and activate only the tools needed for the staging build:

- Bricks Builder: visual layout system for templates, header, footer, and page sections.
- ARKON child theme: install from `arkon-child-theme/` and activate it as the site theme.
- WPML or Polylang: bilingual English and Arabic page management.
- Rank Math: page titles, meta descriptions, XML sitemap, redirects, and optional schema insertion.
- Fluent Forms or Gravity Forms: project request form and contact form handling.
- LiteSpeed Cache or WP Rocket: page cache, asset optimization, preload, and Core Web Vitals tuning.
- Cloudflare: DNS, CDN, WAF, caching rules, bot protection, and SSL/TLS hardening.
- SVG upload/security plugin if needed: use a trusted SVG sanitizer such as Safe SVG if SVG logo uploads are required.

Keep the plugin stack lean during staging. Add analytics, consent, or CRM integrations only after the main build is stable.

## 2. Hosting And Staging Setup Checklist

1. Provision hosting with PHP, MySQL/MariaDB, HTTPS, backups, and enough memory for Bricks editing.
2. Create a staging domain or subdomain, for example `staging.arkongroup.com.sa`.
3. Install a clean WordPress instance on staging.
4. Force HTTPS and confirm the WordPress Address and Site Address use the staging URL.
5. Set permalinks to `/%postname%/`.
6. Disable indexing on staging under Settings > Reading.
7. Add basic access protection if the staging site is public.
8. Configure SMTP for form testing.
9. Connect Cloudflare DNS in proxy mode only after the staging origin is reachable.
10. Enable automatic daily backups before importing layouts or media.
11. Create an admin account for the build team and remove temporary credentials after launch.
12. Confirm file upload limits are high enough for logo assets and future fallback images.

## 3. Child Theme Installation Steps

1. Compress the `arkon-child-theme/` directory as a ZIP file, or upload the folder by SFTP to `wp-content/themes/`.
2. In WordPress, go to Appearance > Themes and activate the ARKON child theme.
3. Confirm Bricks Builder remains active and can edit pages with the child theme enabled.
4. Confirm the child theme loads:
   - `style.css`
   - `assets/css/arkon-global.css`
   - `assets/js/arkon-animations.js`
   - `assets/js/arkon-3d-loader.js`
   - `inc/schema.php`
   - `inc/shortcodes.php`
5. Open the homepage in a browser and inspect the source to confirm child theme CSS and JS assets are enqueued.
6. Keep all global visual styling in `assets/css/arkon-global.css`.
7. Keep reveal or interaction logic in `assets/js/arkon-animations.js`.
8. Keep Spline and fallback logic in `assets/js/arkon-3d-loader.js`.

## 4. How To Use Repository Files

Use the repository files as a staging build pack:

- `arkon-child-theme/`: install as the active WordPress child theme. It contains global CSS, animation JS, 3D loading logic, schema output, shortcodes, and theme enqueue logic.
- `bricks-sections/`: copy each HTML snippet into Bricks section/code/import workflows, then convert repeated content into native Bricks elements where useful.
- `content/`: use `companies.json` and `homepage-sections.json` as the source of truth for company names, descriptions, services, CTA labels, and section order.
- `schema/`: use the JSON-LD examples for Organization, WebSite, BreadcrumbList, Service, FAQPage, and ProfessionalService patterns. Add page-specific schema only when it matches visible page content.
- `docs/`: use the blueprint, homepage copy, 3D hero concept, and this staging plan as implementation guidance.

Do not add unconfirmed group companies. The confirmed ARKON Group structure is AEC, ELITE, IBS, QIC, and TP Digital.

## 5. Bricks Builder Homepage Build Order

Build the homepage in this exact order:

1. Header
2. Hero command center
3. Trust strip
4. Group ecosystem
5. Core capabilities
6. Compliance command center
7. Industries served
8. Why ARKON Group
9. Credentials/downloads
10. Project request CTA
11. Footer

Use one H1 on the page, then H2 headings for major sections. Keep card headings as H3 where they sit under an H2 section.

## 6. How To Insert The Bricks HTML Snippets

1. Create a new homepage in WordPress and open it in Bricks.
2. Add a clean section for the first homepage block.
3. Add a Bricks Code element or HTML element inside the section.
4. Copy the relevant snippet from `bricks-sections/`.
5. Paste the snippet into Bricks and save.
6. Preview on desktop before adding the next section.
7. Repeat for each snippet in homepage order:
   - `01-hero-command-center.html`
   - `02-group-company-cards.html`
   - `03-core-capabilities.html`
   - `04-compliance-command-center.html`
   - `05-industries-served.html`
   - `06-why-arkon-group.html`
   - `07-credentials-downloads.html`
   - `08-project-request-cta.html`
8. After import, replace any temporary links with final WordPress page URLs.
9. Convert static copy to Bricks text elements if the content team needs easier editing.
10. Keep global classes from the snippets so `arkon-global.css` continues to control spacing, typography, responsiveness, and RTL behavior.

## 7. Header And Footer Setup

1. Create a Bricks header template.
2. Add the ARKON Group logo, primary navigation, language switcher, and contact CTA.
3. Keep navigation simple: Home, About, Group Companies, Services, Industries, Compliance, Resources, Contact.
4. Create a Bricks footer template.
5. Include group summary, company links, service links, contact link, resources link, and copyright.
6. Test sticky header behavior only after the full homepage is assembled.

## 8. Connect The Spline 3D Hero Later

Do not load a heavy 3D scene during early staging. Start with the static hero command panel and connect Spline only after homepage layout, copy, and performance baseline are stable.

When the Spline scene is ready:

1. Export or publish the Spline scene and copy the public embed URL.
2. Create a compressed static fallback image in WebP format.
3. Upload the fallback image to WordPress Media Library.
4. Open the hero section in Bricks.
5. Set the hero visual wrapper `data-spline` attribute to the Spline URL.
6. Set the `data-fallback` attribute to the uploaded fallback image URL.
7. Keep `data-arkon-3d-desktop-min` at a desktop breakpoint such as `992`.
8. Confirm `arkon-3d-loader.js` loads Spline only on desktop and uses fallback on mobile, reduced-motion, save-data, or slow connections.
9. Test desktop, tablet, mobile, reduced-motion mode, and save-data mode.
10. If performance drops, keep the static fallback for launch and defer Spline to a later release.

## 9. Arabic RTL Build Process

1. Choose WPML or Polylang before creating final page URLs.
2. Set English as the primary language unless the client chooses otherwise.
3. Add Arabic as a fully separate language version.
4. Duplicate the homepage from English to Arabic.
5. Replace copy with Arabic from `docs/homepage-copy-en-ar.md`.
6. Use `/ar/` URL paths for Arabic pages.
7. Confirm the language switcher maps each English page to its Arabic counterpart.
8. Set `dir="rtl"` on Arabic pages through the multilingual plugin or theme output.
9. Review Arabic typography, line-height, heading breaks, button text, and card spacing manually.
10. Avoid placing Arabic and English full content on the same URL.
11. Test Arabic pages on mobile before launch.

## 10. SEO Setup Checklist

1. Install and configure Rank Math.
2. Set site name to ARKON Group.
3. Set the homepage title and meta description around the group positioning and Saudi project delivery focus.
4. Add service architecture pages for the priority terms listed in `AGENTS.md`.
5. Create company pages for AEC, ELITE, IBS, QIC, and TP Digital.
6. Configure XML sitemap and exclude staging-only pages.
7. Add Organization and WebSite schema on the homepage.
8. Add BreadcrumbList schema on internal pages.
9. Add Service schema only on pages that visibly describe that service.
10. Add FAQPage schema only where matching FAQ content is visible to users.
11. Use conservative schema claims. Do not add approvals, certifications, awards, rankings, authority status, ratings, exact address, phone, or social profiles unless project files support them.
12. Add canonical URLs for English and Arabic pages.
13. Confirm every page has one H1 and logical H2/H3 hierarchy.
14. Review index/noindex rules before launch.

## 11. Performance And Mobile Optimization Checklist

1. Keep Spline disabled on mobile by default.
2. Use the static fallback image for mobile, reduced-motion, save-data, and slow connections.
3. Compress all hero and logo assets before upload.
4. Use WebP or AVIF where supported.
5. Avoid large uncompressed videos on the homepage.
6. Enable page cache after the Bricks build stabilizes.
7. Minify CSS and JS carefully, then test Bricks and forms.
8. Defer non-critical scripts.
9. Preload only the most important font or hero asset.
10. Use system fonts unless the brand requires a custom typeface.
11. Test mobile layout at 360px, 390px, 430px, 768px, and 1024px widths.
12. Check Core Web Vitals after enabling cache and Cloudflare.
13. Keep CTA buttons visible above or near key decision points.
14. Confirm no text overlaps cards, buttons, or visual elements.

## 12. Forms And Project Request Flow

1. Create a Fluent Forms or Gravity Forms project request form.
2. Include fields for name, company, email, phone, project location, project stage, required service, timeline, and message.
3. Add a file upload field only if hosting and security settings are ready.
4. Route notifications to the approved group inbox.
5. Add spam protection.
6. Test form delivery through SMTP.
7. Add the form to the Project request CTA page or contact page.
8. Confirm privacy notice and consent wording before launch.

## 13. Launch QA Checklist

Run this checklist before moving staging to production:

1. Homepage sections appear in the approved order.
2. Header navigation works on desktop and mobile.
3. Footer links point to real pages.
4. All CTA buttons are visible and functional.
5. Forms submit and send notifications.
6. English pages are complete.
7. Arabic pages are complete and RTL-ready.
8. No page has duplicate H1 headings.
9. JSON-LD validates as JSON.
10. Rank Math sitemap is active.
11. Robots settings allow indexing only on production.
12. Staging protection is removed only after production is ready.
13. Cloudflare SSL/TLS mode is correct.
14. Cache is enabled and tested.
15. Mobile pages do not load heavy 3D by default.
16. Static fallback image appears when 3D is unavailable.
17. Images have useful alt text.
18. Contrast and readability are acceptable on dark and light sections.
19. No unsupported claims are present in copy or schema.
20. Backups are confirmed before launch.

## 14. Production Launch Sequence

1. Freeze staging edits.
2. Take a full backup of staging and production.
3. Confirm DNS plan and rollback path.
4. Move approved staging files and database to production.
5. Update URLs from staging to production.
6. Clear WordPress, cache plugin, browser, and Cloudflare caches.
7. Re-save permalinks.
8. Recheck forms, language switcher, sitemap, schema, and key pages.
9. Enable indexing in WordPress and Rank Math.
10. Submit sitemap in Google Search Console after production QA passes.
