document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('fancyBtn');
  const themeLink = document.getElementById('theme-link');

  // Load saved theme
  const savedTheme = localStorage.getItem('theme') || 'fancy';
  themeLink.href = savedTheme + ".css";

  toggleBtn.addEventListener('click', () => {
    const currentTheme = themeLink.getAttribute('href').includes('fancy') ? 'fancy' : 'simple';
    const newTheme = currentTheme === 'fancy' ? 'simple' : 'fancy';
    themeLink.href = newTheme + ".css";
    localStorage.setItem('theme', newTheme);
  });
});
