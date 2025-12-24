console.log("Color-picker is loaded");

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

    function applyPreset(preset) 
    {
        if (bgInput) bgInput.value = preset.bg;
        if (headerInput) headerInput.value = preset.header;
        if (paragraphInput) paragraphInput.value = preset.paragraph;
        if (linkInput) linkInput.value = preset.link;
        if (navbarInput) navbarInput.value = preset.navbar;

        root.style.setProperty('--primary-color', preset.bg);
        root.style.setProperty('--header-color', preset.header);
        root.style.setProperty('--paragraph-color', preset.paragraph);
        root.style.setProperty('--link-color', preset.link);
        root.style.setProperty('--navbar-color', preset.navbar);
    }
    window.applyGrayTheme = () => applyPreset
    ({
        bg: "#D3D3D3",
        header: "#201A1A",
        paragraph: "#333333",
        link: "#000000",
        navbar: "#4c4c4c"
    });

    window.applyGreenTheme = () => applyPreset
    ({
        bg: "#e8f5e9",
        header: "#1b5e20",
        paragraph: "#2e3d30",
        link: "#2e7d32",
        navbar: "#1b5e20"
    });

    if (grayThemeBtn) {
        grayThemeBtn.addEventListener('click', window.applyGrayTheme);
    }

    if (greenThemeBtn) {
        greenThemeBtn.addEventListener('click', window.applyGreenTheme);
    }



//Set colors
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
