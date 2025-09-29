<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
/* ---------------- Base / Desktop ---------------- */
.container-testimonial {
    width: 90%;
    background: #001139;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 135px;
    font-family: 'Poppins', sans-serif;
}
.testimonial-maincard {
    display: flex;
    margin-top: 100px;
    margin-left: 60px;
}
.column-1 {
    margin-right: 120px;
    margin-left: -145px;
    flex: 1;
}
.column-1 h1 {
    font-size: 40px;
    color: #FFFFFF;
}
.column-1 h3 {
    margin-bottom: 30px;
    margin-top: -35px;
    color: #FDC80B;
}
.column-1 p {
    white-space: normal;
    overflow-wrap: break-word;
    word-break: break-word;
    line-height: 1.4;
    color: #BFBEBE;
    text-align: justify;
    max-width: 370px;
    margin: 10px 0 20px 0;
}
.reviews-btn {
    padding:10px 20px;
    background-color: #FDC80B;
    color:#001139;
    text-decoration: none;
    display: inline-block;
}
.reviews-btn:hover {
    background-color: #ffffff;
    color: #001139;
}

.testimonials {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    flex: 2;
}
.testimonial-card {
    background: white;
    border-color: #f1c40f;
    width: 330px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}
.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}
.card-header {
    background: #fbfcfdff;
    color: rgb(15, 14, 14);
    padding: 25px;
}
.profile {
    display: flex;
    align-items: center;
    gap: 15px;
    text-align: left;
}
.profile-pic {
    width: 80px;
    height: 80px;
    margin-top: -20px;
    object-fit: cover;
    border: 2px solid #f1c40f;
}
.profile-info {
    display: flex;
    flex-direction: column;
}
.profile-info h2 {
    font-size: 1.3rem;
    letter-spacing: 2px;
    margin-bottom: 5px;
}
.profile-info .title {
    font-style: italic;
    font-weight: 300;
    margin-bottom: 5px;
}
.profile-info .rating i {
    font-size: 14px;
}
.profile-info .fa-solid { color: #f1c40f !important; }
.profile-info .fa-regular { color: #ccc !important; }

.card-body {
    padding: 25px;
    background-color: #001139;
    border: 2px solid #f1c40f;
    border-top: none;
}
.card-body p {
    color: #BFBEBE;
    line-height: 1.6;
    font-size: 1rem;
    text-align: justify;
    margin-bottom: 20px;
}
.quote-icon {
    position: absolute;
    top: 0;
    right: 20px;
    transform: translateY(-50%);
    font-size: 30px;
    color: #001139;
    background-color: #FDC80B;
    padding: 15px;
    z-index: 2;
}

/* ---------------- Mobile (≤768px) ---------------- */
@media (max-width: 768px) {
    .container-testimonial {
        padding: 20px;
    }
    .testimonial-maincard {
        flex-direction: column;
        margin-top: 50px;
        margin-left: 0;
    }
    .column-1 {
        margin: 0 0 30px 0;
        text-align: left;
    }
    .column-1 h1 {
        font-size: 24.5px;
        line-height: 1.2;
    }
    .column-1 h3 {
        font-size: 18px;
        margin: 0 0 15px 0;
    }
    .column-1 p {
        max-width: 100%;
        font-size: 0.9rem;
    }
    .testimonials {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }
    .testimonial-card {
        display: none;
        width: 100%;
        max-width: 350px;
        margin: 0 auto 20px;
        animation: fadeIn 0.5s ease-in-out;
    }
    .testimonial-card.active {
        display: block;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .slider-dots {
        display: flex;
        justify-content: center;
        margin: 15px 0 40px;
    }
    .slider-dots span {
        width: 12px;
        height: 12px;
        margin: 0 5px;
        border: 5px solid white;
        background: #FDC80B;
        display: inline-block;
        opacity: 0.5;
        cursor: pointer;
        transition: opacity 0.3s, transform 0.2s;
    }
    .slider-dots span.active {
        opacity: 1;
        transform: scale(1.2);
    }
    .profile-pic {
        width: 65px;
        height: 65px;
    }
    .profile-info h2 {
        font-size: 1.1rem;
    }
    .profile-info .title {
        font-size: 0.85rem;
    }
    .card-body p {
        font-size: 0.9rem;
    }
    .quote-icon {
        font-size: 25px;
        padding: 10px;
        right: 15px;
    }
    .reviews-btn {
        padding: 8px 15px;
        font-size: 0.9rem;
        background-color: white;
    }
}

/* ---------------- Tablet (769px–1024px) ---------------- */
@media (min-width: 769px) and (max-width: 1024px) {
    .container-testimonial {
        width: 90%;
        padding: 40px 50px;
        min-height: auto;
    }
    .testimonial-maincard {
        flex-direction: row;
        align-items: flex-start;
        gap: 40px;
        margin-top: 70px;
        margin-left: 0;
    }
    .column-1 {
        margin: 0;
        flex: 1;
    }
    .column-1 h1 { font-size: 32px; }
    .column-1 h3 { font-size: 20px; margin-bottom: 15px; }
    .column-1 p { font-size: 1rem; max-width: 100%; }
    .testimonials {
        flex: 2;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .testimonial-card {
        width: 100%;
        max-width: 100%;
    }
    .profile-pic { width: 65px; height: 65px; }
    .profile-info h2 { font-size: 1.1rem; }
    .profile-info .title { font-size: 0.85rem; }
    .card-body p { font-size: 0.95rem; }
    .quote-icon { font-size: 22px; padding: 8px; right: 10px; }
    .slider-dots { display: none; }
}
</style>


</head>
<body>
    <div class="container-testimonial">   
        <div class="testimonial-maincard">
          <div class="column-1">
            <h3>
              Testimonial
            </h3>
            <h1>Powerful Praises We Hear From Our Customers</h1>
            <p>At Gidea Electrical Engineering, our customers trust us for reliable, professional, and efficient electrical solutions. At Gidea Electrical Engineering, our customers trust us for reliable, professional, and efficient electrical solutions. </p>
            <a href="#" class="reviews-btn">View all Reviews</a>
          </div>
          <div class="testimonials">
              <!-- Testimonial 1 -->
              <div class="testimonial-card">
                  <div class="card-header">
                  <i class="fa-solid fa-quote-right quote-icon"></i>

                  <div class="profile">
                    <img src="images/passport.jpg" alt="profile" class="profile-pic">

                    <div class="profile-info">
                      <h2>Mr John Orji Johnson <br> Okpechi</h2>
                      <div class="title">Mr John Orji Johnson Okpechi</div>
                      <!-- Correct FA6 syntax -->
                        <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>

                    </div>
                  </div>
                </div>
              <div class="card-body">
                  <p>They interated a 5.5kwh solar inverter system for me. Major Component used: 10pm a of 550watts mono crystalin solar panels. 1pcs of 6.2kWh Luxsun hybrid inverter. e.t.c.</p>
                  </div>
            </div>
              <!-- Testimonial 2 -->
              <div class="testimonial-card">
                  <div class="card-header">
                  <i class="fa-solid fa-quote-right quote-icon"></i>

                  <div class="profile">
                    <img src="images/passport.jpg" alt="profile" class="profile-pic">

                    <div class="profile-info">
                      <h2>Mr. Kene <br>Dike</h2>
                      <div class="title">Mr Kene Dike</div>
                      <!-- Correct FA6 syntax -->
                        <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                  </div>
                </div>

              <div class="card-body">
                  <p>An awesome installation was done for me a returning client for my home a 3bedroom apartment. This is a system integrated with solar panels, whereas, at the moment i choose to recharge the system with the gird based on financial restraint.
</p>
                  </div>
            </div>
          </div>
          <div class="slider-dots">
              <span class="active"></span>
              <span></span>
            </div>
        </div>
    </div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".testimonial-card");
    const dots = document.querySelectorAll(".slider-dots span");

    let activeIndex = 0;
    cards[activeIndex].classList.add("active");
    dots[activeIndex].classList.add("active");

    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        // remove old active
        cards[activeIndex].classList.remove("active");
        dots[activeIndex].classList.remove("active");

        // set new active
        activeIndex = index;
        cards[activeIndex].classList.add("active");
        dots[activeIndex].classList.add("active");
      });
    });
  });
</script>
