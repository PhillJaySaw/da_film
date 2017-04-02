<!DOCTYPE html>
<html id="kontakt" lang="en">
   <head>
      <meta charset="utf-8">
      <title>D.A. Film - PE films- ask about product</title>
      <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Quattrocento+Sans&amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="styles/normalize.css">
      <link rel="stylesheet" href="styles/skeleton.css">
      <link rel="stylesheet" href="styles/main.css">
      <link rel="stylesheet" href="/styles/new.css">
   </head>
   <body>
      <nav class="group main-nav">
         <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="oferta.html">Products</a></li>
            <li><a href="kalkfolii.html">Film calculator</a></li>
            <li><a href="onas.html">About Us</a></li>
            <li><a href="kontakt.html">Contact</a></li>
            <li><a href="warsprzed.html">Conditions of Sale</a></li>
         </ul>
      </nav>
      <header>
         <div class="header-box">
            <h1>PE films- ask about product</h1>
            <div class="text-box">
               <p>
                  If you have any questions about a particular product,
                  Or you want to send us the dimensions of the product you are interested in,
                  then please use our form.
               </p>
            </div>
         </div>
      </header>
      <main class="container">
         <section id="zapytanie-form">

            <?php
               $action=$_REQUEST['action'];
               if ($action=="")
                   {
                   ?>
                   <form id="zapytanie-form" class="" action="" method="POST" enctype="multipart/form-data">
                   <input type="hidden" name="action" value="submit">
                   <span class="error">*</span>Name / Company:<br>
                   <input name="name" type="text" value="" size="50" required><br>
                   Contact number:<br>
                   <input name="numer" type="text" value="" size="50"><br>
                   <span class="error">*</span>Your email:<br>
                   <input name="email" type="email" value="" size="50" required><br>

                   <h3>Choose the product you are interested in</h3>
                   <select class="product-select" name="nazwa-produktu">
                      <option value="">---</option>
                      <option value="Folie budowlane">Construction bags</option>
                      <option value="Folie nierozprzestrzeniające ognia - klasa B2">Non-fire spread films - class B2</option>
                      <option value="Folia antystatyczna">Antistatic Films</option>
                      <option value="Folie barierowe dla pary i wilgoci">Vapor barier films</option>
                      <option value="Folie ochronne">Protective films</option>
                      <option value="Rękawy foliowe">Tube films</option>
                      <option value="Folie termokurczliwe">Shrink films</option>
                      <option value="Folia PE Biało-Czarne">Black-White PE Film</option>
                      <option value="Taśmy ostrzegawcze">Warning tape</option>
                   </select>

                   <h3>Dimensions</h3>
                     <label for="szerokosc">width</label>
                     <input type="text" name="szerokosc" value="" placeholder="meters">

                     <label for="dlugosc">length</label>
                     <input type="text" name="dlugosc" value="" placeholder="meters">

                     <label for="grubosc">thickness</label>
                     <input type="text" name="grubosc" value="" placeholder="microns">

                     <label for="kolor">color</label>
                     <input type="text" name="kolor" value="">

                     <label for="ilosc">product amount</label>
                     <input type="text" name="ilosc" value="" placeholder="quantity">

                     <h3>Packeging type</h3>
                     <select class="product-select" name="sposob-pakowania">
                        <option value="brak">---</option>
                        <option value="kartony">box</option>
                        <option value="arkusze perferowane na rolce">Sheets perfered on roll</option>
                        <option value="worki zbiorcze">Bulk bags</option>
                        <option value="euro-box">euro-box</option>
                     </select>
                     <input type="text" name="ilosc-box" value="" placeholder="quantity">

                     <h3>Extras</h3>
                     <input type="checkbox" name="check_list[]" value="uv"> UV <br>
                     <input type="checkbox" name="check_list[]" value="antislip"> Anti Slip <br>
                     <input type="checkbox" name="check_list[]" value="antiblock"> Anti block <br>
                     <input type="checkbox" name="check_list[]" value="roughsurface"> Rough surface <br>
                     <input type="checkbox" name="check_list[]" value="antirust"> Anti rust <br>

                     <h3>Shipping address</h3>
                     <input type="text" name="ulica-numer-lokalu" value="" placeholder="street, apt./house number">
                     <input type="text" name="kod-pocztowy" value="" placeholder="Postal Code">
                     <input type="text" name="miasto" value="" placeholder="city">
                     <input type="text" name="kraj" value="" placeholder="Country">

                   <br>Questions / Additional remarks:<br>
                   <textarea name="message" cols="50" rows="100"></textarea><br>
                   <input type="submit" value="send"/>
                   </form>
                   <?php
                   }
               else                /* send the submitted data */
                   {
                   /* dane nadawcy */
                   $name=$_REQUEST['name'];
                   $numer=$_REQUEST['numer'];
                   $email=$_REQUEST['email'];

                   /* Dane produktu */
                   $nazwaProduktu=$_REQUEST['nazwa-produktu'];
                   $szerokosc=$_REQUEST['szerokosc'];
                   /*$zakladka=$_REQUEST['zakldaka'];*/
                   $dlugosc=$_REQUEST['dlugosc'];
                   $grubosc=$_REQUEST['grubosc'];
                   $kolor=$_REQUEST['kolor'];
                   $ilosc=$_REQUEST['ilosc'];
                   $pakowanie=$_REQUEST['sposob-pakowania'];
                   $iloscBox=$_REQUEST['ilosc-box'];
                   $dodatki = "";
                   $adresDostawy=$_REQUEST['ulica-numer-lokalu']."\r\n".$_REQUEST['kod-pocztowy']."\r\n".
                                 $_REQUEST['miasto']."\r\n".$_REQUEST['kraj'];

                   if(!empty($_REQUEST['check_list'])) {
                     foreach ($_REQUEST['check_list'] as $check) {
                        $dodatki .= $check.', ';
                     }
                   }


                   $message="Wiadomość od: $name, <$email>, tel. $numer \r\n".
                            "PRODUKT: ".$nazwaProduktu."\r\n\r\n".
                            "Szerokość: ".$szerokosc."metry\r\n".
                            "Długość: ".$dlugosc."metry\r\n".
                            "Grubość: ".$grubosc."mikrony\r\n".
                            "Kolor: ".$kolor."\r\n".
                            "Ilość: ".$ilosc." sztuk\r\n\r\n".
                            "Sposób pakowanie: ".$pakowanie."\r\n"."ilość: ".$iloscBox."\r\n".
                            "Dodatki: ".$dodatki."\r\n\r\n".
                            "Adred dostawy:\r\n".$adresDostawy."\r\n\r\n".
                            "UWAGI/PYTANIE:\r\n".$_REQUEST['message'];



                   if (($name=="")||($email==""))
                       {
               		echo "Wszystkie pola są wymagane, prosimy wypełnić <a href=\"\">formularz</a> ponownie.";
               	    }
                   else{
               	    $from="Od: $name<$email>\r\nReturn-path: $email";
                       $subject="Wiadomość wysłana za pomocą formularza kontaktowego";
               		   mail("info@da-film.com", $subject, $message, $from);
                        echo "Form has been sent!";
               	    }
                   }
               ?>
         </section>
      </main>
      <footer class="group">
         <span class="copy">Phillip Ławniczak &copy; 2017</span>
         <nav class="footer-nav">
            <a href="#">privacy policy</a>
            <a href="kontakt.php">contact</a>
         </nav>
      </footer>

   <script src="" type="text/javascript"></script>
   </body>
</html>
