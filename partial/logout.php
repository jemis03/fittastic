<?php
session_start();

session_destroy();
header("Location: /fittastic/index.php?logoutsuccess=true");
?>