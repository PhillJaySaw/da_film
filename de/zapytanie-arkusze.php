<!DOCTYPE html>
<html id="kontakt" lang="de">
   <head>
      <meta charset="utf-8">
      <title>D.A. Film - Kunststoffplatten und Folienzuschnitte - anfrage</title>
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
            <li><a href="oferta.html">Produkte</a></li>
            <li><a href="kalkfolii.html">Folien Kalkulator</a></li>
            <li><a href="onas.html">Unternehmen</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="impressum.html">Impresum</a></li>
            <li><a href="agb.html">AGB</a></li>
         </ul>
      </nav>
      <header>
         <div class="header-box">
            <h1>Kunststoffplatten und Folienzuschnitte - anfrage</h1>
            <div class="text-box">
               <p>
                  Wenn Sie Fragen zu einem bestimmten Produkt haben, oder uns Dimensionen des Produkts
                  in dem Sie interessieren sind schicken möchten, benutzen Sie bitte unser Formular.
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
                   <span class="error">*</span>Name / Firma:<br>
                   <input name="name" type="text" value="" size="50" required><br>
                   Kontaktnummer:<br>
                   <input name="numer" type="text" value="" size="50"><br>
                   <span class="error">*</span>Dein email:<br>
                   <input name="email" type="email" value="" size="50" required><br>

                   <h3>Wählen Sie den Produkt in dem Sie interessiert sind</h3>
                   <select class="product-select" name="nazwa-produktu">
                      <option value="">produkt</option>
                      <option value="arkusze płachty luzem">Platten – Zuschnitte locker in Säcke oder Kartone gepackt</option>
                      <option value="arkusze i płachty perferowane na rolce">Bogen und Lochblätter auf Rollen</option>
                      <option value="male rolki">kleine Rollen</option>
                   </select>

                   <h3>Wählen Sie einen Typ</h3>
                   <select class="product-select" name="rodzaj-folii">
                      <option value="">---</option>
                      <option value="taśma">band</option>
                      <option value="półrękaw">halbschlauch</option>
                      <option value="rękaw">schlauch</option>
                      <option value="rękaw z zakłądkami">schlauch mit falten</option>
                   </select>

                   <h3>Dimensionen:</h3>
                     <label for="szerokosc">Breite</label>
                     <input type="text" name="szerokosc" value="" placeholder="Meter">

                     <label for="zakladka">Falten</label>
                     <input type="text" name="zakladka" value="" placeholder="Meter">

                     <label for="dlugosc">Länge</label>
                     <input type="text" name="dlugosc" value="" placeholder="Meter">

                     <label for="grubosc">Dicke</label>
                     <input type="text" name="grubosc" value="" placeholder="Mikron">

                     <label for="kolor">Farbe</label>
                     <input type="text" name="kolor" value="">

                     <label for="ilosc">Menge des Produkts</label>
                     <input type="text" name="ilosc" value="" placeholder="Stücke">

                     <h3>Verpackung Methode</h3>
                     <select class="product-select" name="sposob-pakowania">
                        <option value="brak">---</option>
                        <option value="kartony">Karton</option>
                        <option value="arkusze perferowane na rolce">Lochbleche je Rolle</option>
                        <option value="worki zbiorcze">Bigbags</option>
                        <option value="euro-box">euro-box</option>
                     </select>
                     <input type="text" name="ilosc-box" value="" placeholder="Menge">

                     <h3>Zulagen</h3>
                     <input type="checkbox" name="check_list[]" value="uv"> UV <br>
                     <input type="checkbox" name="check_list[]" value="antislip"> Anti Slip <br>
                     <input type="checkbox" name="check_list[]" value="antiblock"> Anti block <br>
                     <input type="checkbox" name="check_list[]" value="roughsurface"> Rough surface <br>
                     <input type="checkbox" name="check_list[]" value="antirust"> Anti rust <br>

                     <h3>Lieferadresse</h3>
                     <input type="text" name="ulica-numer-lokalu" value="" placeholder="str., Wohnung Nummer">
                     <input type="text" name="kod-pocztowy" value="" placeholder="Postleitzahl">
                     <input type="text" name="miasto" value="" placeholder="Stadt">
                     <input type="text" name="kraj" value="" placeholder="Land">

                   <br>Frage / Zusätzliche Bemerkungen:<br>
                   <textarea name="message" cols="50" rows="100"></textarea><br>
                   <input type="submit" value="Senden"/>
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
                   $zakladka=$_REQUEST['zakldaka'];
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
                            "Zakładka: ".$zakladka."metry\r\n".
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
                        echo "Form gesendet!";
               	    }
                   }
               ?>
         </section>
      </main>
      <footer class="group">
         <span class="copy">Phillip Ławniczak &copy; 2017</span>
         <nav class="footer-nav">
            <a href="#">Datenschutz</a>
            <a href="kontakt.php">Kontakt</a>
         </nav>
      </footer>

   <script src="" type="text/javascript"></script>
   </body>
</html>
