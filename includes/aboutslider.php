<style>
    .container {
        background-image: url('images/about.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center -70px;
        height: 570px;
        min-width: 500px;
        margin-top: -10px;
        padding-top: 0;
    }


.slider {
  background: rgba(0, 0, 8, 0.452);
  backdrop-filter: blur(0px);
  z-index: 1;
  margin-left: -50px;
  padding: 180px 20px 50px 20px;  /* push content down from top */
  height: 98.5%;
  box-sizing: border-box;
}

.slider small {
  display: block;
  line-height: 1.5;
  font-size: 22px;
  color: #FFD700;
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  margin-left: 70px;   /* aligned with <p> */
  margin-top: 0;       /* no need anymore, slider handles spacing */
}

.slider p {
  font-size: 50px;
  line-height: 1.5;
  margin-top: 10px;    /* small gap below <small> */
  margin-left: 70px;   /* same alignment */
  color: #f3f1f7;
  width: 700px;
  letter-spacing: 1px;
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
}

    .menu i {
      margin-left: 2px;
      font-size: 14px;
    }
    .btn-get {
    background: #FFD700;
    color: #2F353B;
    padding: 12px 28px;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    display: inline-block;
    margin-left: 5px;   /* same left alignment as text */
    margin-top: 50px;    /* small gap below <small> */
    border-radius: 4px;  /* optional rounded corners */
    transition: 0.3s;
    }

    .btn-get:hover {
    background: #f9b208;
    color: #001139;
    }
    @media (max-width: 767px){
     .container {
    background-image: url('images/p14.jpg');
    background-repeat: no-repeat;
    height: 570px;                 /* allow height to adjust based on content */
    padding: 0;                   /* remove extra padding from container */
    min-width: 0;                 /* remove desktop min-width */
    position: relative;           /* allow overlay effect */
    background-position: center -60px;
    background-size: cover;
    margin-bottom: -100px;
  }

  .slider {
    background: rgba(19, 19, 77, 0.5);  /* semi-transparent overlay */
    backdrop-filter: blur(0px);        /* blur the image behind */
    padding: 40px 20px;                
    margin: 0;                           /* no extra margin */
    width: 100%;                         /* full width */
    height: 89.5%;                    /* stretch to cover container if needed */
    box-sizing: border-box;
    border-radius: 0;                    /* optional: remove rounding for full coverage */
  }

  .slider p {
    font-size: 30px;                     /* text smaller for mobile */
    line-height: 1.5;
    width: 80%;                         /* full width */
    padding: 5px;                        
    color: #f3f1f7;
    letter-spacing: 0.5px;
    margin-top: 0px;
    margin-left: -2px;
  }

}

@media (max-width: 767px){
    .slider small {
        font-size: 20px;       /* smaller for mobile */
        color: #FFD700;        /* change from black to yellow for contrast */
        line-height: 1.4;
        margin-top: 140px;      /* adjust gap above text */
        width: 100%;
        text-align: left;      /* optional: aligns nicely on mobile */
        margin-left: 10px;
    }
}
/* -------- Tablet View (768px – 1024px) -------- */
@media (min-width: 768px) and (max-width: 1024px) {
      .container {
    background-image: url('images/about.jpg'); 
    background-repeat: no-repeat;
    background-size: cover;             /* make image cover full space */
    background-position: center center; /* center image nicely */
    height: 650px;                      /* adjust height for tablets */
    min-width: 0;                       /* remove desktop min-width */
    margin-top: -105px;
    padding: 0;
    background-position: center 150px;
  }
      .slider {
    background: rgba(19, 19, 77, 0.5);  /* semi-transparent overlay */
    backdrop-filter: blur(0px);        /* blur the image behind */
    padding: 40px 20px;                
    margin: 0;                           /* no extra margin */
    width: 100%;                         /* full width */
    height:99%;                    /* stretch to cover container if needed */
    box-sizing: border-box;
    border-radius: 0;                    /* optional: remove rounding for full */
  }
    .slider small {
        font-size: 30px;       /* smaller for mobile */
        color: #FFD700;        /* change from black to yellow for contrast */
        line-height: 1.4;
        margin-top: 250px;      /* adjust gap above text */
        width: 100%;
        text-align: left;      /* optional: aligns nicely on mobile */
        margin-left: 40px;
    }
      .slider p {
    font-size: 50px;                     /* text smaller for mobile */
    line-height: 1.5;
    width: 80%;                         /* full width */
    padding: 5px;                        
    color: #f3f1f7;
    letter-spacing: 0.5px;
    margin-top: 50px;
    margin-left: 50px;
  }
}
</style>
<section class="container">
  <div class="slider">
      <small>
          About Us
      </small>
    <p>Gidea Electrical Engineering Company</p>    
  </div>
</section>

