<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
  :root{
    --navy:#001139;
    --yellow:#FDC80B;
    --page-gray:#efedee;
    --card-white:#fff;
  }

  /* ===================== COMPACT (tablet & mobile) ===================== */
  .projects-compact {
    display: none; /* hidden by default (desktop default) */
    background: var(--page-gray);
    padding: 48px 20px 80px;
    font-family: 'Poppins', sans-serif;
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

  .project-list { display:flex;flex-direction:column; gap:18px; }

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
    width:64px;height:64px;background:var(--yellow);
    display:flex;align-items:center;justify-content:center;border-radius:3px;flex-shrink:0;
  }
  .project-icon i{ color:var(--navy); font-size:26px; }

  .project-title{ color:var(--navy); font-weight:700; font-size:18px; line-height:1.1; text-align:left; }

  /* ===================== DESKTOP IMAGE GRID (default visible) ===================== */
  .work {
    display:block; /* visible by default on desktop */
    padding-left:50px;
    text-align:center;
    font-family:'Poppins',sans-serif;
    margin-top:100px;
    margin-bottom:2px;
    padding-bottom:20px;
    background-color:#fff;
  }
  .work h2{ font-size:30px; text-align:center; color:var(--navy); margin-bottom:10px; padding-top:80px;}
  .work p{ margin-bottom:60px; color:var(--navy); margin-left: 35%; margin-right: 35%;}

  .services-container-w{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
    gap:20px;
    max-width:1100px;
    margin:auto;
    padding:0 10px 30px;
  }

  .service-box-w{
    position:relative; overflow:hidden; cursor:pointer; height:460px; margin-bottom:80px;
    opacity:0; transform:translateY(50px); transition: all 0.8s ease-out;
  }
  .service-box-w.visible{ opacity:1; transform:translateY(0); }

  .service-box-w img{ width:100%; height:100%; object-fit:cover; object-position:top; display:block; transition:0.4s ease; }
  .service-box-w:hover img{ transform:scale(1.05); filter:brightness(70%); }

  .service-overlay{
    position:absolute; top:0; left:0; width:100%; height:100%;
    display:flex; align-items:center; justify-content:center;
    background: rgba(0,0,0,0.4); color:#fff; font-size:24px; font-weight:700; text-align:center; padding:15px;
  }

  /* ===================== RESPONSIVE SWITCH ===================== */
  @media (max-width: 1024px) {
    .work { display: none !important; }           /* hide desktop grid */
    .projects-compact { display: block !important; } /* show compact list */
  }

  @media (max-width:480px){
    .projects-compact { padding:34px 14px 60px; }
    .projects-inner { max-width:100%; }
    .projects-compact h2 { font-size:26px; margin-bottom:10px; color:#f9b208; }
    .projects-compact p.lead { font-size:14px; margin-bottom:18px; }
    .project-item { padding:12px; min-height:64px; gap:12px; }
    .project-icon { width:52px; height:52px; }
    .project-icon i { font-size:20px; }
    .project-title { font-size:16px; }
  }

  @media (min-width:1400px){
    .services-container-w{ gap:28px; max-width: 1300px; }
    .service-box-w{ height:520px; }
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

<!-- ===================== DESKTOP: IMAGE GRID ===================== -->
<section class="work" aria-label="See Our Work (desktop)">
  <h2>See Our Work</h2>
  <p>Explore some of our recent electrical and solar installation projects &ndash; completed with precision, care, and clean energy in mind.</p>

  <div class="services-container-w">
    <div class="service-box-w">
      <img src="images/solar.jpg" alt="Residential Solar - Ikeja">
      <div class="service-overlay">Residential Solar - Ikeja</div>
    </div>

    <div class="service-box-w">
      <img src="images/lekki.jpg" alt="Office Rewiring - Lekki">
      <div class="service-overlay">Office Rewiring - Lekki</div>
    </div>
  </div>

  <div class="services-container-w">
    <div class="service-box-w">
      <img src="images/suru.jpg" alt="Wiring Repair - Surulere">
      <div class="service-overlay">Wiring Repair - Surulere</div>
    </div>

    <div class="service-box-w">
      <img src="images/grid.jpg" alt="Estate Solar Grid - Abuja">
      <div class="service-overlay">Estate Solar Grid - Abuja</div>
    </div>
  </div>
</section>

<script>
  // Run IntersectionObserver only on desktop (when .work is visible)
  document.addEventListener("DOMContentLoaded", () => {
    if (window.matchMedia('(min-width: 1025px)').matches) {
      const boxes = document.querySelectorAll(".service-box-w");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => entry.target.classList.add("visible"), index * 180);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.18 });

      boxes.forEach(box => observer.observe(box));
    }
  });
</script>
