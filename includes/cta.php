<!-- CTA Section (Desktop + Mobile/Tablet) -->
<style>
  /* Common content styling */
  .cta-content {
    position: relative;
    z-index: 3;
    max-width: 700px;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
    text-align: center;
  }

  .cta-content h1 {
    font-weight: bold;
    margin-bottom: 15px;
  }

  .cta-content p {
    margin-bottom: 20px;
  }

  .cta-btn {
    padding: 12px 25px;
    font-size: 1rem;
    border: none;
    cursor: pointer;
    font-weight: bold;
    border-radius: 5px;
    transition: 0.3s;
  }

  /* =======================
     DESKTOP CTA
     ======================= */
  .cta-section {
    position: relative;
    background: url('images/cta.jpg') no-repeat center center/cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    overflow: hidden;
    padding: 0 15px;
  }

  .cta-section .cta-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: #000000B0;
    z-index: 1;
  }

  /* Yellow slants */
  .cta-section::before,
  .cta-section::after {
    content: "";
    position: absolute;
    width: 40px;
    height: 80%;
    background: #f1c40f;
    transform: skew(-35deg);
    z-index: 2;
  }

  .cta-section::before { top: 0; left: 10px; }
  .cta-section::after { top: 0; left: -50px; }

  .cta-section .bottom-slant,
  .cta-section .bottom-slant2 {
    position: absolute;
    width: 40px;
    height: 80%;
    background: #f1c40f;
    transform: skew(-35deg);
    bottom: 0;
    z-index: 2;
  }

  .cta-section .bottom-slant { right: 10px; }
  .cta-section .bottom-slant2 { right: -50px; }

  .cta-section h1 { font-size: 2.2rem; }
  .cta-section p { font-size: 1.2rem; }
  .cta-section .cta-btn {
    background: #f1c40f;
    color: #001139;
    display: inline-flex;
    align-items: center;
  }
  .cta-section .cta-btn:hover {
    background: #001139;
    color: #f1c40f;
    transform: translateY(-3px);
  }
  .cta-section .cta-btn i { margin-left: 8px; }

  /* =======================
     MOBILE/TABLET CTA
     ======================= */
  .cta-mobile {
    position: relative;
    background: url('images/cta.jpg') no-repeat center center/cover;
    height: 500px;
    display: none; /* default hidden */
    align-items: center;
    justify-content: center;
    color: white;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
    padding: 0 15px;
  }

  .cta-mobile .cta-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: #00000080;
    z-index: 1;
  }

  /* Top 3 slants (LEFT side) */
  .cta-mobile::before,
  .cta-mobile::after,
  .cta-mobile .third-slant {
    content: "";
    position: absolute;
    width: 30px;
    height: 100%;
    transform: skew(-35deg);
    z-index: 2;
    top: -100px; /* Push upwards */
  }

  .cta-mobile::before { left: -70px; background: #001139; } /* Blue */
  .cta-mobile::after  { left: -30px;  background: #f1c40f; } /* Yellow */
  .cta-mobile .third-slant { left: 10px; background: #001139; } /* Blue */

  /* Bottom 3 slants (RIGHT side) */
  .cta-mobile .bottom-slant,
  .cta-mobile .bottom-slant2,
  .cta-mobile .bottom-slant3 {
    position: absolute;
    width: 30px;
    height: 100%;
    transform: skew(-35deg);
    bottom: -100px; /* Push downwards */
    z-index: 2;
  }

  .cta-mobile .bottom-slant  { right: -70px; background: #001139; } /* Blue */
  .cta-mobile .bottom-slant2 { right: -30px;  background: #f1c40f; } /* Yellow */
  .cta-mobile .bottom-slant3 { right: 10px;  background: #001139; } /* Blue */

  .cta-mobile h1 { font-size: 1.8rem; color: #fff; }
  .cta-mobile p { font-size: 1rem; color: #e0e0e0; }
  .cta-mobile .cta-btn {
    background: #001139;
    color: #fff;
  }
  .cta-mobile .cta-btn:hover {
    background: #f1c40f;
    color: #001139;
  }

  /* =======================
     RESPONSIVE RULES
     ======================= */
  @media (max-width: 1024px) {
    .cta-mobile { display: flex; }
    .cta-section { display: none; }
  }

  @media (min-width: 1025px) {
    .cta-mobile { display: none; }
    .cta-section { display: flex; }
  }
</style>


<!-- Desktop CTA -->
<section class="cta-section">
  <div class="cta-overlay"></div>
  <div class="cta-content">
    <h1>Ready to Power Up Your Space?</h1>
    <p>Let&rsquo;s talk about how we can bring reliable energy to your home or business.</p>
    <a href="https://wa.me/2348147249076" target="_blank">
      <button class="cta-btn">
        Book us now &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </button>
    </a>
  </div>
  <span class="bottom-slant"></span>
  <span class="bottom-slant2"></span>
</section>

<!-- Mobile/Tablet CTA -->
<section class="cta-mobile">
  <div class="cta-overlay"></div>
  <div class="cta-content">
    <h1>Ready to Power Up Your Space?</h1>
    <p>Let&rsquo;s talk about how we can bring reliable energy to your home or business.</p>
    <a href="https://wa.me/2348147249076" target="_blank">
      <button class="cta-btn">Book us now</button>
    </a>
  </div>
  <span class="bottom-slant"></span>
  <span class="bottom-slant2"></span>
  <span class="bottom-slant3"></span>
  <span class="third-slant"></span>
</section>
