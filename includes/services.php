<style>
  /* Base (Desktop) Styles */
    .services h2 {
    font-size: 30px;
    text-align: center;
    color: #001139;
    margin-bottom: 10px;
  }

  .services p {
    max-width: 600px;
    margin: 0 auto 40px;
    font-size: 15px;
    color: #001139;
    font-weight: 500;
    line-height: 1.4;
    font-family: 'Inter', sans-serif;
  }

  /* Services Section */
  .services {
    padding-left: -10px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    margin-top: 100px;
    margin-bottom: 80px;
  }

  .services-container {
    display: flex;
    gap: 60px;
    justify-content: center;
    align-items: flex-start;
  }

  /* Sidebar */
  .services-sidebar {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 25px;
      padding-left: 0px;
      margin-top: 100px;
    }

  .services-sidebar button {
    width: 130px;
    padding: 12px 0;
    border: 1px solid #001139;
    background: transparent;
    font-size: 15px;
    cursor: pointer;
    background-color: #0011392B;
    transition: 0.3s;
  }

  .services-sidebar button.active,
  .services-sidebar button:hover {
    background: #001139;
    color: #fff;
  }

  /* Slider Wrapper */
  .slider-wrapper {
    width: 740px;
    overflow: hidden;
    position: relative;
  }

  /* Service Cards Track */
  .services-cards {
    display: flex;
    gap: 20px;
    transition: transform 0.4s ease-in-out;
  }

  .solar-card {
    flex: 0 0 350px;
    background: #fff;
    border: 1px solid #ddd;
    transition: transform 0.3s;
  }

  .solar-card:hover {
    transform: translateY(-5px);
  }

  .solar-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .card-content {
    padding: 15px;
    text-align: left;
  }

  .card-content h3 {
    font-size: 18px;
    color: #001139;
    margin-bottom: 10px;
  }

  .card-content p {
    font-size: 13px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 15px;
    text-align: justify;
  }

  .card-content a {
    display: inline-flex;
    align-items: center;
    gap: 6px;   
    padding: 6px 15px;
    background: #001139;
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  .card-content a:hover {
    background: #fdd835;
    color: #001139;
  }

  /* Nav Buttons */
  .nav-next {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 15px;
    margin-left: 20px;
  }

  .nav-btn1, .nav-btn2 {
    cursor: pointer;
    font-size: 18px;
    padding: 6px 25px;
    border: 1px solid #001139;
    background: #DCDEE2;
    transition: 0.3s;
  }

  .nav-btn1:hover, .nav-btn2:hover {
    background: #001139;
    color: #fff;
  }
   .nav-btn2{
      margin-top: 295px;
    }

  /* Hide inactive tabs */
  .tab-content {
    display: none;
  }
  .tab-content.active {
    display: flex;
  }
  .card-content a svg {
    width: 18px;   
    height: 18px;
    stroke: #fdd835;
    transition: transform 0.3s ease, stroke 0.3s ease;
  }
.card-content a:hover svg {
  transform: translateX(3px);  /* slide effect */
  stroke: #001139;            /* darker orange on hover */
}

  /* ---------- MOBILE STYLES ---------- */
  @media (max-width: 768px) {
    .services {
      padding: 40px 15px;
      margin-top: 60px;
      margin-bottom: 60px;
    }

    .services h2 {
      font-size: 25px;
      margin-bottom: 10px;
      color: #fdd835;
      text-align: left;
    }

    .services p {
      font-size: 14px;
      line-height: 1.5;
      margin-bottom: 30px;
      color: #001139;
      text-align: justify;
    }

    .services-container {
      flex-direction: column;
      gap: 30px;
    }

    .services-sidebar {
      flex-direction: column;
      gap: 15px;
      margin-top: 0;
    }

  .services-sidebar button {
    width: 300px;               /* still responsive but large */
    font-size: 16px;          /* bigger text */
    padding: 15px 0;          /* thicker buttons */
    font-weight: 600;
    text-align: center;
    margin-left: 20px;
    background: white;
    color: #001f4d;
  }
    .slider-wrapper {
      width: 100%;
    }

    .solar-card {
      flex: 0 0 100%;
      max-width: 100%;
      margin: 0 auto;
      border-radius: 5px;
    }

    .nav-next {
      margin-top: 25px;
      justify-content: space-between;
      width: 150px;
    }

    .nav-btn1,
    .nav-btn2 {
      font-size: 16px;
      padding: 0;
    }
  }
  .mobile-only {
  display: none;
}

@media (max-width: 768px) {
  .mobile-only {
    display: inline;
  }
}
@media (max-width: 768px) {
  .services-container {
    flex-direction: column;
    align-items: stretch;
    width: 100%;
    padding: 0;
    margin: 0;
  }

  .slider-wrapper {
    order: 1;
    width: 100%;
    padding: 0;
    margin: 0;
  }

  .nav-next {
  order: 2;
  display: flex;
  flex-direction: row;        /* horizontal layout */
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 400px;           /* optional: limits spread */
  padding: 0 10px;
  margin: 15px auto 0;
  box-sizing: border-box;
  gap: 10px;                  /* spacing between buttons */
}

  .nav-btn1,
  .nav-btn2 {
    width: 60px;
    height: 40px;
    font-size: 16px;
    padding: 0;
    background: #ffffff;
    border: 1px solid #001139;
    text-align: center;
    line-height: 40px;
    margin: 0;
  }

.nav-btn1:hover,
.nav-btn2:hover {
  background: #001139;
  color: #ffffff;
}
  .tab-content.active {
    flex-direction: row;
  }


  .services-sidebar {
    order: 0;
    margin-bottom: 20px;
  }


      /* Service Cards Track */
  .services-cards {
      flex-direction: row;
      gap: 0;
      justify-content: flex-start;
  }

  .solar-card {
    min-width: 100%;
    max-width: 100%;
    margin: 0;
    border-radius: 5px;
  }

}

/* ---------- TABLET STYLES ---------- */
@media (min-width: 769px) and (max-width: 1024px) {
  .services-container {
    flex-direction: column;
    align-items: stretch;
    width: 100%;
    padding: 0;
    margin: 0;
  }
    section .p{
        padding-left: 30px;
        padding-right: 30px;
        font-size: 14px;
    }
  .slider-wrapper {
    order: 1;
    width: 500px;
    padding: 0;
    margin-left: 240px;
  }

  .nav-next {
  order: 2;
  display: flex;
  flex-direction: row;        /* horizontal layout */
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 400px;           /* optional: limits spread */
  padding: 0 10px;
  margin: 15px auto 0;
  box-sizing: border-box;
  gap: 100;                  /* spacing between buttons */
}

  .nav-btn1,
  .nav-btn2 {
    width: 80px;
    height: 40px;
    font-size: 20px;
    padding: 0;
    background: #ffffff;
    border: 1px solid #001139;
    text-align: center;
    line-height: 40px;
    margin-left: -200px;
    margin-right: -200px;
    margin-top: -50px;
  }

.nav-btn1:hover,
.nav-btn2:hover {
  background: #001139;
  color: #ffffff;
}
  .tab-content.active {
    flex-direction: row;
  }

  .services-sidebar button {
    width: 700px;               /* still responsive but large */
    font-size: 16px;          /* bigger text */
    padding: 15px 0;          /* thicker buttons */
    font-weight: 600;
    text-align: center;
    margin-left: 20px;
    background: white;
    color: #001f4d;
  }
  .services-sidebar {
    order: 0;
    margin-bottom: -40px;
    margin-top: -20px;
  }


      /* Service Cards Track */
  .services-cards {
      flex-direction: row;
      gap: 0;
      justify-content: flex-start;
  }

  .solar-card {
    min-width: 100%;
    max-width: 100%;
    margin: 0;
    border-radius: 5px;
  }
}

</style>


<section class="services">
  <h2>Our Services</h2>
  <p>Whether you’re wiring a new home or going solar, we’ve got the expertise to power your space efficiently.</p>

  <div class="services-container">
    <!-- Sidebar -->
    <div class="services-sidebar">
      <button class="active" data-tab="tab1">Commercial <span class="mobile-only">Installation</span></button>
      <button data-tab="tab2">Residential <span class="mobile-only">Installation</span></button>
      <button data-tab="tab3">Industrial <span class="mobile-only">Installation</span></button>
    </div>
        <!-- Nav Buttons -->
    <div class="nav-next">
      <button class="nav-btn1">←</button>
      <button class="nav-btn2">→</button>
    </div>
    <!-- Slider -->
    <div class="slider-wrapper">
      <div class="services-cards tab-content active" id="tab1">
        <div class="solar-card">
          <img src="images/service1.jpg" alt="Electrical Installations">
          <div class="card-content">
            <h3>Electrical Installations</h3>
            <p>Safe, efficient wiring for homes, offices, and commercial buildings. Reliable and modern solutions for all your electrical needs.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
        <div class="solar-card">
          <img src="images/service2.jpg" alt="Solar Installations">
          <div class="card-content">
            <h3>Solar Installations</h3>
            <p>Harness solar energy with our expert installations for homes, offices, and commercial buildings. Save money and go green today.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
        <div class="solar-card">
          <img src="images/mt.jpg" alt="Solar Installations">
          <div class="card-content">
            <h3>Maintenance and Troubleshooting</h3>
            <p>Harness solar energy with our expert installations for homes, offices, and commercial buildings. Save money and go green today.</p>
            <a href="/services.php">Learn More 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="services-cards tab-content" id="tab2">
        <div class="solar-card">
          <img src="images/wwd1.jpg" alt="Electrical Services">
          <div class="card-content">
            <h3>Electrical Services</h3>
            <p>Safe, efficient wiring for homes and offices. Reliable and modern solutions for all your electrical needs.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
        <div class="solar-card">
          <img src="images/wwd3.jpg" alt="Security Systems">
          <div class="card-content">
            <h3>Security Systems</h3>
            <p>Protect your home and office with modern security systems designed for safety and peace of mind.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
        <div class="solar-card">
          <img src="images/rewiring.jpg" alt="Security Systems">
          <div class="card-content">
            <h3>Rewiring</h3>
            <p>Protect your home and office with modern security systems designed for safety and peace of mind.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="services-cards tab-content" id="tab3">
        <div class="solar-card">
          <img src="images/indus1.jpg" alt="Electrical Planning">
          <div class="card-content">
            <h3>Electrical Planning</h3>
            <p>Comprehensive electrical planning for industrial spaces, ensuring safety and efficiency.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>    
            </a>
          </div>
        </div>
        <div class="solar-card">
          <img src="images/wwd4.jpg" alt="General Electrical">
          <div class="card-content">
            <h3>General Electrical</h3>
            <p>Expert solutions for factories and industries, covering all aspects of electrical needs.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
        <div class="solar-card">
          <img src="images/wwd5.jpg" alt="General Electrical">
          <div class="card-content">
            <h3>Energy Efficiency</h3>
            <p>Expert solutions for factories and industries, covering all aspects of electrical needs.</p>
            <a href="/services.php">Learn More
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 6l6 6-6 6"/>
                </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
const tabButtons = document.querySelectorAll(".services-sidebar button");
const tabContents = document.querySelectorAll(".tab-content");
const prevBtn = document.querySelector(".nav-btn1");
const nextBtn = document.querySelector(".nav-btn2");

let currentIndex = 0;

// Get width of one solar-card dynamically
function getCardWidth() {
  const activeTab = document.querySelector(".tab-content.active");
  const card = activeTab?.querySelector(".solar-card");
  return card?.offsetWidth || 0;
}

// Determine how many cards per view (desktop vs mobile)
function getCardsPerView() {
  if (window.innerWidth <= 768) return 1; // mobile
  if (window.innerWidth <= 1024) return 2; // tablet
  return 2; // desktop (or however many you want)
}


// Move active tab to the current index
function updateSliderPosition() {
  const activeTab = document.querySelector(".tab-content.active");
  if (!activeTab) return;

  const cardWidth = getCardWidth();
  const offset = currentIndex * cardWidth;
  activeTab.style.transform = `translateX(-${offset}px)`;
}

// Reset all tabs to start position
function resetTabs() {
  tabButtons.forEach(btn => btn.classList.remove("active"));
  tabContents.forEach(tab => {
    tab.classList.remove("active");
    tab.style.transform = "translateX(0)";
  });
  currentIndex = 0;
}

// Tab switch
tabButtons.forEach(btn => {
  btn.addEventListener("click", () => {
    resetTabs();
    btn.classList.add("active");
    const targetTab = document.getElementById(btn.dataset.tab);
    if (targetTab) {
      targetTab.classList.add("active");
      currentIndex = 0; // start from first card
      updateSliderPosition();
    }
  });
});

// Next button
nextBtn.addEventListener("click", () => {
  const activeTab = document.querySelector(".tab-content.active");
  if (!activeTab) return;

  const cards = activeTab.querySelectorAll(".solar-card");
  const cardsPerView = getCardsPerView();
  const maxIndex = cards.length - cardsPerView;

  if (currentIndex < maxIndex) {
    currentIndex++;
    updateSliderPosition();
  }
});

// Prev button
prevBtn.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateSliderPosition();
  }
});

// Update on window resize
window.addEventListener("resize", () => {
  updateSliderPosition();
});

// Initialize on page load
document.addEventListener("DOMContentLoaded", () => {
  updateSliderPosition();
});
</script>
