<style>
   .container {
        background-image: url('images/home.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center -50px;
        height: 600px;
        min-width: 500px;
        margin-top: -10px;
        padding-top: 0px;
    }
    .slider small {
      display: block;          /* ensures each line wraps properly */
      line-height: 1.5;        /* tighter spacing between lines */
      padding: 0;              /* remove big paddings */
      margin: 10px 0 0 0;       /* small gap above */
      font-size: 20px;         /* slightly smaller than main text */
      color: #ecebf1;
      font-family: 'Inter', sans-serif;
      font-weight: 100;
      width: 520px;
  }

    .slider p {
        padding-top: 110px;
        padding-left: 40px;
        padding-bottom: 140px;
        line-height: 1.5;
        font-size: 50px;
        margin-top: 2px;
        margin-left: 50px;
        color: #f3f1f7;
        height: 250px;
        width: 670px; 
        letter-spacing: 1.0px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }
    .slider{
      background: rgba(50, 50, 90, 0.47);
      backdrop-filter: blur(-10px); 
      z-index: 1;
      margin-left: -50px;
      padding-bottom: 50px;
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
    .arrow-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 90%;
      position: relative;   /* place on top of slider */
      top: -572px;             /* vertically center */
      left: 0;
      transform: translateY(-50%); /* adjust vertical alignment */
      z-index: 5;           /* higher than slider */
      padding: 0 20px;      /* spacing from edges */
    }

    .arrow-btn {
      background: #ffffff;
      color: #001139;
      width: 70px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      cursor: pointer;
      border-radius: 0;
      transition: 0.3s;
    }

/* Watch Video button (white) */
.quote-btn.watch-video {
  background: #ffffff;
  color: #001139;
  border-radius: 0;
}
/* Get a Quote button (yellow/golden) */
.quote-btn.get-quote {
  background: #FFD700;
  color: #001139;
  margin-left: 10px;
  border-radius: 0;
}

.arrow-btn:first-child {
  margin-left: -20px;   /* left arrow inward */
}

.arrow-btn:last-child {
  margin-right: -115px;  /* right arrow inward */
}

.arrow-btn:hover {
  background:  #FFD700;
  color: #001139;
}
/* Button group to keep them side by side */
.btn-group {
  display: flex;
  flex-wrap: wrap;   /* wrap if screen is too small */
  margin-top: -90px;
  margin-left: 90px;
}

.btn-group .quote-btn {
  flex: 1 1 auto;   /* allow them to shrink/grow */
  text-align: center;
  margin: 5px 3px;  /* small spacing between buttons */
}
/* Style only the play video icon-circle */
  .quote-btn.watch-video .icon-circle {
    background: #FFD700;   /* yellow background */
    color: #001139;        /* blue play icon */
    border-radius: 50%;    /* make it round */
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    font-size: 14px;
  }
/* MOBILE FRIENDLY HERO SECTION */
/* ✅ Tablet View */
  @media (min-width: 768px) and (max-width: 1023px) {

  .container {
    background-repeat: no-repeat;
    height: 500px;                 /* allow height to adjust based on content */
    padding: 0;                   /* remove extra padding from container */
    width: 100%;
    min-width: 0;                 /* remove desktop min-width */
    position: relative;           /* allow overlay effect */
    background-position: center 50px;
    background-size: cover;   /* show full image */   
  }

  .slider {
    background: rgba(19, 19, 77, 0.5);  /* semi-transparent overlay */
    backdrop-filter: blur(0px);        /* blur the image behind */
    padding: 40px 20px;                 /* expand padding to cover content nicely */
    margin: 0;                           /* no extra margin */
    width: 100%;                         /* full width */
    height: 100%;                    /* stretch to cover container if needed */
    box-sizing: border-box;
    border-radius: 0;                    /* optional: remove rounding for full coverage */
  }

  .slider p {
    font-size: 34px;                     /* text smaller for mobile */
    line-height: 1.5;
    width: 80%;                         /* full width */
    padding: 20px;                        /* add padding so blur extends around text */
    margin: 0 0 15px 0;
    color: #f3f1f7;
    letter-spacing: 0.5px;
    margin-top: 120px;
  }

  .slider small {
    font-size: 18px;
    line-height: 1.4;
    display: block;
    margin-top: 20px;
    color: #ecebf1;
    width: 90%;
  }

  .btn-get {
    padding: 10px 20px;
    font-size: 14px;
    margin-top: 15px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .icon-circle {
    width: 28px;
    height: 28px;
    font-size: 12px;
  }
/* General button styling */
.quote-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 28px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 4px;
  text-decoration: none;
  transition: 0.3s;
}

/* Watch Video button (white) */
.quote-btn.watch-video {
  background: #ffffff;
  color: #001139;
  border-radius: 0;
}

.quote-btn.watch-video:hover {
  background: #f1f1f1;
  color: #001139;
}

/* Get a Quote button (yellow/golden) */
.quote-btn.get-quote {
  background: #FFD700;
  color: #001139;
  margin-left: 10px;
  border-radius: 0;
}

.quote-btn.get-quote:hover {
  background: #f9b208;
  color: #001139;
}
 
  /* Button group to keep them side by side */
.btn-group {
  display: flex;
  flex-wrap: wrap;   /* wrap if screen is too small */
  margin-top: -115px;
  margin-left: 20px;
}

.btn-group .quote-btn {
  flex: 1 1 auto;   /* allow them to shrink/grow */
  text-align: center;
  margin: 5px 3px;  /* small spacing between buttons */
}
/* Style only the play video icon-circle */
  .quote-btn.watch-video .icon-circle {
    background: #FFD700;   /* yellow background */
    color: #001139;        /* blue play icon */
    border-radius: 50%;    /* make it round */
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    font-size: 14px;
  }
}
/* ✅ Mobile View */
  @media (max-width: 767px){

  .container {
    background-image: url('images/mobile-home.jpg');
    background-repeat: no-repeat;
    height: 570px;                 /* allow height to adjust based on content */
    padding: 0;                   /* remove extra padding from container */
    min-width: 0;                 /* remove desktop min-width */
    position: relative;           /* allow overlay effect */
    background-position: center -60px;
    background-size: cover;
  }

  .slider {
    background: rgba(19, 19, 77, 0.5);  /* semi-transparent overlay */
    backdrop-filter: blur(0px);        /* blur the image behind */
    padding: 40px 20px;                 /* expand padding to cover content nicely */
    margin: 0;                           /* no extra margin */
    width: 100%;                         /* full width */
    height: 89.5%;                    /* stretch to cover container if needed */
    box-sizing: border-box;
    border-radius: 0;                    /* optional: remove rounding for full coverage */
  }

  .slider p {
    font-size: 23px;                     /* text smaller for mobile */
    line-height: 1.5;
    width: 80%;                         /* full width */
    padding: 5px;                        /* add padding so blur extends around text */
    margin: 0 0 15px 0;
    color: #f3f1f7;
    letter-spacing: 0.5px;
    margin-top: 60px;
    margin-left: -2px;
  }

  .slider small {
    font-size: 13px;
    line-height: 1.4;
    display: block;
    margin-top: 5px;
    color: #ecebf1;
    width: 100%;
  }

  .btn-get {
    padding: 10px 20px;
    font-size: 14px;
    margin-top: 15px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .icon-circle {
    width: 28px;
    height: 28px;
    font-size: 12px;
  }
/* General button styling */
.quote-btn {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 10px 24px;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

/* Watch Video button (white) */
.quote-btn.watch-video {
  background: #ffffff;
  color: #001139;
  border-radius: 0;
}

.quote-btn.watch-video:hover {
  background: #f1f1f1;
  color: #001139;
}

/* Get a Quote button (yellow/golden) */
.quote-btn.get-quote {
  background:  #001139;
  color:#ffffff;
  margin-left: 5px;
  border-radius: 0;
}

.quote-btn.get-quote:hover {
  background: #f9b208;
  color: #001139;
}
 
/* Button group to keep them side by side */
.btn-group {
  display: flex;
  flex-wrap: wrap;   /* wrap if screen is too small */
  margin-top: 5px;
  margin-left: 10px;
}

.btn-group .quote-btn {
  flex: 1 1 auto;   /* allow them to shrink/grow */
  text-align: center;
  margin: 4px 2px;  /* small spacing between buttons */
}
/* Style only the play video icon-circle */
  .quote-btn.watch-video .icon-circle {
    background: #FFD700;   /* yellow background */
    color: #001139;        /* blue play icon */
    border-radius: 50%;    /* make it round */
    display: flex;
    align-items: center;
    justify-content: center;
    width: 25px;
    height: 30px;
    font-size: 12px;
  }
  .quote-btn.get-quote .icon-circle {
    background:  #001139;        /* blue play icon */
    color: #ffffff;
    border-radius: 50%;    /* make it round */
    display: flex;
    align-items: center;
    justify-content: center;
    width: 25px;
    height: 30px;
    font-size: 12px;
  }
    /* Hide arrows by default */
.arrow-controls {
  display: none;
}  
}
</style>

<section class="container">
  <div class="slider">
    <p>
      Powering Your World With Trusted Electrical & Solar Solutions
      <small>
        Residential and commercial electrical installations, solar system design, and expert maintenance, done right, on time, everytime.
        <br>
        <div class="btn-group">
          <a href="https://www.youtube.com/@Gideaee" target="_blank" class="quote-btn watch-video">
            Watch Video 
            <span class="icon-circle">
              <i class="fa fa-play" aria-hidden="true"></i>
            </span>
          </a>

          <a href="https://wa.me/+2348147249076" target="_blank" class="quote-btn get-quote">
            Get a Quote 
            <span class="icon-circle">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </a>
        </div>
      </small>
    </p>
  </div>

</section>
