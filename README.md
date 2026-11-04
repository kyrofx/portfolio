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

Commit the generated root HTML files, `ca/*.html`, and `sitemap.xml` with their source changes. Hosting serves these files directly; Python is only used when editing. Styles and interactions are in `css/site.css` and `js/site.js`.

The turnable asterisk supports clicking, horizontal dragging, and left/right arrow keys. Motion respects the system's reduced-motion setting. Core content, navigation, email links, and language switching work without JavaScript. Clipboard copying appears only in a secure browser context that supports it.

## Publish

Deploy the repository's static files to the existing host, with HTTPS and `kyro.cat` as the canonical domain. Keep the `/ca/` directory public. The original `index.html`, `projects.html`, `about.html`, and `contact.html` routes still work. The `old/` archive and original assets remain untouched.

Email remains `kyro@kyro.dog`; a domain change does not establish a new mailbox. Change `EMAIL` in the generator only once the replacement mailbox exists.

See [the .cat launch notes](docs/cat-domain.md) for language coverage and the outstanding registry check.
