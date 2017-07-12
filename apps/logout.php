<?php

session_start();
session_unset('id_user');
session_destroy();
header('location: login.php?log_out=success');
?>
