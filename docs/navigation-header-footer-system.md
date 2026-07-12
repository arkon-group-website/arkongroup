# Navigation, Header, Footer, And Bilingual Site System

This document defines the navigation, header, footer, bilingual URL structure, CTA labels, and Bricks Builder implementation guidance for the ARKON Group WordPress website.

The system covers the five confirmed ARKON Group companies only:

1. ARKON Engineering Consultancy Co.
2. ELITE Security Consultancy Co.
3. Integrated Building Systems
4. Quality Inspection Company
5. Turning Point Digital Marketing Co.

Do not add unconfirmed entities, client logos, prestige statements, or formal-status claims unless project files support them.

## A. Main English Navigation Structure

Keep the primary navigation concise. Use dropdowns only where they help users route to company or service pages.

Recommended desktop menu:

1. Home
2. About
3. Companies
4. Services
5. Industries
6. Credentials
7. Contact / Request Proposal

Recommended top-level URLs:

- Home: `/`
- About: `/about/`
- Companies: `/companies/`
- Services: `/services/`
- Industries: `/industries/`
- Credentials: `/credentials/`
- Contact / Request Proposal: `/contact/`

Primary CTA outside the menu:

- Request Proposal: `/contact/`

## B. Main Arabic Navigation Structure

Use formal, concise Arabic labels suitable for a Saudi corporate website.

Recommended Arabic menu:

1. الرئيسية
2. عن المجموعة
3. الشركات
4. الخدمات
5. القطاعات
6. ملفات التعريف
7. التواصل / طلب عرض

Recommended Arabic top-level URLs:

- الرئيسية: `/ar/`
- عن المجموعة: `/ar/about/`
- الشركات: `/ar/companies/`
- الخدمات: `/ar/services/`
- القطاعات: `/ar/industries/`
- ملفات التعريف: `/ar/credentials/`
- التواصل / طلب عرض: `/ar/contact/`

Primary Arabic CTA outside the menu:

- طلب عرض فني: `/ar/contact/`

## C. Companies Dropdown

The Companies dropdown should include exactly five company links. Keep the labels clean and avoid adding descriptions inside the primary dropdown unless using a wide mega-menu.

### English Labels

- ARKON Engineering Consultancy Co.
  URL: `/companies/arkon-engineering-consultancy/`
- ELITE Security Consultancy Co.
  URL: `/companies/elite-security-consultancy/`
- Integrated Building Systems
  URL: `/companies/integrated-building-systems/`
- Quality Inspection Company
  URL: `/companies/quality-inspection-company/`
- Turning Point Digital Marketing Co.
  URL: `/companies/turning-point-digital-marketing/`

### Arabic Labels

- شركة أركون للاستشارات الهندسية
  URL: `/ar/companies/arkon-engineering-consultancy/`
- شركة إيليت للاستشارات الأمنية
  URL: `/ar/companies/elite-security-consultancy/`
- شركة أنظمة المباني المتكاملة
  URL: `/ar/companies/integrated-building-systems/`
- شركة فحوصات الجودة
  URL: `/ar/companies/quality-inspection-company/`
- شركة نقطة تحول للتسويق الرقمي
  URL: `/ar/companies/turning-point-digital-marketing/`

### Optional Dropdown Footer Link

- English: View All Companies
  URL: `/companies/`
- Arabic: عرض جميع الشركات
  URL: `/ar/companies/`

## D. Services Dropdown

Group service links by related company. On desktop, use a two-column or five-column mega-menu only if spacing allows. On mobile, use collapsible groups.

### Engineering Consultancy

Related company: ARKON Engineering Consultancy Co.

Category URL:

- English: `/services/engineering-consultancy/`
- Arabic: `/ar/services/engineering-consultancy/`

Suggested service links:

- Fire and Life Safety Consultancy: `/services/fire-and-life-safety-consultancy/`
- Traffic Impact Studies: `/services/traffic-impact-studies/`
- Hydrology and Stormwater Studies: `/services/hydrology-stormwater-studies/`
- Infrastructure Engineering Consultancy: `/services/infrastructure-engineering-consultancy/`
- MEP Engineering Consultancy: `/services/mep-engineering-consultancy/`
- Construction Supervision Consultancy: `/services/construction-supervision-consultancy/`

Arabic group label:

- الاستشارات الهندسية

### Security Consultancy

Related company: ELITE Security Consultancy Co.

Category URL:

- English: `/services/security-consultancy/`
- Arabic: `/ar/services/security-consultancy/`

Suggested service links:

- HCIS / SAIS Security Consultancy: `/services/hcis-sais-security-consultancy/`
- Security Risk Assessment: `/services/security-risk-assessment/`
- Security Design Review: `/services/security-design-review/`
- Security Systems Consultancy: `/services/security-systems-consultancy/`
- Security Compliance Documentation: `/services/security-compliance-documentation/`
- Operational Security Readiness: `/services/operational-security-readiness/`

Arabic group label:

- الاستشارات الأمنية

### Construction And Technical Services

Related company: Integrated Building Systems

Category URL:

- English: `/services/construction-technical-services/`
- Arabic: `/ar/services/construction-technical-services/`

Suggested service links:

- Civil Works: `/services/civil-works/`
- MEP Works: `/services/mep-works/`
- Steel Structures: `/services/steel-structures/`
- Finishing Works: `/services/finishing-works/`
- Building Maintenance: `/services/building-maintenance/`
- Prefabricated Units and Porta Cabins: `/services/prefabricated-units-porta-cabins/`

Arabic group label:

- أعمال البناء والخدمات الفنية

### Testing And Inspection

Related company: Quality Inspection Company

Category URL:

- English: `/services/testing-inspection/`
- Arabic: `/ar/services/testing-inspection/`

Suggested service links:

- Geotechnical Investigation: `/services/geotechnical-investigation/`
- Soil Testing: `/services/soil-testing/`
- Construction Material Testing: `/services/construction-material-testing/`
- Asphalt Testing: `/services/asphalt-testing/`
- Concrete Testing: `/services/concrete-testing/`
- Water and Air Quality Testing: `/services/water-air-quality-testing/`

Arabic group label:

- الفحوصات والاختبارات

### Digital Marketing

Related company: Turning Point Digital Marketing Co.

Category URL:

- English: `/services/digital-marketing/`
- Arabic: `/ar/services/digital-marketing/`

Suggested service links:

- Digital Marketing Strategy: `/services/digital-marketing-strategy/`
- Social Media Management: `/services/social-media-management/`
- Performance Marketing: `/services/performance-marketing/`
- Website and Landing Page Development: `/services/website-landing-page-development/`
- Creative Content and Podcast Studio: `/services/creative-content-podcast-studio/`
- Digital Management Software: `/services/digital-management-software/`

Arabic group label:

- التسويق الرقمي

## E. Header Build Guidance For Bricks Builder

### Header Template

Create a site-wide Bricks header template and assign it to all English and Arabic pages. Use language-specific menu instances for English and Arabic.

Recommended header hierarchy:

1. Header element: `arkon-site-header`
2. Container: `arkon-header__container arkon-container`
3. Logo wrapper: `arkon-header__brand`
4. Navigation: `arkon-header__nav`
5. Utilities: `arkon-header__actions`
6. Mobile toggle: `arkon-header__toggle`

### Logo Placement

- Place the ARKON Group logo at the inline start of the header.
- Link English logo to `/`.
- Link Arabic logo to `/ar/`.
- Use a dark-header logo variant if the header overlays the hero.
- Add descriptive alt text:
  - English: `ARKON Group`
  - Arabic: `مجموعة أركون`

### Desktop Navigation

- Show all seven main menu items on desktop when space allows.
- Keep dropdown labels short.
- Use hover and click behavior for dropdowns.
- Add a visible active state for current section.
- Keep `Contact / Request Proposal` in the menu only if the separate CTA button does not crowd the header.

### Dropdown Behavior

- Use a standard dropdown for Companies.
- Use a compact mega-menu for Services only if it remains readable.
- Each dropdown item must be keyboard focusable.
- Dropdowns should open on hover, click, and keyboard focus.
- Dropdowns should close on Escape, outside click, or selecting a link.
- Use a subtle dark navy background with silver dividers and restrained gold hover accents.
- Avoid long marketing copy inside dropdowns.

### Language Switcher

- Place the language switcher near the CTA on desktop.
- Use short labels:
  - English view: `العربية`
  - Arabic view: `English`
- Link each page to its translated counterpart, not just the language home page.
- If a translation is not ready, link to the language home page temporarily and mark the page for follow-up.

### Request Proposal CTA

Desktop CTA:

- English: Request Proposal
- Arabic: طلب عرض

Recommended URLs:

- English: `/contact/`
- Arabic: `/ar/contact/`

Use a gold primary button style:

- `arkon-btn arkon-btn--gold`

### Mobile Hamburger Menu

- Show the hamburger at tablet and mobile breakpoints.
- Use a clear menu icon with an accessible label.
- Menu label:
  - English: Menu
  - Arabic: القائمة
- Mobile menu order:
  1. Main navigation
  2. Companies accordion
  3. Services accordion
  4. Language switcher
  5. Request Proposal CTA
- Keep accordions closed by default.
- Make touch targets at least 44px high.
- Lock body scroll when the mobile menu is open.

### Sticky Header Behavior

- Use a sticky header after the first scroll threshold, for example 80px.
- Reduce header height slightly after sticky state activates.
- Keep contrast high on dark and light sections.
- Avoid heavy blur effects on mobile if they affect performance.
- Do not hide the CTA when sticky state is active.

Suggested sticky classes:

- `arkon-site-header`
- `arkon-site-header--sticky`
- `arkon-site-header--scrolled`

### Accessibility Notes

- Use semantic `nav` with `aria-label`.
- English nav label: `Primary navigation`
- Arabic nav label: `التنقل الرئيسي`
- Use `aria-expanded` on dropdown and hamburger toggles.
- Use `aria-controls` to connect toggles to menu panels.
- Ensure focus is visible on all links and buttons.
- Ensure dropdowns are usable by keyboard only.
- Use logical heading structure on pages; the header logo should not become the page H1.

## F. Footer Structure

Create a site-wide Bricks footer template with English and Arabic menu variants.

### Footer Layout

Recommended columns:

1. Group overview
2. Companies
3. Services
4. Quick links
5. Contact and credentials

### Group Overview

English:

ARKON Group is a Saudi multidisciplinary project-support ecosystem connecting five specialized companies across engineering consultancy, security consultancy, construction and technical works, quality inspection, and digital marketing.

Arabic:

مجموعة أركون منظومة سعودية متعددة التخصصات لدعم المشاريع، تربط خمس شركات متخصصة في الاستشارات الهندسية، والاستشارات الأمنية، وأعمال البناء والخدمات الفنية، وفحوصات الجودة، والتسويق الرقمي.

### Company Links

English:

- ARKON Engineering Consultancy Co.
- ELITE Security Consultancy Co.
- Integrated Building Systems
- Quality Inspection Company
- Turning Point Digital Marketing Co.

Arabic:

- شركة أركون للاستشارات الهندسية
- شركة إيليت للاستشارات الأمنية
- شركة أنظمة المباني المتكاملة
- شركة فحوصات الجودة
- شركة نقطة تحول للتسويق الرقمي

### Service Links

Keep service links grouped by category:

- Engineering Consultancy
- Security Consultancy
- Construction and Technical Services
- Testing and Inspection
- Digital Marketing

Arabic:

- الاستشارات الهندسية
- الاستشارات الأمنية
- أعمال البناء والخدمات الفنية
- الفحوصات والاختبارات
- التسويق الرقمي

### Contact Details Placeholders

Use placeholders until final contact details are confirmed:

- Email: `[official email address]`
- Phone: `[official phone number]`
- Address: `[official office address]`
- Working hours: `[official working hours]`

Arabic placeholders:

- البريد الإلكتروني: `[البريد الإلكتروني الرسمي]`
- رقم الهاتف: `[رقم الهاتف الرسمي]`
- العنوان: `[العنوان الرسمي]`
- ساعات العمل: `[ساعات العمل الرسمية]`

### Quick Links

English:

- About
- Services
- Industries
- Credentials
- Contact

Arabic:

- عن المجموعة
- الخدمات
- القطاعات
- ملفات التعريف
- التواصل

### Credentials And Downloads

Footer download links:

- Group Profile
- Company Capability Sheets
- Project Request Checklist
- Service Overview

Arabic:

- ملف تعريف المجموعة
- ملفات قدرات الشركات
- قائمة تجهيز طلب المشروع
- نظرة عامة على الخدمات

### Legal Links

Use placeholders until legal pages are drafted:

- Privacy Policy: `/privacy-policy/`
- Terms of Use: `/terms/`
- Cookie Notice: `/cookie-notice/`

Arabic:

- سياسة الخصوصية: `/ar/privacy-policy/`
- شروط الاستخدام: `/ar/terms/`
- إشعار ملفات الارتباط: `/ar/cookie-notice/`

### Social Links Placeholders

Do not add social links until official accounts are confirmed.

Placeholders:

- LinkedIn: `[official LinkedIn URL]`
- X: `[official X URL]`
- Instagram: `[official Instagram URL]`
- YouTube: `[official YouTube URL]`

### Bilingual Footer Notes

- Use separate English and Arabic footer templates or language-conditional menu blocks.
- Keep Arabic footer direction RTL.
- Use Arabic labels for Arabic pages, not mixed English labels except brand or technical acronyms such as MEP, HCIS, SAIS, and CCTV.
- Keep copyright line language-specific.

Copyright lines:

- English: Copyright ARKON Group. All rights reserved.
- Arabic: حقوق النشر محفوظة لمجموعة أركون. جميع الحقوق محفوظة.

## G. CTA System

Use consistent CTA labels across the header, footer, homepage, company pages, service pages, and contact flow.

| Intent | English Label | Arabic Label | Primary URL EN | Primary URL AR |
|---|---|---|---|---|
| Proposal request | Request a Technical Proposal | طلب عرض فني | `/contact/` | `/ar/contact/` |
| General contact | Contact ARKON Group | التواصل مع مجموعة أركون | `/contact/` | `/ar/contact/` |
| Profile download | Download Company Profile | تحميل ملف الشركة | `/credentials/` | `/ar/credentials/` |
| Service discovery | Explore Services | استكشاف الخدمات | `/services/` | `/ar/services/` |
| Human contact | Speak to Our Team | تحدث مع فريقنا | `/contact/` | `/ar/contact/` |
| Project intake | Submit Project Information | إرسال معلومات المشروع | `/contact/` | `/ar/contact/` |

CTA usage rules:

- Use one primary CTA per section.
- Use gold for proposal and project-request actions.
- Use blue or ghost buttons for secondary navigation actions.
- Keep Arabic CTA labels short enough for mobile buttons.
- Do not use different labels for the same action unless a page has a specific context.

## H. Suggested URL Structure

### English URLs

Homepage:

- `/`

About:

- `/about/`

Companies:

- `/companies/`
- `/companies/arkon-engineering-consultancy/`
- `/companies/elite-security-consultancy/`
- `/companies/integrated-building-systems/`
- `/companies/quality-inspection-company/`
- `/companies/turning-point-digital-marketing/`

Services hub and categories:

- `/services/`
- `/services/engineering-consultancy/`
- `/services/security-consultancy/`
- `/services/construction-technical-services/`
- `/services/testing-inspection/`
- `/services/digital-marketing/`

Example service pages:

- `/services/fire-and-life-safety-consultancy/`
- `/services/hcis-sais-security-consultancy/`
- `/services/civil-works/`
- `/services/soil-testing/`
- `/services/digital-marketing-strategy/`

Industries:

- `/industries/`
- `/industries/real-estate-development/`
- `/industries/infrastructure-utilities/`
- `/industries/industrial-critical-facilities/`
- `/industries/commercial-hospitality/`

Credentials:

- `/credentials/`
- `/credentials/group-profile/`
- `/credentials/company-capability-sheets/`
- `/credentials/project-request-checklist/`

Contact / Request Proposal:

- `/contact/`

### Arabic URLs

Homepage:

- `/ar/`

About:

- `/ar/about/`

Companies:

- `/ar/companies/`
- `/ar/companies/arkon-engineering-consultancy/`
- `/ar/companies/elite-security-consultancy/`
- `/ar/companies/integrated-building-systems/`
- `/ar/companies/quality-inspection-company/`
- `/ar/companies/turning-point-digital-marketing/`

Services hub and categories:

- `/ar/services/`
- `/ar/services/engineering-consultancy/`
- `/ar/services/security-consultancy/`
- `/ar/services/construction-technical-services/`
- `/ar/services/testing-inspection/`
- `/ar/services/digital-marketing/`

Example service pages:

- `/ar/services/fire-and-life-safety-consultancy/`
- `/ar/services/hcis-sais-security-consultancy/`
- `/ar/services/civil-works/`
- `/ar/services/soil-testing/`
- `/ar/services/digital-marketing-strategy/`

Industries:

- `/ar/industries/`
- `/ar/industries/real-estate-development/`
- `/ar/industries/infrastructure-utilities/`
- `/ar/industries/industrial-critical-facilities/`
- `/ar/industries/commercial-hospitality/`

Credentials:

- `/ar/credentials/`
- `/ar/credentials/group-profile/`
- `/ar/credentials/company-capability-sheets/`
- `/ar/credentials/project-request-checklist/`

Contact / Request Proposal:

- `/ar/contact/`

URL notes:

- Keep slugs in English for both languages unless the client explicitly requests Arabic slugs.
- Use WPML or Polylang to map each English page to its Arabic counterpart.
- Avoid placing full English and Arabic content on the same URL.

## I. Breadcrumb Structure

Use visible breadcrumbs on internal pages and match them with BreadcrumbList JSON-LD where applicable.

### Company Pages

English pattern:

1. Home: `/`
2. Companies: `/companies/`
3. Current company page

Example:

Home > Companies > ARKON Engineering Consultancy Co.

Arabic pattern:

1. الرئيسية: `/ar/`
2. الشركات: `/ar/companies/`
3. صفحة الشركة الحالية

Example:

الرئيسية > الشركات > شركة أركون للاستشارات الهندسية

### Service Pages

English pattern:

1. Home: `/`
2. Services: `/services/`
3. Service category
4. Current service page

Example:

Home > Services > Engineering Consultancy > Fire and Life Safety Consultancy

Arabic pattern:

1. الرئيسية: `/ar/`
2. الخدمات: `/ar/services/`
3. فئة الخدمة
4. صفحة الخدمة الحالية

Example:

الرئيسية > الخدمات > الاستشارات الهندسية > استشارات السلامة من الحريق وسلامة الأرواح

### Industry Pages

English pattern:

1. Home: `/`
2. Industries: `/industries/`
3. Current industry page

Example:

Home > Industries > Infrastructure and Utilities

Arabic pattern:

1. الرئيسية: `/ar/`
2. القطاعات: `/ar/industries/`
3. صفحة القطاع الحالية

Example:

الرئيسية > القطاعات > البنية التحتية والمرافق

### Credentials And Downloads

English pattern:

1. Home: `/`
2. Credentials: `/credentials/`
3. Current download or credentials page

Example:

Home > Credentials > Group Profile

Arabic pattern:

1. الرئيسية: `/ar/`
2. ملفات التعريف: `/ar/credentials/`
3. صفحة الملف الحالية

Example:

الرئيسية > ملفات التعريف > ملف تعريف المجموعة

## J. Bricks Builder Implementation Checklist

Use this checklist when building the header, footer, and navigation templates in Bricks.

1. Create English main menu in WordPress.
2. Create Arabic main menu in WordPress.
3. Create Companies dropdown with exactly five company links.
4. Create Services dropdown grouped by five service categories.
5. Create a Bricks header template assigned site-wide.
6. Add logo, main navigation, language switcher, and Request Proposal CTA.
7. Add desktop dropdown behavior and keyboard focus states.
8. Add mobile hamburger menu with accordions for Companies and Services.
9. Create a Bricks footer template with group overview, companies, services, quick links, credentials, contact placeholders, legal links, and social placeholders.
10. Connect English menu to English pages.
11. Connect Arabic menu to Arabic pages.
12. Confirm WPML or Polylang language switcher maps equivalent pages.
13. Apply global classes where possible:
    - `arkon-site-header`
    - `arkon-header__container`
    - `arkon-header__brand`
    - `arkon-header__nav`
    - `arkon-header__actions`
    - `arkon-site-footer`
    - `arkon-footer__grid`
    - `arkon-footer__column`
    - `arkon-footer__legal`
14. Confirm all links use final URL structure or clearly marked staging placeholders.
15. Test menu behavior before adding advanced animation.
16. Keep header and footer editable in Bricks, not hard-coded into page content.

## K. Mobile And RTL QA Checklist

### Mobile Navigation QA

1. Hamburger opens and closes reliably.
2. Escape key closes the menu when testing with keyboard.
3. Companies accordion opens without layout jump.
4. Services accordion groups remain readable.
5. Request Proposal CTA is visible without scrolling too far.
6. Language switcher is present in mobile menu.
7. All touch targets are at least 44px high.
8. Header does not overlap page content.
9. Sticky header does not hide anchor targets.
10. Dropdowns do not extend outside the viewport.

### RTL QA

1. Arabic header uses RTL direction.
2. Logo remains visually correct and links to `/ar/`.
3. Arabic menu order feels natural from right to left.
4. Dropdown alignment follows RTL layout.
5. Arabic CTA buttons fit at 360px, 390px, and 430px widths.
6. Footer columns stack cleanly on mobile.
7. Arabic breadcrumbs read correctly from right to left.
8. English acronyms such as MEP, HCIS, SAIS, CCTV, and SEC-21 remain readable inside Arabic text.
9. Focus states are visible in Arabic and English.
10. No English full-content blocks appear on Arabic pages unless intentionally used as a brand or acronym.

### Final Navigation QA

1. Main menu is not overloaded.
2. Every top-level link works.
3. Every dropdown link works.
4. Language switcher maps equivalent pages.
5. Footer links match the same URL structure as header links.
6. Breadcrumbs match page hierarchy.
7. CTA labels match the CTA system.
8. No unsupported formal-status, prestige, or client-logo claims appear in header, footer, or navigation content.
