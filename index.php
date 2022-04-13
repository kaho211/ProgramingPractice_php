<?php
  require 'Fruits.php';

  #実行部分
  $peach = new Fruits("桃",15,200,300);
  $peach->printData();
  $strawberry = new Fruits("イチゴ",15,400,500);
  $strawberry->printData();
?>