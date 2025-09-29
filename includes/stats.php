<style>
    /* Top Stats Section */
    .stats {
      display: flex;
      justify-content: center;
      gap: 300px;
      background-color: #001139;
      padding-top: 30px;
      padding-bottom: 30px;      
      color: #fff;
      text-align: center;
      margin-top: -10px;
    }
    .stats div {
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
    }
    .stats div span {
      display: block;
      font-size: 50px;
      font-weight: bold;
      margin-bottom: 5px;
      color: #FFD700;
      font-family: 'Poppins', sans-serif;
    }

    /* Hide on Mobile (max-width: 768px) */
    @media (max-width: 768px) {
      .stats {
        display: none;
      }
    }

    /* Responsive Stats Section - Tablet View (768px - 991px) */
    @media (min-width: 768px) and (max-width: 991px) {
      .stats {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 20px;
        padding: 15px 10px;
        justify-content: space-around;
        text-align: center;
      }

      .stats div {
        font-size: 14px;
        flex: 1 1 30%;
      }

      .stats div span {
        font-size: 28px;
        margin-bottom: 3px;
        display: block;
      }

      .stats i {
        font-size: 30px;
      }
    }

    /* Adjust for Large Tablet / Small Laptop (992px - 1200px) */
    @media (min-width: 992px) and (max-width: 1200px) {
      .stats {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 40px;
        padding: 20px;
        justify-content: space-around;
        text-align: center;
      }

      .stats div {
        font-size: 15px;
        flex: 1 1 30%;
      }

      .stats div span {
        font-size: 32px;
        margin-bottom: 5px;
      }

      .stats i {
        font-size: 25px;
      }
    }
</style>

 <!-- Stats Section -->
  <div class="stats">
    <div>
      <span class="stats-i"><i class="fa fa-briefcase" aria-hidden="true"></i> 15+</span>
      Years Experience
    </div>
    <div>
      <span class="stats-i"> <i class="fa-regular fa-heart" aria-hidden="true"></i> 200+</span>
      Happy Clients
    </div>
    <div>
      <span class="stats-i"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 1K+</span>
      Service Projects
    </div>
  </div>