<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="historicalnew.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <title>Historical Data</title>
    </head>
    <body>
        <nav>
            <div class="nav-links">
            <ul>
                <li><a href="page2.php">HOME</a></li>
                <li><a href="index.php">LIVE DATA</a></li>
                <li><a href="historical.php">HISTORICAL ANALYSIS</a></li>
                <li><a href="saved_stocks.php">MY SAVED STOCKS</a></li>
                
                
            </ul>
            </div>
        </nav>
        
            
        <form action="search.php" method="POST">
            <div class="searchbox">
            <input class ="searchtext" type="text" id="stockname" name="stockname" placeholder="Type to search">
            <button class="searchbutton"  id="btn">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </form>
        </div>
    </body>
</html>
