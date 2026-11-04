"""Generate the bilingual static portfolio. Run: python3 scripts/build_site.py."""
from html import escape
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
DOMAIN = 'https://kyro.cat'
EMAIL = 'kyro@kyro.dog'
PAGES = ['index', 'projects', 'about', 'contact']

COPY = {
    'en': {
        'nav': ['Home', 'Projects', 'About', 'Contact'],
        'skip': 'Skip to content', 'navigation': 'Main navigation', 'languages': 'Language',
        'description': 'Kyro — programmer and tinkerer in the San Francisco Bay Area. Software, Linux, home labs, and the curiosity that connects them.',
        'location': 'Bay Area, California', 'portfolio': 'A personal portfolio',
        'hero_label': 'Programmer. Tinkerer. Always curious.',
        'hero': 'Code. Tinker.<br><span class="serif">Repeat.</span>',
        'intro': 'I’m Kyro. I build software, explore systems, and occasionally take things apart.',
        'about_link': 'A little about me', 'note_label': 'Somewhere between hardware & software',
        'note': 'Learning by doing. Usually with a terminal open and a coffee nearby.',
        'dial_label': 'Turn the asterisk. Click, drag horizontally, or use the left and right arrow keys.',
        'dial_hint': 'Drag or click to turn', 'dial_static': 'A little experiment',
        'work_title': 'A few ongoing curiosities', 'work_label': '01 — Areas of exploration',
        'work_all': 'Explore my projects', 'work': [
            ('Home lab', 'A small space for big experiments.', 'Systems / networking', 'homelab'),
            ('Code & experiments', 'Ideas that start with “what if?”', 'Software / open source', 'software'),
            ('Beyond the screen', 'Where software meets the physical world.', 'Hardware / embedded', 'hardware'),
        ],
        'about_label': '02 — The person behind the keyboard',
        'about_short': 'I like understanding how things work. Even more, I like finding out what else they could do.',
        'about_more': 'More about my approach',
        'footer_label': 'Good conversations start somewhere.', 'footer_heading': 'Say hello.',
        'top': 'Back to top', 'footer_language': 'Also in Catalan',
        'projects_eyebrow': '01 / Projects & explorations', 'projects_title': 'A work in<br>curiosity.',
        'projects_intro': 'A few things I spend my time on. Some live in a repository; others live on a desk, connected by too many cables.',
        'project_details': [
            ('Home lab', 'My home lab is a place to learn by trying things. I work with Linux, networking, and IT equipment, exploring how the pieces fit together and how to keep them running.', ['Linux', 'Networking', 'Ubiquiti'], 'Local experiments', 'homelab', 'lab'),
            ('Code & experiments', 'I enjoy turning an idea into something I can run, test, and take apart again. My experience spans Python, Java, C-family languages, PHP, Ruby, and JavaScript. Public experiments live on GitHub.', ['Python', 'JavaScript', 'Open source'], 'Always a work in progress', 'software', 'code'),
            ('Beyond the screen', 'I like the point where code starts interacting with the world around it. I’ve worked with NVIDIA Jetsons and explored embedded systems, alongside plenty of hands-on tinkering with hardware.', ['NVIDIA Jetson', 'Embedded systems', 'Hardware'], 'Hands-on learning', 'hardware', 'chip'),
        ],
        'github_link': 'Browse my GitHub', 'project_note': 'The latest public work is on GitHub.',
        'about_eyebrow': '02 / A little about me', 'about_title': 'Curiosity is<br>the through line.',
        'about_intro': 'Programmer, tinkerer, and Bay Area local. Happiest when there’s something new to figure out.',
        'bio_label': 'Hello, I’m Kyro.', 'bio_note': 'Based in California’s Bay Area. Interested in software, hardware, and all the interesting space in between.',
        'bio': [
            'I like making things work — and understanding why they work. That curiosity takes me from writing code to building out my home lab and getting hands-on with networking equipment.',
            'I’ve worked with Python, Java, C-family languages, PHP, Ruby, and JavaScript. I enjoy Linux, have explored embedded systems with NVIDIA Jetsons, and have experience with Ubiquiti networking and mid-range IT equipment.',
            'This site is a small window into that process. For the experiments I remember to publish, there’s GitHub. For everything else, a conversation is a good place to start.',
        ],
        'skills_label': 'A few familiar tools', 'skills': [
            ('Software', 'Python, Java, C-family languages, PHP, Ruby, JavaScript'),
            ('Systems', 'Linux, home labs, networking, IT equipment'),
            ('Hardware', 'NVIDIA Jetson, embedded systems, hands-on tinkering'),
            ('Outside the terminal', 'Good coffee. New ideas. Taking things apart.'),
        ],
        'contact_eyebrow': '03 / Get in touch', 'contact_title': 'Let’s compare<br>notes.',
        'contact_intro': 'An interesting idea, a technical question, or just a hello. My inbox is open.',
        'email_label': 'The most direct route', 'copy': 'Copy email',
        'copy_success': 'Email address copied.', 'copy_failure': 'Could not copy. Select the email address above to copy it manually.',
        'elsewhere': 'Elsewhere on the internet', 'github_desc': 'Code & experiments', 'discord_desc': 'Find me as @kyrofx',
        'contact_note': 'For professional or personal conversations. Tell me a little about what you’re working on.',
        'cat_link': 'Llegeix aquest web en català',
    },
    'ca': {
        'nav': ['Inici', 'Projectes', 'Sobre mi', 'Contacte'],
        'skip': 'Ves al contingut', 'navigation': 'Navegació principal', 'languages': 'Llengua',
        'description': 'Kyro — programador i aficionat a experimentar, a la badia de San Francisco. Programari, Linux, un laboratori domèstic i molta curiositat.',
        'location': 'Badia de San Francisco, Califòrnia', 'portfolio': 'Un portafolis personal',
        'hero_label': 'Programar. Experimentar. Aprendre.',
        'hero': 'Codi. Enginy.<br><span class="serif">Curiositat.</span>',
        'intro': 'Soc en Kyro. Creo programari, exploro sistemes i, de tant en tant, desmunto coses.',
        'about_link': 'Una mica sobre mi', 'note_label': 'Entre el maquinari i el programari',
        'note': 'Aprenc fent. Normalment, amb un terminal obert i un cafè a prop.',
        'dial_label': 'Fes girar l’asterisc. Fes-hi clic, arrossega’l horitzontalment o utilitza les fletxes esquerra i dreta.',
        'dial_hint': 'Arrossega o fes clic per girar', 'dial_static': 'Un petit experiment',
        'work_title': 'Algunes curiositats en marxa', 'work_label': '01 — Àmbits d’exploració',
        'work_all': 'Explora els meus projectes', 'work': [
            ('Laboratori domèstic', 'Un espai petit per a grans experiments.', 'Sistemes / xarxes', 'homelab'),
            ('Codi i experiments', 'Idees que comencen amb un «i si…?»', 'Programari / codi obert', 'software'),
            ('Més enllà de la pantalla', 'On el programari es troba amb el món físic.', 'Maquinari / sistemes', 'hardware'),
        ],
        'about_label': '02 — La persona darrere del teclat',
        'about_short': 'M’agrada entendre com funcionen les coses. I encara més, descobrir què més podrien fer.',
        'about_more': 'Més sobre la meva manera de fer',
        'footer_label': 'Les bones converses comencen per algun lloc.', 'footer_heading': 'Parlem-ne.',
        'top': 'Torna a dalt', 'footer_language': 'També en anglès',
        'projects_eyebrow': '01 / Projectes i exploracions', 'projects_title': 'Curiositat<br>en marxa.',
        'projects_intro': 'Algunes de les coses a les quals dedico el temps. N’hi ha que viuen en un repositori; d’altres, sobre una taula plena de cables.',
        'project_details': [
            ('Laboratori domèstic', 'El meu laboratori domèstic és un espai per aprendre provant coses. Treballo amb Linux, xarxes i equips informàtics per explorar com encaixen totes les peces i com mantenir-les en funcionament.', ['Linux', 'Xarxes', 'Ubiquiti'], 'Experiments a casa', 'homelab', 'lab'),
            ('Codi i experiments', 'M’agrada convertir una idea en alguna cosa que pugui executar, posar a prova i tornar a desmuntar. Tinc experiència amb Python, Java, llenguatges de la família C, PHP, Ruby i JavaScript. Publico els meus experiments a GitHub.', ['Python', 'JavaScript', 'Codi obert'], 'Sempre en construcció', 'software', 'code'),
            ('Més enllà de la pantalla', 'M’interessa el punt en què el codi comença a interactuar amb el món que l’envolta. He treballat amb NVIDIA Jetson i he explorat sistemes encastats, a més de fer experiments pràctics amb maquinari.', ['NVIDIA Jetson', 'Sistemes encastats', 'Maquinari'], 'Aprendre amb les mans', 'hardware', 'chip'),
        ],
        'github_link': 'Visita el meu GitHub', 'project_note': 'Trobaràs els últims projectes públics a GitHub.',
        'about_eyebrow': '02 / Una mica sobre mi', 'about_title': 'La curiositat<br>com a fil conductor.',
        'about_intro': 'Programador, aficionat a experimentar i veí de la badia de San Francisco. Sempre amb alguna cosa nova per descobrir.',
        'bio_label': 'Hola, soc en Kyro.', 'bio_note': 'Visc a la badia de San Francisco, a Califòrnia. M’interessen el programari, el maquinari i tot el que hi ha entremig.',
        'bio': [
            'M’agrada fer que les coses funcionin i entendre per què funcionen. Aquesta curiositat em porta a escriure codi, ampliar el meu laboratori domèstic i experimentar amb equips de xarxa.',
            'He treballat amb Python, Java, llenguatges de la família C, PHP, Ruby i JavaScript. M’agrada Linux, he explorat sistemes encastats amb NVIDIA Jetson i tinc experiència amb xarxes Ubiquiti i equips informàtics de gamma mitjana.',
            'Aquest web és una petita finestra a tot aquest procés. Els experiments que recordo publicar són a GitHub. Per a la resta, una conversa és un bon punt de partida.',
        ],
        'skills_label': 'Algunes eines conegudes', 'skills': [
            ('Programari', 'Python, Java, llenguatges de la família C, PHP, Ruby, JavaScript'),
            ('Sistemes', 'Linux, laboratoris domèstics, xarxes, equips informàtics'),
            ('Maquinari', 'NVIDIA Jetson, sistemes encastats, experimentació pràctica'),
            ('Fora del terminal', 'Un bon cafè. Idees noves. Desmuntar coses.'),
        ],
        'contact_eyebrow': '03 / Contacte', 'contact_title': 'Compartim<br>idees.',
        'contact_intro': 'Una idea interessant, una pregunta tècnica o simplement una salutació. Tinc la bústia oberta.',
        'email_label': 'La via més directa', 'copy': 'Copia el correu',
        'copy_success': 'Adreça de correu copiada.', 'copy_failure': 'No s’ha pogut copiar. Selecciona l’adreça de correu de més amunt per copiar-la manualment.',
        'elsewhere': 'Altres racons d’internet', 'github_desc': 'Codi i experiments', 'discord_desc': 'Em trobaràs com a @kyrofx',
        'contact_note': 'Per a converses professionals o personals. Explica’m una mica en què estàs treballant.',
        'cat_link': 'Read this website in English',
    },
}

ARROW = '<svg class="arrow" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 19 19 5M5 5h14v14" stroke="currentColor" stroke-width="1.5"/></svg>'
ASTERISK = '<svg viewBox="0 0 100 100" aria-hidden="true">' + ''.join(
    f'<rect x="43" y="2" width="14" height="96" rx="1" fill="currentColor" transform="rotate({angle} 50 50)"/>'
    for angle in [0, 30, 60, 90, 120, 150]
) + '<circle class="dial-center" cx="50" cy="50" r="7"/></svg>'


def url(lang, page):
    return f'{DOMAIN}/{"ca/" if lang == "ca" else ""}{"" if page == "index" else page + ".html"}'


def link(href, label, cls='text-link'):
    return f'<a class="{cls}" href="{href}">{escape(label)} {ARROW}</a>'


def content(lang, page):
    c = COPY[lang]
    if page == 'index':
        rows = ''.join(f'''<a class="work-row" href="projects.html#{anchor}">
          <span class="work-number mono">0{i}</span><div><h3>{title}</h3><p>{desc}</p></div>
          <span class="work-kind mono">{kind}</span>{ARROW}</a>'''
          for i, (title, desc, kind, anchor) in enumerate(c['work'], 1))
        return f'''<section class="hero" aria-labelledby="hero-title">
          <div class="hero-meta mono"><span>{c['hero_label']}</span><span class="location"><i class="status-dot" aria-hidden="true"></i>{c['location']}</span></div>
          <div class="hero-grid"><h1 id="hero-title">{c['hero']}</h1>
            <div class="experiment"><span class="experiment-corner" aria-hidden="true">FIG. 001 / ✳</span>
              <button class="dial" data-dial data-hint="{c['dial_hint']}" aria-label="{c['dial_label']}" disabled>{ASTERISK}</button>
              <span class="dial-tick" data-rotation aria-hidden="true">0°</span><span class="experiment-caption mono" data-dial-hint>{c['dial_static']}</span>
            </div></div>
          <div class="hero-bottom"><div><p class="hero-intro">{c['intro']}</p>{link('about.html', c['about_link'])}</div>
            <div class="side-note"><span class="eyebrow">{c['note_label']}</span><p class="muted">{c['note']}</p></div></div>
          </section>
          <section class="section" aria-labelledby="work-title"><div class="section-top"><h2 id="work-title">{c['work_title']}</h2><span class="eyebrow">{c['work_label']}</span></div>
            <div class="work-list">{rows}</div><div class="section-after">{link('projects.html',c['work_all'])}</div></section>
          <section class="about-strip" aria-labelledby="about-teaser"><span class="eyebrow muted">{c['about_label']}</span><div><h2 id="about-teaser">{c['about_short']}</h2>{link('about.html',c['about_more'])}</div></section>'''
    heading = f'''<header class="page-heading"><span class="eyebrow muted">{c[page+'_eyebrow']}</span><h1>{c[page+'_title']}</h1><p class="lead">{c[page+'_intro']}</p></header>'''
    if page == 'projects':
        details = ''
        for i, (title, desc, tags, label, anchor, visual) in enumerate(c['project_details'], 1):
            art = {'lab': '<div class="server-stack"><div class="server"></div><div class="server"></div><div class="server"></div></div>', 'code': '<div class="code-art">{ / }</div>', 'chip': '<div class="chip"><span>JETSON</span></div>'}[visual]
            github = link('https://github.com/kyrofx', c['github_link']) if anchor == 'software' else ''
            details += f'''<section class="project-detail" id="{anchor}" aria-labelledby="title-{anchor}"><span class="mono muted">0{i}</span>
              <div class="project-copy"><h2 id="title-{anchor}">{title}</h2><p>{desc}</p><div class="tags">{''.join(f'<span class="tag">{t}</span>' for t in tags)}</div>{github}</div>
              <div class="project-visual" aria-hidden="true">{art}<span class="visual-label mono">{label}</span></div></section>'''
        return heading + details + f'<div class="project-footer"><p>{c["project_note"]}</p>{link("https://github.com/kyrofx",c["github_link"])}</div>'
    if page == 'about':
        return heading + f'''<div class="bio-grid"><aside class="bio-note"><span class="eyebrow">{c['bio_label']}</span><p>{c['bio_note']}</p></aside>
          <div class="bio-copy">{''.join(f'<p>{p}</p>' for p in c['bio'])}{link('contact.html', c['footer_heading'])}</div></div>
          <section class="bio-grid" aria-labelledby="skills-title"><h2 id="skills-title" class="eyebrow muted">{c['skills_label']}</h2><ul class="skill-list">{''.join(f'<li>{name}<span>{tools}</span></li>' for name, tools in c['skills'])}</ul></section>'''
    return heading + f'''<div class="contact-grid"><section aria-labelledby="email-title"><h2 class="eyebrow muted" id="email-title">{c['email_label']}</h2>
      <a class="contact-email" href="mailto:{EMAIL}">{EMAIL}{ARROW}</a>
      <button class="copy-button" data-copy="{EMAIL}" data-success="{c['copy_success']}" data-failure="{c['copy_failure']}" hidden>{c['copy']}<svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M5 3V1h10v10h-2M1 5h10v10H1Z" stroke="currentColor"/></svg></button>
      <p class="copy-status" data-copy-status role="status" aria-live="polite"></p></section>
      <section aria-labelledby="elsewhere-title"><h2 class="eyebrow muted" id="elsewhere-title">{c['elsewhere']}</h2>
        <a class="contact-social" href="https://github.com/kyrofx">GitHub<span>{c['github_desc']}</span>{ARROW}</a>
        <div class="contact-social">Discord<span>{c['discord_desc']}</span></div><p class="contact-aside">{c['contact_note']}</p></section></div>'''


def render(lang, page):
    c = COPY[lang]
    prefix = '../' if lang == 'ca' else ''
    other = 'en' if lang == 'ca' else 'ca'
    other_path = f'{"../" if lang == "ca" else "ca/"}{page}.html'
    title = 'Kyro — ' + (c['portfolio'] if page == 'index' else c['nav'][PAGES.index(page)])
    nav = ''.join(f'<a href="{p}.html"{chr(32) + "aria-current=\"page\"" if p == page else ""}>{label}</a>' for p, label in zip(PAGES, c['nav']))
    # Keep the current language's page and the corresponding translation one click apart.
    languages = ''.join(f'<a href="{page + ".html" if code == lang else other_path}" lang="{code}" hreflang="{code}" aria-label="{name}"{chr(32) + "aria-current=\"true\"" if code == lang else ""}>{label}</a>' for code, name, label in [('en', 'English', 'EN'), ('ca', 'Català', 'CA')])
    return f'''<!doctype html>
<html lang="{lang}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{title}</title>
  <meta name="description" content="{c['description']}">
  <meta name="theme-color" content="#faf9f6">
  <link rel="canonical" href="{url(lang,page)}">
  <link rel="alternate" hreflang="en" href="{url('en',page)}">
  <link rel="alternate" hreflang="ca" href="{url('ca',page)}">
  <link rel="alternate" hreflang="x-default" href="{url('en',page)}">
  <meta property="og:type" content="website">
  <meta property="og:title" content="{title}">
  <meta property="og:description" content="{c['description']}">
  <meta property="og:url" content="{url(lang,page)}">
  <meta property="og:locale" content="{'ca_ES' if lang == 'ca' else 'en_US'}">
  <link rel="icon" href="{prefix}img/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="{prefix}css/site.css">
  <script src="{prefix}js/site.js" defer></script>
</head>
<body id="top">
  <a class="skip-link" href="#main">{c['skip']}</a>
  <div class="shell"><header class="site-header">
    <a class="brand" href="index.html" aria-label="Kyro — {c['nav'][0]}">{ASTERISK}<span>kyro.</span></a>
    <div class="header-right"><nav class="navigation" aria-label="{c['navigation']}">{nav}</nav>
      <nav class="language-switch mono" aria-label="{c['languages']}">{languages}</nav></div>
  </header>
  <main id="main" class="page-enter" tabindex="-1">{content(lang,page)}</main></div>
  <footer class="site-footer"><div class="shell"><div class="footer-top"><div>
    <p class="eyebrow">{c['footer_label']}</p>{link('contact.html',c['footer_heading'],'footer-heading')}</div>
    <div class="footer-links"><a href="https://github.com/kyrofx">GitHub {ARROW}</a><a href="mailto:{EMAIL}">{"Correu" if lang == "ca" else "Email"} {ARROW}</a><a href="#top">{c['top']} ↑</a></div></div>
    <div class="footer-bottom mono"><span>© Kyro · {c['location']}</span><div class="footer-note"><span>kyro.cat</span><a href="{other_path}" lang="{other}" hreflang="{other}">{c['cat_link']}</a></div></div>
  </div></footer>
</body>
</html>
'''


def build():
    for lang in COPY:
        directory = ROOT / ('ca' if lang == 'ca' else '')
        directory.mkdir(exist_ok=True)
        for page in PAGES:
            (directory / f'{page}.html').write_text(render(lang,page), encoding='utf-8')
    entries = []
    for lang in COPY:
        for page in PAGES:
            alternates = ''.join(f'<xhtml:link rel="alternate" hreflang="{code}" href="{url(code,page)}"/>' for code in COPY)
            entries.append(f'  <url><loc>{url(lang,page)}</loc>{alternates}</url>')
    (ROOT / 'sitemap.xml').write_text('<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">\n' + '\n'.join(entries) + '\n</urlset>\n', encoding='utf-8')
    print('Generated 8 pages and sitemap.xml for kyro.cat.')


if __name__ == '__main__':
    build()
