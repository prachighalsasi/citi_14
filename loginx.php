<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="lginn.css">
</head>
    
<body>
    <nav>
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
    <main id="main-holder">
        <h1 id="login-header">Login</h1>
        <div id="frm">
            <form action="process.php" method="POST">
                <p>
                    <label>Username:</label>
                    <input class="login-form-field" type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input class="login-form-field" type="password" id="pass" name="pass"/>
                </p>
                <p>
                    <input class="sub" type="submit" id="login-form-submit" value="Login"/>
                </p>
            </form>
        </div>
    </main>
    
    
    
    
</body>
</html>