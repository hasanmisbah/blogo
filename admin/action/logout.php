<?php
session_start();
session_destroy();
header('Location: http://localhost/blogo/admin/login.php');
exit;