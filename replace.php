<?php

$result = $_POST['replace'];
$eachArrayofResult= explode("\n", $result);
$strHTML= '<form action="#" method="POST">';
$strHTML.='<label for="replace"> Replace: </label><br/><br/>';
$strHTML.='<textarea id="replace" name="replace" style="width:300px; height:200px;"></textarea><br/>';
$strHTML.='<button type="submit">Get Parsed Table</button>';
$strHTML.='</form>';

echo $strHTML;

/*
echo "<pre>";
var_dump($eachArrayofResult);
echo "</pre>";
*/

foreach ($eachArrayofResult as $key ) {
      $raws = count($key);
        for ($i=0; $i <=$raws; $i++) {
              $exp = explode("|", $key);
              $cc = $exp[1];
              $i = $i +1;
              echo $cc;
          }
  echo "<br/>";
}

/*
| name    | varchar(20) | YES  |     | NULL    |       |
| owner   | varchar(20) | YES  |     | NULL    |       |
| species | varchar(20) | YES  |     | NULL    |       |
| sex     | char(1)     | YES  |     | NULL    |       |
| birth   | date        | YES  |     | NULL    |       |
| death   | date        | YES  |     | NULL    |       |
*/

?>
