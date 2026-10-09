// public/js/dashboard.js

document.addEventListener("DOMContentLoaded", function() {
    // Active sidebar link highlight logic
    const sidebarLinks = document.querySelectorAll('.sidebar a');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            sidebarLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
