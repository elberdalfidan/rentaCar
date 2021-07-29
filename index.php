<?php 
   require 'simple_html_dom.php';

$html = file_get_html('https://www.faznotralgotur.net/siemens-26');

?>

<!DOCTYPE html>
<html>
<title>BUSE BOT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Handle</th>
      <th scope="col">Ürün Adı</th>
      <th scope="col">Kodu</th>
      <th scope="col">Fiyatı</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($html->find('.ItemOrj') as $element): ?>
    <tr>
      <td><img width="70" src="https://www.faznotralgotur.net/<?php  echo $element->find('.resimOrginal img', 0)->src;?>"></td>
      <th><?php  echo $element->find('a[title]', 1);  ?></th>
      <td><?php  echo $element->find('.productStokKodu', 0)->innertext;  ?></td>
      <td><?php  echo $element->find('.discountPrice', 0)->innertext;  ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

</body>
</html>