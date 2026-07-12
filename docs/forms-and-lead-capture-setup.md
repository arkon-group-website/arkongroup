# Forms And Lead Capture Setup

This document defines the forms, routing, notifications, CRM notes, privacy controls, and Bricks Builder implementation guidance for the ARKON Group WordPress website.

The setup covers the five confirmed ARKON Group companies only:

1. ARKON Engineering Consultancy Co.
2. ELITE Security Consultancy Co.
3. Integrated Building Systems
4. Quality Inspection Company
5. Turning Point Digital Marketing Co.

Keep all form language professional, conservative, and suitable for Saudi-market corporate lead generation. Do not add unconfirmed companies, client logos, formal-status claims, or prestige claims unless the project files support them.

## A. Main Request Proposal Form

### Form Purpose

The main Request Proposal form is the primary lead capture path for project inquiries. It should collect enough information to route each request to the relevant ARKON Group company while staying simple enough for mobile visitors to complete.

Use this form on:

- Contact / Request Proposal page: `/contact/`
- Arabic Contact / Request Proposal page: `/ar/contact/`
- Homepage project request CTA section
- Service page CTA sections
- Company page CTA sections

### Recommended Plugin

Recommended options:

1. Fluent Forms Pro
2. Gravity Forms

Selection guidance:

- Use Fluent Forms Pro if the build needs a fast interface, conditional logic, file upload handling, webhook support, and cost-efficient form management.
- Use Gravity Forms if the build needs deeper add-on support, complex routing, mature CRM add-ons, and stronger enterprise form workflows.
- Use one plugin consistently across English and Arabic forms.

### Form Name

English:

- `ARKON Request Proposal Form`

Arabic:

- `نموذج طلب عرض فني من مجموعة أركون`

### Form Fields

| Field | Type | Required | Notes |
|---|---|---:|---|
| Full Name | Text | Yes | Use first and last name placeholder. |
| Company Name | Text | Yes | Required for B2B lead quality. |
| Job Title | Text | No | Helpful for qualification and routing. |
| Email | Email | Yes | Validate email format. |
| Mobile Number | Phone | Yes | Use international-friendly phone validation. |
| Project Location | Text or select | Yes | Capture city, region, or project site. |
| Project Type | Select | Yes | Use practical categories listed below. |
| Required Company / Service | Grouped select | Yes | Use the company/service options in section B. |
| Project Description | Long textarea | Yes | Ask for scope, current stage, and required support. |
| Required Timeline | Select | Yes | Use clear urgency options. |
| Upload Drawings / Documents | File upload | No | Allow only safe file types and size limits. |
| Preferred Contact Method | Radio buttons | Yes | Email, phone, WhatsApp, or no preference. |
| Consent checkbox | Checkbox | Yes | Required privacy and follow-up consent. |

### Project Type Options

Recommended English options:

- New development
- Existing building or facility
- Infrastructure project
- Industrial or critical facility
- Commercial or hospitality project
- Government-related project
- Residential or mixed-use project
- Marketing or digital project
- Testing or inspection request
- Maintenance or technical works
- Other

Recommended Arabic options:

- مشروع تطوير جديد
- مبنى أو منشأة قائمة
- مشروع بنية تحتية
- منشأة صناعية أو حساسة
- مشروع تجاري أو فندقي
- مشروع مرتبط بجهة حكومية
- مشروع سكني أو متعدد الاستخدامات
- مشروع تسويق أو تحول رقمي
- طلب فحص أو اختبار
- أعمال صيانة أو خدمات فنية
- أخرى

### Required Timeline Options

English:

- Immediate support required
- Within 1 week
- Within 2 to 4 weeks
- Within 1 to 3 months
- Planning stage only

Arabic:

- مطلوب دعم فوري
- خلال أسبوع
- خلال أسبوعين إلى أربعة أسابيع
- خلال شهر إلى ثلاثة أشهر
- مرحلة التخطيط فقط

### Preferred Contact Method Options

English:

- Email
- Phone call
- WhatsApp
- No preference

Arabic:

- البريد الإلكتروني
- اتصال هاتفي
- واتساب
- لا يوجد تفضيل

### Consent Checkbox Wording

English:

I agree that ARKON Group may use the information submitted in this form to review my inquiry and contact me about the requested service.

Arabic:

أوافق على استخدام مجموعة أركون للمعلومات المقدمة في هذا النموذج لمراجعة طلبي والتواصل معي بشأن الخدمة المطلوبة.

## B. Company / Service Dropdown Options

Use a grouped select field for `Required Company / Service`. The first level should identify the company or service group. The second level should identify the specific service.

Recommended field label:

- English: Required Company / Service
- Arabic: الشركة أو الخدمة المطلوبة

### ARKON Engineering Consultancy Co.

Group label:

- English: ARKON Engineering Consultancy Co.
- Arabic: شركة أركون للاستشارات الهندسية

Options:

- Fire and Life Safety Consultancy
- Traffic Impact Study
- Hydrology and Stormwater Study
- Structural Engineering Consultancy
- MEP Engineering Consultancy
- Construction Supervision
- Project Management Consultancy
- Other Engineering Consultancy

Arabic options:

- استشارات السلامة من الحريق وسلامة الأرواح
- دراسة الأثر المروري
- دراسة الهيدرولوجيا وتصريف مياه الأمطار
- استشارات الهندسة الإنشائية
- استشارات هندسة الميكانيكا والكهرباء والسباكة
- الإشراف على التنفيذ
- استشارات إدارة المشاريع
- استشارات هندسية أخرى

### ELITE Security Consultancy Co.

Group label:

- English: ELITE Security Consultancy Co.
- Arabic: شركة إيليت للاستشارات الأمنية

Options:

- HCIS / SAIS Security Consultancy
- Security Risk Assessment
- Security Design Review
- Security Systems Consultancy
- Security Compliance Documentation
- Operational Security Readiness
- Other Security Consultancy

Arabic options:

- استشارات أمنية HCIS / SAIS
- تقييم المخاطر الأمنية
- مراجعة التصميم الأمني
- استشارات الأنظمة الأمنية
- وثائق الامتثال الأمني
- جاهزية التشغيل الأمني
- استشارات أمنية أخرى

### Integrated Building Systems

Group label:

- English: Integrated Building Systems
- Arabic: شركة أنظمة المباني المتكاملة

Options:

- Civil Works
- MEP Works
- Steel Structures
- Finishing Works
- Building Maintenance
- Prefabricated Units and Porta Cabins
- Other Construction / Technical Services

Arabic options:

- الأعمال المدنية
- أعمال الميكانيكا والكهرباء والسباكة
- الهياكل الفولاذية
- أعمال التشطيبات
- صيانة المباني
- الوحدات مسبقة التجهيز والكبائن المتنقلة
- خدمات بناء أو خدمات فنية أخرى

### Quality Inspection Company

Group label:

- English: Quality Inspection Company
- Arabic: شركة فحوصات الجودة

Options:

- Geotechnical Investigation
- Soil Testing
- Construction Material Testing
- Asphalt Testing
- Concrete Testing
- Water and Air Quality Testing
- Other Testing / Inspection Services

Arabic options:

- الدراسات الجيوتقنية
- اختبارات التربة
- اختبارات مواد البناء
- اختبارات الأسفلت
- اختبارات الخرسانة
- اختبارات جودة المياه والهواء
- خدمات فحص أو اختبار أخرى

### Turning Point Digital Marketing Co.

Group label:

- English: Turning Point Digital Marketing Co.
- Arabic: شركة نقطة تحول للتسويق الرقمي

Options:

- Digital Marketing Strategy
- Social Media Management
- Performance Marketing
- Website and Landing Page Development
- Creative Content and Podcast Studio
- Digital Management Software
- Other Digital Marketing Services

Arabic options:

- استراتيجية التسويق الرقمي
- إدارة منصات التواصل الاجتماعي
- التسويق بالأداء
- تطوير المواقع وصفحات الهبوط
- المحتوى الإبداعي واستوديو البودكاست
- برامج الإدارة الرقمية
- خدمات تسويق رقمي أخرى

## C. Contact Form

### Form Purpose

Use the Contact Form for general inquiries that do not require a full project intake. It should be shorter than the Request Proposal form and can appear on the contact page, footer CTA, and selected landing pages.

### Form Name

English:

- `ARKON Contact Form`

Arabic:

- `نموذج التواصل مع مجموعة أركون`

### Fields

| Field | Type | Required | Notes |
|---|---|---:|---|
| Name | Text | Yes | Use a single name field for speed. |
| Company | Text | No | Helpful but not mandatory. |
| Email | Email | Yes | Main response channel. |
| Mobile | Phone | No | Optional for general inquiries. |
| Message | Textarea | Yes | Ask for a clear inquiry summary. |
| Consent checkbox | Checkbox | Yes | Required before submission. |

### Recommended Placement

- Contact page below the main Request Proposal option.
- Footer contact section as a link or embedded short form.
- Modal only for lightweight general inquiries, not document uploads.

## D. Download / Credentials Form

### Form Purpose

The Download / Credentials form is an optional gated-download form for visitors requesting company profiles, capability sheets, or project request checklists.

Use gating carefully. Keep high-value documents gated and keep general navigation documents open where possible.

### Form Name

English:

- `ARKON Credentials Download Form`

Arabic:

- `نموذج تحميل ملفات مجموعة أركون`

### Fields

| Field | Type | Required | Notes |
|---|---|---:|---|
| Name | Text | Yes | Capture visitor identity. |
| Company | Text | Yes | Qualify business relevance. |
| Email | Email | Yes | Send download link or access confirmation. |
| Mobile | Phone | No | Optional for follow-up. |
| Interested Company | Select | Yes | Use the five confirmed company options. |
| Consent checkbox | Checkbox | Yes | Required before download. |

### Interested Company Options

English:

- ARKON Group
- ARKON Engineering Consultancy Co.
- ELITE Security Consultancy Co.
- Integrated Building Systems
- Quality Inspection Company
- Turning Point Digital Marketing Co.

Arabic:

- مجموعة أركون
- شركة أركون للاستشارات الهندسية
- شركة إيليت للاستشارات الأمنية
- شركة أنظمة المباني المتكاملة
- شركة فحوصات الجودة
- شركة نقطة تحول للتسويق الرقمي

## E. Form Notification Routing

Use conditional routing based on the selected company or service group.

Recommended routing:

| Lead Type | Recipient |
|---|---|
| General group inquiries | `info@arkonec.com` |
| ARKON Engineering | `info@arkonec.com` |
| ELITE | `info@elitsc.com` |
| IBS | `info@ibscksa.com` |
| QIC | `info@fhosat.com` |
| Turning Point | `info@tpointdigital.com` |

Launch note:

- Confirm final routing, mailbox access, aliases, and backup recipients before launch.
- Add a secondary internal recipient only after the client confirms the operational workflow.
- Keep a copy of all form entries inside the form plugin database.

### Routing Logic

1. If `Required Company / Service` belongs to ARKON Engineering Consultancy Co., route to `info@arkonec.com`.
2. If it belongs to ELITE Security Consultancy Co., route to `info@elitsc.com`.
3. If it belongs to Integrated Building Systems, route to `info@ibscksa.com`.
4. If it belongs to Quality Inspection Company, route to `info@fhosat.com`.
5. If it belongs to Turning Point Digital Marketing Co., route to `info@tpointdigital.com`.
6. If the service is unclear, route to `info@arkonec.com` and tag as `Needs manual assignment`.

### Email Deliverability Notes

- Configure SMTP delivery through the hosting provider, Microsoft 365, Google Workspace, or a transactional email provider.
- Add SPF, DKIM, and DMARC records for the sending domain before launch.
- Use a site-owned sender address such as `no-reply@arkongroup.com.sa` once confirmed.
- Set the reply-to address to the submitted user email.

## F. Email Notification Templates

### Admin Notification Email

Subject line:

`New ARKON Group Request: {selected_company_service} - {company_name}`

Recommended recipients:

- Conditional recipient from section E
- Optional group intake mailbox after confirmation

Body structure:

```text
New ARKON Group website inquiry received.

Lead source:
- Form: {form_name}
- Page URL: {page_url}
- Language: {language}
- UTM source: {utm_source}
- UTM medium: {utm_medium}
- UTM campaign: {utm_campaign}

Contact details:
- Full name: {full_name}
- Company name: {company_name}
- Job title: {job_title}
- Email: {email}
- Mobile number: {mobile_number}
- Preferred contact method: {preferred_contact_method}

Project details:
- Project location: {project_location}
- Project type: {project_type}
- Required company / service: {selected_company_service}
- Required timeline: {required_timeline}
- Project description: {project_description}

Documents:
- Uploaded file link: {uploaded_file_link}

Consent:
- Consent accepted: {consent_status}
- Submission date/time: {submission_datetime}

Recommended next step:
Review the inquiry, confirm the correct company assignment, and respond through the preferred contact method.
```

### User Confirmation Email

Subject line:

`ARKON Group received your request`

Body copy:

```text
Dear {full_name},

Thank you for contacting ARKON Group.

We have received your request regarding {selected_company_service}. Our team will review the submitted information and route it to the relevant company team.

Expected response time:
{expected_response_time_placeholder}

If your request is urgent, please reply to this email with any additional project details that may help our team review the inquiry.

Regards,
ARKON Group
One Group. Five Specialized Companies. One Integrated Delivery Ecosystem.
```

Arabic subject line:

`تم استلام طلبك لدى مجموعة أركون`

Arabic body copy:

```text
الأستاذ/الأستاذة {full_name}،

شكراً لتواصلكم مع مجموعة أركون.

تم استلام طلبكم بخصوص {selected_company_service}. سيقوم فريقنا بمراجعة المعلومات المقدمة وتوجيه الطلب إلى فريق الشركة المختصة.

المدة المتوقعة للرد:
{expected_response_time_placeholder}

إذا كان الطلب عاجلاً، يمكنكم الرد على هذه الرسالة مع إضافة أي تفاصيل تساعد الفريق على مراجعة الطلب.

مع التحية،
مجموعة أركون
مجموعة واحدة. خمس شركات متخصصة. منظومة متكاملة لدعم المشاريع.
```

## G. CRM / Lead Management Notes

### Zoho CRM Integration

Recommended approach:

1. Create a Zoho CRM lead layout for ARKON Group website inquiries.
2. Map each form field to a Zoho CRM lead field.
3. Use a hidden `Lead Source` value such as `Website - Request Proposal`.
4. Use a hidden `Language` value for English or Arabic submissions.
5. Use `Required Company / Service` to assign lead owner or lead queue.
6. Send all submissions to the form plugin database even when CRM sync is active.
7. Log failed CRM submissions and notify the site administrator.

### Lead Source Tracking

Capture and store:

- Source page URL
- Referrer URL
- UTM source
- UTM medium
- UTM campaign
- UTM term
- UTM content
- Language
- Form name

### Hidden Fields

Recommended hidden fields:

- `page_url`
- `page_title`
- `language`
- `utm_source`
- `utm_medium`
- `utm_campaign`
- `utm_term`
- `utm_content`
- `referrer`
- `selected_company_group`
- `lead_source`

### Spam Filtering

Recommended controls:

- Cloudflare Turnstile or CAPTCHA
- Honeypot field
- Minimum submission time rule
- Block repeated submissions from the same IP where appropriate
- Disable links in message fields only if spam volume requires it
- Keep moderation practical so legitimate project submissions are not blocked

### File Upload Storage

Recommended storage approach:

- Store uploads in a protected WordPress uploads directory or plugin-managed secure folder.
- Do not expose file indexes.
- Include file links only in internal admin emails.
- Set reasonable expiry or cleanup rules for rejected or stale leads.
- Avoid collecting sensitive personal data unless the project inquiry truly requires it.

### Lead Assignment By Service / Company

Recommended assignment rules:

- Engineering inquiries: ARKON Engineering queue.
- Security inquiries: ELITE queue.
- Construction and technical inquiries: IBS queue.
- Testing and inspection inquiries: QIC queue.
- Digital marketing inquiries: Turning Point queue.
- Unclear inquiries: Group intake queue.

## H. Anti-Spam And Privacy

### Anti-Spam Controls

Use at least two layers:

1. Cloudflare Turnstile or CAPTCHA.
2. Honeypot field.

Optional additional controls:

- Submission throttling.
- Server-side email validation.
- Block disposable email domains if spam volume requires it.
- Review form logs weekly during the first month after launch.

### Consent Wording

English:

I agree that ARKON Group may use the information submitted in this form to review my inquiry and contact me about the requested service.

Arabic:

أوافق على استخدام مجموعة أركون للمعلومات المقدمة في هذا النموذج لمراجعة طلبي والتواصل معي بشأن الخدمة المطلوبة.

### File Upload Limits

Recommended limits:

- Maximum file size per file: 10 MB
- Maximum number of files: 5
- Maximum combined upload size: 25 MB

Allowed file types:

- PDF
- DOC
- DOCX
- XLS
- XLSX
- JPG
- JPEG
- PNG
- DWG only if the hosting and security setup explicitly allows it
- ZIP only if virus scanning and upload handling are configured

### Basic Privacy Notice

English:

ARKON Group uses submitted form information to review inquiries, respond to requests, and route submissions to the relevant company team. Do not submit sensitive personal data unless it is required for your project inquiry.

Arabic:

تستخدم مجموعة أركون معلومات النماذج المقدمة لمراجعة الاستفسارات والرد على الطلبات وتوجيهها إلى فريق الشركة المختصة. يرجى عدم إرسال بيانات شخصية حساسة ما لم تكن مطلوبة لطلب المشروع.

### Privacy Implementation Notes

- Link the consent line to the privacy policy page once it is drafted.
- Keep uploaded files accessible only to authorized administrators.
- Do not include uploaded file links in user confirmation emails.
- Define retention rules for form entries and uploaded files before launch.

## I. Bricks Builder Implementation Guide

### Where To Place Forms

Primary placement:

- Contact page: full Request Proposal form.
- Homepage CTA section: short CTA block linking to the contact page or scrolling to a compact form.
- Service pages: CTA panel linking to `/contact/?service={service-slug}`.
- Company pages: CTA panel linking to `/contact/?company={company-slug}`.
- Credentials page: gated download form if downloads need lead capture.

### CTA Buttons Linking To Form Section

Recommended English CTA labels:

- Request a Technical Proposal
- Submit Project Information
- Speak to Our Team
- Download Company Profile

Recommended Arabic CTA labels:

- طلب عرض فني
- إرسال معلومات المشروع
- تحدث مع فريقنا
- تحميل ملف الشركة

Implementation notes:

- Use anchor target `#request-proposal` on the contact page.
- Use URL parameters to preselect company or service where the form plugin supports dynamic defaults.
- Keep CTA buttons visible above the fold on service pages.

### Modal Vs Dedicated Contact Page

Use a dedicated contact page for:

- Request Proposal form
- File uploads
- Complex conditional fields
- Arabic and English bilingual forms

Use a modal only for:

- Short Contact Form
- Newsletter or simple callback request if added later
- Non-upload forms with fewer than six fields

### Mobile Behavior

- Stack all fields in one column on mobile.
- Use full-width inputs and buttons.
- Avoid multi-column form layouts below tablet width.
- Keep upload field instructions short.
- Keep the consent checkbox readable and tappable.
- Avoid forcing visitors to complete long fields inside a modal on mobile.

### Arabic Form Considerations

- Use a separate Arabic form instance or language-specific labels through WPML or Polylang.
- Set form container direction to RTL.
- Align labels, helper text, and validation messages to the right.
- Keep phone and email fields readable in LTR input mode where needed.
- Keep service acronyms such as MEP, HCIS, SAIS, and CRM readable inside Arabic labels.

### Recommended CSS Classes

Use these classes in Bricks where possible:

- `arkon-form-section`
- `arkon-form-panel`
- `arkon-form-grid`
- `arkon-form-field`
- `arkon-form-field--wide`
- `arkon-form-consent`
- `arkon-form-submit`
- `arkon-form-note`
- `arkon-lead-capture`
- `arkon-download-gate`

### Bricks Build Steps

1. Create the Contact page in WordPress.
2. Add a Bricks section with class `arkon-form-section`.
3. Add H1 content and a short lead-in paragraph.
4. Add the Request Proposal form using the form plugin shortcode or Bricks-compatible form element.
5. Add a secondary contact card with email and phone placeholders.
6. Add the shorter Contact Form below or in a side panel.
7. Add the Download / Credentials form on the Credentials page if gated downloads are required.
8. Duplicate the English contact page for Arabic.
9. Replace form instance, labels, helper text, and success messages with Arabic content.
10. Test desktop, tablet, mobile, and RTL before launch.

## J. Arabic Form Labels And Messages

### Request Proposal Form Labels

| English Field | Arabic Label |
|---|---|
| Full Name | الاسم الكامل |
| Company Name | اسم الشركة |
| Job Title | المسمى الوظيفي |
| Email | البريد الإلكتروني |
| Mobile Number | رقم الجوال |
| Project Location | موقع المشروع |
| Project Type | نوع المشروع |
| Required Company / Service | الشركة أو الخدمة المطلوبة |
| Project Description | وصف المشروع |
| Required Timeline | الجدول الزمني المطلوب |
| Upload Drawings / Documents | إرفاق المخططات أو المستندات |
| Preferred Contact Method | طريقة التواصل المفضلة |
| Consent checkbox | الموافقة على استخدام البيانات للتواصل بشأن الطلب |

Request Proposal success message:

تم استلام طلب العرض الفني بنجاح. سيقوم فريق مجموعة أركون بمراجعة المعلومات وتوجيه الطلب إلى الشركة المختصة.

Request Proposal error message:

تعذر إرسال الطلب. يرجى مراجعة الحقول المطلوبة والمحاولة مرة أخرى.

### Contact Form Labels

| English Field | Arabic Label |
|---|---|
| Name | الاسم |
| Company | الشركة |
| Email | البريد الإلكتروني |
| Mobile | رقم الجوال |
| Message | الرسالة |
| Consent checkbox | أوافق على استخدام المعلومات للتواصل بشأن رسالتي |

Contact Form success message:

تم استلام رسالتكم بنجاح. شكراً لتواصلكم مع مجموعة أركون.

Contact Form error message:

تعذر إرسال الرسالة. يرجى المحاولة مرة أخرى بعد مراجعة الحقول المطلوبة.

### Download Form Labels

| English Field | Arabic Label |
|---|---|
| Name | الاسم |
| Company | الشركة |
| Email | البريد الإلكتروني |
| Mobile | رقم الجوال |
| Interested Company | الشركة محل الاهتمام |
| Consent checkbox | أوافق على استخدام المعلومات لمتابعة طلب التحميل |

Download Form success message:

تم استلام طلب التحميل بنجاح. سيتم عرض رابط التحميل أو إرساله وفق إعدادات الموقع.

Download Form error message:

تعذر إرسال طلب التحميل. يرجى مراجعة الحقول المطلوبة والمحاولة مرة أخرى.

### Shared Arabic Helper Text

Upload helper text:

يمكن إرفاق ملفات PDF أو صور أو مستندات داعمة ضمن حدود حجم الملف المحددة.

Required field note:

الحقول المشار إليها مطلوبة لإرسال النموذج.

Privacy note:

تستخدم مجموعة أركون معلومات هذا النموذج لمراجعة الطلب والتواصل مع مقدم الطلب فقط.

## K. Final QA Checklist

Use this checklist before launch and after any form plugin update.

### Field And Validation QA

1. Required fields cannot be submitted empty.
2. Email validation works correctly.
3. Mobile number field accepts Saudi and international formats.
4. Project Type options appear in English and Arabic.
5. Required Company / Service grouped options include only the five confirmed company groups.
6. Consent checkbox is required.
7. Validation messages are readable on mobile.

### Upload QA

1. Upload field accepts allowed file types.
2. Upload field blocks unsafe or unsupported file types.
3. File size limit is enforced.
4. Multiple file behavior works as configured.
5. Uploaded file links are visible only to internal recipients.
6. User confirmation email does not expose private upload links.

### Email Delivery QA

1. Admin notification email is delivered.
2. User confirmation email is delivered.
3. Reply-to address uses the submitted email.
4. Conditional routing sends engineering leads to `info@arkonec.com`.
5. Conditional routing sends ELITE leads to `info@elitsc.com`.
6. Conditional routing sends IBS leads to `info@ibscksa.com`.
7. Conditional routing sends QIC leads to `info@fhosat.com`.
8. Conditional routing sends Turning Point leads to `info@tpointdigital.com`.
9. Unclear inquiries route to the general group inbox.

### Spam And Privacy QA

1. Cloudflare Turnstile or CAPTCHA loads correctly.
2. Honeypot field is active.
3. Spam submissions are logged or blocked.
4. Consent wording appears in English and Arabic.
5. Privacy notice link works once the privacy page is live.
6. Form entries and uploaded files have a documented retention process.

### Mobile And RTL QA

1. Request Proposal form is easy to complete on mobile.
2. Contact Form fits mobile without horizontal scrolling.
3. Download Form success message is visible after submission.
4. Arabic form direction is RTL.
5. Arabic labels align correctly.
6. Email and phone inputs remain readable.
7. Submit buttons are full-width or comfortably tappable on mobile.
8. Error messages do not overlap fields.

### CRM / Zoho QA

1. Zoho CRM lead is created after form submission.
2. Lead Source is captured.
3. Page URL is captured.
4. UTM fields are captured.
5. Selected company/service maps to the right lead queue.
6. Failed CRM sync creates an internal alert.
7. Form plugin database keeps a backup entry.

### Bricks QA

1. Contact page CTA anchors work.
2. Homepage CTA links to the correct form section.
3. Company page CTAs can preselect or clearly imply the company.
4. Service page CTAs can preselect or clearly imply the service.
5. Form styles match the dark navy, royal blue, silver, and restrained gold visual direction.
6. Buttons remain visible and readable.
7. Form layout remains accessible with keyboard navigation.
