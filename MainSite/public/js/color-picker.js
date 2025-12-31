console.log("Theme toggle loaded");

document.addEventListener('DOMContentLoaded', () => {
  const root = document.documentElement;
  const body = document.body;
  const toggleBtn = document.getElementById('fancyBtn');

  // Load saved theme from localStorage
  let currentTheme = localStorage.getItem('theme') || 'fancy';
  body.classList.add(currentTheme);

  // Toggle function
  function toggleTheme() {
    if (body.classList.contains('fancy')) {
      body.classList.remove('fancy');
      body.classList.add('simple');
      localStorage.setItem('theme', 'simple');
    } else {
      body.classList.remove('simple');
      body.classList.add('fancy');
      localStorage.setItem('theme', 'fancy');
    }
  }

  toggleBtn.addEventListener('click', toggleTheme);
});
