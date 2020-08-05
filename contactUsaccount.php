<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style/About.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
    <nav>
        <ul class="Nav_bar">
            <li><a href="Indexaccount.php">Home</a></li>
            <li><a href="https://www.google.com/search?sxsrf=ALeKk03Iu1Nmx0eNa8EGflp9LUgy0VIvYg%3A1595789349388&ei=JdAdX9amF4GxytMP5bOfgA4&q=match+pair+game+rules&oq=match+pair+game+rules&gs_lcp=CgZwc3ktYWIQAzIFCCEQqwI6BAgjECc6BAgAEEM6BQgAEJECOgsILhCxAxDHARCjAjoFCAAQsQM6AgguOgIIADoHCAAQFBCHAjoICC4QsQMQgwE6CAgAELEDEIMBOgUILhCxAzoICAAQsQMQkQI6CAguEMcBEK8BOg4ILhDHARCvARCRAhCTAjoECAAQCjoGCAAQFhAeOggIABAWEAoQHjoICCEQFhAdEB5Q5TtY4mtg62xoBHAAeACAAcEBiAH_EZIBBDEyLjmYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwiWzbnKyuvqAhWBmHIEHeXZB-AQ4dUDCAw&uact=5">GameRule</a></li>
            <li><a href="aboutUsaccount.php">About us</a></li>   
        </ul>
    </nav>
    <a class="bt" href="login.php"> <button> <strong>Log Out</strong></button></a>
</header>
   <div class="formlabel">     
   <form>
    <label for="fname" style="justify-content: center;">First name</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="Email" >Email</label><br>
    <input type="email" id="e_mail" name="e_mail"><br>
    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." ></textarea> <br>

    <input type="submit" value="Submit"> 
   </form>
</div> 
</body>

</html>