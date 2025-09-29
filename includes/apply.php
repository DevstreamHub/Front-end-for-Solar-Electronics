<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 

<style>
  .container-a {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    padding: 100px;
    gap: 40px;
    background: white;
  }

  /* Image */
  .image-box img {
    width: 100%;
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }

  .image-box img {
    width: 80%;
    height: 80%;
    object-fit: cover;
    object-position: center;
    display: block;
  }

  /* Text Section */
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

  /* Image frame for fixed-height layout */
  .image-frame {
    background: #0b1c39;
    padding: 35px 0;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 600px; /* desktop fixed height */
  }

  .image-frame img {
    width: 100%;
    height: auto;
    object-fit: cover;
    object-position: top;
  }

  /* ✅ Visibility Controls */
  .container-a > h2 {
    display: none; /* hidden by default */
  }

  .content-a h2 {
    display: block; /* desktop visible */
  }

  /* ✅ Tablet view */
  @media (max-width: 1024px) {
    .container-a {
      grid-template-columns: 1fr;
      padding: 60px 40px;
      gap: 30px;
      text-align: center;
      background: white;
    }

    /* show heading under container, hide desktop heading */
    .container-a > h2 {
      display: block;
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #f1c40f;
    }

    .content-a h2 {
      display: none;
    }

    .step-a {
      justify-content: flex-start;
      text-align: left;
      padding: 18px 25px;
    }

    .step-a p {
      font-size: 20px;
    }

    .image-frame {
      height: 400px;
    }
  }

  /* ✅ Mobile view */
  @media (max-width: 600px) {
    .container-a {
      padding: 40px 20px;
      gap: 20px;
      background: white;
    }

    /* show heading under container, hide desktop heading */
    .container-a > h2 {
      display: block;
      font-size: 1.5rem;
      text-align: center;
      margin-bottom: 15px;
    }

    .content-a h2 {
      display: none;
    }

    .step-a {
      flex-direction: row;
      padding: 15px 20px;
      gap: 15px;
    }

    .step-a i {
      font-size: 1rem;
      padding: 6px;
    }

    .step-a p {
      font-size: 16px;
      line-height: 1.4;
    }

    .image-frame {
      height: 250px; /* smaller image for mobile */
    }
  }
</style>

<body>
  <div class="container-a">
    <!-- Mobile & Tablet Heading -->
    <h2>How to Apply</h2>

    <!-- Left Image -->
    <div class="image-box">
      <div class="image-frame">
        <img src="images/pic.jpg" alt="Gidea Electrical Staff">
      </div>
    </div>

    <!-- Right Content -->
    <div class="content-a">
      <!-- Desktop Heading -->
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
</body>
