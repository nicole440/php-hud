<?php
include 'calculations.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // process form data submitted via POST

    $contract_sale_price = $_POST["contract_sale_price"];
    printValue($contract_sale_price);

    $personal_property = $_POST["personal_property"];

    // $connection = new PDO('mariadb:host=localhost;dbname=hud;charset=utf8', 'root', 'root');
    
  }

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_POST['method']) && $_POST['method'] == 'get') {
  // process GET request
}
