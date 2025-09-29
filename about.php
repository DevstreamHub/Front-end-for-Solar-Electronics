<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Gidea</title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo.jpg">

<!-- For Apple devices -->
<link rel="apple-touch-icon" href="images/logo.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f9f9f9;
    }
</style>
<body>
<?php include "includes/topnav.php"?>
<?php include "includes/aboutslider.php"?>
<?php include "includes/stats.php"?>
<style>
.about {
    padding-top: 100px;
    padding-left: 40px;
    padding-bottom: 30px;
    padding-right: 40px;
    background-color: white;
    color: black;
    display: flex;
    gap: 30px; /* closer spacing between text and image */
    align-items: flex-start; /* align top */
}

.about div {
    flex: 1;
}

.about p {
    margin: 10px 0;         /* smaller vertical spacing */
    text-align: justify;
    padding-right: 40px;    /* closer to image */
    letter-spacing: 1px;
    font-size: 18px;
    line-height: 1.6;
}

.about img {
    flex: 1;
    height: auto;          /* bigger image */
    width: 100%;
    object-fit: cover;
    margin: 0;              /* remove extra margin */
}
.about h2{
    color: #FDC80B;
    font-size: 30px;
    margin-bottom: 20px;
}

@media (max-width: 480px) {
    .about {
        flex-direction: column; /* stack text above image */
        padding: 60px 30px;
        margin-left: 5px;
        margin-right: 5px;
        margin-top: 50px;
    }

    .about p {
        padding-right: 0;
        font-size: 16px;
        margin-bottom: 15px;
    }

    .about img {
        width: 100%;
        height: auto;
        margin-top: 20px;
    }
    .about h2{
    color: #FDC80B;
    font-size: 20px;
    margin-bottom: 20px;
}
}
/* ------------------------- */
/* Tablet (768px - 1024px) */
/* ------------------------- */
@media (min-width: 768px) and (max-width: 1024px) {
    .about {
        flex-direction: row; /* side by side like desktop */
        padding: 60px 30px;
        margin-left: 5px;
        margin-right: 5px;
        margin-top: 50px;
        gap: 30px;
        align-items: center;
    }

    .about div,
    .about img {
        flex: 1;           /* take equal space (50% each) */
        max-width: 50%;
    }

    .about p {
        padding-right: 20px;
        font-size: 16px;
        margin-bottom: 15px;
    }

    .about img {
        width: 100%;
        height: auto;
        margin-top: 0;
    }

    .about h2 {
        color: #FDC80B;
        font-size: 24px;
        margin-bottom: 20px;
    }
}

</style>

<section>
    <div class="about">
        <div>
            <h2>About Us</h2>
            <p>At Gidea Electrical Engineering Company – Abuja, we’re driven by a mission to provide precise, safe, and innovative electrical solutions.</p>
            <p>Our experienced team of electricians and engineers specializes in subscription-based and on-demand maintenance services, particularly for high-usage environments like hotels, schools, shopping malls, clubs, churches, and event centers.</p>
            <p>From house wiring and solar installations to HVAC systems and power grid maintenance, we ensure top-tier service delivery.</p>
            <p>Our routine, periodic, and 24/7 maintenance plans include full operational support and detailed monthly performance reports, so your systems run efficiently—always.</p>
        </div>
        <img src="images/logo.jpg" alt="Logo">
    </div>
</section>

<style>
.mission-vision {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: stretch;
    padding: 70px;
    background: #ffffff; 
    flex-wrap: wrap;
}

.mv-card {
    flex: 1;
    color: #fff;
    box-shadow: 0 0 8px rgba(255, 255, 255, 0.15);
    background: #0a1a3b;
    border: 1px solid #fff;
    padding: 65px;
    height: 400px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: transform 0.3s, box-shadow 0.3s;
}

.mv-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
}

.mv-card h2 {
    color: #fdd835;
    font-size: 24px;
    margin-bottom: 15px;
    text-align: center;
}

.mv-card p {
    font-size: 18px;
    line-height: 1.6;
    text-align: justify;
    margin-bottom: 15px;
}

/* -------------------- Tablet & Mobile -------------------- */
@media(max-width: 1024px) {
    .mission-vision {
        flex-direction: column;
        padding: 40px 20px;
        gap: 25px;
    }

    .mv-card {
        padding: 30px 20px;
        height: auto; /* allow height to adjust based on content */
    }

    .mv-card h2 {
        font-size: 20px;
    }

    .mv-card p {
        font-size: 16px;
        line-height: 1.5;
    }
}

@media(max-width: 480px) {
    .mission-vision {
        padding: 30px 15px;
        gap: 20px;
    }

    .mv-card {
        padding: 20px 15px;
    }

    .mv-card h2 {
        font-size: 18px;
    }

    .mv-card p {
        font-size: 14px;
        line-height: 1.4;
    }
}
</style>

<section class="mission-vision">
  <div class="mv-card">
    <h2>Mission</h2>
    <p>
      At Gidea Electrical Engineering Company Abuja, our mission is to provide safe, efficient, 
      and innovative electrical solutions that power homes, businesses, and industries.
    </p>
    <p>
      We are committed to delivering high-quality workmanship, cutting-edge technology, 
      and sustainable energy solutions while ensuring customer satisfaction through reliability, 
      affordability, and professionalism.
    </p>
  </div>

  <div class="mv-card">
    <h2>Vision</h2>
    <p>
      Our vision is to be a leading electrical engineering company in Nigeria and beyond, 
      recognized for excellence, innovation, and sustainable energy solutions.
    </p>
    <p>
      We aim to revolutionize the electrical industry by providing smart, eco-friendly, 
      and future-ready solutions that enhance lives, drive progress, and contribute to a greener planet.
    </p>
  </div>
</section>

<style>
    .section-title {
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      color: #0d1535;
      margin: 40px 0 30px;
    }

    .services-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  max-width: 1100px;
  margin: auto;
  padding: 0 10px 30px;
}

.service-box {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  height: 360px; /* fixes uniform box size */
  margin-bottom: 80px ;
}

.service-box img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* makes image fit without distortion */
  display: block;
  transition: 0.4s ease;
}

.service-box:hover img {
  transform: scale(1.05);
  filter: brightness(70%);
}

.service-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  padding: 15px;
}

  </style>
<section>
<h2 class="section-title">What We Do</h2>

  <div class="services-container">
    <div class="service-box">
      <img src="images/wwd1.jpg" alt="Lighting & Safety Systems">
      <div class="service-overlay">Lighting & Safety Systems</div>
    </div>

    <div class="service-box">
      <img src="images/wwd3.jpg" alt="Solar system setup">
      <div class="service-overlay">Solar system setup</div>
    </div>
 </div>
 <div class="services-container">
    <div class="service-box">
      <img src="images/wwd3.jpg" alt="Maintenance and troubleshooting">
      <div class="service-overlay">Maintenance and troubleshooting</div>
    </div>

    <div class="service-box">
      <img src="images/wwd4.jpg" alt="Safety and energy efficiency">
      <div class="service-overlay">Safety and energy efficiency</div>
    </div>
  </div>
</section>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style> 
/* Pricing Section */
.pricing {
    background: radial-gradient(circle at top left, white, #001139);
    text-align: center;
    padding: 90px 20px;
    font-family: 'Poppins', sans-serif;
    position: relative;
    overflow: hidden;
}

/* Floating gradient circles */
.pricing::before, .pricing::after {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(255,255,255,0.06), transparent);
    animation: float 7s infinite ease-in-out alternate;
}
.pricing::before { top: -80px; left: -80px; }
.pricing::after { bottom: -80px; right: -80px; animation-delay: 3s; }

@keyframes float {
    from { transform: translateY(0px) rotate(0deg); }
    to { transform: translateY(25px) rotate(45deg); }
}

/* Heading */
.pricing h2 {
    font-size: 40px;
    color: #fff;
    margin-bottom: 70px;
    position: relative;
}
.pricing h2 span {
    color: #fdd835;
}

/* Cards Container */
.pricing-cards {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    padding-bottom: 60px;
}

/* Price Card */
.price-card {
    flex: 1;
    min-width: 280px;
    max-width: 340px;
    min-height: 480px;   /* allow enough base height */
    color: #fff;
    background: #111b3a;
    position: relative;
    transition: all 0.4s ease;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    overflow: hidden;
    display: flex;
    flex-direction: column;
}


/* Mature gradient border */
.price-card::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 2px;
    background: linear-gradient(135deg, #fdd835, #43a047, #e53935);
    background-size: 200% 200%;
    animation: borderShift 8s ease infinite;
    -webkit-mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
            mask-composite: exclude;
}
@keyframes borderShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Badge */
.price-card .badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #fdd835;
    color: #001139;
    font-size: 12px;
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: bold;
    letter-spacing: 0.5px;
    z-index: 2;
}

/* Card Image */
.price-card img {
    width: 100%;
    height: 180px;  /* instead of 50% */
    object-fit: cover;
}

/* Card Content (Bottom Half) */
.price-content {
    flex: 1;
    padding: 25px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}

/* Icon */
.price-content i {
    font-size: 36px;
    margin-bottom: 10px;
    color: #fdd835;
    transition: all 0.3s ease;
}
.price-card:hover i {
    text-shadow: 0 0 15px rgba(253,216,53,0.8);
}

/* Title */
.price-content h3 {
    font-size: 20px;
    margin-bottom: 12px;
    font-weight: 600;
}

/* Features */
.price-content ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 20px;
    text-align: left;
    font-size: 14px;
}
.price-content ul li {
    margin-bottom: 8px;
    padding-left: 20px;
    position: relative;
}
.price-content ul li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #fdd835;
    font-size: 14px;
}

/* Price */
.price-content p {
    font-size: 22px;
    font-weight: bold;
    margin: 0;
}
.price-content .currency {
    text-decoration: line-through;
    opacity: 0.5;
    margin-right: 5px;
}

/* Hover */
.price-card:hover {
    transform: translateY(-12px) scale(1.04);
    box-shadow: 0 15px 35px rgba(0,0,0,0.35);
}
</style>

<section class="pricing">
  <h2><span>Gidea</span> Subscription</h2>

  <!-- Desktop & Tablet Cards -->
  <div class="pricing-cards">
    <div class="price-card">
        <div class="badge">Special offer</div>
      <img src="images/wwd3.jpg" alt="Maintenance Service">
      <div class="price-content">
        <i class="fas fa-tools"></i>
        <h3>Basic Plan</h3>
        <ul>
          <li>Internal Coverage Only</li>
          <li>Lighting Points</li>
          <li>Power Points</li>
          <li>Wiring</li>
          <li>4 Months Duration</li>
          <li>Technical Support</li>
        </ul>
        <p>₦350,000</p>
      </div>
    </div>

    <div class="price-card">
      <div class="badge">Best Value</div>
      <img src="images/wwd4.jpg" alt="Lighting Service">
      <div class="price-content">
        <i class="fas fa-lightbulb"></i>
        <h3>Standard Plan</h3>
        <ul>
          <li>Internal and External Coverage</li>
          <li>Lighting Points</li>
          <li>Power Points</li>
          <li>Protective Device</li>
          <li>Wiring</li>
          <li>Backup Power Installation</li>
          <li>AC Servicing</li>
          <li>4 Month Duration</li>
          <li>Emergency Response</li>
        </ul>
        <p>₦750,000</p>
      </div>
    </div>

    <div class="price-card">
        <div class="badge">Premium Offer</div>
      <img src="images/wwd1.jpg" alt="Safety Service">
      <div class="price-content">
        <i class="fas fa-shield-alt"></i>
        <h3>Safety & Energy Efficiency</h3>
        <ul>
          <li>Internal/External Coverage</li>
          <li>Lighting Points</li>
          <li>Power Points</li>
          <li>Protective System</li>
          <li>Automation Integration</li>
          <li>Backup Power Solution</li>
          <li>AC/HVAC Repairs/Maintenance</li>
          <li>4 Month Duration</li>
          <li>Emergency Response</li>
        </ul>
        <p>₦1,500,000</p>
      </div>
    </div>
  </div>
</section>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper-pricing', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>


<!-- Why Choose Us Section -->
<section class="why-choose">
  <h2>Why Choose Us</h2>
  <div class="choose-cards">
    <div class="choose-card">
      <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
      <p>Certified electricians</p>
    </div>
    <div class="choose-card">
      <div class="icon"><i class="fas fa-clock"></i></div>
      <p>Timely project delivery</p>
    </div>
    <div class="choose-card">
      <div class="icon"><i class="fa fa-dollar" aria-hidden="true"></i></div>
      <p>Affordable rates</p>
    </div>
    <div class="choose-card">
      <div class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></div>
      <p>Energy-efficient and future-ready solutions</p>
    </div>
  </div>
</section>

<style>
/* Why Choose Us */
.why-choose {
  background: #fff;
  color: #0a1a3b;
  text-align: center;
  padding: 60px 20px;
}

.why-choose h2 {
  font-size: 28px;
  margin-bottom: 40px;
  color: #f1c40f;
}

.choose-cards {
  display: flex;
  justify-content: center;
  gap: 25px;
  flex-wrap: wrap;
  font-weight: bold;
}

.choose-card {
  background: #fff;
  border: 1px solid #ccc;
  padding: 40px 20px;
  width: 250px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.choose-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

.choose-card .icon {
  font-size: 36px;
  color: #001139;
  margin-bottom: 15px;
}

/* ✅ Tablet should look like desktop, so only collapse on mobile */
@media (max-width: 768px) {
  .choose-card {
    width: 45%; /* two per row on small tablets / large phones */
  }
}
@media (max-width: 600px) {
  .choose-card {
    width: 100%; /* one per row on phones */
  }
}

/* Our Values */
.values-section {
  background: #f5f6f7;
  padding: 50px 20px;
}

.values-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  gap: 40px;
  max-width: 1100px;
  margin: auto;
}

.values-text h2 {
  font-size: 28px;
  font-weight: bold;
  color: #0d1535;
  margin-bottom: 20px;
}

.values-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.values-list li {
  background: #0d1535;
  color: #fff;
  padding: 20px 30px;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 12px;
}

.values-list .icon {
  background: #ffc107;
  color: #0d1535;
  font-weight: bold;
  border-radius: 50%;
  width: 28px;
  height: 28px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
}

.values-image img {
  width: 100%;
  object-fit: cover;
  height: 100%;
  display: block;
}
.values-image {
  position: relative;
  height: 600px;
  overflow: hidden;
}

/* Dark overlay */
.values-image::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.45);
}

/* ✅ Keep desktop layout for tablets, collapse only on mobile */
@media (max-width: 768px) {
  .values-container {
    grid-template-columns: 1fr;
  }
  .values-image {
    display: none;
  }
}

@media (max-width: 600px) {
  .values-container {
    gap: 20px;
  }
  .values-text h2 {
    font-size: 22px;
    text-align: center;
  }
  .values-list li {
    font-size: 16px;
    padding: 15px 20px;
  }
}

</style>

<!-- Our Values Section -->
<section class="values-section">
  <div class="values-container">
    <!-- Left Column -->
    <div class="values-text">
      <h2>Our Values</h2>
      <ul class="values-list">
        <li><span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span> Safety First</li>
        <li><span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span> Innovation</li>
        <li><span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span> Customer-Centric Service</li>
        <li><span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span> Continuous Learning</li>
      </ul>
    </div>

    <!-- Right Column -->
    <div class="values-image">
      <img src="images/values.jpg" alt="Engineer at work">
    </div>
  </div>
</section>


<?php include "includes/testimonial.php"?>
    <?php include "includes/apply.php"?>
    <?php include "includes/team.php"?>
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