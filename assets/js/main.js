(function () {
  const toggle = document.querySelector('[data-js="nav-toggle"]');
  const menu = document.querySelector('[data-js="nav-menu"]');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      const newState = !isOpen;
      toggle.setAttribute('aria-expanded', String(newState));
      toggle.querySelector('.nav-toggle-label').textContent = newState ? toggle.dataset.closeLabel : toggle.dataset.openLabel;
      menu.parentElement.classList.toggle('hidden', !newState);
    });
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('section').forEach((section) => observer.observe(section));
})();
