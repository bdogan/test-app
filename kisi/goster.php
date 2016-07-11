<?php

  $kisi = array();

  if (!isset($_GET['index']) || !file_exists('kisiler.dat')) {
    header('Location: index.php');
  } else {
    $index = $_GET['index'];
    $kisilerDat = file_get_contents('kisiler.dat');
    if (trim($kisilerDat)) {
      $kisilerDat = explode("\n", trim($kisilerDat));
      $kisiler = array();
      foreach ($kisilerDat as $kisiLine) {
        $kisiLine = explode(",", $kisiLine);
        $kisi = array(
          "adi" => $kisiLine[0],
          "soyadi" => $kisiLine[1],
          "yas" => $kisiLine[2]
        );
        $kisiler[] = $kisi;
      }
      $kisi = $kisiler[$index];
    }

    if (!$kisi) {
      header('Location: index.php');
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $kisi['adi']; ?> - Kişi Göster</title>
  </head>
  <body>
    <h3><?php echo $kisi['adi']; ?></h3>
    <hr size="1" />
    <p>
      <a href="index.php">Geri</a>
    </p>
    <br />
  </body>
</html>
