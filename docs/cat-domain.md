# .cat language support and launch notes

The site now has meaningful Catalan content across the entire main portfolio, rather than a token sentence or hidden keyword block:

| English | Catalan |
| --- | --- |
| `/` | `/ca/` |
| `/projects.html` | `/ca/projects.html` |
| `/about.html` | `/ca/about.html` |
| `/contact.html` | `/ca/contact.html` |

Every page has a visible EN / CA language switch linking to the equivalent page, plus a footer link to the other language. Catalan pages contain translated introductions, project descriptions, biography, contact copy, and interaction labels. They render as ordinary HTML without JavaScript. `lang="ca"`, reciprocal `hreflang` alternatives, canonical URLs, and a bilingual sitemap describe the pages to browsers and search engines. No automatic language redirects or consent banners interrupt reading.

## Registry verification still needed

.cat is associated with the Catalan linguistic and cultural community. The implementation provides a substantive Catalan version of the actual site, but does not claim that translation alone certifies every registration obligation.

The current terms and exact six-month condition could not be checked during development: the environment's network policy blocked the registry at `https://domini.cat/`. Check the current eligibility and use policies with the registry or registrar, including when the deadline begins and any ongoing content obligations. No registration date was supplied, so a calendar deadline has not been invented. Publish the Catalan pages before the registrar's stated deadline and keep them available and updated.

Before launch:

- Confirm the registrar's exact deadline and current terms.
- Publish both language versions on `https://kyro.cat` and check that `/ca/` is reachable publicly.
- Review the Catalan text for preferred terminology and personal voice.
- Keep translations in sync when editing the portfolio.

This branch contains website changes only. It does not change DNS, registration details, email routing, or production hosting.
