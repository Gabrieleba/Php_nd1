<?php
// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį : "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)"
$vardas = 'Gabrielė';
$pavarde = 'Bašinskaitė';
$gimimoMetai = 1993;
$sieMetai = 2021;
$amzius = $sieMetai - $gimimoMetai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai.";
echo '<br><br>';

// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
$pirmasSkaicius = rand(0, 4);
$antrasSkaicius = rand(0, 4);
echo $pirmasSkaicius ;
echo '<br>';
echo $antrasSkaicius;
echo '<br>';

if ($pirmasSkaicius == 0 || $antrasSkaicius == 0) {
    echo 'Klaida: dalyba iš 0 negalima.';
}
elseif ($pirmasSkaicius < $antrasSkaicius) {
    $antrasDaugiau = $antrasSkaicius/$pirmasSkaicius;
    echo round($antrasDaugiau, 2);
}
elseif ($pirmasSkaicius > $antrasSkaicius) {
    $pirmasDaugiau = $pirmasSkaicius/$antrasSkaicius;
    echo round($pirmasDaugiau, 2);
}
else echo '1';
echo '<br><br>';

// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
$pirmasSk = rand(0, 25);
$antrasSk = rand(0, 25);;
$treciasSk = rand(0, 25);
echo "Pirmas skaičius: $pirmasSk, antras skaičius: $antrasSk, trečias skaičius: $treciasSk. ";
echo '<br>';

if ($pirmasSk > $antrasSk && $antrasSk > $treciasSk || $treciasSk > $antrasSk && $antrasSk > $pirmasSk) {
    echo "$antrasSk";
}
elseif ($pirmasSk > $treciasSk && $treciasSk > $antrasSk || $antrasSk > $treciasSk && $treciasSk > $pirmasSk) {
    echo "$treciasSk";
}
elseif ($antrasSk > $pirmasSk && $pirmasSk > $treciasSk || $treciasSk > $pirmasSk && $pirmasSk > $antrasSk) {
    echo "$pirmasSk";
}
else echo 'Klaida: du ar daugiau skaičių yra lygūs';
echo '<br><br>';

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "Duotos kraštinės: a= $a, b=$b ir c=$c. Ar įmanoma sudaryti trikampį?";
echo '<br>';

if ($a + $b > $c || $a + $c > $b || $b + $c > $a) {
    echo 'Taip';
}
else echo 'Ne';
echo '<br><br>';

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
$vienas = rand(0, 2);
$du = rand(0, 2);
$trys = rand(0, 2);
$keturi = rand(0, 2);
echo "Duoti skaičiai: $vienas, $du, $trys ir $keturi";
echo '<br>';
$nuliai = 0;
if ($vienas == 0) {
    $nuliai = $nuliai+1;
}
elseif ($du == 0) {
    $nuliai = $nuliai+1;
}
elseif ($trys == 0) {
    $nuliai = $nuliai+1;
}
elseif ($keturi == 0) {
    $nuliai = $nuliai+1;
}
        
$vienetai = 0;
if ($vienas == 1) {
    $vienetai = $vienetai+1;
}
elseif ($du == 1) {
    $vienetai = $vienetai+1;
}
elseif ($trys == 1) {
     $vienetai = $vienetai+1;
}
elseif ($keturi == 1) {
    $vienetai = $vienetai+1;
}

$dvejetai = 0;
if ($vienas == 2) {
    $dvejetai = $dvejetai+1;
}
elseif ($du == 2) {
    $dvejetai = $dvejetai+1;
}
elseif ($trys == 2) {
    $dvejetai = $dvejetai+1;
}
elseif ($keturi == 2) {
    $dvejetai = $dvejetai+1;
}
echo "Nulių yra $nuliai, vienetų yra $vienetai, dvejetų yra $dvejetai";
echo '<br>';

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
$skaicius = rand(1, 6);
echo '<h3>' . $skaicius . '</h3>';
echo '<br>';

// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
$skaicius1 = rand(-10, 10);
$skaicius2 = rand(-10, 10);
$skaicius3 = rand(-10, 10);
echo "Duoti skaičiai: $skaicius1, $skaicius2 ir $skaicius3";
echo '<br>';

if ($skaicius1 < 0) {
    echo "<font color=green> $skaicius1 </font>";
}
elseif ($skaicius1 == 0) {
    echo "<font color=red> $skaicius1 </font>";
}
else echo "<font color=blue> $skaicius1 </font>";

if ($skaicius2 < 0) {
    echo "<font color=green> $skaicius2 </font>";
}
elseif ($skaicius2 == 0) {
    echo "<font color=red> $skaicius2 </font>";
}
else echo "<font color=blue> $skaicius2 </font>";

if ($skaicius3 < 0) {
    echo "<font color=green> $skaicius3 </font>";
}
elseif ($skaicius3 == 0) {
    echo "<font color=red> $skaicius3 </font>";
}
else echo "<font color=blue> $skaicius3 </font>";
echo '<br><br>';

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
$kiekis = rand(5, 3000);
$kaina = $kiekis * 1;
echo "Perkama žvakių už $kaina eur.";
echo '<br>';

if ($kaina < 1000) {
    echo "Galutinė suma: $kaina eur.";
}
elseif ($kaina > 1000 && $kaina < 2000) {
    $kaina = $kaina * 0.97;
    echo "Galutinė kaina: $kaina eur.";
}
elseif ($kaina > 2000) {
    $kaina = $kaina * 0.96;
    echo "Galutinė kaina: $kaina eur.";
}
echo '<br><br>';

// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
$sk1 = rand (0, 100);
$sk2 = rand (0, 100);
$sk3 = rand (0, 100);
echo "Duoti skaičiai: $sk1, $sk2 ir $sk3.";
echo '<br>';
$vidurkis = round(($sk1 + $sk2 + $sk3)/3, 0);
echo "Vidurkis: $vidurkis";
echo '<br>';

if (($sk1 < 10 || $sk1 > 90) && ($sk2 < 10 || $sk2 > 90) && ($sk3 < 10 || $sk3 > 90)) {
    echo "Visi skaičiai neatitinka sąlygos.";
}
elseif (($sk1 < 10 || $sk1 > 90) && ($sk2 < 10 || $sk2 > 90)) {
    echo "Vidurkis: $sk3";
}
elseif ($sk1 < 10 || $sk1 > 90) {
    $vidurkis = round(($sk2 + $sk3)/2, 0);
    echo "Vidurkis: $vidurkis";
}
elseif (($sk2 < 10 || $sk2 > 90) && ($sk3 < 10 || $sk3 > 90)) {
    echo "Vidurkis: $sk1";
}
elseif ($sk2 < 10 || $sk2 > 90) {
    $vidurkis = round(($sk1 + $sk3)/2, 0);
    echo "Vidurkis: $vidurkis";
}
elseif (($sk1 < 10 || $sk1 > 90) && ($sk3 < 10 || $sk3 > 90)) {
    echo "Vidurkis: $sk2";
}   
elseif ($sk3 < 10 || $sk3 > 90) {
    $vidurkis = round(($sk1 + $sk2)/2, 0);
    echo "Vidurkis: $vidurkis";
}   
echo '<br><br>';

// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
$h = rand(0, 23);
$min = rand(0, 59);
$s = rand(0, 59);
echo "Laikas: $h: $min: $s";
echo '<br>';

$extra = rand(0, 300);
echo "Papildomos sekundės: $extra";
echo '<br>';

$s = $s+ $extra;
if ($s > 59) {
    $s = $s - 60;
    $min++ ;
}
if ($s > 59) {
    $s = $s - 60;
    $min++ ;
}
if ($s > 59) {
    $s = $s - 60;
    $min++ ;
}
if ($s > 59) {
    $s= $s - 60;
    $min++ ;
}
if ($s > 59) {
    $s = $s - 60;
    $min++ ;
}
if ($min > 59)
    $h = $h++;
echo "Laikas: $h: $min: $s";

?>

