console.log("Color-picker is loaded");

document.addEventListener('DOMContentLoaded', () => 
{
    const root = document.documentElement;


    const primaryInput = document.getElementById('primaryInput');
    const secondaryInput = document.getElementById('secondaryInput');



    // Load saved colors
    const savedPrimary = localStorage.getItem('primaryColor');
    const savedSecondary = localStorage.getItem('secondaryColor');

    if (savedPrimary) root.style.setProperty('--primary-color', savedPrimary);
    if (savedSecondary) root.style.setProperty('--secondary-color', savedSecondary);


    // Only add event listeners if inputs exist (on settings page)
const bluePrimaryBtn = document.getElementById('bluePrimaryBtn');
const greenPrimaryBtn = document.getElementById('greenPrimaryBtn');
const redPrimaryBtn = document.getElementById('redPrimaryBtn');

const blueSecondaryBtn = document.getElementById('blueSecondaryBtn');
const greenSecondaryBtn = document.getElementById('greenSecondaryBtn');
const redSecondaryBtn = document.getElementById('redSecondaryBtn');



    function applyPreset(preset) 
    {
        if (primaryInput) {
            primaryInput.value = preset.primary;
            primaryInput.dispatchEvent(new Event('input'));  // triggers your input listener
        }
        if (secondaryInput) {
            secondaryInput.value = preset.secondary;
            secondaryInput.dispatchEvent(new Event('input'));  // triggers your input listener
        }
    }
    window.applyBluePrimary = () => applyPreset
    ({
        primary: "#003F91",
    });

    window.applyGreenPrimary = () => applyPreset
    ({
        primary: "#2C5F34",
    });

    window.applyRedPrimary = () => applyPreset
    ({
        primary: "#931621",
    });

    window.applyBlueSecondary = () => applyPreset
    ({
        secondary: "#003F91",
    });

    window.applyGreenSecondary = () => applyPreset
    ({
        secondary: "#2C5F34",
    });

    window.applyRedSecondary = () => applyPreset
    ({
        secondary: "#931621",
    });

    if (bluePrimaryBtn) {
        bluePrimaryBtn.addEventListener('click', window.applyBluePrimary);
    }

    if (greenPrimaryBtn) {
        greenPrimaryBtn.addEventListener('click', window.applyGreenPrimary);
    }

    if (redPrimaryBtn) {
        redPrimaryBtn.addEventListener('click', window.applyRedPrimary);
    }
    
    if (blueSecondaryBtn) {
        blueSecondaryBtn.addEventListener('click', window.applyBlueSecondary);
    }

    if (greenSecondaryBtn) {
        greenSecondaryBtn.addEventListener('click', window.applyGreenSecondary);
    }

    if (redSecondaryBtn) {
        redSecondaryBtn.addEventListener('click', window.applyRedSecondary);
    }
//Set colors
    if (primaryInput) 
    {
        primaryInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--primary-color').trim();
        primaryInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--primary-color', e.target.value);
            localStorage.setItem('primaryColor', e.target.value);
        });
    }
    if (secondaryInput) 
    {
        secondaryInput.value = savedPrimary || getComputedStyle(root).getPropertyValue('--secondary-color').trim();
        secondaryInput.addEventListener('input', (e) => 
        {
            root.style.setProperty('--secondary-color', e.target.value);
            localStorage.setItem('secondaryColor', e.target.value);
        });
    }
   
});
