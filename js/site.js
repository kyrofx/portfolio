// Progressive enhancements only: all content and navigation work without JavaScript.
const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
const dial = document.querySelector('[data-dial]');

if (dial) {
  const readout = document.querySelector('[data-rotation]');
  let rotation = 0;
  let startX = 0;
  let startRotation = 0;
  let pointer = null;
  let dragged = false;
  const turn = (value) => {
    rotation = value;
    dial.style.setProperty('--rotation', `${rotation}deg`);
    readout.textContent = `${Math.round(((rotation % 360) + 360) % 360)}°`;
  };
  dial.disabled = false;
  document.querySelector('[data-dial-hint]').textContent = dial.dataset.hint;
  dial.addEventListener('pointerdown', (event) => {
    if (!event.isPrimary || event.button !== 0) return;
    pointer = event.pointerId;
    startX = event.clientX;
    startRotation = rotation;
    dragged = false;
    dial.setPointerCapture(pointer);
    dial.classList.add('is-dragging');
  });
  dial.addEventListener('pointermove', (event) => {
    if (event.pointerId !== pointer) return;
    const distance = event.clientX - startX;
    if (Math.abs(distance) > 4) dragged = true;
    if (dragged) turn(startRotation + distance * 1.5);
  });
  const release = () => {
    pointer = null;
    dial.classList.remove('is-dragging');
  };
  dial.addEventListener('pointerup', release);
  dial.addEventListener('pointercancel', () => { dragged = true; release(); });
  dial.addEventListener('lostpointercapture', release);
  dial.addEventListener('click', () => {
    if (!dragged) turn(rotation + 45);
    dragged = false;
  });
  dial.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowRight' || event.key === 'ArrowLeft') {
      event.preventDefault();
      turn(rotation + (event.key === 'ArrowRight' ? 15 : -15));
    }
  });
}

const copyButton = document.querySelector('[data-copy]');
if (copyButton && navigator.clipboard && window.isSecureContext) {
  copyButton.hidden = false;
  copyButton.addEventListener('click', async () => {
    const status = document.querySelector('[data-copy-status]');
    try {
      await navigator.clipboard.writeText(copyButton.dataset.copy);
      status.textContent = copyButton.dataset.success;
    } catch {
      status.textContent = copyButton.dataset.failure;
    }
  });
}

// Keep interaction immediate when the operating system requests less motion.
reducedMotion.addEventListener('change', () => {
  if (dial) dial.classList.remove('is-dragging');
});
