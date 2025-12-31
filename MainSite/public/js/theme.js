document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('fancyBtn');
  const themeLink = document.getElementById('theme-link');

  // PHP can inject version
  const version = window.cssVersion; // default if not set

  // Load saved theme
  const savedTheme = localStorage.getItem('theme') || 'fancy';
  themeLink.href = `/styles/${savedTheme}.css?v=${version}`;

  toggleBtn.addEventListener('click', () => {
    const currentTheme = themeLink.href.includes('fancy') ? 'fancy' : 'simple';
    const newTheme = currentTheme === 'fancy' ? 'simple' : 'fancy';
    themeLink.href = `/styles/${newTheme}.css?v=${version}`;
    localStorage.setItem('theme', newTheme);
  });
});
