# Company Pages Build Guide

This guide explains how to build the five ARKON Group company pages in WordPress and Bricks Builder. Use `content/companies.json` as the source of truth for company names, short names, Arabic names, descriptions, and service lists.

Build pages for these five companies only:

1. ARKON Engineering Consultancy Co. (AEC)
2. ELITE Security Consultancy Co. (ELITE)
3. Integrated Building Systems (IBS)
4. Quality Inspection Company (QIC)
5. Turning Point Digital Marketing Co. (TP Digital)

Do not add unconfirmed companies, partner brands, client logos, approvals, certifications, awards, or rankings unless project files support those claims.

## A. Shared Company Page Template Structure

Use this structure for every company page:

1. Header
2. Company hero
3. Overview
4. Services grid
5. Process / methodology
6. Industries served
7. Credentials / downloads
8. Related companies
9. CTA
10. Footer

Recommended Bricks hierarchy:

1. Section: `arkon-company-hero arkon-dark arkon-grid`
2. Container: `arkon-container arkon-company-hero__grid`
3. Section: `arkon-company-overview arkon-section`
4. Section: `arkon-company-services arkon-section arkon-section--light`
5. Section: `arkon-company-process arkon-section arkon-section--blueprint`
6. Section: `arkon-company-industries arkon-section`
7. Section: `arkon-company-downloads arkon-section arkon-section--light`
8. Section: `arkon-related-companies arkon-section`
9. Section: `arkon-company-cta arkon-dark arkon-grid arkon-section`

Use one H1 per company page. Use H2 for major sections and H3 for service, process, industry, download, and related-company cards.

## B. Use `content/companies.json` As Source Of Truth

Use `content/companies.json` for:

- Company names
- Short names
- Arabic names
- Descriptions
- Service list items

Suggested workflow:

1. Open `content/companies.json`.
2. Copy the exact `name`, `shortName`, `arabicName`, `description`, and `services` for the company page.
3. Use the description as the overview baseline.
4. Use `services` to build the services grid.
5. Keep service naming consistent across English pages, Arabic pages, schema, and internal links.
6. If a page needs new copy, expand the confirmed service list without changing the company structure.
7. Do not add services or claims that are not present in project files unless the client approves them.

## C. Reusable Bricks Components

Create these reusable Bricks components before building individual pages:

- Company Hero: logo/eyebrow, H1, positioning statement, CTA row, quick facts.
- Service Grid: six to eight cards with icon, title, short description, and optional link.
- Process Steps: four-step methodology layout.
- Industry Cards: target client or project types.
- Technical Strengths: dark card grid for compliance, documentation, readiness, testing, or technical coordination.
- Credentials Downloads: profile, capability statement, checklist, or request-pack cards.
- Related Companies: cards linking to the other four company pages.
- Proposal CTA: final dark CTA with request button and email link.

Suggested shared class names:

- `arkon-company-page`
- `arkon-company-hero`
- `arkon-company-hero__copy`
- `arkon-company-hero__visual`
- `arkon-company-overview`
- `arkon-company-services`
- `arkon-company-service-grid`
- `arkon-company-service-card`
- `arkon-company-process`
- `arkon-company-process-grid`
- `arkon-company-process-card`
- `arkon-company-industries`
- `arkon-company-industry-grid`
- `arkon-company-strengths`
- `arkon-company-strength-card`
- `arkon-company-downloads`
- `arkon-related-companies`
- `arkon-company-cta`

Reuse existing global classes where possible:

- `arkon-section`
- `arkon-section--light`
- `arkon-section--blueprint`
- `arkon-dark`
- `arkon-grid`
- `arkon-container`
- `arkon-section__header`
- `arkon-section-title`
- `arkon-section-lead`
- `arkon-card-index`
- `arkon-tag-list`
- `arkon-btn`
- `arkon-btn--gold`
- `arkon-btn--primary`
- `arkon-btn--ghost`
- `arkon-text-link`

## D. Arabic Versions And RTL Layout

Prepare Arabic pages after the English versions are approved.

1. Duplicate each English page with WPML or Polylang.
2. Use the Arabic company names from `content/companies.json`.
3. Use Arabic URL paths under `/ar/companies/`.
4. Set page direction to RTL through the multilingual plugin or theme output.
5. Keep the same section order as English.
6. Replace CTAs with Arabic equivalents, for example:
   - طلب عرض فني
   - استكشاف شركات المجموعة
   - تحميل ملف الشركة
7. Review Arabic heading breaks manually.
8. Check button label fit at 360px, 390px, and 430px widths.
9. Use right-aligned text where it improves readability.
10. Keep icons mirrored only when direction matters.
11. Confirm English and Arabic pages are linked through the language switcher.

## E. Company Page Build Guidance

### 1. ARKON Engineering Consultancy Co.

#### Page Objective

Position AEC as the engineering consultancy arm of ARKON Group for design review, infrastructure engineering, traffic, hydrology, construction supervision, and fire and life safety support.

#### Suggested URL Slug

`/companies/arkon-engineering-consultancy/`

Arabic: `/ar/companies/arkon-engineering-consultancy/`

#### Hero Section Content

- Eyebrow: ARKON Group Company
- H1: ARKON Engineering Consultancy Co.
- Supporting text: Engineering consultancy, fire and life safety, infrastructure, traffic, hydrology, supervision, and design review for Saudi project teams.
- Primary CTA: Request Engineering Consultancy
- Secondary CTA: Explore Group Companies

#### Company Positioning Statement

AEC supports developers, consultants, contractors, and project owners with multidisciplinary engineering consultancy and technical review services across Saudi Arabia.

#### Key Services Section

Use these service cards from `content/companies.json`:

1. Engineering consultancy
2. Fire and life safety
3. Traffic impact studies
4. Hydrology and drainage studies
5. Infrastructure engineering
6. Construction supervision
7. Design review

#### Industries / Client Types Served

- Real estate developers
- Infrastructure project teams
- Consultants
- Contractors
- Industrial facilities
- Government-related project teams

#### Compliance / Technical Strengths

- Fire and life safety coordination
- Technical documentation review
- Infrastructure interface awareness
- Traffic and hydrology study support
- Supervision and design review workflows

Keep wording as support, review, and coordination unless formal approvals are documented.

#### Visual Direction

Use a technical blueprint style with dark navy hero, silver grid lines, restrained gold highlights, engineering diagrams, infrastructure linework, and clear technical cards.

#### Suggested Icons / Infographic Ideas

- Compass or drafting icon for engineering consultancy
- Flame/shield icon for fire and life safety
- Road icon for traffic studies
- Water/drop icon for hydrology and drainage
- Bridge/grid icon for infrastructure
- Clipboard/check icon for supervision
- Document/magnifier icon for design review

#### CTA Wording

- Primary: Request Engineering Consultancy
- Secondary: Discuss Design Review
- Footer CTA: Send Your Engineering Scope

#### Arabic Page Notes

- Arabic company name: شركة أركون للاستشارات الهندسية
- Keep technical terms clear and avoid overly literal translations.
- Use RTL alignment for service cards and process steps.
- Arabic CTA options: طلب استشارة هندسية, إرسال نطاق المشروع الهندسي

#### SEO Title And Meta Description Draft

- SEO title: ARKON Engineering Consultancy Co. | Engineering Consultant Saudi Arabia
- Meta description: ARKON Engineering Consultancy Co. provides engineering consultancy, fire and life safety, infrastructure, traffic, hydrology, supervision, and design review support for Saudi projects.

#### Internal Links To Other ARKON Group Companies

- `/companies/elite-security-consultancy/`
- `/companies/integrated-building-systems/`
- `/companies/quality-inspection-company/`
- `/companies/turning-point-digital-marketing/`

#### Suggested Bricks Section Structure

1. Company hero with H1, CTAs, quick service tags
2. Overview with positioning statement
3. Services grid with seven AEC services
4. Process / methodology: understand scope, review documents, coordinate technical input, issue advisory outputs
5. Industries served
6. Technical strengths
7. Credentials / downloads
8. Related companies
9. CTA

#### Required CSS Class Names

- `arkon-company-page`
- `arkon-company-page--aec`
- `arkon-company-hero`
- `arkon-company-services`
- `arkon-company-service-grid`
- `arkon-company-strengths`
- `arkon-company-process`
- `arkon-related-companies`
- `arkon-company-cta`

### 2. ELITE Security Consultancy Co.

#### Page Objective

Position ELITE as the security consultancy arm for SAIS/HCIS advisory, security risk assessment, concept security design, operational readiness, data center security advisory, and SEC-21 passive defence advisory.

#### Suggested URL Slug

`/companies/elite-security-consultancy/`

Arabic: `/ar/companies/elite-security-consultancy/`

#### Hero Section Content

- Eyebrow: ARKON Group Company
- H1: ELITE Security Consultancy Co.
- Supporting text: Security consultancy for SAIS/HCIS readiness, risk assessment, concept security design, operational readiness, and critical-facility advisory.
- Primary CTA: Request Security Consultancy
- Secondary CTA: Explore Compliance Support

#### Company Positioning Statement

ELITE helps project teams understand security risks, prepare documentation, and plan security-ready environments for industrial, critical, commercial, and government-related projects in Saudi Arabia.

#### Key Services Section

Use these service cards from `content/companies.json`:

1. SAIS/HCIS consultancy
2. Security risk assessment
3. Concept of security design
4. Operational readiness
5. Data center security advisory
6. SEC-21 passive defence advisory

#### Industries / Client Types Served

- Industrial facilities
- Logistics and warehousing projects
- Data centers and critical facilities
- Commercial developments
- Government-related project teams
- Consultants and contractors preparing security documentation

#### Compliance / Technical Strengths

- Security risk identification
- SAIS/HCIS documentation awareness
- Concept security design
- Operational readiness planning
- Passive defence advisory
- Critical facility security coordination

Do not state that ELITE grants, guarantees, or holds authority approvals.

#### Visual Direction

Use a dark security command-center style with layered grids, shield motifs, site perimeter diagrams, security-zone cards, and blue/gold status accents.

#### Suggested Icons / Infographic Ideas

- Shield icon for security consultancy
- Radar icon for risk assessment
- Lock or access-control icon for security design
- Server icon for data center advisory
- Checklist icon for readiness
- Layered perimeter diagram for facility planning

#### CTA Wording

- Primary: Request Security Consultancy
- Secondary: Discuss SAIS/HCIS Readiness
- Footer CTA: Send Your Security Scope

#### Arabic Page Notes

- Arabic company name: شركة إيليت للاستشارات الأمنية
- Keep SAIS/HCIS acronyms visible where useful.
- Use Arabic copy that emphasizes advisory, readiness, risk, and documentation.
- Arabic CTA options: طلب استشارة أمنية, مناقشة جاهزية المتطلبات الأمنية

#### SEO Title And Meta Description Draft

- SEO title: ELITE Security Consultancy Co. | HCIS and SAIS Consultant Saudi Arabia
- Meta description: ELITE Security Consultancy Co. supports SAIS/HCIS consultancy, security risk assessment, concept security design, operational readiness, data center security, and SEC-21 advisory in Saudi Arabia.

#### Internal Links To Other ARKON Group Companies

- `/companies/arkon-engineering-consultancy/`
- `/companies/integrated-building-systems/`
- `/companies/quality-inspection-company/`
- `/companies/turning-point-digital-marketing/`

#### Suggested Bricks Section Structure

1. Company hero with dark security visual
2. Overview with security consultancy positioning
3. Services grid with six ELITE services
4. Process / methodology: assess risks, define requirements, develop concept, prepare readiness package
5. Industries served
6. Compliance / technical strengths
7. Credentials / downloads
8. Related companies
9. CTA

#### Required CSS Class Names

- `arkon-company-page`
- `arkon-company-page--elite`
- `arkon-company-hero`
- `arkon-company-services`
- `arkon-company-service-grid`
- `arkon-company-strengths`
- `arkon-company-process`
- `arkon-related-companies`
- `arkon-company-cta`

### 3. Integrated Building Systems

#### Page Objective

Position IBS as the construction and technical works company for civil works, MEP, finishing, steel structures, maintenance, fire alarm and fire protection works, and prefabricated units.

#### Suggested URL Slug

`/companies/integrated-building-systems/`

Arabic: `/ar/companies/integrated-building-systems/`

#### Hero Section Content

- Eyebrow: ARKON Group Company
- H1: Integrated Building Systems
- Supporting text: Construction and technical works including civil works, MEP, finishing, steel structures, maintenance, fire protection works, and prefabricated units.
- Primary CTA: Request Construction Support
- Secondary CTA: Discuss Technical Works

#### Company Positioning Statement

IBS supports project delivery through practical construction, technical works, maintenance, and prefabricated-unit capabilities aligned with wider ARKON Group project support.

#### Key Services Section

Use these service cards from `content/companies.json`:

1. Civil works
2. MEP works
3. Finishing works
4. Steel structures
5. Building maintenance
6. Fire alarm and fire protection works
7. Porta cabins and prefabricated units

#### Industries / Client Types Served

- Contractors
- Developers
- Commercial and hospitality projects
- Industrial facilities
- Temporary site facilities
- Maintenance and facility teams

#### Compliance / Technical Strengths

- MEP coordination
- Fire alarm and fire protection works
- Steel and civil execution support
- Maintenance response planning
- Prefabricated-unit delivery support

Keep technical claims tied to execution support and do not imply product certifications unless confirmed.

#### Visual Direction

Use a practical build-site and systems-integration feel: navy background, steel/silver accents, grid overlays, modular blocks, construction sequencing, and clean technical cards.

#### Suggested Icons / Infographic Ideas

- Hardhat or tool icon for civil works
- Bolt/duct icon for MEP
- Paint/finish icon for finishing works
- Beam icon for steel structures
- Wrench icon for maintenance
- Alarm icon for fire alarm systems
- Modular cube icon for prefabricated units

#### CTA Wording

- Primary: Request Construction Support
- Secondary: Discuss MEP or Civil Works
- Footer CTA: Send Your Technical Works Scope

#### Arabic Page Notes

- Arabic company name: شركة أنظمة المباني المتكاملة
- Use clear Arabic service labels for civil works, MEP, finishing, steel, maintenance, and prefabricated units.
- Keep construction terminology simple for procurement and project teams.
- Arabic CTA options: طلب دعم أعمال البناء, إرسال نطاق الأعمال الفنية

#### SEO Title And Meta Description Draft

- SEO title: Integrated Building Systems | Civil, MEP and Technical Works Saudi Arabia
- Meta description: Integrated Building Systems provides civil works, MEP, finishing, steel structures, maintenance, fire alarm and fire protection works, and prefabricated unit support.

#### Internal Links To Other ARKON Group Companies

- `/companies/arkon-engineering-consultancy/`
- `/companies/elite-security-consultancy/`
- `/companies/quality-inspection-company/`
- `/companies/turning-point-digital-marketing/`

#### Suggested Bricks Section Structure

1. Company hero with construction-systems visual
2. Overview with delivery-support positioning
3. Services grid with seven IBS services
4. Process / methodology: scope review, site coordination, execution planning, handover support
5. Industries served
6. Technical strengths
7. Credentials / downloads
8. Related companies
9. CTA

#### Required CSS Class Names

- `arkon-company-page`
- `arkon-company-page--ibs`
- `arkon-company-hero`
- `arkon-company-services`
- `arkon-company-service-grid`
- `arkon-company-strengths`
- `arkon-company-process`
- `arkon-related-companies`
- `arkon-company-cta`

### 4. Quality Inspection Company

#### Page Objective

Position QIC as the testing and inspection company for soil, concrete, asphalt, foundation, construction material, geotechnical, water, and air quality testing.

#### Suggested URL Slug

`/companies/quality-inspection-company/`

Arabic: `/ar/companies/quality-inspection-company/`

#### Hero Section Content

- Eyebrow: ARKON Group Company
- H1: Quality Inspection Company
- Supporting text: Testing and inspection support for soil, concrete, asphalt, foundations, construction materials, geotechnical studies, water, and air quality.
- Primary CTA: Request Testing Support
- Secondary CTA: Discuss Inspection Needs

#### Company Positioning Statement

QIC supports project teams with testing, inspection, and reporting services that help construction and infrastructure teams maintain technical evidence and project progress.

#### Key Services Section

Use these service cards from `content/companies.json`:

1. Soil testing
2. Concrete testing
3. Asphalt testing
4. Foundation testing
5. Construction material testing
6. Geotechnical studies
7. Water and air quality testing

#### Industries / Client Types Served

- Construction contractors
- Infrastructure projects
- Real estate developers
- Consultants
- Industrial facilities
- Quality and project control teams

#### Compliance / Technical Strengths

- Material testing workflows
- Geotechnical study support
- Construction evidence reporting
- Foundation and asphalt testing coordination
- Water and air quality testing support

Do not claim lab accreditation or certification unless documentation is added to the project files.

#### Visual Direction

Use a clean technical testing-lab style with soil layers, material samples, grid overlays, reporting cards, and silver/gold inspection markers.

#### Suggested Icons / Infographic Ideas

- Soil layer icon for soil testing
- Concrete cube icon for concrete testing
- Road/asphalt icon for asphalt testing
- Foundation/pile icon for foundation testing
- Material sample icon for construction materials
- Topographic layers icon for geotechnical studies
- Water droplet and air icon for environmental testing

#### CTA Wording

- Primary: Request Testing Support
- Secondary: Discuss Material Testing
- Footer CTA: Send Your Inspection Requirement

#### Arabic Page Notes

- Arabic company name: شركة فحوصات الجودة
- Use Arabic labels for soil, concrete, asphalt, foundations, materials, geotechnical, water, and air quality.
- Keep reporting and evidence language clear and conservative.
- Arabic CTA options: طلب خدمات الفحص, إرسال متطلبات الاختبار

#### SEO Title And Meta Description Draft

- SEO title: Quality Inspection Company | Soil and Material Testing Saudi Arabia
- Meta description: Quality Inspection Company supports soil, concrete, asphalt, foundation, construction material, geotechnical, water, and air quality testing for Saudi construction projects.

#### Internal Links To Other ARKON Group Companies

- `/companies/arkon-engineering-consultancy/`
- `/companies/elite-security-consultancy/`
- `/companies/integrated-building-systems/`
- `/companies/turning-point-digital-marketing/`

#### Suggested Bricks Section Structure

1. Company hero with testing and reporting visual
2. Overview with inspection positioning
3. Services grid with seven QIC services
4. Process / methodology: receive requirement, plan testing, perform testing, issue report
5. Industries served
6. Technical strengths
7. Credentials / downloads
8. Related companies
9. CTA

#### Required CSS Class Names

- `arkon-company-page`
- `arkon-company-page--qic`
- `arkon-company-hero`
- `arkon-company-services`
- `arkon-company-service-grid`
- `arkon-company-strengths`
- `arkon-company-process`
- `arkon-related-companies`
- `arkon-company-cta`

### 5. Turning Point Digital Marketing Co.

#### Page Objective

Position TP Digital as the digital marketing company for strategy, campaigns, social media, content creation, podcast studio services, digital management software, and performance reporting.

#### Suggested URL Slug

`/companies/turning-point-digital-marketing/`

Arabic: `/ar/companies/turning-point-digital-marketing/`

#### Hero Section Content

- Eyebrow: ARKON Group Company
- H1: Turning Point Digital Marketing Co.
- Supporting text: Digital marketing strategy, campaigns, social media, content creation, podcast studio services, digital management software, and performance reporting.
- Primary CTA: Request Digital Marketing Support
- Secondary CTA: Discuss Campaign Needs

#### Company Positioning Statement

TP Digital helps businesses, projects, and ARKON Group clients plan, launch, manage, and measure digital marketing and communication activity.

#### Key Services Section

Use these service cards from `content/companies.json`:

1. Digital marketing strategy
2. Social media management
3. Paid campaigns
4. Content creation
5. Podcast studio services
6. Digital management software
7. Performance reporting

#### Industries / Client Types Served

- Real estate and development teams
- Service businesses
- Professional firms
- Project launches
- Brands requiring content operations
- Companies that need reporting-led campaign management

#### Compliance / Technical Strengths

This page should focus on marketing operations rather than authority compliance. Relevant strengths include:

- Strategy and campaign planning
- Content production workflows
- Social media calendar management
- Paid campaign tracking
- Reporting and performance review
- Digital management software support

#### Visual Direction

Use a digital operations dashboard style with dark navy base, bright blue data panels, gold highlights, content cards, campaign metrics, and social/calendar interface motifs.

#### Suggested Icons / Infographic Ideas

- Target icon for strategy
- Social nodes icon for social media
- Megaphone icon for paid campaigns
- Pen/video icon for content creation
- Microphone icon for podcast studio services
- Dashboard icon for digital management software
- Chart icon for performance reporting

#### CTA Wording

- Primary: Request Digital Marketing Support
- Secondary: Discuss Campaign Scope
- Footer CTA: Send Your Marketing Brief

#### Arabic Page Notes

- Arabic company name: شركة نقطة تحول للتسويق الرقمي
- Use Arabic copy that explains campaigns, content, social media, podcast, software, and reporting clearly.
- Keep brand and campaign terminology practical and business-focused.
- Arabic CTA options: طلب دعم التسويق الرقمي, إرسال موجز الحملة

#### SEO Title And Meta Description Draft

- SEO title: Turning Point Digital Marketing Co. | Digital Marketing Company Jeddah
- Meta description: Turning Point Digital Marketing Co. provides digital marketing strategy, social media management, paid campaigns, content creation, podcast studio services, software, and reporting.

#### Internal Links To Other ARKON Group Companies

- `/companies/arkon-engineering-consultancy/`
- `/companies/elite-security-consultancy/`
- `/companies/integrated-building-systems/`
- `/companies/quality-inspection-company/`

#### Suggested Bricks Section Structure

1. Company hero with digital dashboard visual
2. Overview with marketing operations positioning
3. Services grid with seven TP Digital services
4. Process / methodology: define goals, plan campaign, create content, launch and report
5. Industries served
6. Digital strengths
7. Credentials / downloads
8. Related companies
9. CTA

#### Required CSS Class Names

- `arkon-company-page`
- `arkon-company-page--tp-digital`
- `arkon-company-hero`
- `arkon-company-services`
- `arkon-company-service-grid`
- `arkon-company-strengths`
- `arkon-company-process`
- `arkon-related-companies`
- `arkon-company-cta`

## F. Final QA Checklist For Each Company Page

Run this checklist before publishing each company page:

1. The page uses the correct company name from `content/companies.json`.
2. The page uses only services confirmed in `content/companies.json` or approved project files.
3. The URL slug matches the suggested architecture.
4. The page has one H1.
5. Major sections use H2 headings.
6. Service cards use H3 headings.
7. CTAs link to `/contact/` or the approved inquiry route.
8. Related company links point to the other four confirmed companies.
9. The page does not include unsupported approvals, certifications, awards, rankings, client logos, or authority status claims.
10. English desktop layout is clean.
11. English tablet layout is clean.
12. English mobile layout is clean.
13. Arabic page exists if bilingual launch is in scope.
14. Arabic page uses RTL direction.
15. Arabic CTAs fit on mobile.
16. Images have useful alt text.
17. Download links point to approved files or remain hidden until ready.
18. Rank Math SEO title and meta description are set.
19. Breadcrumb schema is present where applicable.
20. Service or ProfessionalService schema is present only where it matches visible page content.
21. Forms or CTA links submit to the approved group inquiry flow.
22. Cache and mobile rendering are checked after edits.

## G. Related Schema Notes

Use files in `schema/` as examples:

- `schema/breadcrumb-list.json` for company-page breadcrumbs.
- `schema/professional-service.json` for company pages where LocalBusiness / ProfessionalService markup is appropriate.
- `schema/service.json` for service pages or visible service content.

Keep schema conservative and aligned with visible page copy.
