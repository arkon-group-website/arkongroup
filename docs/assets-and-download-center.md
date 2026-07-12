# Assets, Credentials, Brochures, And Download Center

This document defines the assets, credentials, brochures, and download center structure for the ARKON Group WordPress and Bricks Builder website.

The structure covers the five confirmed ARKON Group companies only:

1. ARKON Engineering Consultancy Co.
2. ELITE Security Consultancy Co.
3. Integrated Building Systems
4. Quality Inspection Company
5. Turning Point Digital Marketing Co.

Use this document as the practical build guide for `/credentials/`, download cards, file naming, PDF upload handling, gated-download decisions, Arabic labels, and launch QA. Do not expose confidential files publicly by default, and do not add unsupported formal-status, client, or prestige claims.

## A. Download Center Page Structure

### Suggested URL

English:

- `/credentials/`

Arabic:

- `/ar/credentials/`

### Page Objective

Create a clear, professional download center where visitors can access ARKON Group credentials, company profiles, service brochures, prequalification documents, selected project-reference summaries, forms, and templates.

The page should help visitors:

- Understand the ARKON Group ecosystem.
- Find the correct company profile or service brochure.
- Download public-facing documents safely.
- Request restricted or project-specific documents through a gated form.
- Move from document review to a Request Proposal action.

### Hero Headline

English:

ARKON Group Credentials And Downloads

Arabic:

ملفات التعريف والتنزيلات لمجموعة أركون

### Hero Paragraph

English:

Access ARKON Group profiles, service brochures, capability sheets, and project-request templates for engineering consultancy, security consultancy, construction and technical services, testing and inspection, and digital marketing.

Arabic:

اطلع على ملفات تعريف مجموعة أركون، وكتيبات الخدمات، وملفات القدرات، ونماذج طلبات المشاريع الخاصة بالاستشارات الهندسية، والاستشارات الأمنية، وأعمال البناء والخدمات الفنية، والفحوصات والاختبارات، والتسويق الرقمي.

### Filter / Category System

Use filter tabs or segmented controls in Bricks:

1. All Downloads
2. ARKON Group Credentials
3. Company Profiles
4. Prequalification Documents
5. Service Brochures
6. Project References
7. Compliance / Authority Support Documents
8. Forms and Templates

Arabic filter labels:

1. جميع الملفات
2. ملفات مجموعة أركون
3. ملفات الشركات
4. مستندات التأهيل المسبق
5. كتيبات الخدمات
6. ملخصات المشاريع
7. مستندات دعم الامتثال والجهات
8. النماذج والقوالب

Implementation notes:

- Keep filters keyboard accessible.
- Use one active filter at a time on mobile.
- Include a search field only if there are more than 20 documents.
- Keep public and gated files visually distinct.

### Download Cards

Each card should show:

- Document title
- Company or group owner
- Category
- Short description
- File type
- Language
- Last updated date
- Version
- Open or gated status
- CTA button

Recommended card classes:

- `arkon-download-card`
- `arkon-download-card__meta`
- `arkon-download-card__title`
- `arkon-download-card__description`
- `arkon-download-card__actions`
- `arkon-download-card--gated`
- `arkon-download-card--public`

### CTA Section

English heading:

Need a tailored document package for your project?

English body:

Share your project requirements and ARKON Group will route your request to the relevant company team.

English CTAs:

- Request a Technical Proposal
- Submit Project Information

Arabic heading:

هل تحتاجون إلى حزمة مستندات مخصصة لمشروعكم؟

Arabic body:

أرسلوا متطلبات المشروع وسيتم توجيه الطلب إلى فريق الشركة المختصة داخل مجموعة أركون.

Arabic CTAs:

- طلب عرض فني
- إرسال معلومات المشروع

CTA target:

- English: `/contact/#request-proposal`
- Arabic: `/ar/contact/#request-proposal`

### SEO Title

ARKON Group Credentials And Downloads | Company Profiles And Service Brochures

### Meta Description

Download ARKON Group company profiles, service brochures, capability sheets, and project request templates for engineering, security, construction, testing, and digital marketing services in Saudi Arabia.

### Arabic Page Notes

- Use formal business Arabic.
- Keep the page direction RTL.
- Keep file names in English for reliable storage and sharing unless the final client workflow requires Arabic file names.
- Use Arabic display titles and descriptions on Arabic cards.
- Do not mix English and Arabic body copy on the same visible page section except for company names, acronyms, or file names.

## B. Download Categories

Use these categories as WordPress taxonomy terms, Bricks filter values, or structured custom fields.

### ARKON Group Credentials

Purpose:

- Group-level overview documents.
- Ecosystem overview.
- Multi-company capability summary.
- General introduction documents for client meetings.

Recommended visibility:

- Public for broad group overview.
- Gated for detailed group credentials if they include sensitive project or operational information.

### Company Profiles

Purpose:

- Individual company introduction documents.
- Company positioning and service scope.
- Contact and inquiry routing details.

Recommended visibility:

- Public for concise profiles.
- Gated for detailed profiles containing project-specific or non-public details.

### Prequalification Documents

Purpose:

- Documents used for vendor registration, tender preparation, and client screening.
- May include company facts, service categories, organization summary, and required attachments.

Recommended visibility:

- Gated by default.
- Public only after client confirmation.

### Service Brochures

Purpose:

- Service-specific brochures and capability sheets.
- Useful for service pages, sales follow-up, and proposal preparation.

Recommended visibility:

- Public for general brochures.
- Gated for detailed methodology, pricing, internal process, or project-sensitive documents.

### Project References

Purpose:

- Project-reference summaries where release is permitted.
- Anonymous project-type summaries where names cannot be shown.

Recommended visibility:

- Gated by default.
- Public only when every detail is cleared for external use.

### Compliance / Authority Support Documents

Purpose:

- General support documents that explain readiness, documentation workflow, submission support, and coordination approach.
- Useful for engineering, security, testing, and technical service inquiries.

Recommended visibility:

- Gated by default.
- Avoid wording that suggests formal status unless the file itself is backed by project-approved source material.

### Forms And Templates

Purpose:

- Project request checklist.
- Required information templates.
- Site visit preparation templates.
- Document submission checklist.
- Contact and intake forms.

Recommended visibility:

- Public for general intake templates.
- Gated when forms collect sensitive or project-specific information.

## C. Recommended Download Assets

The assets below are recommended website-download items. Final files should be created, reviewed, compressed, and cleared before upload.

### ARKON Engineering Consultancy Co.

Recommended assets:

1. Company profile
   - Category: Company Profiles
   - Suggested filename: `AEC-Company-Profile-EN-v1.pdf`
   - Visibility: Public or gated depending on final content.
2. Prequalification document
   - Category: Prequalification Documents
   - Suggested filename: `AEC-Prequalification-Document-EN-v1.pdf`
   - Visibility: Gated by default.
3. Engineering services brochure
   - Category: Service Brochures
   - Suggested filename: `AEC-Engineering-Services-Brochure-EN-v1.pdf`
   - Visibility: Public.
4. Fire and life safety brochure
   - Category: Service Brochures
   - Suggested filename: `AEC-Fire-Life-Safety-Brochure-EN-v1.pdf`
   - Visibility: Public or gated depending on detail level.
5. Traffic studies capability sheet
   - Category: Service Brochures
   - Suggested filename: `AEC-Traffic-Studies-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
6. Supervision / project management capability sheet
   - Category: Service Brochures
   - Suggested filename: `AEC-Supervision-Project-Management-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.

### ELITE Security Consultancy Co.

Recommended assets:

1. Company profile
   - Category: Company Profiles
   - Suggested filename: `ELITE-Company-Profile-EN-v1.pdf`
   - Visibility: Public or gated depending on final content.
2. HCIS / SAIS consultancy brochure
   - Category: Service Brochures
   - Suggested filename: `ELITE-HCIS-SAIS-Consultancy-Brochure-EN-v1.pdf`
   - Visibility: Gated if it includes sensitive security detail.
3. Security risk assessment capability sheet
   - Category: Service Brochures
   - Suggested filename: `ELITE-Security-Risk-Assessment-Capability-Sheet-EN-v1.pdf`
   - Visibility: Gated by default.
4. Security design review capability sheet
   - Category: Service Brochures
   - Suggested filename: `ELITE-Security-Design-Review-Capability-Sheet-EN-v1.pdf`
   - Visibility: Gated by default.
5. Operational readiness capability sheet
   - Category: Service Brochures
   - Suggested filename: `ELITE-Operational-Readiness-Capability-Sheet-EN-v1.pdf`
   - Visibility: Gated by default.

### Integrated Building Systems

Recommended assets:

1. Company profile
   - Category: Company Profiles
   - Suggested filename: `IBS-Company-Profile-EN-v1.pdf`
   - Visibility: Public or gated depending on final content.
2. Construction services brochure
   - Category: Service Brochures
   - Suggested filename: `IBS-Construction-Services-Brochure-EN-v1.pdf`
   - Visibility: Public.
3. MEP capability sheet
   - Category: Service Brochures
   - Suggested filename: `IBS-MEP-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
4. Steel structures capability sheet
   - Category: Service Brochures
   - Suggested filename: `IBS-Steel-Structures-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
5. Prefabricated units / porta cabins capability sheet
   - Category: Service Brochures
   - Suggested filename: `IBS-Prefabricated-Units-Porta-Cabins-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.

### Quality Inspection Company

Recommended assets:

1. Company profile
   - Category: Company Profiles
   - Suggested filename: `QIC-Company-Profile-EN-v1.pdf`
   - Visibility: Public or gated depending on final content.
2. Soil testing brochure
   - Category: Service Brochures
   - Suggested filename: `QIC-Soil-Testing-Brochure-EN-v1.pdf`
   - Visibility: Public.
3. Material testing capability sheet
   - Category: Service Brochures
   - Suggested filename: `QIC-Material-Testing-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
4. Asphalt / concrete testing capability sheet
   - Category: Service Brochures
   - Suggested filename: `QIC-Asphalt-Concrete-Testing-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
5. Geotechnical investigation capability sheet
   - Category: Service Brochures
   - Suggested filename: `QIC-Geotechnical-Investigation-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.

### Turning Point Digital Marketing Co.

Recommended assets:

1. Company profile
   - Category: Company Profiles
   - Suggested filename: `TP-Digital-Company-Profile-EN-v1.pdf`
   - Visibility: Public or gated depending on final content.
2. Digital marketing services brochure
   - Category: Service Brochures
   - Suggested filename: `TP-Digital-Marketing-Services-Brochure-EN-v1.pdf`
   - Visibility: Public.
3. Social media management capability sheet
   - Category: Service Brochures
   - Suggested filename: `TP-Digital-Social-Media-Management-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
4. Website / landing page development capability sheet
   - Category: Service Brochures
   - Suggested filename: `TP-Digital-Website-Landing-Page-Development-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.
5. Podcast studio capability sheet
   - Category: Service Brochures
   - Suggested filename: `TP-Digital-Podcast-Studio-Capability-Sheet-EN-v1.pdf`
   - Visibility: Public.

### Group-Level Assets

Recommended assets:

1. ARKON Group credentials
   - Category: ARKON Group Credentials
   - Suggested filename: `ARKON-Group-Credentials-EN-v1.pdf`
   - Visibility: Public or gated depending on final content.
2. Group ecosystem overview
   - Category: ARKON Group Credentials
   - Suggested filename: `ARKON-Group-Ecosystem-Overview-EN-v1.pdf`
   - Visibility: Public.
3. Project request checklist
   - Category: Forms and Templates
   - Suggested filename: `ARKON-Group-Project-Request-Checklist-EN-v1.pdf`
   - Visibility: Public.
4. Company capability sheets bundle
   - Category: Company Profiles
   - Suggested filename: `ARKON-Group-Company-Capability-Sheets-EN-v1.pdf`
   - Visibility: Gated by default.

## D. Download Card Content Template

Use this template for each download card in Bricks or in a custom post type if downloads are managed as structured content.

### Required Card Fields

| Field | Description | Example |
|---|---|---|
| Title | Public-facing document title. | ARKON Group Credentials |
| Company | Group or company owner. | ARKON Group |
| Category | Download category. | ARKON Group Credentials |
| Short description | One or two concise sentences. | Overview of the ARKON Group ecosystem and service areas. |
| File type | PDF, DOCX, XLSX, ZIP, or form link. | PDF |
| Language | EN, AR, or bilingual. | EN |
| CTA label | Button label. | Download PDF |
| Optional gated form requirement | Open, gated, or request-only. | Gated |
| Last updated field | Month and year or exact date. | July 2026 |
| Version field | Version number visible to administrators and optionally users. | v1 |

### Card Copy Template

```text
Title: {document_title}
Company: {company_or_group}
Category: {download_category}
Description: {short_plain_language_description}
File type: {file_type}
Language: {language}
Last updated: {last_updated}
Version: {version}
CTA: {download_or_request_label}
Access: {public_gated_or_request_only}
```

### CTA Label Rules

Open downloads:

- English: Download PDF
- Arabic: تحميل الملف

Gated downloads:

- English: Request Access
- Arabic: طلب الوصول

Proposal-related templates:

- English: Download Checklist
- Arabic: تحميل القائمة

Request-only documents:

- English: Request Document
- Arabic: طلب المستند

## E. File Naming Convention

Use predictable, professional, ASCII filenames for storage, linking, sharing, and version control.

### Format

Recommended pattern:

```text
{Brand-Or-Company}-{Document-Type}-{Language}-v{Version}.pdf
```

Recommended examples:

- `ARKON-Group-Credentials-EN-v1.pdf`
- `ARKON-Group-Project-Request-Checklist-EN-v1.pdf`
- `AEC-Engineering-Services-Brochure-EN-v1.pdf`
- `AEC-Fire-Life-Safety-Brochure-EN-v1.pdf`
- `ELITE-HCIS-SAIS-Consultancy-Brochure-EN-v1.pdf`
- `IBS-Construction-Services-Brochure-EN-v1.pdf`
- `QIC-Soil-Testing-Brochure-EN-v1.pdf`
- `TP-Digital-Marketing-Services-Brochure-EN-v1.pdf`

### Company Prefixes

Use these short prefixes:

| Company | Prefix |
|---|---|
| ARKON Group | `ARKON-Group` |
| ARKON Engineering Consultancy Co. | `AEC` |
| ELITE Security Consultancy Co. | `ELITE` |
| Integrated Building Systems | `IBS` |
| Quality Inspection Company | `QIC` |
| Turning Point Digital Marketing Co. | `TP-Digital` |

### Language Codes

Use these suffixes:

- English: `EN`
- Arabic: `AR`
- Bilingual: `EN-AR`

### Version Rules

- Use `v1`, `v2`, `v3` for externally published versions.
- Use draft labels only before upload, for example `DRAFT`, and remove them before public publishing.
- Do not overwrite a public PDF without updating the version field and last updated field.
- Keep a simple internal change log for each file.

### Arabic Naming Guidance

For storage:

- Prefer English ASCII filenames for reliability across browsers, servers, email systems, and CRM tools.
- Use Arabic display titles inside WordPress, Bricks cards, and media alt/title fields.

Arabic display-title examples:

- ملف تعريف مجموعة أركون
- كتيب خدمات الاستشارات الهندسية
- ملف قدرات استشارات HCIS / SAIS
- كتيب اختبارات التربة
- كتيب خدمات التسويق الرقمي

If Arabic filenames are required later:

- Keep them short.
- Avoid punctuation that can break URLs.
- Test download behavior on desktop, mobile, and email clients.

## F. Bricks Builder Implementation

### Recommended Layout

Build `/credentials/` as a practical resource page, not a landing page.

Recommended section order:

1. Header
2. Download Center hero
3. Filter/category controls
4. Featured downloads row
5. Download card grid
6. Gated-download explanation panel
7. FAQ section
8. Request Proposal CTA
9. Footer

Recommended classes:

- `arkon-download-center`
- `arkon-download-hero`
- `arkon-download-filters`
- `arkon-download-grid`
- `arkon-download-card`
- `arkon-download-card--featured`
- `arkon-download-card--gated`
- `arkon-download-card--public`
- `arkon-download-cta`

### Filter Tabs

Use Bricks tabs, query-loop filters, or lightweight JavaScript filtering.

Filter behavior:

- Default to All Downloads.
- Use short labels.
- Keep filters sticky only if it improves usability.
- Provide visible focus states.
- Show an empty-state message if a category has no files.

Empty-state copy:

English:

No downloads are available in this category yet. Please contact ARKON Group for the required document.

Arabic:

لا توجد ملفات متاحة في هذه الفئة حالياً. يرجى التواصل مع مجموعة أركون لطلب المستند المطلوب.

### Card Grid

Desktop:

- Use a three-column grid where space allows.
- Keep card height consistent.
- Show metadata in a compact row.

Tablet:

- Use a two-column grid.

Mobile:

- Use a single-column grid.
- Keep CTA buttons full width or easy to tap.
- Avoid long descriptions that push the CTA too far down.

### Gated Vs Open Downloads

Open downloads:

- Link directly to a PDF or media attachment URL.
- Use only for documents cleared for public access.

Gated downloads:

- Route to the Download / Credentials form from `docs/forms-and-lead-capture-setup.md`.
- Use a form field for interested company or document.
- Send the document link after submission only if the document is intended for gated access.

Request-only documents:

- Do not expose the file URL publicly.
- Use the Request Proposal form or a document-request form.
- Let the internal team send the correct file after review.

### Icon Usage

Use simple, recognizable icons:

- PDF icon for PDF documents.
- File-text icon for profiles and brochures.
- Shield or lock icon for gated documents.
- Download icon for open files.
- External-link icon only if linking away from the site.

Use icon buttons with accessible labels, and do not rely on color alone to indicate gated status.

### CTA Placement

Place CTA blocks:

- Near the hero for visitors ready to request documents.
- After the first row of featured downloads.
- At the bottom of the page.

Use one primary CTA per block.

### Arabic RTL Behavior

- Set the Arabic page direction to RTL.
- Align card text to the right.
- Keep metadata order natural for Arabic readers.
- Keep English file names in LTR direction where shown.
- Ensure filter tabs scroll horizontally on small screens without clipping text.
- Use Arabic CTA labels and Arabic empty-state text.

## G. Asset Upload And Management

### Where To Upload PDFs In WordPress

Recommended default:

- Upload public PDFs to WordPress Media Library.
- Store gated or request-only files in a protected upload folder or a download-management plugin that can restrict direct access.

Optional plugin support:

- Use a download manager plugin only if the site needs gated links, expiring links, download logging, or access control.
- Keep the implementation simple if files are mostly public profiles and brochures.

### Media Library Naming

For each media item:

- Use the final filename from section E.
- Set the media title to the public document title.
- Set the caption only if needed.
- Add a short description for internal administrators.
- Add alt text only when the PDF has a preview image; PDFs themselves do not need image-style alt text.

### File Replacement Policy

When replacing files:

1. Create a new versioned file.
2. Upload the new file.
3. Update the card link.
4. Update `Last updated`.
5. Update `Version`.
6. Test the download link.
7. Archive the old file if it should no longer be public.

Avoid replacing a public file with a different document while keeping the same filename.

### Version Control

Maintain a simple internal register:

| Field | Example |
|---|---|
| Document title | ARKON Group Credentials |
| Filename | `ARKON-Group-Credentials-EN-v1.pdf` |
| Category | ARKON Group Credentials |
| Company | ARKON Group |
| Language | EN |
| Version | v1 |
| Last updated | July 2026 |
| Visibility | Public |
| Owner | Marketing / website admin |
| Notes | Public overview document |

### Avoiding Duplicate Files

- Search Media Library before uploading.
- Do not upload the same file with slightly different names.
- Use version numbers instead of duplicate labels such as `final-final`.
- Keep English, Arabic, and bilingual versions as separate files.
- Remove outdated public links after replacement.

### Compressed PDFs

PDF handling:

- Compress PDFs before upload.
- Target under 3 MB for simple brochures.
- Target under 8 MB for detailed profile documents unless visuals require more.
- Optimize images before export.
- Embed fonts properly for Arabic text.
- Test PDF rendering on desktop and mobile.

### Security Notes For Confidential Files

- Do not upload confidential documents to a public media URL by default.
- Do not link sensitive PDFs directly from public pages.
- Do not include confidential file links in public source code.
- Use gated access, request-only forms, or a protected document system.
- Limit WordPress administrator access to people who need document control.
- Review public media URLs before launch.

## H. SEO And Schema

### Breadcrumb Schema Recommendation

Use visible breadcrumbs and BreadcrumbList JSON-LD for the Download Center.

English breadcrumb:

1. Home: `/`
2. Credentials: `/credentials/`

Arabic breadcrumb:

1. الرئيسية: `/ar/`
2. ملفات التعريف: `/ar/credentials/`

For individual document pages, if created later:

1. Home
2. Credentials
3. Category
4. Document title

### FAQ Section Recommendation

Add a short FAQ section near the bottom of `/credentials/`.

Recommended FAQ topics:

- Which documents are public?
- Why do some downloads require a form?
- How can I request a tailored prequalification package?
- Are Arabic versions available?
- How can I request service-specific documents?

Use FAQPage JSON-LD only when the questions and answers are visible on the page.

### SEO Metadata

Recommended title:

ARKON Group Credentials And Downloads | Company Profiles And Service Brochures

Recommended meta description:

Download ARKON Group company profiles, service brochures, capability sheets, and project request templates for engineering, security, construction, testing, and digital marketing services in Saudi Arabia.

### Noindex Guidance For Private / Confidential Files

- Do not index private or request-only document pages.
- Use `noindex` for gated download confirmation pages.
- Block indexing of confidential file URLs where technically possible.
- Avoid exposing sensitive PDF URLs in XML sitemaps.
- Do not submit private file URLs to search engines.

### Avoiding Indexing Sensitive PDF URLs

Recommended controls:

- Keep confidential documents outside the public media library.
- Use protected links or expiring links for restricted downloads.
- Disable attachment pages where appropriate.
- Exclude gated confirmation pages from sitemaps.
- Review Rank Math or SEO plugin settings for media and attachment URLs.

## I. Arabic Content

Use these Arabic labels across the Download Center, cards, filters, and gated forms.

| English | Arabic |
|---|---|
| Download Center | مركز التنزيلات |
| Company Profiles | ملفات الشركات |
| Service Brochures | كتيبات الخدمات |
| Prequalification Documents | مستندات التأهيل المسبق |
| Download | تحميل |
| Request Proposal | طلب عرض فني |
| File Type | نوع الملف |
| Language | اللغة |
| Last Updated | آخر تحديث |

Additional Arabic labels:

| English | Arabic |
|---|---|
| ARKON Group Credentials | ملفات مجموعة أركون |
| Project References | ملخصات المشاريع |
| Forms and Templates | النماذج والقوالب |
| Request Access | طلب الوصول |
| Download PDF | تحميل ملف PDF |
| Version | الإصدار |
| Public Download | تحميل متاح |
| Gated Download | تحميل يتطلب نموذجاً |
| Request Document | طلب المستند |

Arabic style notes:

- Use formal corporate Arabic.
- Keep CTA labels short.
- Keep technical acronyms such as MEP, HCIS, SAIS, PDF, and CRM readable.
- Use Arabic display titles even when filenames stay English.
- Do not include long explanatory paragraphs inside download cards.

## J. Final QA Checklist

### File Link QA

1. Every public download link works.
2. Each link opens the correct file.
3. Each card links to the correct language version.
4. PDF files open on desktop and mobile.
5. External links, if any, open safely and intentionally.

### Download Accuracy QA

1. Company profiles match the correct company.
2. Service brochures match the correct service category.
3. Gated documents route through the correct form.
4. Request-only documents do not expose a public file URL.
5. Version and last updated fields are accurate.

### Mobile Layout QA

1. Filter tabs are readable on mobile.
2. Download cards stack cleanly.
3. CTA buttons are easy to tap.
4. Metadata does not overlap.
5. Long file names wrap cleanly.

### Arabic RTL QA

1. Arabic page direction is RTL.
2. Arabic filters align correctly.
3. Arabic card titles and descriptions are readable.
4. English filenames display cleanly in LTR direction.
5. Arabic CTA buttons fit at 360px, 390px, and 430px widths.

### Gated Form QA

1. Gated download form opens or routes correctly.
2. Interested Company field includes the five confirmed companies only.
3. Form notification routing matches `docs/forms-and-lead-capture-setup.md`.
4. User confirmation email does not expose restricted file links unless intended.
5. Internal admin notification includes the requested document title.

### Security And Privacy QA

1. No confidential document is publicly exposed by default.
2. Restricted documents are not included in public page source.
3. Restricted document URLs are not added to XML sitemaps.
4. File permissions are reviewed before launch.
5. Old file versions are archived or removed from public access.

### SEO And Schema QA

1. SEO title is complete.
2. Meta description is complete.
3. Breadcrumbs are visible.
4. BreadcrumbList JSON-LD is valid.
5. FAQPage JSON-LD is used only if FAQ content is visible.
6. Private or gated confirmation pages use noindex where appropriate.

### Internal Link QA

1. Header Credentials link points to `/credentials/`.
2. Arabic Credentials link points to `/ar/credentials/`.
3. Company pages link to relevant company downloads where useful.
4. Service pages link to relevant brochures where useful.
5. Download Center CTA links to `/contact/#request-proposal`.
6. Arabic Download Center CTA links to `/ar/contact/#request-proposal`.
