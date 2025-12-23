document.addEventListener('DOMContentLoaded', () => 
{
    const root = document.documentElement;

    // Load saved colors
    const savedPrimary = localStorage.getItem('primaryColor');
    const savedHeader = localStorage.getItem('headerColor');
    const savedParagraph = localStorage.getItem('paragraphColor');
    const savedLink = localStorage.getItem('linkColor');
    const savedNavbar = localStorage.getItem('navbarColor');

    if (savedPrimary) root.style.setProperty('--primary-color', savedPrimary);
    if (savedHeader) root.style.setProperty('--header-color', savedHeader);
    if (savedParagraph) root.style.setProperty('--paragraph-color', savedParagraph);
    if (savedLink) root.style.setProperty('--link-color', savedLink);
    if (savedNavbar) root.style.setProperty('--navbar-color', savedNavbar);

    // Only add event listeners if inputs exist (on settings page)
    const bgInput = document.getElementById('bgColor');
    const headerInput = document.getElementById('headerColor');
    const paragraphInput = document.getElementById('paragraphColor');
    const linkInput = document.getElementById('linkColor');
    const navbarInput = document.getElementById('navbarColor');

    if (bgInput) {
        bgInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--primary-color').trim();
        bgInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--primary-color', e.target.value);
            localStorage.setItem('primaryColor', e.target.value);
        });
    }

    if (headerInput) 
    {
        bgInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--header-color').trim();
        headerInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--header-color', e.target.value);
            localStorage.setItem('headerColor', e.target.value);
        });
    }
    if (paragraphInput) 
    {
        bgInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--paragraph-color').trim();
        paragraphInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--paragraph-color', e.target.value);
            localStorage.setItem('paragraphColor', e.target.value);
        });
    }
    if (linkInput) 
    {
        bgInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--link-color').trim();
        linkInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--link-color', e.target.value);
            localStorage.setItem('linkColor', e.target.value);
        });
    }
    if (navbarInput) 
    {
        bgInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--navbar-color').trim();
        navbarInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--navbar-color', e.target.value);
            localStorage.setItem('navbarColor', e.target.value);
        });
    }
});
