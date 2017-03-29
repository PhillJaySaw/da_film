<!DOCTYPE html>
<html id="kontakt" lang="en">
   <head>
      <meta charset="utf-8">
      <title>D.A. Film - Contact </title>
      <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Quattrocento+Sans&amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="styles/normalize.css">
      <link rel="stylesheet" href="styles/skeleton.css">
      <link rel="stylesheet" href="styles/main.css">
   </head>
   <body>
      <nav class="group main-nav">
         <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="oferta.html">Products</a></li>
            <li><a href="kalkfolii.html">Film calculator</a></li>
            <li><a href="onas.html">About Us</a></li>
            <li><a href="kontakt.php">Contact</a></li>
            <li><a href="warsprzed.html">Conditions of Sale</a></li>
         </ul>
      </nav>
      <header>
         <div class="header-box">
            <h1>Kontakt</h1>
            <div class="text-box">
               <p>
                  We are always available to our customers and
                  we will help you choose the right products.
               </p>
            </div>
         </div>
      </header>
      <main class="container">
         <section class="row kontakt-info">
            <div class="four columns kontakt">
               <img src="media/phone-call.png" alt="" class="icon">+48 56 621 06 33
            </div>
            <div class="four columns kontakt">
               <img src="media/smartphone.png" alt="" class="icon">+48 571 402 772
            </div>
            <div class="four columns kontakt">
               <img src="media/email.png" alt="" class="icon">info@da-film.com
            </div>
         </section>
         <section class="row map">
            <div class="twelve columns">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2399.4852345328127!2d18.6391048158265!3d53.02961607991389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470334b8f3c962b9%3A0x4cfd551e3108cd5d!2sMarii+Sk%C5%82odowskiej-Curie+41%2C+Toru%C5%84!5e0!3m2!1sen!2spl!4v1490050421339"
                  width="100%" height="450"
                  frameborder="0"
                  style="border:0"
                  allowfullscreen>
               </iframe>
            </div>
         </section>
         <section id="contact-form">
            <h1><img src="media/square.png" alt="square" class="header-decoration-sqaure">Contact Form</h1>
            <?php
               $action=$_REQUEST['action'];
               if ($action=="")    /* display the contact form */
                   {
                   ?>
                   <form id="contact-formular"  action="" method="POST" enctype="multipart/form-data">
                   <input type="hidden" name="action" value="submit">
                   Name / Company:<br>
                   <input name="name" type="text" value="" size="50"/><br>
                   Your email:<br>
                   <input name="email" type="text" value="" size="50"/><br>
                   Message:<br>
                   <textarea name="message" cols="50" rows="50"></textarea><br>
                   <input type="submit" value="Send"/>
                   </form>
                   <?php
                   }
               else                /* send the submitted data */
                   {
                   $name=$_REQUEST['name'];
                   $email=$_REQUEST['email'];
                   $message="Wiadomość od: $name, <$email>\r\n".$_REQUEST['message'];
                   if (($name=="")||($email=="")||($message==""))
                       {
               		echo "Wszystkie pola są wymagane, prosimy wypełnić <a href=\"\">formularz</a> ponownie.";
               	    }
                   else{
               	    $from="Od: $name<$email>\r\nReturn-path: $email";
                       $subject="Wiadomość wysłana za pomocą formularza kontaktowego";
               		   mail("info@da-film.com", $subject, $message, $from);
               		echo "Your message has been sent!";
               	    }
                   }
               ?>
         </section>
      </main>
      <footer class="group">
         <span class="copy">Phillip Ławniczak &copy; 2017</span>
         <nav class="footer-nav">
            <a href="#">privacy policy</a>
            <a href="#">Kontakt</a>
         </nav>
      </footer>

   <script src="" type="text/javascript"></script>
   </body>
</html>
