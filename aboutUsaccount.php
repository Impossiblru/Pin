<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/aboutUs.css">
</head>
<section>
    <header>
        <nav>
            <ul class="Nav_bar">
            <p class=welcome><?php
    session_start(); echo " " ."Welcome " . $_SESSION['username'] . "</span>"?> </p>
                <li><a href="Indexaccount.php"> Home</a></li>
                <li><a href="https://www.google.com/search?sxsrf=ALeKk03Iu1Nmx0eNa8EGflp9LUgy0VIvYg%3A1595789349388&ei=JdAdX9amF4GxytMP5bOfgA4&q=match+pair+game+rules&oq=match+pair+game+rules&gs_lcp=CgZwc3ktYWIQAzIFCCEQqwI6BAgjECc6BAgAEEM6BQgAEJECOgsILhCxAxDHARCjAjoFCAAQsQM6AgguOgIIADoHCAAQFBCHAjoICC4QsQMQgwE6CAgAELEDEIMBOgUILhCxAzoICAAQsQMQkQI6CAguEMcBEK8BOg4ILhDHARCvARCRAhCTAjoECAAQCjoGCAAQFhAeOggIABAWEAoQHjoICCEQFhAdEB5Q5TtY4mtg62xoBHAAeACAAcEBiAH_EZIBBDEyLjmYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwiWzbnKyuvqAhWBmHIEHeXZB-AQ4dUDCAw&uact=5">Google Search</a></li>
                <li><a href="contactUsaccount.php">Contact</a></li>  
                <li><a href="Historyaccount.php">History </a></li>
            </ul>
        </nav>
        <a class="bt" href="login.php"> <button><Strong>Log Out</Strong></button></a>
    </header>
</section>
<body>
    <div class="Container">
        <h1 class= display-1> About US </h1>
        
        <h2>Samuel Obregon: </h2>
        <p>I am currently a senior in Queens College. For this project I am doing the Front-end and the database. <br>I am expected to graduate by spring 2021, I'm hoping to use this experience to further improve ability in using the database and front end.</p>
        <h2>Boris Gonon:</h2>
        <p>Currently a senior activeley looking for employement. My interests are currently Full Stack development and Computer Graphics.<br> For this particular project I played the role of back-end engineer, specifically for the game portion of the project</p>
    </div>
</body>
</html>