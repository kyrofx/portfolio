// Content, navigation, and every project link work without JavaScript.
const filters = document.querySelector('.project-filters');
if (filters) {
  const buttons = [...filters.querySelectorAll('[data-filter]')];
  const projects = [...document.querySelectorAll('.project-index .project')];
  const status = document.querySelector('[data-filter-status]');
  filters.hidden = false;
  filters.addEventListener('click', (event) => {
    const button = event.target.closest('[data-filter]');
    if (!button) return;
    buttons.forEach((item) => item.setAttribute('aria-pressed', String(item === button)));
    let count = 0;
    projects.forEach((project) => {
      const matches = button.dataset.filter === 'all' || project.dataset.language === button.dataset.filter;
      project.hidden = !matches;
      if (matches) project.style.setProperty('--row', count++);
    });
    status.textContent = `${count} ${count === 1 ? status.dataset.singular : status.dataset.noun}`;
  });
}

const copyButton = document.querySelector('[data-copy]');
if (copyButton && navigator.clipboard && window.isSecureContext) {
  copyButton.hidden = false;
  let resetLabel;
  const label = copyButton.textContent;
  copyButton.addEventListener('click', async () => {
    const status = document.querySelector('[data-copy-status]');
    try {
      await navigator.clipboard.writeText(copyButton.dataset.copy);
      status.textContent = copyButton.dataset.success;
      copyButton.textContent = copyButton.dataset.copied;
      clearTimeout(resetLabel);
      resetLabel = setTimeout(() => { copyButton.textContent = label; }, 2000);
    } catch {
      status.textContent = copyButton.dataset.failure;
    }
  });
}
