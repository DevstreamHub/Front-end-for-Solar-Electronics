<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - Gidea</title>
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
<?php include "includes/serviceslider.php"?>
<?php include "includes/stats.php"?>
<?php include "includes/services.php"?>
<?php include "includes/faq.php"?>
<?php include "includes/testimonial.php"?>

<style>
    .container-a {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 100px;
      gap: 40px;
    }
    .image-box img {
      width: 100%;
      position: relative;
      overflow: hidden;
      
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
        .image-box img {
            width: 80%;
            height: 80%;
            object-fit: cover;     /* crops nicely */
            object-position: center;  /* keeps faces visible */
            display: block;
        }
        
    .content-a h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      font-weight: bold;
      color: #0b1c39;
    }
    .step-a {
      background: #0b1c39;
      color: #fff;
      padding: 20px 30px;
      margin-bottom: 20px;
      text-align: justify;
      display: flex;
      align-items: center;
      gap: 20px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }
    .step-a i {
      background: #ffcc00;
      color: #0b1c39;
      font-size: 1.2rem;
      border-radius: 50%;
      padding: 8px;
      flex-shrink: 0;
    }
    .step-a p {
      margin: 0;
      font-size: 22px;
      line-height: 1.5;
    }
    @media (max-width: 1023px) {
      .container-a {
      display: none;
    }
.image-frame {
  background: #0b1c39;
  padding: 35px 0;
  display: flex;
  justify-content: center;
  overflow: hidden; /* hides bottom part */
  height: 600px;    /* fix visible height */
}

.image-frame img {
  width: 100%;
  height: auto;
  object-fit: cover;     /* fills container */
  object-position: top;  /* keeps top part, cuts from bottom */
}

  </style>
</head>
<body>

  <div class="container-a">
    <!-- Left Image -->
    <div class="image-box">
  <div class="image-frame">
    <img src="images/pic.jpg" alt="Gidea Electrical Staff">
  </div>
</div>


    <!-- Right Content -->
    <div class="content-a">
      <h2>How to Apply</h2>
      
      <div class="step-a">
        <i class="fa fa-check" aria-hidden="true"></i>
        <p>Book for an inspection of the property.</p>
      </div>
      
      <div class="step-a">
        <i class="fa fa-check"></i>
        <p>After inspection, a full load analysis will be sent to your organization with a specific subscription package tailored to your needs.</p>
      </div>
      
      <div class="step-a">
        <i class="fa fa-check"></i>
        <p>When all documents are signed and sealed, our team of professionals will be dispatched to get to work.</p>
      </div>
    </div>
  </div>

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