<html>

<head>
    <title>
        Recycle Bin
    </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>

    <!--External Stylesheet-->
    <link rel="stylesheet" type="text/css" href="./css/brand-heading.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/search-bar-css/search-bar.css">
</head>

<body data-spy="scroll" data-target="navbar">
    <div class="container">
        <!--here, 1. class="navbar" to create a navbar
                  2. class="navbar-expand-lg" expanded the navbar while in larger device
                  3. class="navbar-light" to denote navbar to be light in color
                  4. class="bg-light" to denote the background to be light in color
        -->
        <!--Navigational Bar for the Website-->
        <!--Start of the Navigational Bar Section-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--here, 1. class="navbar-brand" to create a navigation brand
                      2. "h1" to make the little bit bolder-->
            <a class="navbar-brand h1" id="title" href="#Recycle Bin">Recycle Bin</a>
            <!--here, 1. class="navbar-toggler" to mention that button will be a toggler button-->
            <button class="navbar-toggler" type="button" aria-controls="newsMenu" aria-expanded="false"
                aria-label="Toggle navigation" data-toggle="collapse" data-target="#newsMenu">
                <!--here, 1. class="navbar-toggle-icon" to provide the toggle icon on the navbar toggler button -->
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--here, 1. class="collapse" to mention that want collapsible class
                      2. class="navbar-collapse" to mention that navbar will be collapsible
                      3. id = "newsMenu" this id will collapse when clicking the toggler icon
            -->
            <div class="collapse navbar-collapse justify-content-end" id="newsMenu">
                <!--here, 1. class="navbar-nav" to hold the navgational nav for the toggler-->
                <div class="navbar-nav navbar-dark nav-tabs">
                    <!--here, 1. class="nav-item" to mention that this elemet are navigation item
                              2. class="nav-link" to mention that this will be the navigation link
                    -->
                    <a class="nav-item nav-link bg-primary active" href="../HomePage/homepage.php">Home</a>
                    <a class="nav-item nav-link" href="../About-Us-Page/about-us.php">About</a>
                    <a class="nav-item nav-link" href="ad/post_ad.php">Post Ad</a>
                    <a class="nav-item nav-link" href="../SellerDashboard/seller-dashboard.php">Seller Dashboard</a>
                    <a class="nav-item nav-link" href="../Sign-In-And-Sign-Up/Sign-In-Page/sign_in.php" id="logout">Log out</a>
                    <!--<a class="nav-item nav-link" href="#">Log-out</a> -->
                </div>
            </div>
        </nav>
        <!--/End of the Navigational Bar Section-->
    </div>

    <!--Starting of Search Section -->
    <div class="container d-flex justify-content-center">
    <div class="card mt-5 p-4">
        <div class="input-group mb-3"> <input type="text" class="form-control">
            
            <div class="input-group-append" >
              <button class="btn btn-success" id="search"><a class="link-btn" href="../Search-Page/search-from-main.php">search </a></button>
            </div>
        </div> 
        <div class="d-flex flex-row justify-content-between mb-3">
        </div>
    </div>
    </div>
    <!--/Ending of Search Section -->

    <!-- Starting of the Grid Service Section-->
    <div class="row">
        <div id="Services" class="col-md-12 pt-6">
          <div class="card-deck">
            <div class="card">
              <img src="./images/services-images/electronic-images.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="link-primary" href="../Search-Page/search.php?category=electronics">Electronics Accessories</a></h5>
                <p class="card-text">All Post Related to Electronics</p>
              </div>
            </div>
            <div class="card">
              <img src="./images/services-images/mobile-images-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="link-primary" href="../Search-Page/search.php?category=mobile">Mobile</a></h5>
                <p class="card-text">All Post Related to Mobile</p>
              </div>
            </div>
            <div class="card">
              <img src="./images/services-images/car-image.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="link-primary" href="../Search-Page/search.php?category=cars">Cars</a></h5>
                <p class="card-text">All Post Related to Cars</p>
              </div>
            </div>
            <div class="card">
              <img src="./images/services-images/bikes-images.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="link-primary" href="../Search-Page/search.php?category=bikes">Bikes</a></h5>
                <p class="card-text">All Post Related to Bikes</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- /Ending of the Grid Service Section-->


</body>
