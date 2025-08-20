<?php

$nilai = 75;

$nilaiUjian = match (true) {
  $nilai >= 85 && $nilai <= 100 => "NILAI ANDA A",
      $nilai >= 75 && $nilai <= 84 => "NILAI ANDA B",
    $nilai >= 60 && $nilai <= 74 => "NILAI ANDA C",
    $nilai >= 50 && $nilai <= 59 => "NILAI ANDA D",
    $nilai >= 0 && $nilai <= 49 => "NILAI ANDA E",
    default => "NILAI TIDAK ADA"
};

echo $nilaiUjian;