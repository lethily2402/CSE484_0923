<?php
$strConnection = mysqli_connect('localhost', 'root', '123456789', 'btth01_cse485_ex02(2)');
if (!$strConnection)
  die('Can not connection');
mysqli_set_charset($strConnection, 'utf8');