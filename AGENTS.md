# AGENTS.md — ARKON Group Website Build Instructions

You are helping build the ARKON Group website for https://arkongroup.com.sa.

## Business context

ARKON Group consists of five confirmed companies:

1. ARKON Engineering Consultancy Co. (AEC)
2. ELITE Security Consultancy Co. (ELITE)
3. Integrated Building Systems (IBS)
4. Quality Inspection Company (QIC)
5. Turning Point Digital Marketing Co. (TP Digital)

Do not include ASHRI Digital or ASHRI Group as ARKON Group companies.

## Build stack

- WordPress
- Bricks Builder
- Bricks child theme
- Rank Math or equivalent SEO plugin
- WPML or Polylang for bilingual EN/AR
- Fluent Forms or Gravity Forms
- Cloudflare CDN/WAF
- Spline first for 3D hero, Three.js only if custom interaction is required

## Visual direction

Use a premium Saudi project command-center style:
- dark navy base
- ARKON royal blue
- silver / light gray technical accents
- restrained gold highlights
- 3D / glass / grid / blueprint effects
- high readability
- clean enterprise-grade layouts

Avoid:
- generic stock-heavy construction website design
- excessive animation
- slow 3D on mobile
- unclear Arabic typography
- large uncompressed assets
- using client/project logos without approval

## Primary website message

"One Group. Five Specialized Companies. One Integrated Delivery Ecosystem."

Arabic:
"مجموعة واحدة. خمس شركات متخصصة. منظومة متكاملة لدعم المشاريع."

## Development rules

1. Keep Bricks as the visual layout system.
2. Put reusable CSS in `arkon-child-theme/assets/css/arkon-global.css`.
3. Put interactions in `arkon-child-theme/assets/js/arkon-animations.js`.
4. Put 3D loading/fallback logic in `arkon-child-theme/assets/js/arkon-3d-loader.js`.
5. Keep content in JSON or Bricks fields where possible.
6. Make all sections responsive and RTL-ready.
7. Support English and Arabic versions.
8. Add schema using JSON-LD.
9. Optimize for Core Web Vitals.
10. Use static fallback images for Spline/3D on mobile.

## SEO priorities

Build service architecture around:
- Engineering consultant Saudi Arabia
- Engineering consultant Jeddah
- Fire safety consultant Saudi Arabia
- Firefighting consultancy Saudi Arabia
- HCIS consultant Saudi Arabia
- SAIS security consultant KSA
- Security risk assessment Saudi Arabia
- Soil testing company Jeddah
- Quality inspection company Saudi Arabia
- Digital marketing company Jeddah

## Homepage section order

1. Header
2. Hero: ARKON Project Command Center
3. Trust strip
4. Group ecosystem
5. Core capabilities
6. Authority and compliance command center
7. Industries served
8. Why ARKON Group
9. Credentials/downloads
10. Project request CTA/form
11. Footer

## Quality checklist

Before marking any task complete:
- Test desktop, tablet, mobile.
- Test RTL Arabic layout.
- Check contrast and readability.
- Confirm CTA buttons are visible.
- Confirm no heavy 3D loads on mobile without fallback.
- Validate schema JSON.
- Confirm page has H1, H2 hierarchy.
- Avoid duplicate Arabic/English content on same URL.
