<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: /Loan-Management-system/user_home.php?logout=success");
?>