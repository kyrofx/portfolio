# Kyro / kyro.cat

A small static portfolio in English and Catalan. No runtime dependencies or client-side framework.

## Develop

```sh
python3 -m http.server 8000 --bind 127.0.0.1 --directory .
```

Edit the shared layout and both languages in `scripts/build_site.py`, then run:

```sh
python3 scripts/build_site.py
python3 -m unittest discover -s tests
node --check js/site.js
```

Optional browser validation (Python Playwright and Chromium are available in this cloud environment):

```sh
python3 tests/browser_smoke.py
```

It starts an isolated temporary HTTP server and checks responsive layouts, language switching, project filters, clipboard feedback, reduced motion, and navigation with JavaScript disabled.

Commit the generated root HTML files, `ca/*.html`, and `sitemap.xml` with their source changes. Hosting serves these files directly; Python is only used when editing. Styles and interactions are in `css/site.css` and `js/site.js`.

Keep visible content to names, genuine facts, functional labels, and links. Do not add eyebrows, taglines, project blurbs, or decorative descriptions. `PROJECTS` contains verified public repositories; the first four appear on the homepage.

Motion includes spring-driven letters that respond to pointer or touch, outline echoes of the name, a sliding navigation highlight, staggered scroll entrances, and animated project filtering. Same-origin page navigation uses native view transitions where supported. The typography stops updating once its springs settle; nothing runs continuously at rest. Reduced-motion preferences disable entrances, transitions, and spring tracking, including when the preference changes while the page is open.

Content, project links, navigation, and language switching work without JavaScript. Clipboard copying appears only in a secure browser context that supports it.

## Publish

Deploy the repository's static files to the existing host, with HTTPS and `kyro.cat` as the canonical domain. Keep the `/ca/` directory public. The original `index.html`, `projects.html`, `about.html`, and `contact.html` routes still work. The `old/` archive and original assets remain untouched.

Email remains `kyro@kyro.dog`; a domain change does not establish a new mailbox. Change `EMAIL` in the generator only once the replacement mailbox exists.

See [the .cat launch notes](docs/cat-domain.md) for the supplied registration policy, verified language requirement, and remaining registrar obligations.
