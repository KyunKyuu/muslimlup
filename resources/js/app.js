import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';

window.Alpine = Alpine;
Alpine.start();

// Initialize Lucide icons on page load and Alpine component updates
document.addEventListener('DOMContentLoaded', () => {
    createIcons({ icons });
});

document.addEventListener('alpine:initialized', () => {
    createIcons({ icons });
});
