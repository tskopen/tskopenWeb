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
        if (bgInput) {
            bgInput.value = preset.bg;
            bgInput.dispatchEvent(new Event('input'));  // triggers your input listener
        }
        if (headerInput) {
            headerInput.value = preset.header;
            headerInput.dispatchEvent(new Event('input'));
        }
        if (paragraphInput) {
            paragraphInput.value = preset.paragraph;
            paragraphInput.dispatchEvent(new Event('input'));
        }
        if (linkInput) {
            linkInput.value = preset.link;
            linkInput.dispatchEvent(new Event('input'));
        }
        if (navbarInput) {
            navbarInput.value = preset.navbar;
            navbarInput.dispatchEvent(new Event('input'));
        }
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
        bg: "#c8cfc9ff",
        header: "#216d26ff",
        paragraph: "#151e16ff",
        link: "#2e7d32",
        navbar: "#0e2f10ff"
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
