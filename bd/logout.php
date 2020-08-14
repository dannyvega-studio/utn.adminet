<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/softcys/login_form.php');

?>
