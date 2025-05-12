import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Defer Alpine.start() until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    Alpine.start();
});
