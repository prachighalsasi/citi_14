<html>
<head>
    <title>NSE BSE Arbitrage Recommendation System</title>
    <link rel="stylesheet" href="page1.css">
</head>
<body>
    <div class="main">
        <nav>
            <div class="logo">
                <img src=".\citilogo.png">
            </div>
            <div class="nav-links">
            <ul>
                <li><a href="page1.php">HOME</a></li>
                <li><a href="membership.php">MEMBERSHIP</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="loginx.php">LOGIN</a></li>
            </ul>
            </div>
        </nav>
        <div class="info">
            <div class="overlay"></div>
            <img src=".\logo3.jpg" class="sn">
            <img src=".\logo2.jpg" class="sm">
            <img src=".\logo1.jpg" class="sp">
            <div id="circle">
                <div class="feature one">
                    
                    <div>
                        <h1>NSE BSE Prices</h1>
                    </div>
                </div>
                <div class="feature two">
                    
                    <div>
                        <h1>Simple Visualtions</h1>
                    </div>
                </div>
                <div class="feature three">
                    
                    <div>
                        <h1>Recommendations</h1>
                    </div>
                </div>
                <div class="feature four">
                    
                    <div>
                        <h1>Historical Analysis</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="controls">
            <img src=".\up.jpeg" id="upbtn">
            <h3>Benefits</h3>
            <img src=".\down.jpeg" id="downbtn">
        </div>

        <div class="footer">
            <p>For help call on toll free number : 1800 120 1234</p>
        </div>
    </div>

    <script>
        var circle = document.getElementById("circle");
        var upbtn = document.getElementById("upbtn");
        var downbtn = document.getElementById("downbtn");

        var rotateValue = circle.style.transform;
        var rotateSum;

        upbtn.onclick = function()
        {
            rotateSum = rotateValue + " rotate(-90deg)";
            circle.style.transform = rotateSum;
            rotateValue = rotateSum;
        }

        downbtn.onclick = function()
        {
            rotateSum = rotateValue + " rotate(90deg)";
            circle.style.transform = rotateSum;
            rotateValue = rotateSum;
        }
    </script>
</body>    
</html>