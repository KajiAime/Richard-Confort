<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div id="tp">
            <img src="images/logo3.png">
        </div>
        <div class="dropdown">	
        <img class="dropbtn" src="images/phone.png">
            <div class="dropdown-content">
                <a href="#if">Map</a>
                <a href="#footer">Footer</a>
            </div>
        </div>
        <a href="fcontact.html">
            <figure>
                <img id="GG" src="images/fr.png">
                <figcaption id="FG">Fran&#231;ais</figcaption>
            </figure>
        </a>
        <div id="P">
            <b>Contact us</b>
            <a href="about.html">Our products</a>
            <a href="index.html">Home</a>
        </div>
    </nav>
    <div id="hzq">
        <p>Please, leave us a message below to pass a command, to tell us if you have problems, or for any other feedback.</p>
    <div id="form">
    <form action="contact.php" method="post">
        <center><h1 id="h7">Leave a message</h1></center>
        <div id="e">
        <div id="a">
            <label for="name" class="label"><b>Name</b></label><br>
            <input type="text" name="name" placeholder="Your name..." required>
        </div>
        <div id="b">
            <label for="email" class="label"><b>Email</b></label><br>
            <input type="email" name="email" id="email" placeholder="Your email address..." required>
        </div>
        </div>
        <div id="f">
        <div id="c">
            <label for="town" class="label"><b>Town</b></label><br/>
            <input type="text" name="town" id="town" placeholder="Your town of residence..." required>
        </div>
        <div id="d">
            <label for="phone" class="label"><b>Phone</b></label><br>
            <input type="tel" name="phone" placeholder="Your telephone number..." required>
        </div>
        </div>
        <label for="msg" id="msgl" class="label"><b>Message</b></label><br>
        <textarea name="msg" id="msgs" placeholder="Please leave a message here..." required></textarea>
        <center><button type="submit" id="bn"><b>Send</b></button></center>
    </form>
    <?php
        $to = 'ngnintedem@richardconfort.com';
        $subject = 'Email de votre site web.';
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers.='Content-type: text/plain; charset: utf-8'."\r\n";
        $headers.= "Message_from: ".$_POST['prename']."\r\n";
        $message= "Name: ".$_POST['name']."\r\n\r\n";
        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        if($email){
            $headers.="Sender_email: $email";
            $message.= "Email: ".$_POST['email']."\r\n\r\n";
            $message.= "Telephone: ".$_POST['phone']."\r\n\r\n";
            $message.= "Town: ".$_POST['town']."\r\n\r\n";
            $message.= "Message: ".$_POST['msg'];
            $sent = mail($to,$subject,$message,$headers,'-f'.$to);
        }else{
            echo "<script> alert(\"The email address is incorrect. Please, correct it before trying again.\"); </script>";
        }
	    if(isset($sent) && $sent){
	        echo "<script>alert(\"Your message is being sent. Thank you for your collaboration.\");</script>";
	     }else{
	        echo "<script>alert(\"Error: The message was not sent. Please try again.\");</script>";
	    }
    ?>
    </div>
    <div id="z">
        <h1>Our contact</h1><hr>
        <p>Name: Richard Confort International SARL</p><br>
        <a href="tel:+237651746944"><span><img id="pt" src="images/phone.png"></span>+237 651 74 69 44</a><br><br>
        <a href="https://wa.me/237683688053"><span><img id="pt" src="images/whatsapp.png"></span>+237 683 68 80 53</a><br><br>
        <a href="mailto:ngnintedem@richardconfort.com"><span><img id="pt" src="images/email.png"></span> ngnintedem@richardconfort.com</a><br><br>
        <a href="http://www.richardconfort.com"><span><img id="pt" src="images/web.png"></span> www.richardconfort.com</a>
    </div>
    <p><span><img id="pt" src="images/location.png"></span> We are located just besides TotalEnergies Bojongo in Bonaberi, Douala. For directions, please scroll through the map below.</p>
    </div>
    <div id="map">
        <iframe id="if" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d851.1079099904309!2d9.636231186508182!3d4.0995823905825475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061115372ba4cc5%3A0x73c6d055a4143a85!2sTotalEnergies%20BOJONGO!5e1!3m2!1sen!2scm!4v1661776059623!5m2!1sen!2scm" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>	
	<div class="ups">
		<a href="#"><span><img src="images/up.png" id="pt"></span>Return to top</a>
	</div>
    <footer id="footer">
        <div id="ZZ">
            <b>Sections</b><br><br>
            <a href="index.html"><span><img id="pt" src="images/home.png"></span> Home</a><br><br>
            <a href="about.html"><span><img id="pt" src="images/info.png"></span> Our products</a><br><br>
            <b><span><img id="pt" src="images/phone.png"></span> Contact us</b><br><br>
            <a href="#"><span><img id="pt" src="images/up.png"></span> Return to the top</a><br>
        </div>
        <div id="ZY">
            <b>Contact us</b><br><br>
            <a href="contact.html">Fill the form here to get easily contact us or call us</a><br><br>
            <a href="https://wa.me/237683688053" target="_blank"><span><img id="pt" src="images/whatsapp.png"></span> +237 683 68 80 53</a><br><br>
            <a href="mailto:ngnintedem@richardconfort.com">ngnintedem@richardconfort.com</a>
        </div>
        <div id="ZX">
            <b>Products</b><br><br>
            <a href="about.html#el">Electronics</a><br><br>
            <a href="about.html#fur">Furniture</a><br><br>
            <a href="about.html#lig">Lighting</a><br><br>
            <a href="about.html#kit">Kitchen utensils</a><br><br>
            <a href="about.html#dec">Decoration</a><br><br>
            <a href="about.html#oth">Other items</a><br><br>
        </div>
        <div>
            <a target="_blank" href="https://test.blumdesk.com"><img style="height: 100px;" src="images/blumlogo.png" alt="Blumdesk's logo">
            <p>Copyright 2020 Blumdesk &copy;</p></a>
        </div>
    </footer>
</body>
</html>