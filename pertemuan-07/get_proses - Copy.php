<?php
    session_start();
    $_SESSION["nama"] = $_GET["txtNama"];  
    $_SESSION["email"] = $_GET["txtEMail"];  
    $_SESSION["pesan"] = $_GET["txtPesan"];   
    header(header: "location: get.php"); 
?>