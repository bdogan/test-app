<?php
  $kisiler = array();

  if (file_exists('kisiler.dat')) {
    $kisilerDat = file_get_contents('kisiler.dat');
    if (trim($kisilerDat)) {
      $kisilerDat = explode("\n", trim($kisilerDat));
      foreach ($kisilerDat as $kisiLine) {
        $kisiLine = explode(",", $kisiLine);
        $kisi = array(
          "adi" => $kisiLine[0],
          "soyadi" => $kisiLine[1],
          "yas" => $kisiLine[2]
        );
        $kisiler[] = $kisi;
      }
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kişiler</title>
  </head>
  <body>
    <h3>Kişiler</h3>
    <hr size="1" />
    <p>
      <a href="ekle.php">Yeni Kişi</a>
    </p>
    <br />
    <table border="1" width="100%">
      <thead>
        <tr>
          <th>Adı</th>
          <th>Soyadı</th>
          <th>Yaşı</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($kisiler as $key => $kisi) { ?>
          <tr>
            <td><a href="goster.php?index=<?php echo $key; ?>"><?php echo $kisi['adi']; ?></a></td>
            <td><?php echo $kisi['soyadi']; ?></td>
            <td><?php echo $kisi['yas']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Toplam <?php echo count($kisiler); ?> kayıt bulundu</td>
        </tr>
      </tfoot>
    </table>
  </body>
</html>
