<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <script src="app.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style/style.css" > 
    <link rel="stylesheet" href="style/game.css">
    <script src="save.js" charset="utf-8"></script> 
    
</head>
    <section>
        <header>
            <nav>
                <ul class="Nav_bar">
                    <li><a href="https://www.google.com/search?sxsrf=ALeKk03Iu1Nmx0eNa8EGflp9LUgy0VIvYg%3A1595789349388&ei=JdAdX9amF4GxytMP5bOfgA4&q=match+pair+game+rules&oq=match+pair+game+rules&gs_lcp=CgZwc3ktYWIQAzIFCCEQqwI6BAgjECc6BAgAEEM6BQgAEJECOgsILhCxAxDHARCjAjoFCAAQsQM6AgguOgIIADoHCAAQFBCHAjoICC4QsQMQgwE6CAgAELEDEIMBOgUILhCxAzoICAAQsQMQkQI6CAguEMcBEK8BOg4ILhDHARCvARCRAhCTAjoECAAQCjoGCAAQFhAeOggIABAWEAoQHjoICCEQFhAdEB5Q5TtY4mtg62xoBHAAeACAAcEBiAH_EZIBBDEyLjmYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwiWzbnKyuvqAhWBmHIEHeXZB-AQ4dUDCAw&uact=5">GameRule</a></li>
                    <li><a href="contactUsaccount.php">Contact</a></li>
                    <li><a href="aboutUsaccount.php">About us</a></li>   
                </ul>
            </nav>
            
            <a class="bt" href="login.php"> <button><Strong>Log Out </Strong></button></a>
        </header>
    </section>     
    
    <body>
   
    <div >
    </div> 
         <button id="btn_save" onclick="saveGame()">Save Game </button>
        <h1>Matching Picture Game</h1>
           
        <h3> >Score:<span id="result"></span></h3>
        
        <div class="grid">
        
        </div>
        <button id="btn_restart" onclick="location.href =  'Indexaccount.php';"> Restart</button>
    <?php
    session_start();
    
    echo " <span style= 'font-size:30px; text-align:center;'  >" ."Welcome " . $_SESSION['username'] . "</span>"?>
   
       
    </body>

</html>
