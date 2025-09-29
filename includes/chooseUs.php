<style>
/* -------------------------
   Base Styles (All Screens)
--------------------------*/
.choose-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  gap: 20px;
  padding: 70px;
  padding-bottom: 30px;
  background-color: white;
}

.choose-text,
.choose-image,
.choose-images {
  flex: 1;
  min-width: 300px;
}

.choose-text h2 {
  color: #001139;
  font-size: 35px;
  margin-bottom: 10px;
}

.choose-text h3 {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 20px;
}

.choose-text p {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 15px;
  padding-right: 90px;
  color: #333;
  text-align: justify;
  font-family: 'Inter', sans-serif;
}

.choose-text ul {
  margin: 15px 0;
  padding-left: 20px;
  line-height: 1.4;
}

.choose-text ul li {
  margin-bottom: 8px;
  font-size: 15px;
}

.btn-learn {
  display: inline-block;
  padding: 12px 20px;
  background: transparent;
  border: 2px solid #001139;
  color: #001139;
  font-weight: 500;
  margin-top: 15px;
  text-decoration: none;
  transition: 0.3s;
}

.btn-learn:hover {
  background: #001139;
  color: #fff;
}

/* Quote Button */
.quote-btn {
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  background: #FFD700;
  color: #001f4d;
  font-weight: 600;
  margin-top: 30px;
  padding: 12px 20px;
  border-radius: 4px;
  text-decoration: none;
  font-size: 16px;
  transition: 0.3s;
}

.quote-btn:hover {
  background: #001f4d;
  color: #FFD966;
}

.icon-circle {
  background: #001f4d;
  color: #FFD966;
  border-radius: 50%;
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
}

.icon-circle:hover {
  background: #FFD966;
  color: #001f4d;
}

/* Video Section */
.choose-image {
  text-align: center;
  position: relative;
}

.video-container {
  position: relative;
  width: 100%;
  max-width: 800px;
  margin: 20px auto;
}

.video-container iframe {
  width: 100%;
  height: 550px;
  border: none;
}

.video-container::before,
.video-container::after {
  content: "";
  position: absolute;
  left: 0;
  width: 596px;
  height: 30px;
  background-color: yellow;
  z-index: 2;
}

.video-container::before { top: -20px; }
.video-container::after { bottom: -10px; }

/* Choose Images - Hidden on Desktop */
.choose-images {
  display: none;
}

/* -------------------------
   Responsive: Tablet & Mobile
--------------------------*/
@media (max-width: 1023px) {
  .choose-section {
    padding: 30px 20px;
    margin-top: 10px;
  }

  .choose-text h2 {
    font-size: 24px;
    color: #f9b208;
  }

  .choose-text h3,
  .btn-learn {
    display: none;
  }

  .choose-text p {
    font-size: 14px;
    line-height: 1.5;
    padding-right: 0;
  }

  .choose-text ul {
    font-size: 13px;
    padding-left: 0;
    list-style-position: inside;
  }

  .choose-text ul li {
    margin-bottom: 5px;
  }

  /* Hide video on small screens */
  .choose-image {
    display: none;
  }

  .video-container iframe {
    height: 250px;
  }

  .video-container::before,
  .video-container::after {
    width: 100%;
  }

  .quote-btn {
    font-size: 13px;
    padding: 8px 14px;
    gap: 8px;
  }

  .icon-circle {
    width: 24px;
    height: 24px;
    font-size: 11px;
  }
}
/* Base style - hidden on desktop */
.choose-images {
  display: none;
}

@media (min-width: 768px) and (max-width: 1023px) {
  .choose-images {
    display: flex;
    flex-direction: column;
    gap: 15px;
    width: 100%;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .choose-images .img1 {
    width: 100%;
    position: relative;
    z-index: 1;
  }

  .choose-images .img1 img {
    width: 100%;
    height: 430px; /* Increased to fill gap created by bluebg shift */
    object-fit: cover;
  }

  .choose-images .img2 {
    display: flex;
    width: 100%;
    justify-content: center;
    margin-top: -80px; /* Reduce overlap so bluebg shifts DOWN */
    z-index: 2;
    position: relative;
  }

  .bluebg {
    width: 50%;
    height: 200px;
    background-color: #001f4d;
    color: white;
    padding: 30px 10px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    box-sizing: border-box;
    align-self: flex-end; /* ensures it's bottom-aligned with profile-half */
    margin-top: auto;     /* allows natural bottom alignment */
  }

  .profile-half {
    width: 50%;
    height: 320px;
    object-fit: cover;
    border: 30px solid white;
    box-sizing: border-box;
    margin-top: -80px;
  }

  .bluebg p:first-child {
    font-size: 36px;
    font-weight: bold;
    margin: 0;
  }

  .bluebg p:last-child {
    font-size: 16px;
    margin: 0;
  }

  .profile-main {
    width: 100%;
    height: 530px; /* Increased to compensate for bluebg space */
    object-fit: cover;
    border-radius: none;
  }
  .choose-text{
      margin-top: 50px;
      margin-left: 20px;
      margin-right:10px;
  }
}


/* -------------------------
   Desktop Only Overrides
--------------------------*/
@media (min-width: 1024px) {
  .choose-images {
    display: none;
  }

  .choose-image {
    display: block;
  }
}
/* Hide Contact button on desktop */
.btn-contact {
  display: none;
}

/* Show Contact button on tablet and mobile only */
@media (max-width: 1023px) {
  .btn-contact {
    display: inline-block;
    margin-top: 15px;
    padding: 12px 20px;
    background-color: #001f4d;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
  }

  .btn-contact:hover {
    background-color: #f9b208;
    color: #001139;
  }
}
@media (max-width: 767px){
    .choose-images {
    display: flex;
    flex-direction: column;
    gap: 15px;
    width: 100%;
    align-items: center;
    justify-content: center;
  }
  .choose-section {
    padding: 30px 20px;
    margin-top: -60px;
  }

  .choose-images .img1,
  .choose-images .img2 {
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .choose-images .img1 img {
    width: 100%;
    max-width: 100%;
    height: auto;
  }

  .choose-images .img2 {
    display: flex;
    gap: 10px;
    margin-top: 10px;
  }

  .choose-images .img2 .profile-half {
    width: 50%;
    height: auto;
    object-fit: cover;
  }
.bluebg {
    flex: 1;
    background-color: #001f4d;
    color: white;
    padding: 30px 10px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .bluebg p:first-child {
    font-size: 36px;
    font-weight: bold;
    margin: 0;
  }

  .bluebg p:last-child {
    font-size: 16px;
    margin: 0;
  }
  .profile-main {
    width: 100%;
    height: auto;
    object-fit: cover;
  }
}

</style>

<!-- Why Choose Us Section -->
<section class="choose-section">
  <div class="choose-text">
    <h2>Why Choose Us?</h2>
    <h3>Gidea Ensures secured wiring<br>For Your space.</h3>
    <p>
      At Gidea Electrical Engineering Company Abuja, we offer 
      subscription/maintenance services for our top clients who 
      are in need of operational services. Like hotels, schools, 
      shopping malls, clubs, churches, event centers etc.
    </p>
    <p>
      With years of experience and expertise in the industry, we ensure 
      precision, safety, and reliability in every project.
    </p>
    <ul>
      <li>Certified Expert Electrician</li>
      <li>Trusted By Thousands Clients</li>
      <li>Prompt Support & Solution</li>
      <li>20 Expert Electrician</li>
      <li>Modern Equipment Use</li>
      <li>Minimum Costing</li>
    </ul>
    <a href="about.php" class="btn-learn">LEARN MORE ABOUT US</a>
    <a href="about.php" class="btn-contact">Contact Us</a>
  </div>

  <div class="choose-image">
    <div class="video-container">
      <iframe src="gidea.mp4"
              frameborder="0"
              allowfullscreen></iframe>
    </div>
  </div>

  </div>

  <div class="choose-images">
    <div class="img1">
      <img src="images/ci.jpg" alt="profile" class="profile-main">
    </div>
    <div class="img2">
      <div class="bluebg">
        <p class="exp-number">15+</p>
        <p class="exp-text">Years of Experience</p>
      </div>
      <img src="images/services.jpg" alt="profile" class="profile-half">
    </div>
  </div>
</section>
