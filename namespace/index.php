<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Bruce Leroy");
$cad->setEmail("bruce.leroy@mail.com");
$cad->setSenha("123456");

//echo $cad->__toString();
$cad->registrarVenda();


?>
