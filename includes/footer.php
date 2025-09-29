<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<style>
/* --- PARTNERS SECTION --- */
.partners {
  padding: 70px 20px;
  text-align: center;
}

.partners h2 {
  font-weight: bold;
  color: #001139;
  font-size: 30px;
  margin-top: 40px;
  margin-bottom: 60px;
}

.swiper {
  padding-bottom: 60px; /* space for pagination */
}

.swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  max-height: 50px;
  width: 180px;
  transition: 0.3s;
}

.swiper-slide img:hover {
  filter: grayscale(0%);
  transform: scale(1.05);
}

/* Pagination dots */
.swiper-pagination-bullet {
  background: #001139;
  opacity: 0.5;
}
.swiper-pagination-bullet-active {
  opacity: 1;
}

/* ✅ Hide partners on mobile & tablet */
@media (max-width: 1024px) {
  .partners {
    display: none !important;
  }
}
</style>

<!-- Partners Section -->
<section class="partners">
  <h2>Our Partners</h2>
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/luxsun.png" alt="Partner 1"></div>
      <div class="swiper-slide"><img src="images/Hikvision.png" alt="Partner 2"></div>
      <div class="swiper-slide"><img src="images/thorn.png" alt="Partner 3"></div>
      <div class="swiper-slide"><img src="images/elevate.jfif" alt="Partner 4"></div>
      <div class="swiper-slide"><img src="images/clemark.jfif" alt="Partner 5"></div>
      <div class="swiper-slide"><img src="images/cage.jpg" alt="Partner 6"></div>
      <div class="swiper-slide"><img src="images/s1.png" alt="Partner 7"></div>
      <!-- Add more logos as needed -->
    </div>

    <!-- Pagination Dots -->
    <div class="swiper-pagination"></div>
  </div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    slidesPerView: 5,       // ✅ show 5 logos at once
    spaceBetween: 30,       // gap between logos
    loop: true,             // infinite loop
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      1024: { slidesPerView: 5 },
      768: { slidesPerView: 3 },
      480: { slidesPerView: 2 },
      320: { slidesPerView: 1 }
    }
  });
</script>


<style>
    footer {
      background: #001139;
      color: #fff;
      padding: 40px 80px 20px;
      font-family: 'Poppins', sans-serif;
    }

    /* Newsletter Section */
    .newsletter {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
    }

    .newsletter input {
      padding-left: 15px;
      padding-right: 150px;
      padding-top:  15px;
      padding-bottom: 15px;
      border: none;
      width: 250px;
      outline: none;
    }

    .news button {
      padding: 5px 8px;
      background: #fdd835;
      border: none;
      margin-left:-650px;
      margin-top: -40px;
      cursor: pointer;
      font-weight: bold;
    }

    /* Footer Content */
    .footer-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 40px;
      margin-bottom: 30px;
    }

    .footer-col {
      flex: 1;
      min-width: 220px;
    }


    .footer-logo img {
      width: 140px;
      margin-bottom: 10px;
    }

    .footer-logo p {
      font-size: 13px;
      color: #ddd;
      margin: 10px 0 30px;
      line-height: 25px;
    }

    .footer-logo .quote-btn2 {
      display: inline-block;
      background: #fff;
      color: #001139;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .footer-logo .quote-btn2:hover {
      background: #fdd835;
      color: #001139;
    }

    .footer-col h4 {
      margin-bottom: 35px;
      font-size: 16px;
    }

    .footer-col ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    /* Active link style */
    .footer-col ul li a.active {
        color: #f9b208; 
        font-size: 16px;
        font-weight: bold;
    }
    .footer-col ul li {
      margin-bottom: 15px;
    }

    .footer-col ul li a {
      text-decoration: none;
      color: #fdd835;
      font-size: 13px;
      transition: 0.3s;
    }

    .footer-col ul li a:hover {
      color: #ffffff;
    }

    .footer-services li {
      color: #fdd835;
      font-size: 14px;
      line-height: 27px;
    }
    
    /* Contact Info */
    .contact-info2 p {
      font-size: 12px;
      margin: 8px 2;
      display: flex;
      align-items: center;
      gap: 8px;
      color:  #fdd835;
    }

    /* Social Icons */
    .social {
      margin-top: 15px;
    }

    .social a {
      display: inline-block;
      margin-right: 10px;
      color: #fff;
      font-size: 18px;
      text-decoration: none;
      transition: 0.3s;
    }

    .social a:hover {
      color: #fdd835;
    }

    /* Footer Bottom */
    .footer-bottom {
      background-color: #ffffff;
      padding-top: 15px;
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      color: #2F353B;
      padding-left: 100px;
      padding-right: 150px;
      flex-wrap: wrap;
    }

    .footer-bottom span {
      color: #fff;
      font-weight: bold;
    }
    .contact-info2 span {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 31px;
      height: 31px;
      border-radius: 50%;
      background-color: #ffffff;   /* circle background white */
      color: #001139; /* icon itself blue */
      margin-right: 10px;
    }

    .contact-info2 span i {
      color: #001139; /* icon itself blue */
      font-size: 18px;
    }
    /* Social Icons in white squares */
    .news {
      display: flex;
      justify-content: space-between; /* pushes newsletter left & icons right */
      align-items: center;
      margin-right: 150px;
    }

.iconi {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 35px;     /* good size for icon circle */
  height: 35px;
  padding-right: -150px;
  background: white;
  color: #001f4d;  /* icon color */
  font-size: 18px;
  text-decoration: none;
  transition: 0.3s;
}

.iconi:hover {
  background: #fdd835;
  color: white;
}
/* MOBILE FOOTER STYLING */
@media (max-width: 768px) {

  /* Reduce padding for mobile */
  footer {
    padding: 20px;
    text-align: center;
  }

  /* Newsletter Section */
  .news, .newsletter {
    flex-direction: column;
    align-items: center;
    margin: 0 0 -42px;
  }
  .newsletter input {
    width: 260px;
    margin-bottom: 50px;
    margin-left: 10px;
    padding-left: 10px;
    padding-right: 18px;
  }

  .news button {
    width: 80px;
    margin-bottom: 10px;
    margin-left: 180px;
    padding: 5px;
  }

  .socials {
    display: flex;
    justify-content: left;
    margin-left: -180px;
    gap: 20px;
    margin-top: 30px;
  }

  .socials a {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    color: #001139;
  }

  .socials a:hover {
    background: #fdd835;
    color: #001139;
  }

  /* Footer Main Container */
  .footer-container {
    flex-direction: column;
    gap: 20px;
    text-align: left;
  }

  .footer-col {
    min-width: auto;
    font-size: 16px;
    margin-top: -50px;
  }

  .footer-logo img {
    width: 120px;
    margin-bottom: 10px;
    margin-top: 130px;
  }

  .footer-col h4 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .footer-col ul li {
    font-size: 18px;
    margin-bottom: 8px;
  }
.footer-services li {
  font-size: 18px;
  margin-bottom: 8px;
  color: #ffffff;
}

  .footer-logo p {
    font-size: 16px;
    line-height: 24px;
    text-align: justify;
  }

  .quote-btn2 {
    padding: 8px 15px;
    font-size: 14px;
  }

  /* Footer Bottom */
  .footer-bottom {
    flex-direction: column;
    text-align: center;
    padding-left: 0;
    padding-right: 0;
    gap: 10px;
    font-size: 12px;
  }

}
/* Hide <hr> in footer sections on mobile */
@media (max-width: 768px) {
  .footer-col hr,
  .contact-info2 hr {
    display: none;
  }
    footer,
    footer .footer-col,
    footer .footer-col p,
    footer .footer-col a,
    footer .contact-info2 p {
      color: #ffffff !important;
    }
/* Make only h4 headings in the footer yellow */
footer .footer-col h4 {
  color: #fdd835 !important;
}
}
@media (max-width: 768px) {
  .quote-btn2 {
    display: none !important;
  }
}
@media (min-width: 769px) and (max-width: 1023px) {
  /* Footer adjustments for tablets */
  footer {
    padding: 40px 40px 20px;
  }

  .footer-container {
    flex-direction: row;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: space-between;
    text-align: left;
  }

  .footer-col {
    flex: 1 1 45%; /* 2 columns per row */
    margin-bottom: 30px;
  }

  .footer-logo img {
    width: 130px;
    margin-bottom: 15px;
  }

  .footer-col h4 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #fdd835;
  }

  .footer-col ul li,
  .footer-services li {
    font-size: 16px;
    margin-bottom: 10px;
    color: #fdd835;
  }

  .footer-logo p {
    font-size: 14px;
    line-height: 22px;
  }

  .quote-btn2 {
    font-size: 14px;
    padding: 10px 18px;
  }

  .footer-bottom {
    flex-direction: column;
    text-align: center;
    padding: 15px 20px;
    font-size: 13px;
  }

  .socials {
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
    margin-left: 0;
  }

  .newsletter input {
    width: 300px;
    padding: 12px 15px;
  }

  .news button {
    margin-left: -400px;
    width: auto;
    padding: 8px 12px;
  }
}

  </style>

  <footer>
    <!-- Newsletter -->
    <div class="news">
      <div class="newsletter">
        <input type="email" placeholder="Email Address to subscribe">
      </div>
      <button>Subscribe</button>
      <div class="socials">
        <a href="https://www.facebook.com/share/17A7ScnsKa/?mibextid=wwXIfr" class="iconi"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/gideaee?igsh=MXYzazFkcnZzZDF1Mg%3D%3D&utm_source=qr" class="iconi"><i class="fa-brands fa-instagram"></i></a>
        <a href="http://www.tiktok.com/@gideaelectricalengineer" class="iconi"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>

    <!-- Footer Main -->
    <div class="footer-container">
      
      <!-- Logo & Quote -->
      <div class="footer-col footer-logo">
        <img src="images/logo.jpg" alt="Gidea Logo">
        <p>Gidea offers full range of electrical services for household & industrial level.</p>
        <a href="https://wa.me/+2348147249076" target="_blank" class="quote-btn2">Get a Quote →</a>
      </div>

      <!-- Quick Links -->
        <div class="footer-col">
        <h4>Quick Links:</h4>
        <ul>
            <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li><hr>
            <li><a href="services.php" class="<?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">Services</a></li><hr>
            <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About Us</a></li><hr>
            <li><a href="projects.php" class="<?= basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : '' ?>">Projects</a></li><hr>
            <li><a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a></li><hr>
        </ul>
        </div>


      <!-- Services -->
      <div class="footer-col">
        <h4>Services:</h4>
        <ul class="footer-services">
          <li><a href="#">Air Conditioning</a></li>
          <li><a href="#">Electrical Panels</a></li>
          <li><a href="#">Security System</a></li>
          <li><a href="#">Indoor Lighting</a></li>
          <li><a href="#">Electrical Services</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="footer-col contact-info2">
        <h4>Contact Info:</h4>
        <p><span><i class="fas fa-map-marker-alt"></i></span> Garki AMAC Abuja</p><hr>
        <p><span><i class="fas fa-phone"></i></span> 08031129722, 08147249076</p><hr>
        <p><span><i class="fas fa-envelope"></i></span> info@gelectricalengineering.com</p><hr>
        <p><span><i class="far fa-clock"></i></span> Monday–Friday 10am – 6pm</p>
      </div>
  </footer>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>Copyright 2025 © Gidea Electrical Engineering Limited. All rights reserved.</p>
      <p>Designed by: <b>Hello</b></p>
    </div>
