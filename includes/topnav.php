<style>
  header {
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  /* Scroll-to-top button */
  #scrollTopBtn {
    display: none; /* hidden by default */
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 999;
    background-color: #001139;
    color: #FFD700;
    border: none;
    outline: none;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    transition: background 0.3s ease;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  }

  #scrollTopBtn:hover {
    background-color: #f9b208;
    color: #001139;
  }

  .topnav {
    background: #001139;
    color: white;
    font-size: 14px;
    padding: 8px 40px;
    margin-left: -2px;
    padding-right: 115px;
    height: 25px;
    display: flex;
    justify-content: space-between;
    font-weight: 100;
  }

  .topnav a {
    text-decoration: none;
    margin-left: 10px;
  }

  /* Yellow clock & envelope */
  .topnav .fa-clock,
  .topnav .fa-envelope {
    color: #f9b208;
    margin-right: 5px;
  }

  /* Social Icons in white squares */
  .icon-t {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 20px;
    height: 20px;
    margin: 4px -11px;
    padding-top: 2px;
    background: white;
    color: #001f4d;
    text-decoration: none;
    font-size: 14px;
  }

  .icon-t:hover {
    background: #f9b208;
    color: #001f4d;
  }

  .contact-info {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .contact-info .time {
    padding-right: 15px;
    border-right: 1px solid #f9b208;
  }

  .contact-info .email {
    padding-left: 1px;
  }

  /* Navbar */
  nav {
    background: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: 360px;
    padding-top: 32px;
    padding-bottom: 32px;
    margin-top: -110.5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

  .logo img {
    max-height: 50px;
  }

  /* Menu Links */
  .menu {
    display: flex;
    gap: 80px;
  }

  .menu a {
    text-decoration: none;
    color: #001139;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    z-index: 10;
  }

  .menu a:hover {
    color: #FFD700;
  }

  .menu .active {
    color: #FFD700;
    text-decoration: underline;
  }

  /* Call Now Button */
  .btn-call {
    background: #000D1A;
    color: #FFD700;
    padding: 10px 20px;
    margin-right: 85px;
    font-weight: solid;
    font-size: 14px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    z-index: 10;
    text-decoration: underline;
  }

  .btn-call svg {
    width: 15px;   /* ✅ regulate icon size */
    height: 15px;
    flex-shrink: 0; /* prevents it from squishing */
  }

  .btn-call:hover {
    background: #001f4d;
  }

  .logo-wrapper {
    display: flex;
    align-items: center;
    height: 110px;  /* same height as logo */
    position: relative;
  }

  .logo {
    background-color: #001139;
    height: 110px;
    margin-top: -10px;
    width: 280px;
    padding-left: 50px;
    display: flex;
    align-items: center;
    clip-path: polygon(0 0, 80% 0, 100% 100%, 0% 100%);
  }

  .logo img {
    max-height: 41%;
    max-width: 41%;
    height: auto;
    width: auto;
    margin-left: -10px;
    margin-top: 10px;
  }

  .parallelogram {
    width: 14px;
    height: 96%;
    background: #f9b208;
    transform: skew(31.0deg);
    margin-top: -7px;
    margin-left: -62px;
  }

  /* Mobile Styles */
  @media (max-width: 992px) {
    .topnav { display: none; }
    .btn-call { display: none; } /* ✅ hide call button */

    nav {
      flex-wrap: wrap;
    }

    .navbar-toggler {
      display: block;
      background: #ffffff;
      border: solid 1px #f9b208;
      color: #001139;
      font-size: 24px;
      padding: 8px 12px;
      margin-left: auto; /* ✅ push it fully right */
      margin-right: 10px;
      cursor: pointer;
    }

    .navbar-toggler:hover {
      border: solid 5px #f9b208;
    }

    .logo-wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between; /* ✅ logo left, toggle right */
      width: 100%;
      height: 90px;  /* same height as logo */
      background-color: white;
      box-shadow: 0 4px 6px rgba(0, 31, 77, 0.3);
    }

    .btn-call {
      margin: 10px 20px 0 20px;
    }

    .logo {
      background-color: #001139;
      height: 95px;
      margin-top: -5px;
      width: 200px;
      padding-left: 20px;
      display: flex;
      align-items: center;
      clip-path: polygon(0 0, 71% 0, 100% 100%, 0% 100%);
    }

    .parallelogram {
      width: 14px;
      height: 100%;
      background: #f9b208;
      transform: skew(33.0deg);
      margin-top: 0px;
      margin-left: -60px;
    }

    .logo img {
      max-height: 50%;
      max-width: 97%;
      margin-top: 10px;
      height: 91px;
      width: auto;
      margin-left: 0;
    }
  }

  @media (min-width: 993px) {
    .navbar-toggler { display: none; }
  }

  @media (max-width: 992px) {
    .menu {
      max-height: 0;             /* hidden by default */
      overflow: hidden;          /* hide content until expanded */
      flex-direction: column;
      align-items: flex-start;
      width: 80%;
      margin-left: 15px;
      background: white;
      padding: 0 20px;           /* padding collapsed initially */
      border-top: none;
      gap: 20px;
      position: absolute;
      top: 90px;                /* just below logo-wrapper */
      left: 0;
      z-index: 2000;
      transition: max-height 0.4s ease, padding 0.3s ease;
    }

    .menu.show {
      display: flex;             /* keep flex so items stack */
      max-height: 500px;         /* large enough for all links */
      padding: 15px 20px;        /* expand padding on open */
    }
  }

  /* Default: hide on desktop/tablet */
  .search-toggle,
  .btn-solution {
    display: none;
  }

  /* ✅ Show only on mobile */
  @media (max-width: 992px) {
    .search-toggle {
      background: #001139;
      color: white;
      border: none;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      margin-top: 10px;
    }

    .search-toggle i {
      font-size: 18px;
    }

    .search-toggle:hover {
      background: #FFD700;
      color: #001139;
    }

    .btn-solution {
      display: block;
      background: #FFD700;
      color: #001139;
      text-align: center;
      padding: 12px 20px;
      margin-top: 15px;
      font-weight: 600;
      font-size: 16px;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .btn-solution:hover {
      background: #f9b208;
    }
  }

  /* ✅ Tablet View */
  @media (min-width: 768px) and (max-width: 1023px) {
    .search-toggle {
      background: #001139;
      color: white;
      border: none;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      margin-top: 10px;
    }

    .search-toggle i {
      font-size: 18px;
    }

    .search-toggle:hover {
      background: #FFD700;
      color: #001139;
    }

    .btn-solution {
      display: block;
      background: #FFD700;
      color: #001139;
      text-align: center;
      padding: 12px 20px;
      margin-top: 15px;
      font-weight: 600;
      font-size: 16px;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .btn-solution:hover {
      background: #f9b208;
    }

    .menu {
      max-height: 0;             /* hidden by default */
      overflow: hidden;          /* hide content until expanded */
      flex-direction: column;
      align-items: flex-start;
      width: 85%;
      margin-left: 60px;
      background: white;
      padding: 0 20px;           /* padding collapsed initially */
      border-top: none;
      gap: 20px;
      position: absolute;
      top: 90px;                /* just below logo-wrapper */
      left: 0;
      z-index: 2000;
      transition: max-height 0.4s ease, padding 0.3s ease;
    }

    .menu.show {
      display: flex;             /* keep flex so items stack */
      max-height: 500px;         /* large enough for all links */
      padding: 15px 20px;        /* expand padding on open */
    }

    .topnav { display: none; }
    .btn-call { display: none; } /* ✅ hide call button */

    nav {
      flex-wrap: wrap;
    }

    .navbar-toggler {
      display: block;
      background: #ffffff;
      border: solid 1px #f9b208;
      color: #001139;
      font-size: 24px;
      padding: 8px 12px;
      margin-left: auto; /* ✅ push it fully right */
      margin-right: 30px;
      cursor: pointer;
    }

    .navbar-toggler:hover {
      border: solid 5px #f9b208;
    }

    .logo-wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between; /* ✅ logo left, toggle right */
      width: 100%;
      background-color: white;
      box-shadow: 0 4px 6px rgba(0, 31, 77, 0.3);
    }

    .btn-call {
      margin: 10px 20px 0 20px;
    }

    .logo {
      background-color: #001139;
      height: 96px;
      margin-top: -5px;
      width: 300px;
      padding-left: 25px;
      display: flex;
      align-items: center;
      clip-path: polygon(0 0, 68% 0, 100% 100%, 0% 100%);
    }

    .parallelogram {
      width: 14px;
      height: 100%;
      background: #f9b208;
      transform: skew(46.5deg);
      margin-top: 0px;
      margin-left: -82px;
    }

    .logo img {
      max-height: 50%;
      max-width: 96%;
      height: 98px;
      width: auto;
      margin-left: 10px;
    }
  }
</style>


<header>
  <!-- Topbar -->
  <div class="topnav">
    <div class="contact-info">
      <span class="time"><i class="fa-regular fa-clock"></i> Mon-Fri: 10am - 6pm</span>
      <span class="email"><i class="fa-regular fa-envelope"></i> info@gideaelectricalengineering.com</span>
    </div>
    <div>
      <a href="https://www.facebook.com/share/17A7ScnsKa/?mibextid=wwXIfr" class="icon-t"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/gideaee?igsh=MXYzazFkcnZzZDF1Mg%3D%3D&utm_source=qr" class="icon-t"><i class="fa-brands fa-instagram"></i></a>
      <a href="http://www.tiktok.com/@gideaelectricalengineer" class="icon-t"><i class="fa-brands fa-tiktok"></i></a>
    </div>
  </div>

    <div class="logo-wrapper">
    <div class="logo">
      <a href="index.php"><img src="images/logo.jpg" alt="Logo"></a>
    </div>
    <div class="parallelogram"></div>
    <button class="navbar-toggler" onclick="toggleMenu()">
      <span class="fa fa-bars"></span>
    </button>
    </div>
  <nav>
    <div class="menu" id="navbarMenu">
      <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
      <a href="services.php" class="<?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">Services</a>
      <a href="projects.php" class="<?= basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : '' ?>">Projects</a>
      <a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About Us</a>
      <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
      <button class="search-toggle">
        <i class="fa fa-search"></i>
      </button>
      <a href="#" class="btn-solution">Get Solution</a>
    </div>

    <a href="https://wa.me/+2348147249076" class="btn-call">
      Call Now
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.26">
        <g fill="#f9b208">
          <path d="M118.11,15.41c-0.16,0.2-0.33,0.39-0.51,0.59L88.53,44.56l7.46,0.39c3.19,0.16,5.65,2.88,5.49,6.07 c-0.16,3.19-2.88,5.65-6.07,5.49l-20.76-1.05c-2.84-0.14-5.11-2.32-5.45-5.05l0,0l-2.77-21.94c-0.4-3.18,1.83-6.08,5.02-6.49 c3.18-0.4,6.08,1.83,6.49,5.02l1.2,9.52l29.5-30.58L118.11,15.41z"/>
          <path d="M33.84,50.26c4.13,7.45,8.89,14.6,15.08,21.12c6.19,6.57,13.9,12.54,23.89,17.62 
            c0.73,0.37,1.44,0.37,2.06,0.11c0.96-0.37,1.91-1.14,2.88-2.1c0.73-0.73,1.66-1.92,2.62-3.2c3.83-5.05,8.59-11.32,15.3-8.19 
            c0.15,0.07,0.26,0.15,0.41,0.22l22.36,12.87c0.07,0.04,0.15,0.11,0.22,0.15c2.95,2.02,4.17,5.15,4.21,8.7 
            c0,3.61-1.33,7.67-3.28,11.1c-2.58,4.53-6.38,7.52-10.76,9.51c-4.17,1.91-8.81,2.95-13.27,3.61c-7,1.03-13.56,0.37-20.28-1.7 
            c-6.57-2.02-13.17-5.39-20.39-9.84l-0.52-0.34c-3.31-2.06-6.9-4.28-10.4-6.9C31.11,93.31,18.03,79.3,9.51,63.89 
            C2.36,50.94-1.55,36.97,0.58,23.66c1.18-7.3,4.32-13.94,9.77-18.32c4.75-3.83,11.17-5.93,19.47-5.2c0.96,0.07,1.81,0.63,2.25,1.44 
            l14.35,24.26c2.1,2.73,2.36,5.42,1.22,8.12c-0.96,2.21-2.88,4.24-5.5,6.16c-0.77,0.66-1.7,1.33-2.66,2.02 
            c-3.2,2.32-6.86,5.01-5.61,8.19L33.84,50.26z"/>
        </g>
      </svg>

    </a>
  </nav>
</header>

<!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="scrollTopBtn">
  <i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

<script>
  // ✅ Mobile Menu Toggle
  function toggleMenu() {
    let menu = document.getElementById("navbarMenu");
    menu.classList.toggle("show");
  }

  // ✅ Close menu when clicking a link (optional, for mobile UX)
  document.querySelectorAll("#navbarMenu a").forEach(link => {
    link.addEventListener("click", () => {
      document.getElementById("navbarMenu").classList.remove("show");
    });
  });
</script>
