<?php
$host="localhost";
$username="root";
$password="";
$database="shopping";
$connection = mysqli_connect($host,$username,$password,$database);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script> 
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>

                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                  
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="website.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
    <style>
      @media only screen and (max-width: 412px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
    </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning fixed-top navbar-scrolled">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SKEF ONLINE SHOPPING</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#card">Order</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Info
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Whatsapp <i class="bi bi-whatsapp"></i></a></li>
              <li><a class="dropdown-item" href="#">instagram <i class="bi bi-instagram"></i></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#help">Help</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sign">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#loc">Location</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="card text-bg-dark">
    <img src="ch.jpg" class="card-img" alt="...">
    <div class="card-img-overlay ms-5 mt-5">
      <p class="card-text fw-bold">Shop with Exclusive offers!!</p>
      <h1 class="card-title fw-bold">SKEF ONLINE<br>SHOPPING</h1>
    </div>
  </div>
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="cs1.jpg" alt="Avatar" class="img-fluid" width="400px" height="700px">
            </div>
            <div class="flip-card-back text-dark">
              <h1>COSMETICS</h1>
              <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nykaa is an online beauty store that offers a wide range of cosmetics and beauty products from top brands. Shop makeup, health products, skincare, haircare, and more with free …</p>
              <a href="" class="btn btn-warning" role="button" value="input button">More info!</a>
            </div> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="sh.jpg" alt="Avatar" class="img-fluid" width="400px" height="400px">
            </div>
            <div class="flip-card-back text-dark">
              <h1>MENS'SHIRTS</h1>
              <p>The French Crown Offers Comfortable and Stylish Men's Clothes Online From Shirts to Suits. Top Quality Online Clothing Brand Store with Shirts, Pants, Blazers, Boxers & T-shirts.</p>
              <a href="" class="btn btn-warning" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="shoe.jpeg" alt="Avatar" class="img-fluid">
            </div>
            <div class="flip-card-back text-dark">
              <h1>SHOES</h1>
              <p>Enhance Your Shopping Experience With Our Personalised Recommendations. Amazon Offers an Array Of Unique Products From Hundreds Of Brands.</p>
              <a href="" class="btn btn-warning" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="watch.jpeg" alt="Avatar" class="img-fluid" width="400px" height="700px">
            </div>
            <div class="flip-card-back text-dark">
              <h1>WATCHES</h1>
              <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">From classic vintage models to the latest high-functioning smartwatches, you can have the world on your wrist. Buying watches online can give you a lot of benefits, including …</p>
              <a href="" class="btn btn-warning" role="button" value="input button">More info!</a>
            </div> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="OIP.jpeg" alt="Avatar" class="img-fluid">
            </div>
            <div class="flip-card-back text-dark">
              <h1>SAREES</h1>
              <p>Sarees are the epitome of grace and glamour, allowing every woman draping the six yards of stunning fabric to have a red carpet moment of her own every single time. Each square inch of a saree is woven by skilled craftsmen drawing inspiration from regional landscapes, flora, fauna, and art. A sariis typically six metres long but could extend to nine metres for certain traditional drapes such as the South Indian madisar style or Maharashtrian kasta style.</p>
              <a href="" class="btn btn-warning" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div id="card" class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="kids.jpeg" alt="Avatar" class="img-fluid">
            </div>
            <div class="flip-card-back text-dark">
              <h1>KIDS WEAR</h1>
              <p>Transform Your Wardrobe & Treat Yourself To Something New With Fashionable Accessories. Walk In Style With Clothes That Fit Your Personality and Size. Place Your Order!</p>
              <a href="" class="btn btn-warning" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container">
    <div class="row my-2" style="margin-left: 100px;">
      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="watch.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>WATCHES</h1>
              <p>Buy men's and women's watches from a wide range of stylish collections.
                amazon.in has been visited by 1M+ users in the past month</p>
              <a href="" class="btn btn-danger" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>


      </div>

      <div class="col-md-4">
        <div id="card" class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="shirt.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>MEN'S SHIRTS</h1>
              <p>Transform Your Wardrobe & Treat Yourself To Something New With Fashionable Accessories. Walk In Style
                With Clothes That Fit Your Personality and Size. Place Your Order!</p>
              <a href="" class="btn btn-danger" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>

      </div>


      <div class="col-md-4">
        <div id="card" class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="cos.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>COSMETICS</h1>
              <p>Skef is an online beauty store that offers a wide range of cosmetics and beauty products from top
                brands. Shop makeup, health products, skincare, haircare, and more with free …</p>
              <a href="" class="btn btn-danger" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> -->

  <!-- <div class="container">
    <div class="row my-5" style="padding-top: 100px; padding-right: 10px; margin-left: 100px;">
      <div class="col-md-4">
        <div id="card" class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="shoe.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>SHOES</h1>
              <p>Shop By Top Footwear Brands: Reebok Shoes | Nike Shoes | Puma Shoes | Bata Shoes | Woodland Shoes |
                Sparx Shoes | Red Tape Shoes | Clarks Shoes | Khadims shoes | Crocs …</p>
              <a href="" class="btn btn-danger" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-4">
        <div id="card" class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="OIP.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>SAREES</h1>
              <p>Transform Your Wardrobe & Treat Yourself To Something New With Fashionable Clothing. Walk In Style With
                Clothes That Fit Your Personality and Size. Place Your Order!</p>
              <a href="" class="btn btn-danger" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div id="card" class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="OIP.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>KIDS WEAR</h1>
              <p>Online Shopping for kids wear at best prices. Buy kids clothes, footwear, toys at hopscotch. Cash on
                Delivery, Latest Designs, Pan India shipping.</p>
              <a href="" class="btn btn-danger" role="button" value="input button">More info!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
    <div class="col">
      <div class="card card_hover h-100">
        <img src="sunglass.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Sunglasses</h5>
          <p class="card-text text-center">Starts at Rs 399.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>


        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card_hover h-100">
        <img src="cover.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Mobile Covers</h5>
          <p class="card-text text-center">Starts at Rs 199.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card_hover h-100">
        <img src="t shirts.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">T shirts</h5>
          <p class="card-text text-center">Starts at Rs 499.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card_hover h-100">
        <img src="jeans.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Jeans</h5>
          <p class="card-text text-center">Starts at Rs 1499.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>

        </div>
      </div>
    </div>
  </div>


  <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
    <div class="col">
      <div class="card card_hover h-100">
        <img src="nike.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Nike Shoes</h5>
          <p class="card-text text-center">Starts at Rs 2399.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>


        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card_hover h-100">
        <img src="track.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Track Pants</h5>
          <p class="card-text text-center">Starts at Rs 499.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card_hover h-100">
        <img src="sports.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Sports Items</h5>
          <p class="card-text text-center">Starts at Rs 299.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card_hover h-100">
        <img src="jw.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Jewellery</h5>
          <p class="card-text text-center">Starts at Rs 299.00</p>
          <a href="" class="btn btn-warning" role="button" value="input button" style="margin-left: 10px;">Shop Now  <i class="bi bi-emoji-smile"></i></a>

        </div>
      </div>
    </div>
  </div>
   
<!-- forms -->


  <div class="container">
    <div class="row justify-content-center" id="sign">
      <div class="col-md-6">
        <h3 class="text-center">SKEF online shop</h3>
        <!-- <h2 class="text-center mb-4 mt-3">Sign Up</h2>
        <form id="signupForm" action="#" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="cname" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form> -->
        <div class="page-content page-container mt-5 pt-3" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center"> <a style="text-decoration:none;" href="skefsign.php"><button type="button" id="animatebutton" class="btn btn-warning btn-icon-text animatebutton"> <i class="fa fa-check btn-icon-prepend"></i>SIGN UP </a></button> </div>
    </div>
</div>
<div class="page-content page-container mt-5 pt-3" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center"> <a style="text-decoration:none;" href="login.php"><button type="button" id="animatebutton" class="btn btn-warning btn-icon-text animatebutton"> <i class="fa fa-check btn-icon-prepend"></i> LOGIN </a></button> </div>
    </div>
</div>
      </div>

  
        <!-- map -->
        
        <div class="col-lg-6 col-md-12 p-2 border border-light" id="loc">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1dLATITUDE!2dLONGITUDE!3dZOOM_LEVEL!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3APLACE_NAME!2sPLACE_NAME!5e0!3m2!1sen!2sus!4vYOUR_API_KEY"
                frameborder="0" class="w-100 h-300" style="width: 100%; height: 100%;"></iframe>
        </div>
        </div>
    </div>


    
          
      <section class="">
        <footer class="text-center text-white mt-4" style="background-color: #0a4275;">
          <div class="container p-4 pb-0">
            <section class="">
              <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Sign in for Free</span>
                <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
                  <a href="skefsign.php"> Sign up!</a>
                </button>
              </p>
            </section>
          </div>
      
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="#">SKEF online shopping.com</a>
          </div>
        </footer>
      </section>


      


<script>
  const navEl = document.querySelector('.navbar');
window.addEventListener('scroll', () => {

if (window.scrollY >= 56) { navEl.classList.add('navbar-scrolled');
} else if (window.scrollY < 56) { navEl.classList.remove('navbar-scrolled');
}
});
</script>
      
</body>