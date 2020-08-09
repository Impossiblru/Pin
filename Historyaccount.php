<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="style/style.css"> 
    <style> 
        h1{
            font-family:serif;
        }
        body{
            background-color:black;
        }
        #container_content{
            color:black;
            font-family:serif;
            text-align:center;   
            background-color:#808080;
            
            -webkit-transform: translate(-55%,-50%);
         transform: translate(-50%,-50%);
        position: absolute;
        top: 50%;
        left: 50%;
        }
        p{
            font-size:25px;
        }

    </style>
    <section>
        <header>
            <nav>
                <ul class="Nav_bar">
                <p class=welcome><?php
    session_start(); echo " " ."Welcome " . $_SESSION['username'] . "</span>"?> </p>
                    <li><a href="Indexaccount.php">Home </a></li>
                    <li><a href="https://www.google.com/search?sxsrf=ALeKk03Iu1Nmx0eNa8EGflp9LUgy0VIvYg%3A1595789349388&ei=JdAdX9amF4GxytMP5bOfgA4&q=match+pair+game+rules&oq=match+pair+game+rules&gs_lcp=CgZwc3ktYWIQAzIFCCEQqwI6BAgjECc6BAgAEEM6BQgAEJECOgsILhCxAxDHARCjAjoFCAAQsQM6AgguOgIIADoHCAAQFBCHAjoICC4QsQMQgwE6CAgAELEDEIMBOgUILhCxAzoICAAQsQMQkQI6CAguEMcBEK8BOg4ILhDHARCvARCRAhCTAjoECAAQCjoGCAAQFhAeOggIABAWEAoQHjoICCEQFhAdEB5Q5TtY4mtg62xoBHAAeACAAcEBiAH_EZIBBDEyLjmYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwiWzbnKyuvqAhWBmHIEHeXZB-AQ4dUDCAw&uact=5">Google Search</a></li>
                    <li><a href="contactUsaccount.php">Contact</a></li>
                    <li><a href="aboutUsaccount.php">About us</a></li>  
                     
                </ul>
            </nav>
            <a class="bt" href="login.php"> <button><Strong>Log In</Strong></button></a>
        </header>
    </section>
</head>
<body>
        <div id =container_content>
    <h1 id= "cardGame"> History of Card Matching Game</h1>
        <p>Matching card Game AKA Concentration, <br> this card game was designedto mainly for the young and elderly in mind.  Fun Fact, because this game requires memorization, people who suffer alzhimers are reccomended to play games that require memory because it helps them concentrate.  </p>
        <h1> RULES: </h1>
        <p> In order to win you must match all pair of cards <br> Pick one card and click on it <br> Memorize or look for the pair <br>  </p>    
    </div>
</body>
</html>