@extends("layout.webtemplate")
@section("titlename")
    ASHU KUMAR | PORTFOLIO
@endsection
<link rel="stylesheet" href="{{ asset('style3.css') }}">
@section("contantarea")
<div class="portfolio-container">
    <!-- Hero Profile Section -->
    <div class="portfolio-hero">
        <div class="hero-left">
            <h1>Ashu Kumar</h1>
            <p class="subtitle">Web Developer & Graphic Designer</p>
            <p class="tagline">Crafting clean code and beautiful user experiences with modern technologies.</p>
        </div>
        
        <!-- Website Links Section -->
        <div class="links-section">
            <h3>My Links</h3>
            <div class="links-grid">
                <a href="#" target="_blank" class="link-btn">🌐 Live Website</a>
                <a href="#" target="_blank" class="link-btn">💻 GitHub</a>
                <a href="#" target="_blank" class="link-btn">🎨 Behance</a>
            </div>
        </div>
    </div>

    <!-- Skills Container -->
    <div class="skills-section">
        <h2 class="section-title">Professional Skills</h2>
        
        <div class="skills-group">
            <h4>Design & UI/UX</h4>
            <div class="skills-list">
                <span class="skill-tag">Figma</span>
                <span class="skill-tag">Photoshop</span>
                <span class="skill-tag">Adobe Illustrator</span>
                <span class="skill-tag">Canva</span>
            </div>
        </div>

        <div class="skills-group" style="margin-top: 15px;">
            <h4>Development & Databases</h4>
            <div class="skills-list">
                <span class="skill-tag">HTML</span>
                <span class="skill-tag">CSS</span>
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">PHP Laravel</span>
                <span class="skill-tag">WordPress</span>
                <span class="skill-tag">MySQL (DBMS)</span>
            </div>
        </div>
    </div>

    <!-- Projects Section (Aap yahan khud add kar sakte hain) -->
    <div class="projects-section">
        <h2 class="section-title">Featured Projects</h2>
        <div class="project-grid">
            <!-- Project Placeholder 1 -->
            <div class="project-card">
                <div class="project-thumb"></div>
                <div class="project-info">
                    <h3>Project Title Here</h3>
                    <p>Short description of your project goes here. You can easily loop through your database entries here.</p>
                    <span class="tech-tag">Laravel / MySQL</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('script3.js') }}"></script>
@endsection
