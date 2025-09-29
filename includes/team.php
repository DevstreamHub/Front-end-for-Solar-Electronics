<style>
  .container-team {
    max-width: 1200px;
    margin: 0 auto;
    padding: 150px 20px;
    font-family: 'Poppins', sans-serif;
  }

  .section-title h2 {
    font-size: 30px;
    text-align: center;
    color: #001139;
    margin-bottom: 10px;
    padding-top: 80px;
  }

.section-title p {
  max-width: 600px;
  margin: 0 auto 40px;
  font-size: 15px;
  text-align: center;
  color: #001139;
  padding-left: 35%;
  padding-right: 35%;
  font-weight: 500;
  line-height: 1.2;
  font-family: 'Inter', sans-serif;
}

  .team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 60px;
  }

  .team-member {
    background: white;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    opacity: 0;
    transform: translateX(-100px);
    animation: slideIn 0.8s forwards;
  }

  .team-member:nth-child(1) { animation-delay: 0.2s; }
  .team-member:nth-child(2) { animation-delay: 0.6s; }
  .team-member:nth-child(3) { animation-delay: 1s; }

  .team-member:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
  }

  .member-image {
    height: 280px;
    position: relative;
    overflow: hidden;
  }

  .member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 0px;
    display: block;
  }

  .member-info {
    padding: 25px;
  }

  .member-name {
    font-size: 1.2rem;
    color: #2c3e50;
    margin-bottom: -20px;
    text-align: left;
  }

  .member-role {
    color: #1E1E1ECC;
    font-weight: 400;
    margin-bottom: 10px;
    font-size: 1rem;
    letter-spacing: 1.5px;
    text-align: left;
  }

  @keyframes slideIn {
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  /* Responsive */

@media (max-width: 768px) {
  .container-team { padding: 100px 20px; margin-top: -50px;}
  .section-title h2 { font-size: 30px !important; padding-top: 60px; color: #FDC80B; text-align: left; }
   .section-title p {
    font-size: 14.5px;
    margin-bottom: 30px;
    text-align: left;
    padding-left: 0;
    padding-right: 0;
  }
  .team-grid { grid-template-columns: 1fr; gap: 30px; }
  /* increased height */
  .member-image { height: 280px; }

  .member-info { padding: 20px; }
  .member-name { font-size: 1.1rem; }
  .member-role { font-size: 0.95rem; }
}

@media (max-width: 480px) {
  .container-team { padding: 60px 15px; }
  .section-title h2 { font-size: 22px; padding-top: 40px; }
  .section-title p {
    font-size: 13px;
    margin-bottom: 25px;
    padding-left: 0;
    padding-right: 0;
  }
  
  /* increased height */
  .member-image { height: 230px; }

  .member-info { padding: 15px; }
  .member-name { font-size: 1rem; }
  .member-role { font-size: 0.9rem; }
}

  /* Social icons container */
.social-icons {
  position: absolute;
  top: 70%;
  right: 10px;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 2;
}

.social-icons a {
  width: 35px;
  height: 35px;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #001139;
  font-size: 16px;
  transition: all 0.3s ease;
  box-shadow: 0 3px 6px rgba(0,0,0,0.15);
}

.social-icons a:hover {
  background: #FDC80B;
  color: #001139;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .social-icons a {
    width: 30px;
    height: 30px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .social-icons {
    right: 5px;
    gap: 8px;
  }

  .social-icons a {
    width: 28px;
    height: 28px;
    font-size: 13px;
  }
}
/* Tablet View: 769px–1024px */
@media (min-width: 769px) and (max-width: 1024px) {
  .container-team {
    padding: 100px 40px;
    margin-top: -30px;
  }

  .section-title h2 {
    font-size: 28px;
    text-align: center;
    color: #001139;
    padding-top: 60px;
  }

  .section-title p {
    font-size: 12px;
    margin-bottom: 35px;
    text-align: center;
    padding-left: 20%;
    padding-right: 20%;
  }

  /* Two columns layout for tablet */
  .team-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
  }

  .member-image {
    height: 260px;
  }

  .member-info {
    padding: 18px;
  }

  .member-name {
    font-size: 12px;
  }

  .member-role {
    font-size: 10px;
  }

  /* Social icons size for tablet */
  .social-icons a {
    width: 32px;
    height: 32px;
    font-size: 15px;
  }
}

</style>

<div class="container-team">
  <div class="section-title">
    <h2>Our Team</h2>
    <p>Most some of our most electrical and solar installation projects—complete with precision, care, and clean energy in mind.</p>
  </div>
  <div class="team-grid">
    <!-- Team Member 1 -->
    <div class="team-member">
      <div class="member-image">
        <img src="images/p11.jpg" alt="Emmanuel Ayomide">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h3 class="member-name">Emmanuel Ayomide</h3>
        <p class="member-role">Electrician</p>
      </div>
    </div>

    <!-- Team Member 2 -->
    <div class="team-member">
      <div class="member-image">
        <img src="images/p2.jpg" alt="Bita Chichloise">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h3 class="member-name">Bita Chichloise</h3>
        <p class="member-role">Electrician</p>
      </div>
    </div>

    <!-- Team Member 3 -->
    <div class="team-member">
      <div class="member-image">
        <img src="images/p3.jpg" alt="Muhammad Sherif">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h3 class="member-name">Muhammad Sherif</h3>
        <p class="member-role">Electrician</p>
      </div>
    </div>
  </div>
</div>
