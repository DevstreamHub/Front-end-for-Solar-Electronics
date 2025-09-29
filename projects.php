<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects - Gidea</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo.jpg">

<!-- For Apple devices -->
<link rel="apple-touch-icon" href="images/logo.jpg">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f9f9f9;
    }
</style>
<body>
<?php include "includes/topnav.php"?>
<?php include "includes/projectslider.php"?>
<?php include "includes/stats.php"?>
<!-- Project Section -->
<section class="projects">
  <div class="container-p">
    <h2 class="section-title">Residential Solar Projects</h2>

    <!-- Featured Project -->
    <div class="featured-project">
      <img src="images/p55.jpg" alt="Electrical Installations - Lekki">
      <div class="project-overlay">
        <h3>Residential Solar Projects - Wuye</h3>
        <p class="date">August 2025</p>
        <p>Installation of 5.5kwh solar inverter system.</p>
      </div>
    </div>

    <!-- Project Grid -->
    <div class="project-grid">
      <!-- Left Info Card -->
      <div class="project-info">
        <img src="images/p22.jpg" alt="Residential Solar Setup">
        <div class="info-text">
          <p><strong>Name:</strong> Installation of 5.5kwh solar inverter system</p>
          <p><strong>Location:</strong>Yawahab Estate phase III Wuye Abuja</p>
          <p><strong>Service Type:</strong>Residential solar project.</p>
          <p><strong>Completion Date:</strong> 27th August, 2025</p>
          <p><strong>Short Summary:</strong>Gidea electrical engineering co. Ltd is not just am electrical engineering company but we pioneer dreams and vision for the future, in need of energy solutions that meet your needs Gidea is just a call away. We will not just install but we will design a system that will meet your needs.</p>
        </div>
      </div>

      <!-- Right Side Cards -->
      <div class="project-cards">
        <div class="project-card">
          <img src="images/p33.jpg" alt="Electrical Installations – Lekki">
          <div class="project-overlay">
            <h3>Residential Solar Projects - Wuye</h3>
            <p class="date">August 2025</p>
            <p>Installation of 5.5kwh solar inverter system.</p>
          </div>
        </div>

        <div class="project-card">
          <img src="images/p44.jpg" alt="Electrical Installations – Lekki">
          <div class="project-overlay">
            <h3>Residential Solar Projects - Wuye</h3>
            <p class="date">August 2025</p>
            <p>Installation of 5.5kwh solar inverter system.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->
<style>
.projects {
  padding: 50px 15px;
  font-family: 'Poppins', sans-serif;
  background: #fff;
}

.section-title {
  text-align: center;
  font-size: 26px;
  color: #f5b400;
  margin-bottom: 35px;
}

.container-p {
  max-width: 1100px;
  margin: auto;
}

/* Featured Project */
.featured-project {
  position: relative;
  margin-bottom: 35px;
  overflow: hidden;
}
.featured-project img {
  width: 100%;
  max-width: 1100px;
  height: 420px;
  object-fit: cover;
  display: block;
  margin: auto;
  transition: transform 0.5s ease;
}
.featured-project:hover img {
  transform: scale(1.05);
}
.featured-project .project-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.6);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 20px;
  opacity: 1;
  transition: background 0.4s ease;
}
.featured-project:hover .project-overlay {
  background: rgba(0,0,0,0.75);
}

/* Grid Layout */
.project-grid {
  display: grid;
  grid-template-columns: 520px 1fr;
  gap: 20px;
  justify-content: center;
}

.project-info {
  background: #fff;
  overflow: hidden;
  box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}
.project-info img {
  width: 100%;
  max-width: 520px;
  height: 340px;
  object-fit: cover;
  display: block;
}
.info-text {
  padding: 15px;
  font-size: 14px;
  color: #333;
}
.info-text p {
  display: flex;
  align-items: flex-start; /* keep text aligned at the top */
  margin: 6px 0;
  font-size: 14px;
  line-height: 1.6;
}

.info-text strong {
  min-width: 140px; /* adjust depending on how wide you want labels */
  font-weight: 600;
  color: #000;
}

/* Right Cards */
.project-cards {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.project-card {
  position: relative;
  overflow: hidden;
}
.project-card img {
  width: 100%;
  max-width: 640px;
  height: 320px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.project-card:hover img {
  transform: scale(1.08);
}
.project-card .project-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.6);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 15px;
  opacity: 1;
  transition: background 0.4s ease;
}
.project-card:hover .project-overlay {
  background: rgba(0,0,0,0.75);
}

.project-overlay h3 {
  font-size: 22px;
  margin-bottom: 8px;
}
.project-overlay p {
  font-size: 15px;
  margin: 4px 0;
}
.date {
  font-size: 13px;
  font-style: italic;
  opacity: 0.85;
}

/* Responsive Design */
@media (max-width: 992px) {
  .projects {
    display: none; /* Hide on mobile & tablet */
  }
}
</style>

<!-- Project Section -->
<section class="projects">
  <div class="container-p">
    <h2 class="section-title">Residential solar & electrical project</h2>

    <!-- Top Row: 2 Featured Projects -->
    <div class="top-projects">
      <div class="featured-project">
        <img src="images/p77.jpg" alt="Electrical Installations - Lekki">
        <div class="project-overlay">
          <h3>Electrical wiring and electrical fittings installation - Wuye</h3>
          <p class="date">June 2025</p>
          <p>For this project we installed 12.4kwh hybrid inverter, 30kwh lithium battery</p>
        </div>
      </div>
      <div class="featured-project">
        <img src="images/p11.JPG" alt="Electrical Installations - Lekki">
        <div class="project-overlay">
          <h3>Electrical wiring and electrical fittings installation - Wuye</h3>
          <p class="date">June 2025</p>
          <p>This system powers two 1.5hp inverter AC throughout the night including other essential appliances for the apartment.</p>
        </div>
      </div>
    </div>

    <!-- Second Row: Info card + Right stacked projects -->
    <div class="project-grid">
      <!-- Info Card -->
      <div class="project-info">
        <img src="images/p88.jpg" alt="Residential Solar Setup">
        <div class="info-text">
          <p><strong>Name:</strong>Electrical wiring and electrical fittings installation</p>
          <p><strong>Location:</strong> Wuye, Abuja </p>
          <p><strong>Service Type:</strong> Residential solar & electrical project</p>
          <p><strong>Completion Date:</strong> 30th June, 2025</p>
          <p><strong>Short Summary:</strong> 2 set of 3bedroom within an estate to be used as a service apartment. We were called to access the project which we did bill was sent and almost paid immediately.</p>
        </div>
      </div>

      <!-- Right stacked cards -->
      <div class="project-cards">
        <div class="project-card">
          <img src="images/p100.jpg" alt="Electrical Installations – Lekki">
          <div class="project-overlay">
            <h3>Electrical wiring and electrical fittings installation - Wuye</h3>
            <p class="date">June 2025</p>
            <p>2 set of 3bedroom within an estate to be used as a service apartment.</p>
          </div>
        </div>
        <div class="project-card">
          <img src="images/p1.jpg" alt="Electrical Installations – Lekki">
          <div class="project-overlay">
            <h3>Electrical wiring and electrical fittings installation - Wuye</h3>
            <p class="date">June 2025</p>
            <p>17.6kwh solar energy generation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->
<style>
.projects {
  padding: 50px 15px;
  font-family: 'Poppins', sans-serif;
  background: #fff;
}

.section-title {
  text-align: center;
  font-size: 26px;
  color: #f5b400;
  margin-bottom: 35px;
}

.container-p {
  max-width: 1200px;
  margin: auto;
}

/* Top Featured Projects Row */

.top-projects {
  display: grid;
  grid-template-columns: 30% 70%; /* left smaller, right larger */
  gap: 20px;
  margin-bottom: 30px;
}

.featured-project {
  position: relative;
  overflow: hidden;
}

.featured-project img {
  width: 100%;
  height: 320px; /* keep both cards same height */
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}

.featured-project:hover img {
  transform: scale(1.08);
}
.featured-project .project-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.55);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 20px;
  transition: background 0.4s ease;
}
.featured-project:hover .project-overlay {
  background: rgba(0,0,0,0.7);
}

/* Second Row Layout */
.project-grid {
  display: grid;
  grid-template-columns: 500px 1fr;
  gap: 20px;
}

/* Info Card */
.project-info {
  background: #fff;
  border: 1px solid #eee;
  box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}
.project-info img {
  width: 100%;
  height: 260px;
  object-fit: cover;
}
.info-text {
  padding: 15px;
  font-size: 14px;
  color: #333;
}
.info-text p {
  margin: 6px 0;
  line-height: 1.6;
}
.info-text strong {
  display: inline-block;
  min-width: 140px;
  color: #000;
}

/* Stacked Cards */
.project-cards {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.project-card {
  position: relative;
  overflow: hidden;
}
.project-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.project-card:hover img {
  transform: scale(1.08);
}
.project-card .project-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.55);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 15px;
  transition: background 0.4s ease;
}
.project-card:hover .project-overlay {
  background: rgba(0,0,0,0.7);
}

/* Overlay Text */
.project-overlay h3 {
  font-size: 18px;
  margin-bottom: 5px;
}
.project-overlay p {
  font-size: 14px;
  margin: 3px 0;
}
.date {
  font-size: 13px;
  font-style: italic;
  opacity: 0.85;
}

/* Responsive */
@media (max-width: 992px) {
  .top-projects,
  .project-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- Project Section -->
<section class="projects">
  <div class="container-p">
    <h2 class="section-title">Residential inverter project.</h2>

    <!-- Featured Project -->
    <div class="featured-project">
      <img src="images/p14.jpg" alt="Electrical Installations - Lekki">
      <div class="project-overlay">
        <h3>Installation of 6.2kwh solar inverter system - lokogoma Abuja</h3>
        <p class="date">August, 2025</p>
        <p>This system can still be integrated with solar panels with the gird based on financial restraint.</p>
      </div>
    </div>

    <!-- Project Grid -->
    <div class="project-grid">
      <!-- Left Info Card -->
      <div class="project-info">
        <img src="images/p13.jpg" alt="Residential Solar Setup">
        <div class="info-text">
          <p><strong>Name:</strong>Installation of 6.2kwh solar inverter system. </p>
          <p><strong>Location:</strong>Grace Garden estate lokogoma Abuja</p>
          <p><strong>Service Type:</strong> Electrical Wiring / Repairs</p>
          <p><strong>Completion Date:</strong> 3rd August, 2025</p>
          <p><strong>Short Summary:</strong> This system was installed to basically power up the most essential loads in the house. Just light bulbs, laptops, tv, and standing fan till the grid returns.</p>
        </div>
      </div>

      <!-- Right Side Cards -->
      <div class="project-cards">
        <div class="project-card">
          <img src="images/p15.jpg" alt="Electrical Installations – Lekki">
          <div class="project-overlay">
            <h3>Installation of 6.2kwh solar inverter system - lokogoma Abuja</h3>
            <p class="date">August, 2025</p>
            <p>This system can still be integrated with solar panels but at the moment choose to recharge the system with the gird based on financial restraint.</p>
          </div>
        </div>

        <div class="project-card">
          <img src="images/p16.jpg" alt="Electrical Installations – Lekki">
          <div class="project-overlay">
            <h3>Installation of 6.2kwh solar inverter system - lokogoma Abuja</h3>
            <p class="date">August, 2025</p>
            <p>This system can still be integrated with solar panels but at the moment choose to recharge the system with the gird based on financial restraint.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->
<style>

.container-p {
  max-width: 1100px;
  margin: auto;
}

/* Featured Project */
.featured-project {
  position: relative;
  margin-bottom: 35px;
  overflow: hidden;
}
.featured-project img {
  width: 100%;
  max-width: 1100px;
  height: 420px;
  object-fit: cover;
  display: block;
  margin: auto;
  transition: transform 0.5s ease;
}
.featured-project:hover img {
  transform: scale(1.05);
}
.featured-project .project-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.6);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 20px;
  opacity: 1;
  transition: background 0.4s ease;
}
.featured-project:hover .project-overlay {
  background: rgba(0,0,0,0.75);
}

/* Grid Layout */
.project-grid {
  display: grid;
  grid-template-columns: 520px 1fr;
  gap: 20px;
  justify-content: center;
}

.project-info {
  background: #fff;
  overflow: hidden;
  box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}
.project-info img {
  width: 100%;
  max-width: 520px;
  height: 340px;
  object-fit: cover;
  display: block;
}
.info-text {
  padding: 15px;
  font-size: 14px;
  color: #333;
}
.info-text p {
  display: flex;
  align-items: flex-start; /* keep text aligned at the top */
  margin: 6px 0;
  font-size: 14px;
  line-height: 1.6;
}

.info-text strong {
  min-width: 140px; /* adjust depending on how wide you want labels */
  font-weight: 600;
  color: #000;
}

/* Right Cards */
.project-cards {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.project-card {
  position: relative;
  overflow: hidden;
}
.project-card img {
  width: 100%;
  max-width: 640px;
  height: 320px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.project-card:hover img {
  transform: scale(1.08);
}
.project-card .project-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.6);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 15px;
  opacity: 1;
  transition: background 0.4s ease;
}
.project-card:hover .project-overlay {
  background: rgba(0,0,0,0.75);
}

.project-overlay h3 {
  font-size: 22px;
  margin-bottom: 8px;
}
.project-overlay p {
  font-size: 15px;
  margin: 4px 0;
}
.date {
  font-size: 13px;
  font-style: italic;
  opacity: 0.85;
}

/* Responsive Design */
@media (max-width: 992px) {
  .projects {
    display: none; /* Hide on mobile & tablet */
  }
}
</style>
<!-- Project Section -->
<section class="projects">
  <div class="container-p">
    <h2 class="section-title">Solar Solutions</h2>

    <!-- Top Row: 2 Featured Projects (Flipped Ratio) -->
    <div class="top-projects flipped">
      <div class="featured-project">
        <img src="images/p17.jpg" alt="Commercial Installations - Abuja">
        <div class="project-overlay">
          <h3>Commercial Installations – Abuja</h3>
          <p class="date">April 2025</p>
          <p>Deployed a 20kW hybrid solar and backup system for a shopping complex.</p>
        </div>
      </div>
      <div class="featured-project">
        <img src="images/p18.jpg" alt="Commercial Installations - Abuja">
        <div class="project-overlay">
          <h3>Commercial Installations – Abuja</h3>
          <p class="date">April 2025</p>
          <p>Carried out complete rewiring and load balancing for office blocks.</p>
        </div>
      </div>
    </div>

    <!-- Second Row: Info card + Right stacked projects -->
    <div class="project-grid">
      <!-- Info Card -->
      <div class="project-info">
        <img src="images/p19.jpg" alt="Commercial Solar Setup">
        <div class="info-text">
          <p><strong>Name:</strong> Commercial Solar Setup – Abuja</p>
          <p><strong>Location:</strong> Abuja, FCT</p>
          <p><strong>Service Type:</strong> Solar + Backup Power</p>
          <p><strong>Completion Date:</strong> April 2025</p>
          <p><strong>Short Summary:</strong> Installed a 20kW solar hybrid system with load optimization for commercial facilities.</p>
        </div>
      </div>

      <!-- Right stacked cards -->
      <div class="project-cards">
        <div class="project-card">
          <img src="images/p13.jpg" alt="Commercial Installations – Abuja">
          <div class="project-overlay">
            <h3>Commercial Installations – Abuja</h3>
            <p class="date">April 2025</p>
            <p>Installed structured electrical wiring with energy-saving automation systems.</p>
          </div>
        </div>
        <div class="project-card">
          <img src="images/p15.jpg" alt="Commercial Installations – Abuja">
          <div class="project-overlay">
            <h3>Commercial Installations – Abuja</h3>
            <p class="date">April 2025</p>
            <p>Implemented power distribution upgrades for high-demand facilities.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Extra CSS for Flipped Layout -->
<style>
/* Flipped Top Projects (70% left, 30% right) */
.top-projects.flipped {
  display: grid;
  grid-template-columns: 70% 30%; /* left bigger, right smaller */
  gap: 20px;
  margin-bottom: 30px;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
  :root{
    --navy:#001139;
    --yellow:#FDC80B;
    --page-gray:#efedee;
    --card-white:#fff;
  }

  /* ===================== COMPACT (tablet & mobile only) ===================== */
  .projects-compact {
    display: none !important; /* hide by default (desktop) */
    background: var(--page-gray);
    padding: 48px 20px 80px;
    font-family: 'Poppins', sans-serif;
  }

  /* show only on tablet & mobile */
  @media (max-width: 992px) {
    .projects-compact {
      display: block !important;
    }
  }

  .projects-inner {
    max-width: 720px;
    margin: 0 auto;
    padding-left: 16px;
  }

  .projects-compact h2 {
    color: var(--navy);
    font-size: 34px;
    margin: 8px 0 16px;
    font-weight: 700;
    text-align: left;
  }

  .projects-compact p.lead {
    color: var(--navy);
    font-size: 16px;
    line-height: 1.5;
    margin: 0 0 28px;
    text-align: left;
    max-width: 560px;
  }

  .project-list { 
    display:flex;
    flex-direction:column; 
    gap:18px; 
  }

  .project-item {
    background: var(--card-white);
    display:flex;
    align-items:center;
    gap:20px;
    padding:16px 18px;
    box-shadow: 0 1px 0 rgba(0,0,0,0.08);
    border-radius:2px;
    min-height:72px;
  }

  .project-icon {
    width:64px;
    height:64px;
    background:var(--yellow);
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:3px;
    flex-shrink:0;
  }
  .project-icon i{ color:var(--navy); font-size:26px; }

  .project-title{ 
    color:var(--navy); 
    font-weight:700; 
    font-size:18px; 
    line-height:1.1; 
    text-align:left; 
  }

  /* Responsive adjustments */
  @media (max-width:480px){
    .projects-compact { padding:34px 14px 60px; margin-top: 50px;}
    .projects-inner { max-width:100%; }
    .projects-compact h2 { font-size:26px; margin-bottom:10px; color:#f9b208; }
    .projects-compact p.lead { font-size:14px; margin-bottom:18px; }
    .project-item { padding:12px; min-height:64px; gap:12px; }
    .project-icon { width:52px; height:52px; }
    .project-icon i { font-size:20px; }
    .project-title { font-size:16px; }
  }
</style>

<!-- ===================== COMPACT: MOBILE & TABLET ===================== -->
<section class="projects-compact" aria-label="Our Projects - compact list (mobile/tablet)">
  <div class="projects-inner">
    <h2>Our Projects</h2>
    <p class="lead">Explore some of our recent electrical and solar installation projects &ndash; completed with precision, care, and clean energy in mind.</p>

    <div class="project-list">
      <div class="project-item">
        <div class="project-icon"><i class="fa-solid fa-bolt"></i></div>
        <div class="project-title">Residential Solar &ndash; Ikeja</div>
      </div>

      <div class="project-item">
        <div class="project-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#001139" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="5"/>
            <line x1="12" y1="1" x2="12" y2="3"/>
            <line x1="12" y1="21" x2="12" y2="23"/>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
            <line x1="1" y1="12" x2="3" y2="12"/>
            <line x1="21" y1="12" x2="23" y2="12"/>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
          </svg>
        </div>
        <div class="project-title">Office Rewiring &ndash; Lekki</div>
      </div>

      <div class="project-item">
        <div class="project-icon"><i class="fa-solid fa-lightbulb"></i></div>
        <div class="project-title">Wiring Repair &ndash; Surulere</div>
      </div>

      <div class="project-item">
        <div class="project-icon" aria-hidden="true"><i class="fa-solid fa-bolt"></i></div>
        <div class="project-title">Estate Solar Grid &ndash; Abuja</div>
      </div>
    </div>
  </div>
</section>

<?php include "includes/testimonial.php"?>
<?php include "includes/cta.php"?>
<?php include "includes/footer.php"?>
  <!-- FontAwesome -->
 
<script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      item.addEventListener('click', () => {
        // Close all open answers
        faqItems.forEach(el => el.classList.remove('active'));

        // Toggle the clicked one
        item.classList.add('active');
      });
    });

</script>

</body>
</html>