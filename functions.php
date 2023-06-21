<?php

    $mail = $_GET['mail'];
    $contAt = str_contains($mail, '@');
    $contDot = str_contains($mail, '.');
    $validMail = $contAt && $contDot;

?>