<?php
    if(isset($_POST['name']) && isset($_POST['email'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $to = 'jaguiar9@gmail.com';
        $subject = "test joel";
        $body = '';
        //headers 
        $headers = "From: ".$name." <".$email.">\r\n"; 
        $headers = "Reply-To: ".$email."\r\n"; 
        $headers = "MIME-Version: 1.0\r\n";
        $headers = "Content-type: text/html; charset-utf-8"; 
        //send
        $send = mail($to, $subject, $body, $headers);
        if($send){
            echo '<br>';
            echo 'Thanks for contacting me. I will respond shortly';
        } else {
            echo 'error'; 
        }   
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact- Joel Aguiar</title>    
        <link href="styles/mystyle.css" type="text/css" rel="stylesheet" />
    </head>

    
    <body>
        <nav>
                <ul class="nav">
                    <li class="nav"><a href="index.html">Home </a></li>
                    <li class="nav"><a href="aboutme.html"> About Me </a></li>
                    <li class="nav"><a href="projects.html"> Projects </a></li>
                    <li class="nav"><a href="resume.html"> Resume </a></li>
                    <li class="nav"><a class="active" href="contact.html"> Contact Me </a></li>
                </ul>     
        </nav>
        <div class="pagewidth">
            
            <h1>Contact Me</h1>
            
            <section class="maincontent">
            
            <h2>I would love to hear from you!</h2>
            <form action="" method="post">
                <p>First name *:<br>
                <input type="text" name="firstname" required="required"><br><br>
                Last name:<br>
                <input type="text" name="lastname"><br><br>
                Email *:<br>
                <input type="email" name="email" required="required"><br><br>
                Subject:<br>
                <input type="text" name="message"><br><br>
                Message *:<br>
                <textarea name="comments" cols="60" rows="10" required="required"></textarea><br><br>
                <input type="submit" value="Submit" />
            
            </form>
                
                
            </section>
        </div>
        <footer>
             <p>&#xA9; 2018 Joel Aguiar</p>
        </footer>   
    
    </body>




</html>