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
            <li><a class="active" href="#home">HOME</a></li>
            <li><a href="product.php">PRODUCT</a></li>
            <li><a href="reviews.php">REVIEWS</a></li>
            <li><a href="team.php #team">TEAM</a></li>
            <li><a href="about.php #about">ABOUT</a></li>
        
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

    <section class="second_section">
        <div class = "box">
            <img src="images/Icons/PQ.png" alt=""><br>
            <h3>Price is what you pay, quality is what you get.</h3><br>
            <p> Our goal is to give every Filipino the lighting solutions which is high in quality, competitive price and offers strong after sales.</p>
        </div>
        <div class = "box2">
            <img src="images/Icons/II.png" alt=""><br>
            <h3>Improved and Innovative</h3><br>
            <p> We offer new and Improved RGB LED Strip Lights and we are open for your feedbacks and suggestions for us to improve more.</p>
        </div>
        <div class = "box3">
            <img src="images/Icons/HMPB.png" alt=""><br>
            <h3>High end materials and Premium Brands</h3><br>
            <p> Transform your place into a safe and wonderful home with our next generation lighting solutions which offers competitive prices using high-end materials that you can have with premium brands.</p>
        </div>
        <div class = "box4">
            <img src="images/Icons/FCES.png" alt=""><br>
            <h3>Full Customer Experience Service</h3><br>
            <p> We give our full attention on providing customer's needs. Whether It be from products or services, We will make sure to attain excellence and exceed our customer's satisfaction.</p>
        </div>
        <div class = "line_DDI">
            <h2> The Daily Dose of ILAW</h2>
            <p>Choose the right brand and services who will take care of you and at the same time will not disappoint you with the quality and efficiency of its products.</p>
        </div>
    </section>

    <section class="third_section">
        <div class = "line_BS">
            <h1> Best Sellers</h1>
            <p>ILAW Ligting and Equipment provides you the top selling products of the month. View images below for more information.</p>
        <div class="container">
          <div class="row">
            <div id="news-slider" class="owl-carousel">
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/1.jpg" class="pic-1"> <img src="images/Products/2.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
        
    <section class="fourth_section">
    <div class = "line_BS">
            <h1> New Arrival</h1>
            <p>ILAW Ligting and Equipment provides you the newest products. View images below for more information.</p>
            <div class="container">
          <div class="row">
            <div id="news-slider2" class="owl-carousel">
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>
              <div class="product">
                <div class="product-image"> <a href="" class="image"> <img src="images/Products/3.jpg" class="pic-1"> <img src="images/Products/4.jpg" class="pic-2"> </a> <a href="" class="cart">Add to Cart</a>
                  <ul class="links">
                    <li><a href=""><i class="fa fa-search fa-lg" aria-hidden="true"></i> </a></li>
                    <li><a href=""><i class="fa fa-heart fa-lg" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
              <div class="content"> <span class="category"><a href="">LED Strip Light</a></span>
                <h3 class="title"><a href="">White Strip Light</a></h3>
                <div class="price"><span>Php. 450.00</span>Php. 450.00</div>
              </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    
    <section class="fifth_section">
        <div class = "line_PFOS">
          <h1>Product Features and Other Services</h1>
          <p>ILAW Ligting and Equipment provides you a complete information about the product, as well as the other services and ideas that can benefit you.</p>
        </div>
        <div class="PFOS_container">
            
            <img id="myImg" class="PFOS"  src="images/Others/PFOS1.png" alt="Smart Features">
            <img id="myImg2" class="PFOS" src="images/Others/PFOS2.png" alt="Smart Features">
            <img id="myImg3" class="PFOS" src="images/Others/PFOS3.png" alt="Smart Features">
            <img id="myImg4" class="PFOS" src="images/Others/PFOS4.png" alt="Smart Features">
            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
            <div class="second_column">
            <a href="https://www.facebook.com/groups/2664169983797064" target ="_blank" class="SC_btn">Kisame (Ceiling Design)</a>
            <img id="myImg5" src="images/Others/Kisame1.png" alt="Ceiling Design Image">
            </div>
            <div class="second_column">
            <a href="" class="SC_btn">Installation Service</a>
            <img id="myImg6" src="images/Others/IS1.png" alt="Installation Service Image">
            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
        </div>
      </section>
    <section class="sixth_section">
        <div class = "line_Testimonials">
          <h1>Testimonials</h1>
          <p> What do our customers say about us?</p>
          <div id="slider">
                <input type="radio" name="slider" id="s1">
                <input type="radio" name="slider" id="s2">
                <input type="radio" name="slider" id="s3" checked>
                <input type="radio" name="slider" id="s4">
                <input type="radio" name="slider" id="s5">
                <label for="s1" id="slide1">
                  <img src="images/Others/Testimonials (1).png" height="100%" width="100%">
                </label>
                <label for="s2" id="slide2">
                      <img src="images/Others/Testimonials (2).png"  height="100%" width="100%">
                </label>
                <label for="s3" id="slide3">
                      <img src="images/Others/Testimonials (3).png"  height="100%" width="100%">
                </label>
                <label for="s4" id="slide4">
                      <img src="images/Others/Testimonials (4).png"  height="100%" width="100%">
                </label>
                <label for="s5" id="slide5">
                      <img src="images/Others/Testimonials (5).png"  height="100%" width="100%">
                </label>
                
          </div>
        </div>
    </section>
    <section class="seventh_section">
    <div class = "line_contacts">
        <h4>Location</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.4515980007286!2d121.04652826443179!3d14.285173768245173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d76f4fbc1dbd%3A0xd419d8ebd9513c10!2sILAW%20Lighting%20Equipment%20Trading!5e0!3m2!1sen!2sph!4v1630669985436!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class = "line_contacts">
          <h4>Contact Us</h4>
          <p> Want to connect with us? Message us now and a friendly administrator will address your needs and queries.</p>
          <input type="text" placeholder="First Name">
          <input type="text" placeholder="Last Name">
          <input type="text" placeholder="Email">
          <input type="text" placeholder="Contact #">
          <textarea name="" id="" rows="9" placeholder="Message"></textarea>
        </div>
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
      <p>Copyright © 2021|ILAW Lighting and Equipment Trading</p>
    </div>
    <script src="functions.js" type="text/javascript"></script>
</body>
</html>