document.addEventListener("DOMContentLoaded", function() {
    // 1. Manage Active Highlights for Navigation Links
    const navLinks = document.querySelectorAll('.nav-links a');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // 2. Interactive Logic for Website Links Section (Optional interaction effect)
    const linkButtons = document.querySelectorAll('.link-btn');
    linkButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
            this.style.transition = 'transform 0.2s ease';
        });
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});
