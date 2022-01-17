<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="./semantic-css/semantic.min.css">
</head>

<body>
    <div class="ui fluid menu">
       
        <div style="margin-left: 20px" class="header item">
            Recycle Bin
        </div>
        <div class="right menu">
        <a class="item active" href="../HomePage/homepage.php">Home</a>
        <a  href="../About-Us-Page/about-us.php" class="item">About US</a>
        <a class="item" href="../SellerDashboard/seller-dashboard.php">Seller Dashboard</a>
        <a class="item" href="../Sign-In-And-Sign-Up/Sign-In-Page/sign_in.php">Sign In</a>
        <a class="item" href="../Sign-In-And-Sign-Up/Sign-Up-Page/sign_up.php">Registration</a>
      </div>
    </div>
 
    <div class="ui grid">
        <div class="ui three wide column" style="background-image: url('./images/back.jpg'); background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover; min-height: 100vh;">
            <div style="padding: 20px">
                <a href="../HomePage/homepage.php"><img style="width:180px;margin-left:auto;margin-right:auto;display:block " src="./images/logo.png"> </a>
                <h1 style="text-align:center;">Recycle Bin</h1>
               
                <!--                <p style="text-align:center">CSE-222 Project</p>-->
                <select class="ui fluid dropdown">
                      <option value="">Location</option>
                      <option value="0">Barisal</option>
                      <option value="1">Dhaka</option>
                      <option value="2">Rangpur</option>
                      <option value="3">Rajshahi</option>
                      <option value="4">Mymensingh</option>
                      <option value="5">Sylhet</option>
                      <option value="6">Chittagong</option>
                </select>
                <div style="padding:10px">
            </div>
                <select class="ui fluid dropdown">
                      <option value="">Price</option>
                      <option value="0">Low to High</option>
                      <option value="1">High to Low</option>
 
                </select>
                <button style="margin-top: 10px" class="ui center floated fluid button" type="submit">Filter</button>
                
                
            </div>
            <div style="padding:30px">
            </div>
        </div>
        <div class="ui thirteen wide column" style="background-image: url('./images/back2.jpg'); background-repeat: no-repeat ;background-size: cover; min-height: 100vh;">
            <h1 style="color: black;text-align: center; font-size: 5vh;padding-top: 30px;font-weight: 900">Find Your Desired Product</h1>
            <form class="ui form" method="post" action="searchresult.php" style="padding-top: 30px;width: 50%;margin-left: 250px">
                <div class="field">
                        <!-- <label>Name</label> -->
                    <input type="text" name="search_query" placeholder="Seach product">
                </div>
               
                <div class="ui animated fade fluid button" tabindex="0">
                  <div class="visible content">Search</div>
                  <div class="hidden content">
                    Find Your Desired Product
                  </div>
                </div>
            </form>
            
        
                <div class="ui text container" style="padding-top: 40px;margin-left:50px">
            <h2>Search Result : </h2><br>

            <div class="ui grid" style="border-radius: 10px;border: 2px solid black; width: 1000px;height: 240px;padding: 20px;margin: 10px;margin-bottom: 20px">
                <div class="ui five wide column" style="min-height: 15vh;">
                    <img style="height: 180px;width: 260px;border-radius: 10px;border: 2px solid #6a6c6d; background-repeat: no-repeat;background-size: cover;" src="./images/Products-Pictures/car/Honda vazel.jpg">
                </div>  
                <div class="ui eleven wide column">
                    <a href="../Product-Ads-Page/product-ads.php"><h1 style="margin: 0px">Honda Vazel-S</h1></a>
                    <h3 style="margin: 5px;color: #6a6c6d">Dhaka</h3>
                    <h4 style="margin: 5px;color: #6a6c6d">Car</h4>
                    <h2 style="margin: 15px 5px 5px 5px;color: #045304">670500 BDT</h2>
                    <p style="margin: 15px 5px 5px 5px ;color: #555658">Posted 3 hours ago</p>
                </div>
            </div>  
             <div class="ui grid" style="border-radius: 10px;border: 2px solid black; width: 1000px;height: 240px;padding: 20px;margin: 10px;margin-bottom: 20px">
                <div class="ui five wide column" style="min-height: 15vh;">
                    <img style="height: 180px;width: 260px;border-radius: 10px;border: 2px solid #6a6c6d; background-repeat: no-repeat;background-size: cover;" src="./images/Products-Pictures/car/toyota yaris.jpg">
                </div>  
                <div class="ui eleven wide column">
                    <a href="#product page"><h1 style="margin: 0px">Toyota Yaris-ZN</h1></a>
                    <h3 style="margin: 5px;color: #6a6c6d">Dhaka</h3>
                    <h4 style="margin: 5px;color: #6a6c6d">Car</h4>
                    <h2 style="margin: 15px 5px 5px 5px;color: #045304">100500 BDT</h2>
                    <p style="margin: 15px 5px 5px 5px ;color: #555658">Posted 3 hours ago</p>
                </div>
            </div>
             <div class="ui grid" style="border-radius: 10px;border: 2px solid black; width: 1000px;height: 240px;padding: 20px;margin: 10px;margin-bottom: 20px">
                <div class="ui five wide column" style="min-height: 15vh;">
                    <img style="height: 180px;width: 260px;border-radius: 10px;border: 2px solid #6a6c6d; background-repeat: no-repeat;background-size: cover;" src="./images/Products-Pictures/car/bmw.jpg">
                </div>  
                <div class="ui eleven wide column">
                    <a href="#product page"><h1 style="margin: 0px">BMW SLR</h1></a>
                    <h3 style="margin: 5px;color: #6a6c6d">Rajshahi</h3>
                    <h4 style="margin: 5px;color: #6a6c6d">Car</h4>
                    <h2 style="margin: 15px 5px 5px 5px;color: #045304">500500 BDT</h2>
                    <p style="margin: 15px 5px 5px 5px ;color: #555658">Posted 2 hours ago</p>
                </div>
            </div>
            
        </div>

        </div>
    </div>



    <!-- Rest of the page content -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/semantic.min.js"></script>
</body>

</html>
