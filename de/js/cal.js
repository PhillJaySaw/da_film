var szerokosc;
var dlugosc;
var grubosc;
var zakladki;
const gestosc = 0.92;

function calcPolRekawTasma(a,b,c) {
   var waga = a * b * (c/1000) * gestosc;
   return waga.toFixed(3);
}

function calcRekaw(a,b,c) {
   var waga = a * b * (c/1000) * gestosc * 2;
   return waga.toFixed(3);
}

function calcWorkiPlasko(a,b,c) {
   var waga = a * b * (c/1000) * gestosc * 2;
   return waga.toFixed(3);
}

function calcWorKapZakladki(a,b,c,d) {
   var waga = (a + d) * b * (c/1000) * gestosc * 2;
   return waga.toFixed(3);
}

document.getElementById('calcButton').addEventListener("click", function(event) {
   szerokosc = parseFloat(document.getElementById('szerokosc').value, 10);
   dlugosc = parseFloat(document.getElementById('dlugosc').value, 10);
   grubosc = parseFloat(document.getElementById('grubosc').value, 10);
   zakladki = parseFloat(document.getElementById('zakladki').value, 10);
   var type = document.getElementById('selectType').value;
   var wynik;
   var wynikBox = document.getElementById('wynik');
   errorMessage = '<span class="error">Stellen Sie sicher, dass Sie die richtigen Daten angeben</span>';

   switch (type) {
      case "calcPolRekawTasma":
         wynik = calcPolRekawTasma(szerokosc, dlugosc, grubosc);
      break;

      case "calcRekaw":
         wynik = calcRekaw(szerokosc, dlugosc, grubosc);
      break;

      case "calcWorkiPlasko":
         wynik = calcRekaw(szerokosc, dlugosc, grubosc);
      break;

      case "calcWorKapZakladki":
         wynik = calcWorKapZakladki(szerokosc, dlugosc, grubosc, zakladki);
      break;
   }

   if(wynik == 'NaN') {
      wynikBox.innerHTML = errorMessage;
   } else {
      wynikBox.innerHTML = wynik + ' kg';
   }
});

document.getElementById('selectType').addEventListener("change", function() {
   if (this.value !== "calcWorKapZakladki") {
      document.getElementById('zakladki').disabled = true;
   } else {
      document.getElementById('zakladki').disabled = false;
   }
});

/*********************TEST*********************
szerCalkowita = 4;
dlugosc = 50;
grubosc = 0.110;
zakladki = 0.85

console.log(calcPolRekawTasma(szerCalkowita, dlugosc, grubosc));

szerCalkowita = 0.5;
dlugosc = 150;
grubosc = 0.150;

console.log(calcRekaw(szerCalkowita, dlugosc, grubosc));

szerCalkowita = 0.7;
dlugosc = 1.1;
grubosc = 0.095;

console.log(calcWorkiPlasko(szerCalkowita, dlugosc, grubosc));

szerCalkowita = 1.25;
dlugosc = 2.1;
grubosc = 0.125;

console.log(calcWorKapZakladki(szerCalkowita, dlugosc, grubosc, zakladki));
*/
