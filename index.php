<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Gidea</title>
  <!-- Standard favicon -->
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
<?php include "includes/homeslider.php"?>
<?php include "includes/stats.php"?>
<?php include "includes/chooseUs.php"?>
<?php include "includes/services.php"?>
<?php include "includes/work.php"?>
<?php include "includes/testimonial.php"?>
<?php include "includes/team.php"?>  
<?php include "includes/faq.php"?>
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