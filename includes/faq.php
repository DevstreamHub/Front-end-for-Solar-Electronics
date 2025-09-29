<style>
  .faq-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 120px 100px;
    font-family: 'Poppins', sans-serif;
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 50px;
    align-items: start;
    background-color: #F4F4F4;
  }

  /* Left side text */
  .faq-left h4 {
    color: #001139;
    font-size: 1.2rem;
    margin-bottom: 10px;
  }

  .faq-left h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #001139;
    margin-bottom: 20px;
  }

  .faq-left p {
    color: #555;
    font-size: 1.05rem;
    text-align: justify;
    line-height: 1.8;
    margin-bottom: 30px;
  }

  .faq-left button {
    padding: 12px 24px;
    background: #001139;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.3s ease;
  }

  .faq-left button:hover {
    background: #f1c40f;
    color: #001139;
  }

  /* Right side accordion */
  .faq-accordion {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .faq-item {
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    overflow: hidden;
  }

  .faq-question {
    padding: 18px 20px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #001139;
  }

  .faq-question i {
    transition: transform 0.3s ease;
  }

  .faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, padding 0.3s ease;
    padding: 0 20px;
    color: #FFFFFF;
    font-size: 0.95rem;
    background-color: #001139;
    line-height: 1.6;
  }

  .faq-item.active .faq-answer {
    max-height: 200px;
    padding: 15px 20px;
  }

  .faq-item.active .faq-question i {
    transform: rotate(180deg);
  }

  /* 📱 Responsive */
  @media (max-width: 900px) {
    .faq-container {
      grid-template-columns: 1fr;
      gap: 40px;
      padding: 80px 50px;
    }

    .faq-left h1 {
      font-size: 2rem;
    }

    .faq-left p {
      font-size: 1rem;
    }

    .faq-left button {
      width: 100%;
      text-align: center;
    }
  }

  @media (max-width: 480px) {
    .faq-container {
      padding: 60px 20px;
      gap: 30px;
    }

    .faq-left h4 {
      font-size: 1rem;
    }

    .faq-left h1 {
      font-size: 1.6rem;
    }

    .faq-left p {
      font-size: 0.95rem;
    }

    .faq-left button {
      font-size: 20px;
      padding: 10px 20px;
      text-align: left;
    }

    .faq-question {
      font-size: 0.95rem;
      padding: 15px 15px;
    }

    .faq-answer {
      font-size: 0.9rem;
      padding: 0 15px;
    }

    .faq-item.active .faq-answer {
      padding: 10px 15px;
    }
  }
  /* Tablet View: 769px�1024px */
@media (min-width: 769px) and (max-width: 1024px) {
        .faq-left h4 {
      font-size: 8px;
    }

    .faq-left h1 {
      font-size: 10px;
      line-height: 10.5px;
      margin-right: 40px;
    }
    .faq-left p {
      font-size: 8px;
      line-height: 10.4px;
    }
    .faq-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 60px;
        font-family: 'Poppins', sans-serif;
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 50px;
        align-items: start;
        background-color: #F4F4F4;
      }
}
</style>

<div class="faq-container">
  <!-- Left Side -->
  <div class="faq-left">
    <h4>Some Important FAQ’s</h4>
    <h1>Common Frequently Asked Questions?</h1>
    <p>
      At Gidea Electrical Engineering, our customers trust us for reliable, 
      professional, and efficient electrical solutions. At Gidea Electrical 
      Engineering, our customers trust us for reliable, professional, and 
      efficient electrical solutions.
    </p>
    <a href="https://wa.me/2348147249076" target="_blank">
      <button> 
        Have a Question ?
      </button>
    </a>
  </div>

  <!-- Right Side Accordion -->
  <div class="faq-accordion">
    <div class="faq-item">
      <div class="faq-question">
        Q: What are the costing of your electrician services?
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="faq-answer">
        Our service costs depend on the type of work and project size. We provide affordable pricing tailored to your needs.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Q: What is the cost of wiring in house basement?
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="faq-answer">
        Wiring costs vary by house size and materials. Contact us for a free quote specific to your project.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Q: What should we do in a sudden power cut?
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="faq-answer">
        Stay calm, check your main switch, and call our emergency service for immediate help.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Q: How to claim an insurance for an electric damage?
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="faq-answer">
        We guide you through filing an insurance claim for electrical damages with proper documentation.
      </div>
    </div>
  </div>
</div>
