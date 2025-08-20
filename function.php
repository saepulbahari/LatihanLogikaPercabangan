<?php
//$nilai = 56;

//if ($nilai >= 85 && $nilai <= 100 ) {
 //   echo "Nilai A";
//} elseif ($nilai >= 75 && $nilai <= 84) {
  //  echo "Nilai B";
//} elseif ($nilai >= 60 && $nilai <= 74) {
  //  echo "Nilai C";
//} elseif ($nilai >= 50 && $nilai <= 59) {
  //  echo "Nilai D";
//} elseif ($nilai >= 0 && $nilai <= 49) {
  //  echo "Nilai E";
//} else {
  //  echo "Nilai tidak ada";

//} 



function getGrade (int $nilai) : int
 {
    if ($nilai >= 85 && $nilai <= 100 ) {
    $grade =  "Nilai A";
} elseif ($nilai >= 75 && $nilai <= 84) {
     $grade = "Nilai B";
} elseif ($nilai >= 60 && $nilai <= 74) {
     $grade =  "Nilai C";
} elseif ($nilai >= 50 && $nilai <= 59) {
     $grade =  "Nilai D";
} elseif ($nilai >= 0 && $nilai <= 49) {
     $grade =  "Nilai E";
} else {
     $grade =  "Nilai tidak ada";

} 
    return $grade;
}
$hasil  = getGrade(75);
$hasil1  = getGrade(90);
$hasil2 = getGrade(60);
$hasil3  = getGrade(2);

echo $hasil;
echo $hasil1;
echo $hasil2;
echo $hasil3;
