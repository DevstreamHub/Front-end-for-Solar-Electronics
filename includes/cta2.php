<!-- CTA Section -->
<style>
/* Hide CTA section on mobile & tablet */
.cta-section {
    display: block; /* default for desktop */
}

@media (max-width: 1024px) {
    .cta-section {
        display: none;
    }
}

  .cta-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
  }

  .cta-content h1 {
    font-size: 2.2rem;
    font-weight: bold;
    margin-bottom: 15px;
  }

  .cta-content p {
    font-size: 1.2rem;
    margin-bottom: 20px;
  }

  .cta-section {
    position: relative;
    background: url('images/cta.jpg') no-repeat center center/cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    overflow: hidden;
    padding: 0 15px;
  }

  .cta-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: #000000B0;
    z-index: 1;
  }

  /* Top-left slants */
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

  .cta-section::before {
    top: 0;
    left: 10px;
  }

  .cta-section::after {
    top: 0;
    left: -50px;
  }

  /* Extra bottom-right bars */
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

  .cta-section .bottom-slant {
    right: 10px;
  }

  .cta-section .bottom-slant2 {
    right: -50px;
  }

  .cta-content {
    position: relative;
    z-index: 3;
    max-width: 700px;
    padding: 20px;
  }

  .cta-btn {
    background: #f1c40f;
    color: #001139;
    padding: 12px 25px;
    font-size: 1rem;
    border: none;
    cursor: pointer;
    font-weight: bold;
    border-radius: 5px;
    transition: 0.3s;
    display: inline-flex;
    align-items: center;
  }

  .cta-btn:hover {
    background: #001139;
    transform: translateY(-3px);
    color: #f1c40f;
  }

  .cta-btn i {
    margin-left: 8px;
  }

  /* 📱 Responsive Design */
  @media (max-width: 768px) {
    .cta-section {
      height: auto;
      padding: 60px 20px;
    }

    .cta-content h1 {
      font-size: 1.3rem;
    }

    .cta-content p {
      font-size: 1rem;
    }

    .cta-btn {
      padding: 10px 20px;
      font-size: 0.95rem;
    }
  }

  @media (max-width: 480px) {
    .cta-section {
      padding: 40px 15px;
    }

    .cta-content h1 {
      font-size: 1.5rem;
      line-height: 1.3;
    }

    .cta-content p {
      font-size: 0.95rem;
    }

    .cta-btn {
      width: 100%;
      justify-content: center;
      font-size: 0.9rem;
    }

    /* Hide slants on small phones (optional) */
    .cta-section::before,
    .cta-section::after,
    .cta-section .bottom-slant,
    .cta-section .bottom-slant2 {
      display: none;
    }
  }
</style>

<section class="cta-section">
  <div class="cta-overlay"></div>
  <div class="cta-content">
    <h1>Ready to Power Up Your Space?</h1>
    <p>Let’s talk about how we can bring reliable energy to your home or business.</p>
    <a href="https://wa.me/2348147249076" target="_blank">
      <button class="cta-btn"> 
        Book us now &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </button>
    </a>
  </div>

  <!-- Bottom-right slants -->
  <span class="bottom-slant"></span>
  <span class="bottom-slant2"></span>
</section>
