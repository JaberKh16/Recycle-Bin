<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body>

    <input type="text">

    <p id="content">Suggestions: <span></span></p>
    <script>
        
        document.getElementById("content").style.color = "red";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("content").style.color = "black";
                document.getElementById("content").innerHTML = ""; 



                
                for (let i = 0; i < myObj.length; i++) {
                    document.getElementById("content").innerHTML += `<b>${myObj[i].product_name}</b>
                                                                    <h1>${myObj[i].price}</h1>`;
                        // document.getElementById("content").innerHTML += "The number of records = " + myObj.content.length;
                }
            }
        };

        xmlhttp.open("POST", "api_searched_product_list.php");
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send("key=s");
        
        // xmlhttp.setRequestHeader('Content-Type', 'application/json');
        // var data = {};
        // data.key = 's';
        // xmlhttp.send(JSON.stringify(data));

    </script>

    
</body>

</html>