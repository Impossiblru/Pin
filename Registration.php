
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css"> 
        <link rel="stylesheet" href="style/login.css">
        <link rel="stylesheet" href="style.css">    
        <title>Login</title>
    </head>
    <section>
        <header>
            <nav>
                <ul class="Nav_bar">
                    <li><a href="https://www.google.com/search?sxsrf=ALeKk03Iu1Nmx0eNa8EGflp9LUgy0VIvYg%3A1595789349388&ei=JdAdX9amF4GxytMP5bOfgA4&q=match+pair+game+rules&oq=match+pair+game+rules&gs_lcp=CgZwc3ktYWIQAzIFCCEQqwI6BAgjECc6BAgAEEM6BQgAEJECOgsILhCxAxDHARCjAjoFCAAQsQM6AgguOgIIADoHCAAQFBCHAjoICC4QsQMQgwE6CAgAELEDEIMBOgUILhCxAzoICAAQsQMQkQI6CAguEMcBEK8BOg4ILhDHARCvARCRAhCTAjoECAAQCjoGCAAQFhAeOggIABAWEAoQHjoICCEQFhAdEB5Q5TtY4mtg62xoBHAAeACAAcEBiAH_EZIBBDEyLjmYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwiWzbnKyuvqAhWBmHIEHeXZB-AQ4dUDCAw&uact=5">GameRule</a></li>
                    <li><a href="contactUs.php">Contact</a></li>
                    <li><a href="aboutUs.php">About us</a></li>   
                </ul>
            </nav>
            <a class="bt" href="login.php"> <button><Strong>Log In</Strong></button></a>
        </header>
    </section>
<body>
        <h1 id= register> Create Account</h1>
    <div class="authLogin" >     
        <form action="Register.php" method="post" >
            <!--form action="/action_page.php" method="get" -->
            
         <label >UserName</label><br>
         <input type="text" id="UserName" name="username" required><br>
            
         <label for="passwd">Password:</label> <br>
        <input type="password" id="pwd" name="password" required><br>
        <br> 
        <input type="submit" value="Submit"> 
        </form>
     </div> 
</body>
</html>