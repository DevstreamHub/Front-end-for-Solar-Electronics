
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
.contact-form {
    margin-left: -100px;
    margin-top: 30px;
}

.contact-form form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}
.row {
  display: flex;
  gap: 15px;
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
</style>


<section class="contact-section">
  <div class="contact-container2">
    
    <!-- Left Column -->
    <div class="contact-info-contact">
      <h2>Contact Us</h2>
      <p class="subtitle">Got a project in mind? Let’s power it up.</p>

      <div class="info-box">
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
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
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