<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Gidea</title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo.jpg">

<!-- For Apple devices -->
<link rel="apple-touch-icon" href="images/logo.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f9f9f9;
    }

  </style>
</head>
<body>
<?php include "includes/topnav.php"?>
<?php include "includes/contactslider.php"?>
<?php include "includes/stats.php"?>

<style>
/* Contact Section */
.contact-section {
  padding: 60px 10%;
  font-family: Arial, sans-serif;
  background: transparent; /* no background */
  color: #000; /* switch text color to dark for readability */
  background-color: #ecebebff;
}

.contact-container2 {
  display: flex;
  gap: 50px;
  flex-wrap: wrap;
}

.contact-info-contact, .contact-form {
  flex: 1;
  min-width: 300px;
}

/* Titles */
.contact-info-contact h2 {
  font-size: 28px;
  margin-bottom: 10px;
  color: #001f4d;
}
.subtitle {
  color: #001f4d;
  margin-bottom: 30px;
}

/* Info Boxes */
.info-box {
  display: flex;
  align-items: center;
  background: #fff;
  color: #000;
  padding-left: 25px;
  padding-right: 15px;
  padding-bottom: 15px;
  padding-top: 15px;
  margin-right: 120px;
  margin-bottom: 20px;
}
.info-box i {
  font-size: 20px;
  color: #001f4d;
  margin-right: 15px;
  padding-right: 12px;
}

.box2 i {
  background:#001f4d;
  color: #fff;           /* white icon */
  font-size: 18px;
  display: flex;
  align-items: center;
  border-radius: 4px;
  padding:  4px;
  justify-content: center;
  margin-right: 25px;    /* space between icon and text */
}

.info-box h4 {
  margin: 0;
  font-size: 16px;
  font-weight: bold;
  color: #001f4d;
}
.info-box p {
  margin: 2px 0 0;
  font-size: 14px;
  color: #001f4d;
}
.info-box a {
  color: #001f4d;
  text-decoration: none;
}

/* Social Icons */
.social-icons {
  margin-top: 20px;
}
.social-icons a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 35px;
  height: 35px;
  background: #001f4d;
  color: #fff;
  margin-right: 10px;
  font-size: 16px;
  transition: 0.3s;
  text-decoration: none;
}
.social-icons a:hover {
  background: #f9b208;
  color: #001f4d;
}

/* Form */
.form-title {
  color: #001f4d;
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  letter-spacing: 1.2px;
  font-family: 'Inter', sans-serif;
}

.contact-form form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}
.row {
  display: flex;
  gap: 15px;
  margin-right: -23px;
}
.row input {
  flex: 1;
}

input, textarea {
  width: 100%;
  padding: 12px;
  background-color: #fff; /* white inputs */
  border: 0px solid #ccc;
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  color: #000;
}
textarea {
  resize: none;
  height: 100px;
}

/* Checkbox */
.checkbox {
  font-size: 14px;
  display: flex;
  align-items: center;
  gap: 8px;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #333;
  margin-left: -550px;
}
.checkbox p{
    margin-left: -530px;
}
.checkbox input {
  accent-color: #001f4d; /* styled checkbox */
}

/* Button */
.btn-submit {
  background: #001f4d;
  color: #fff;
  padding: 14px;
  border: none;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
}
.btn-submit:hover {
  background: #f9b208;
  color: #001f4d;
}
/* ----------- Mobile View (≤480px) ----------- */
@media (max-width: 480px) {
  .contact-section {
    padding: 30px 5%;
    margin-top: 40px;
    padding-top: 60px;
  }

  .contact-container2 {
    flex-direction: column;
    gap: 25px;
  }

  .contact-info-contact h2 {
    font-size: 22px;
  }

  .subtitle {
    font-size: 14px;
    margin-bottom: 20px;
  }

  .info-box {
    flex-direction: row;
    align-items: flex-start;
    padding: 12px;
    margin-right: 0;
  }

  .info-box h4 {
    font-size: 14px;
  }

  .info-box p {
    font-size: 13px;
  }

  .social-icons {
    display: flex;
    justify-content: flex-start;
    flex-wrap: wrap;
    gap: 10px;
  }

  /* Form */
  .contact-form {
    margin: 0;
    width: 100%;
  }

  .form-title {
    font-size: 14px;
    margin-bottom: 15px;
  }
  .row {
    flex-direction: column;
    gap: 12px;
    margin-right: 0;
  }

  input, textarea {
    width: 100%;
    font-size: 13px;
    padding: 10px;
  }

  textarea {
    height: 90px;
  }

  /* Checkbox */
  .checkbox {
    flex-direction: row;
    align-items: left;
    gap: 0;
    margin-left: -300px;
  }

  .checkbox p {
    margin: 0;
    font-size: 14px;
    margin-left: -270px;
  }

  /* Button */
  .btn-submit {
    width: 100%;
    padding: 12px;
    font-size: 14px;
  }
}
@media (max-width: 480px) {

  input, textarea {
    width: 100%;       /* ensure full width */
    box-sizing: border-box; /* prevent overflow */
  }

}
/* ----------- Tablet View (769px – 1024px) ----------- */
@media (min-width: 769px) and (max-width: 1024px) {
  .contact-section {
    padding: 40px 7%;
  }

  .contact-container2 {
    flex-direction: column;  /* stack info + form vertically */
    gap: 35px;
  }

  .contact-info-contact h2 {
    font-size: 24px;
  }

  .subtitle {
    font-size: 15px;
    margin-bottom: 20px;
  }

  .info-box {
    margin-right: 0;   /* remove extra spacing */
    padding: 14px;
  }

  .info-box h4 {
    font-size: 15px;
  }

  .info-box p {
    font-size: 13.5px;
  }

  /* Form */
  .contact-form {
    width: 100%;
    margin: 0;
  }

  .form-title {
    font-size: 15px;
    margin-bottom: 18px;
  }

  .row {
    flex-direction: column;  /* stack inputs in rows */
    gap: 14px;
    margin-right: 0;
  }

  input, textarea {
    font-size: 14px;
    padding: 11px;
    width: 100%;
    box-sizing: border-box;
  }

  textarea {
    height: 95px;
  }

  /* Checkbox */
  .checkbox {
    flex-direction: row;
    margin-left: -750px;  /* reset negative margin */
    gap: 8px;
    align-items: center;
  }

  .checkbox p {
    margin: 0;
    font-size: 16px;
    margin-left: -700px;  /* reset negative margin */
  }

  /* Button */
  .btn-submit {
    width: 100%;
    padding: 13px;
    font-size: 15px;
  }
}

</style>


<section class="contact-section">
  <div class="contact-container2">
    
    <!-- Left Column -->
    <div class="contact-info-contact">
      <h2>Contact Us</h2>
      <p class="subtitle">Got a project in mind? Let’s power it up.</p>

      <div class="info-box box2">
        <i class="fa-solid fa-location-dot"></i>
        <div>
          <h4>Address</h4>
          <p>123 North tower New York, USA</p>
        </div>
      </div>

      <div class="info-box">
        <i class="fa-solid fa-envelope"></i>
        <div>
          <h4>Mail Us</h4>
          <p><a href="mailto:info@gelectricalengineering.com"><u>info@gelectricalengineering.com</u></a></p>
        </div>
      </div>

      <div class="info-box">
        <i class="fa-regular fa-clock"></i>
        <div>
          <h4>Opening Hours 24/7</h4>
          <p>Customer support: 02013306427</p>
        </div>
      </div>

      <!-- Social Media -->
      <div class="social-icons">
        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://tiktok.com"><i class="fa-brands fa-twitter"></i></a>
      </div>
    </div>

    <!-- Right Column -->
    <div class="contact-form">
      <p class="form-title">
        Whether you're planning a solar upgrade or need quick electrical support, 
        our team is ready to help.
      </p>
      <form>
        <div class="row">
          <input type="text" placeholder="Your Name" required>
          <input type="email" placeholder="Your Email" required>
        </div>
        <div class="row">
          <input type="text" placeholder="Your Phone">
          <input type="text" placeholder="Your Project">
        </div>
        <input type="text" placeholder="Subject">
        <textarea placeholder="Message"></textarea>

        <label class="checkbox">
          <input type="checkbox" required> 
          <p>I agree with the site policy</p>
        </label>

        <button type="submit" class="btn-submit">Send Message</button>
      </form>
    </div>
  </div>
</section>
<?php include "includes/map.php"?>
<?php include "includes/cta.php"?>
<?php include "includes/footer.php"?>
  
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