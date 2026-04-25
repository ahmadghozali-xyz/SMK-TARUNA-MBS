<?php
session_start();
session_destroy();

// redirect pasti ke root
header("Location: /smk-taruna-mbs/index.php");
exit;
?>