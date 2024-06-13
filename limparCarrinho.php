<?php

session_start();
unset($_SESSION['carrinho']);

header("Location: home_page.php");

?>