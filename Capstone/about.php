<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILAW</title>
    <link rel = "shortcut icon" type="image/x-icon" href="images/Logo/ILAW_Logo2.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
     <!-- Owl Carousel (free version)-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    <!-- Custom CSS-->
    <link href="css/owl_carousel.css" rel="stylesheet" />
    <link href="css/style_e-commerce.css" rel="stylesheet" />
</head>
<body>
<header>
    <label class = "logo_header" id="#"><img src="images/Logo/ILAW_Logo.png" alt="ILAW Logo"></label>
        <ul>
            <li><a href="homepage.php">HOME</a></li>
            <li><a href="product.php">PRODUCT</a></li>
            <li><a href="reviews.php">REVIEWS</a></li>
            <li><a href="team.php #team">TEAM</a></li>
            <li><a class="active" href="#about">ABOUT</a></li>
        
        <button class = "orderstat_btn" onclick="window.location='orderstatus.php #orderstatus';" type="button">Order Status</button>
        <a class = "cart_button"><img src="images/Icons/Cart_Icon.png" alt="Cart Icon"></a>
        <button class = "login_btn" type="button">
            <span class="login_text"> Login </span>
            <span class="login_icon"><i class="fas fa-sign-in-alt"></i></span>
        </button>
        <a class = "settings_btn"><i class="fas fa-cog fa-lg" ></i></a>
        <a class="toggle-menu" onclick="toggleSidebar()"><i class="fas fa-bars fa-lg"></i></a>
        </ul>
    </header>

    <section class="first_section">
    <div class ="BG_Cover">
        <img class="mySlides" src="images/Others/BG_Stairs.png">
        <img class="mySlides" src="images/Others/BG_Houses.png">
        <img class="mySlides" src="images/Others/BG_TV.png">
        <div class= "column">
        <h1>ILAW Lighting and Equipment Trading</h1>
        <h2>"Making life brighter one Filipino home at a time."</h2>
        <button class = "learnmore_btn" type="button">Learn More</button>  
        </div>       
    </div>
    </section>
    <section id="about" class="third_section"> <!-- section css replicate in homepage -->
        <div class = "line_BS">
            <h1> About Us </h1><br>
            <h6><b>Our Brief History</b></h6>
            <p>It is all ABOUT ???ILAW ng Tahanan??? which always reminds us of our "Dear Mother", "Nanay", "Ina", "Mama" or "Mommy" that alwaysgives radiant glow and brightness to our homes. We started as a small online dropshipping business where we source our product locally, with the Covid-19 rapidlly spreading in the Philippines major lockdowns was implemented all throughout the Island and we at ILAW deliverslighting decorations door-to-door to every Filipino homes nationwide.</p>
            
            <h6><b>Our Culture</b></h6>
            <p>At ILAW, we are constantly reminding ourselves, providing high quality and safe LED Light Technology to all Filipinos all over the Philippines and also to our new heroes our OFW's. That???s why it???s important that our products and services reflects the global standards for the latest innovation in lighting solution for the people we serve. Research and Product testing is one of our ways to keep up with the trends and  helps us make better decisions,build better products and create better experiences for every Ka-ILAW and Future Ka-ILAW soon.</p>

            <h6><b>Our Mission</b></h6>
            <p>To create long-term benefits to our Filipino customers by delivering excellent products, creating value and services to Filipino households through innovation and cutting-edge technology.</p>
            <h6><b>Our Vision</b></h6>
            <p>To become one of the most trusted, pioneer Philippine brand in automation & lighting, as the leading supplier of safe, innovative, customer-centric, eco-friendly and superior products at affordable price.</p>
    </section>
    <footer>
      <div class= "column">
          <p> Information </p>
          <ul>
            <li><a type="button" href="about.php #about">About Us</a></li>
            <li><a type="button" href="">Contact Us</a></li>
            <li><a type="button" href="">FAQS</a></li>
          </ul>
      </div>
      <div class= "column">
          <p> Customer Support </p>
          <ul>
            <li><a type="button" href="">How to Buy</a></li>
            <li><a type="button" href="">Return and Refunds</a></li>
            <li><a type="button" href="">Warrany Information</a></li>
            <li><a type="button" href="">Terms and Condition</a></li>
            <li><a type="button" href="">Privacy Policy</a></li>
          </ul>
      </div>
      <div class= "column">
          <p> Follow Us On </p>
          <ul>
            <li><a type="button" target="_blank" href="https://www.facebook.com/ILAWnatinto">ILAW Official Facebook Page</a></li>
            <li><a type="button" target="_blank" href="">ILAW Official Twitter</a></li>
            <li><a type="button" target="_blank" href="">ILAW Official Instagram</a></li>
          </ul>
      </div>
      <div class= "column">
          <p> Information </p>
      </div>
      
      <label class = "logo_footer" id="#"><img src="images/Logo/ILAW_Logo.png" alt="ILAW Logo"></label>
    </footer>
    <div class="last">
      <p>Copyright ?? 2021|ILAW Lighting and Equipment Trading</p>
    </div>
    <script src="functions.js" type="text/javascript"></script>
</body>
</html>