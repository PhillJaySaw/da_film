<!DOCTYPE html>
<html id="kontakt" lang="pl">
   <head>
      <meta charset="utf-8">
      <title>D.A. Film - Folie PE - zapytanie</title>
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
            <li><a href="oferta.html">Oferta</a></li>
            <li><a href="kalkfolii.html">Kalkulator folii</a></li>
            <li><a href="onas.html">O Nas</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="warsprzed.html">Warunki sprzedaży</a></li>
         </ul>
      </nav>
      <header>
         <div class="header-box">
            <h1>Folia PE - zapytanie</h1>
            <div class="text-box">
               <p>
                  Jeżeli masz jakieś pytania co do konkretnego produktu,
                  lub chcesz nam wysłać wymiary produktu jakimi jesteś zainteresowany,
                  skorzystaj z naszego formularza.
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
                   <span class="error">*</span>Imię i Nazwisko / Firma:<br>
                   <input name="name" type="text" value="" size="50" required><br>
                   Numer kontaktowy:<br>
                   <input name="numer" type="text" value="" size="50"><br>
                   <span class="error">*</span>Twój email:<br>
                   <input name="email" type="email" value="" size="50" required><br>

                   <h3>Wybierz produkt którym jesteś zainteresowany</h3>
                   <select class="product-select" name="nazwa-produktu">
                      <option value="">wybierz rodzaj folii</option>
                      <option value="Folie budowlane">Folie budowlane</option>
                      <option value="Folie nierozprzestrzeniające ognia - klasa B2">Folie nierozprzestrzeniające ognia - klasa B2</option>
                      <option value="Folia antystatyczna">Folia antystatyczna</option>
                      <option value="Folie barierowe dla pary i wilgoci">Folie barierowe dla pary i wilgoci</option>
                      <option value="Folie ochronne">Folie ochronne</option>
                      <option value="Rękawy foliowe">Rękawy foliowe</option>
                      <option value="Folie termokurczliwe">Folie termokurczliwe</option>
                      <option value="Folia PE Biało-Czarne">Folia PE Biało-Czarne</option>
                      <option value="Taśmy ostrzegawcze">Taśmy ostrzegawcze</option>
                   </select>

                   <h3>Wymiary:</h3>
                     <label for="szerokosc">szerokość</label>
                     <input type="text" name="szerokosc" value="" placeholder="metry">

                     <!--<label for="zakladka">zakładka</label>
                     <input type="text" name="zakladka" value="" placeholder="metry">
                     -->

                     <label for="dlugosc">długość</label>
                     <input type="text" name="dlugosc" value="" placeholder="metry">

                     <label for="grubosc">grubość</label>
                     <input type="text" name="grubosc" value="" placeholder="mikrony">

                     <label for="kolor">kolor</label>
                     <input type="text" name="kolor" value="">

                     <label for="ilosc">ilość produktu</label>
                     <input type="text" name="ilosc" value="" placeholder="sztuki">

                     <h3>Sposób pakowania</h3>
                     <select class="product-select" name="sposob-pakowania">
                        <option value="brak">---</option>
                        <option value="kartony">kartony</option>
                        <option value="arkusze perferowane na rolce">arkusze perferowane na rolce</option>
                        <option value="worki zbiorcze">worki zbiorcze</option>
                        <option value="euro-box">euro-box</option>
                     </select>
                     <input type="text" name="ilosc-box" value="" placeholder="ilość">

                     <h3>Dodatki</h3>
                     <input type="checkbox" name="check_list[]" value="uv"> UV <br>
                     <input type="checkbox" name="check_list[]" value="antislip"> Anti Slip <br>
                     <input type="checkbox" name="check_list[]" value="antiblock"> Anti block <br>
                     <input type="checkbox" name="check_list[]" value="roughsurface"> Rough surface <br>
                     <input type="checkbox" name="check_list[]" value="antirust"> Anti rust <br>

                     <h3>Adres dostawy</h3>
                     <input type="text" name="ulica-numer-lokalu" value="" placeholder="ulica, numer lokalu">
                     <input type="text" name="kod-pocztowy" value="" placeholder="kod pocztowy">
                     <input type="text" name="miasto" value="" placeholder="miasto">
                     <input type="text" name="kraj" value="" placeholder="kraj">

                   <br>Pytanie / Dodatkowe uwagi:<br>
                   <textarea name="message" cols="50" rows="100"></textarea><br>
                   <input type="submit" value="Wyślij"/>
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
                        echo "Formularz wysłany!";
               	    }
                   }
               ?>
         </section>
      </main>
      <footer class="group">
         <span class="copy">Phillip Ławniczak &copy; 2017</span>
         <nav class="footer-nav">
            <a href="#">Polityka prywatności</a>
            <a href="kontakt.php">Kontakt</a>
         </nav>
      </footer>

   <script src="" type="text/javascript"></script>
   </body>
</html>
