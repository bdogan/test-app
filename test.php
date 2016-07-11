<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Sayfası</title>
  </head>
  <body>
    <?php

      // Sayısal örnekler
      $yas = 10;
      $yas = $yas + 1;
      $yas += 1;
      $yas++;
      $yas--;
      //echo $yas;

      // String örnekler
      $adim = "Burak";
      $soyadim = "Doğan";
      //$tamadim = $adim . " " . $soyadim . " yaş: " . $yas;

      // Bool örnekler
      $cinsiyet = "Erkek";

      $erkekmi = ($cinsiyet == "Erkek");

      if ($cinsiyet = "asd") {
        //echo "Doğru";
      } else {
        //echo "Yanlış";
      }

      // Dizi
      $hobilerim = array("Kayak", "Yüzme", "Dalma");
      $hobilerim = array(
        0 => "Kayak",
        1 => "Yüzme",
        2 => "Dalma"
      );
      $hobilerim[] = "Dağcılık";

      //echo "<pre>";
      //print_r($hobilerim);
      //echo "</pre>";

      //for ($i = 0; $i < count($hobilerim); $i++) {
        //echo $hobilerim[$i] . ", ";
      //}

      foreach ($hobilerim as $index => $hobi) {
        //echo $hobi . ", ";
      }
      //echo "<br>";
      //echo in_array("Kayak", $hobilerim);
      $hobilerimStr = implode(", ", $hobilerim);
      //echo $hobilerimStr;
      $_hobilerim = explode("asddd", $hobilerimStr);

      $kisi = array(
        "adi" => "Burak",
        "soyadi" => "Doğan",
        "yas" => 10,
        "hobileri" => $hobilerim
      );

      echo "<pre>";
      print_r($kisi);
      echo "</pre>";
    ?>
  </body>
</html>
