<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AshBorn-Store</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900;1000&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="Store.css"  rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="swiper-bundle.min2.css">

    <link rel="stylesheet" href="glider.min.css">

</head>
<body class="">
    <div class="parent">
    <div class="Cover">.</div>


    <div class="upperLogin">
    <div class="wrapper3">

        <span class="icon-close">
            <i class="fa-solid fa-xmark"></i>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="post">

                <div class="input-box">
                    <span class="icon">
                    <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                    <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>

                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember Me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>

                <span class="btn2"><button type="submit" class="btnRegister">Login</button></span>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>

            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="connect.php" method="post">

                <div class="input-box">
                    <span class="icon">
                    <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="username" name="username" required>
                    <label>Username</label>
                </div>
                
                <div class="input-box">
                    <span class="icon">
                    <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                    <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>

                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">
                    I agree to the terms & conditions
                    </label>
                </div>

                <span class="btn"><button type="submit" name="submit" class="btnRegister">Register</button></span>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>

            </form>
        </div>


    </div>
    </div>

        <nav>
            <div class="wrapperHeader">

            <div class="logo">
            <i class="fa-solid fa-bars menu-icon"></i>
            </div>
            
            <div class="companyName">
            <img src="Logo.png" alt="">
            <div class="companyName2">
            <img src="ASHBORN WHITE.png" alt="">
            </div>
            </div>

            <div class="endingHeader">
                <button class="btnLogin-popup"> <i class="fa-solid fa-user iHeader"></i> </button>
                <i class="fa-solid fa-magnifying-glass iHeader"></i>
                <div class="">

                    <header>
                        <div class="shopping">
                        <i class="fa-solid fa-cart-shopping"></i>
                            <span class="quantity">0</span>
                        </div>
                    </header>

                </div>
            </div>

            </div>

            <div class="sidebar">

            <div class="logo">
                <i class="fa-solid fa-bars menu-icon"></i>
                <span class="logo-name">AshBorn</span>
            </div>

                <div class="sidebar-content">
                    <div class="wrapper">
                    <ul class="lists">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-bolt icon"></i>
                                <span class="link">NEW ARRIVALS</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-computer-mouse icon"></i>
                                <span class="link">PERIPHERALS</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-shirt icon"></i>
                                <span class="link">APPARELS</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-circle-info icon"></i>
                                <span class="link">ABOUT US</span>
                            </a>
                        </li>
                    </ul>
                    </div>


                <div class="wrapper2">
                <div class="bottom-content">

                            <a href="#" class=accounts>
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                
                            <a href="#" class=accounts>
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                       
                            <a href="#" class=accounts>
                                <i class="fa-brands fa-twitter"></i>
                            </a>
            
                            <a href="#" class=accounts>
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                       

                
                </div>
                </div>

                </div>
            </div>
        </nav>

        <section class="overlay"></section>

        <section class="SectionModel">
            
            <div class="featuredModels">

                <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img src="Ez.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="bb.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="Ez.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="bb.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="Ez.jpg" alt=""></div>

                </div>
                
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            </div>
        </section>

        <section class="Featured">
        <div class="FeaturedProducts"><i class="fa-brands fa-hotjar hot"></i> HOTDEALS</div>
        </section>

        <section class="shoppingCart">
        <div class="container">

                <div class="listnew">
                
                </div>
        </div>

        <div class="card">
            <div class="Merch">
            <h1>Merch - ShoppingCart</h1>
            </div>
            <ul class="listCard">

            </ul>

                <div class="checkOut">
                    <div class="total">0</div>
                    <div class="closeShopping">Close</div>
                </div>

                <a href="BillingSystem.php"><div class="cardFooter"><button>CheckOut</button></div></a>
                
        </div>
        </section>

    <section class="allProduct">
        <a href="#"><button>View All Products</button></a>
    </section>

    <div class = "footer">
      <div class="footbox">
        <div class="row">
          <div class="col" id="company">
          <img src="/images/ashb1-w.png" class="logo" /> 
           <img src="/images/ASHBORN WHITE.png" class="logo" />
            <p>
             ASB is the worlds leading esports team.
              We strive in triumph for everything we do.
            </p>
            <div class="social">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-twitch"></i></a>
              <a href="#"><i class="fab fa-discord"></i></a>
              <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
          </div>

          <div class="col">
            <h3>GAMES</h3>
            <div class="links">
              <a href="https://playvalorant.com" target="_blank">VALORANT</a>
              <a href="https://www.leagueoflegends.com"  target="_blank">LEAGUE OF LEGENDS</a>
              <a href="https://overwatch.blizzard.com/en-us/"  target="_blank">OVERWATCH</a>
              <a href="https://www.halowaypoint.com"  target="_blank">HALO</a>
              <a href="https://www.dota2.com/home" target="_blank">DOTA 2</a>  
              <a href="https://www.ea.com/games/apex-legends" target="_blank">APEX LEGENDS</a>  
              <a href="#">CONTENT CREATORS</a>

            </div>
          </div>

          <div class="col">
            <h3>NAVIGATION</h3>
            <div class="links">
              <a href="index.html#home">HOME</a>
              <a href="index.html##history">HISTORY</a>
              <a href="index.html#teams">TEAMS</a>
              <a href="index.html#merch">MERCH</a>
              <a href="index.html#articles">ARTICLES</a>
              <a href="contact.html">CONTACT</a>
              <a href="shop.php">SHOP</a>
            </div>
          </div>

          <div class="colpic">
           <img src="/images/ashb1-w240.png">
          </div>
        </div>
      </div>
    </div>



    <script>
        const navBar = document.querySelector("nav");
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
            navBar.classList.toggle("open");
            });
        });

        overlay.addEventListener("click", () => {
            navBar.classList.remove("open");
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
    
        const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable:true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        });

        </script>

<script src="Store.js"></script>

<script src="swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>

            new Glider(document.querySelector('.glider'), {
                slidesToScroll: 1,
                slidesToShow: 4,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },

                responsive: [
                    {
                    breakpoint: 1200,
                    settings: {

                        slidesToShow: 4,
                        slidesToScroll: 2,
                    }
                    
                    },
                    
                    {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                    },
                    
                    {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                    },
                    
                    {
                    breakpoint: 304,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                    }
                    },
                    
                    {
                    breakpoint: 0,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                    }
                ]

                });

        </script>

</body>
</html>