<?php
session_start();
session_unset(); //Svuota la ram
session_destroy(); // Distrugge la sessione
header("Location: login.html");
exit();
?>