/* DEPRECATED */

console.log("Color-picker is loaded");

document.addEventListener('DOMContentLoaded', () => {
    const root = document.documentElement;

    // Load saved colors
    const savedPrimary = localStorage.getItem('primaryColor');
    const savedSecondary = localStorage.getItem('secondaryColor');

    if (savedPrimary) root.style.setProperty('--primary-color', savedPrimary);
    if (savedSecondary) root.style.setProperty('--secondary-color', savedSecondary);

    // Map buttons to their colors
    const colorPresets = [
        { id: 'bluePrimaryBtn', type: 'primary', color: '#003F91' },
        { id: 'greenPrimaryBtn', type: 'primary', color: '#2C5F34' },
        { id: 'redPrimaryBtn', type: 'primary', color: '#931621' },
        { id: 'blueSecondaryBtn', type: 'secondary', color: '#003F91' },
        { id: 'greenSecondaryBtn', type: 'secondary', color: '#2C5F34' },
        { id: 'redSecondaryBtn', type: 'secondary', color: '#931621' },
    ];

    // Apply color preset function
    function applyPreset(type, color) {
        const cssVar = type === 'primary' ? '--primary-color' : '--secondary-color';
        root.style.setProperty(cssVar, color);
        localStorage.setItem(type + 'Color', color);
    }

    // Attach event listeners
    colorPresets.forEach(preset => {
        const btn = document.getElementById(preset.id);
        if (btn) {
            btn.addEventListener('click', () => applyPreset(preset.type, preset.color));
        }
    });
});
