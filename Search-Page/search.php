<?php
  $get_category = "";
  if (isset($_GET["category"])){
    $get_category = $_GET["category"];
  }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="./css/semantic.min.css">

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            background-color: #FFF;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>

</head>

<body>
    <div class="ui fluid menu">

        <div style="margin-left: 20px" class="header item">
            Recycle Bin
        </div>
        <div class="right menu">
            <a class="item active">Home</a>
            <a href="../About-Us-Page/about-us.php" class="item">About US</a>
            <a class="item" href="../Sign-In-And-Sign-Up/Sign-In-Page/sign_in.php">Sign In</a>
        </div>
    </div>

    <div class="ui grid">
        <div class="ui three wide column" style="background-image: url('image/back.jpg'); background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover; min-height: 100vh;">
            <div style="padding: 20px">
                <a href="home.php"><img style="width:180px;margin-left:auto;margin-right:auto;display:block " src="image/logo.png"> </a>
                <h1 style="text-align:center;">Recycle Bin</h1>

                <!--                <p style="text-align:center">CSE-222 Project</p>-->
                <select class="ui fluid dropdown" id="location_filter_dropdown">
                    <option value="all">All Location</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="rangpur">Rangpur</option>
                </select>
                <div style="padding:10px">
                </div>
                <select class="ui fluid dropdown" id="sort_by_dropdown">
                    <option value="0">Price</option>
                    <option value="low_to_high">Low to High</option>
                    <option value="high_to_low">High to Low</option>

                </select>
                <!-- <button style="margin-top: 10px" class="ui center floated fluid button" type="submit">Filter</button> -->


            </div>
            <div style="padding:30px">
            </div>
        </div>
        <div class="ui thirteen wide column" style="background-image: url('image/back2.jpg'); background-repeat: no-repeat ;background-size: cover; min-height: 100vh;">
            <h1 style="color: black;text-align: center; font-size: 5vh;padding-top: 30px;font-weight: 900">Find Your Desired Product</h1>
            <form class="ui form" method="post" action="searchresult.php" style="padding-top: 30px;width: 50%;margin-left: 250px">
                <div class="field">
                    <!-- <label>Name</label> -->
                    <input type="text" name="search_query" placeholder="Seach product" id="search_textBox">
                </div>

                <div class="ui animated fade fluid button" tabindex="0" id="search_button">
                    <div class="visible content">Search</div>
                    <div class="hidden content"> Find Your Desired Product </div>
                </div>
            </form>


            <div class="ui text container" style="padding-top: 40px;margin-left:50px" id="searched_item_container">
                <!-- <h2>Search Resultgngh : </h2>


                <div class="ui grid" style="border-radius: 10px;border: 2px solid black; width: 1000px;height: 240px;padding: 20px;margin: 10px;margin-bottom: 20px">
                    <div class="ui five wide column" style="min-height: 15vh;">
                        <img style="height: 180px;width: 260px;border-radius: 10px;border: 2px solid #6a6c6d; background-repeat: no-repeat;background-size: cover;" src="imgAd/1.png" alt="paini">
                    </div>
                    <div class="ui eleven wide column">
                        <a href="#product page">
                            <h1 style="margin: 0px">Motorolla N71</h1>
                        </a>
                        <h3 style="margin: 5px;color: #6a6c6d">Dhaka</h3>
                        <h4 style="margin: 5px;color: #6a6c6d">Mobile Phone</h4>
                        <h2 style="margin: 15px 5px 5px 5px;color: #045304">12500 BDT</h2>
                        <p style="margin: 15px 5px 5px 5px ;color: #555658">Posted 3 hours ago</p>
                    </div>
                </div> -->


            </div>

        </div>
    </div>



    <!-- Rest of the page content -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/semantic.min.js"></script>


    <!-- click listener -->
    <script>
        var item_list = [{}];
        ////////////////////  Location filter  ///////////////////////
        document.getElementById("location_filter_dropdown").addEventListener("change", location_filter_event);

        function location_filter_event() {
            var location_filter_value = document.getElementById("location_filter_dropdown").value;

        }

        ////////////////////   sort by price  ///////////////////////
        document.getElementById("sort_by_dropdown").addEventListener("change", sort_by_event);

        function sort_by_event() {
            var sort_by_value = document.getElementById("sort_by_dropdown").value;

        }


        ////////////////////  Search Button click listener  ///////////////////////
        document.getElementById("search_button").addEventListener("click", search_button_click_event);

        function search_button_click_event() {
            var search_textBox_value = document.getElementById("search_textBox").value;
            var api_dir_path = "../api/api/post/";

            if (search_textBox_value === "") {
                alert("Search box is empty");
                return;
            }

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var item_list = JSON.parse(this.responseText);
                    // document.getElementById("searched_item_container").style.color = "black";
                    document.getElementById("searched_item_container").innerHTML = `<h2>Search Result : </h2>`;

                    for (let i = 0; i < item_list.length; i++) {
                        document.getElementById("searched_item_container").innerHTML += `


                            <div class="ui grid" style="border-radius: 10px;border: 2px solid black; width: 1000px;height: 240px;padding: 20px;margin: 10px;margin-bottom: 20px">
                                <div class="ui five wide column" style="min-height: 15vh;">
                                    <img style="height: 180px;width: 260px;border-radius: 10px;border: 2px solid #6a6c6d; background-repeat: no-repeat;background-size: cover;" src=${api_dir_path+item_list[i]['image_path']} alt="item"'>
                                </div>
                                <div class="ui eleven wide column">
                                    <a href="../Product-Ads-Page/product-ads.php?id=${item_list[i]['id']}">
                                        <h1 style="margin: 0px">${item_list[i]['product_name']}</h1>
                                    </a>

                                    <h3 style="margin: 5px;color: #6a6c6d">${item_list[i]['city']}</h3>
                                    <h4 style="margin: 5px;color: #6a6c6d">${item_list[i]['category']}</h4>
                                    <h2 style="margin: 15px 5px 5px 5px;color: #045304">৳${item_list[i]['price']}/-</h2>
                                    <p style="margin: 15px 5px 5px 5px ;color: #555658">${item_list[i]['date_time']}</p>

                                </div>
                            </div>

                        `;
                    }
                }
            };



            xmlhttp.open("POST", api_dir_path + "api_searched_product_list.php");
            xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xmlhttp.send("key=" + search_textBox_value);

        }

        ////////////////////////////////////////////

    </script>


    <script>
           function myFunction(){
               var get_cat_value = "<?php echo $get_category.''; ?>";
               var iinnerHTML = ``;
               if(get_cat_value){
                   var api_dir_path = "../api/api/post/";

                   var xmlhttp = new XMLHttpRequest();
                   xmlhttp.onreadystatechange = function() {
                   if (this.readyState == 4 && this.status == 200) {
                       var item_list = JSON.parse(this.responseText);
                       // document.getElementById("searched_item_container").style.color = "black";


                       for (let i = 0; i < item_list.length; i++) {
                           document.getElementById("searched_item_container").innerHTML += `


                               <div class="ui grid" style="border-radius: 10px;border: 2px solid black; width: 1000px;height: 240px;padding: 20px;margin: 10px;margin-bottom: 20px">
                                   <div class="ui five wide column" style="min-height: 15vh;">
                                       <img style="height: 180px;width: 260px;border-radius: 10px;border: 2px solid #6a6c6d; background-repeat: no-repeat;background-size: cover;" src=${api_dir_path+item_list[i]['image_path']} alt="item"'>
                                   </div>
                                   <div class="ui eleven wide column">
                                       <a href="../Product-Ads-Page/product-ads.php?id=${item_list[i]['id']}">
                                           <h1 style="margin: 0px">${item_list[i]['product_name']}</h1>
                                       </a>

                                       <h3 style="margin: 5px;color: #6a6c6d">${item_list[i]['city']}</h3>
                                       <h4 style="margin: 5px;color: #6a6c6d">${item_list[i]['category']}</h4>
                                       <h2 style="margin: 15px 5px 5px 5px;color: #045304">৳${item_list[i]['price']}/-</h2>
                                       <p style="margin: 15px 5px 5px 5px ;color: #555658">${item_list[i]['date_time']}</p>

                                   </div>
                               </div>

                           `;
                       }
                   }
               };

               xmlhttp.open("POST", api_dir_path + "api_searched_product_list.php");
               xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
               xmlhttp.send("key=" + get_cat_value);
               }
           }
           console.log(myFunction());
       </script>

</body>

</html>
