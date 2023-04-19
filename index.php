<?php
$mod = @$_REQUEST['mod'];
switch ($mod) {
  case "tampilan":
    require("tampilan.php");
    break;
  case "tambah":
    require("tambah.php");
    break;
 default:
 require("tampilan.php");
}
?>