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
                <li><a href="index.php"> Home</a></li>
                <li><a href="https://www.google.com/search?sxsrf=ALeKk03Iu1Nmx0eNa8EGflp9LUgy0VIvYg%3A1595789349388&ei=JdAdX9amF4GxytMP5bOfgA4&q=match+pair+game+rules&oq=match+pair+game+rules&gs_lcp=CgZwc3ktYWIQAzIFCCEQqwI6BAgjECc6BAgAEEM6BQgAEJECOgsILhCxAxDHARCjAjoFCAAQsQM6AgguOgIIADoHCAAQFBCHAjoICC4QsQMQgwE6CAgAELEDEIMBOgUILhCxAzoICAAQsQMQkQI6CAguEMcBEK8BOg4ILhDHARCvARCRAhCTAjoECAAQCjoGCAAQFhAeOggIABAWEAoQHjoICCEQFhAdEB5Q5TtY4mtg62xoBHAAeACAAcEBiAH_EZIBBDEyLjmYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwiWzbnKyuvqAhWBmHIEHeXZB-AQ4dUDCAw&uact=5">Game Search</a></li>
                <li><a href="contactUs.php">Contact</a></li>
                <li><a href="aboutUs.php">About us</a></li>  
                <li><a href="History.php">History</a></li>  
            </ul>
        </nav>
        <a class="bt" href="login.php"> <button><strong>Log In</button></a>
    </header>
</section>
<body>
    <div class="authLogin" >     
        <form action="loginuser.php"method="post">
            <!--form action="/action_page.php" method="get" -->
         <label for="User">UserName</label><br>
         <input type="text" id="UserName" name="username"><br>
         <label for="passwd">Password:</label> <br>
        <input type="password" id="pwd" name="password"><br>
        <br> 
        <input type="submit" value="Submit"> 
        </form>
     </div> 
        <p id = >Dont have an account? <a id= "clickhere" href="Registration.php"> Click Here </a></p>
</body>
</html>