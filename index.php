<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php include "functions.php"; ?>

    <style>

        .bg-red {

            color: white;
            background-color: red;
        }
        .bg-green {

            color: white;
            background-color: green;
        }
    </style>
    
</head>
<body class="container my-3">

    <h1 class="bg-dark text-light text-center">
        Iscriviti alla mia bellissima newsletter per un
        sacco di annunci pubblicitari interessanti
    </h1>
    <form class="text-center my-3">
        <label for="mail">Mail</label>
        <input type="mail" name="mail" id="mail" value="<?php echo $_GET['mail']; ?>">
        <input type="submit" value="ISCRIVITI">
    </form>

    <?php

        // echo $validMail 
        //     ? "<h1 class='bg-green text-light text-center'>OK</h1>"
        //     : "<h1 class='bg-red text-light text-center'>KO</h1>";

        if ($validMail) {

            header('Location: thank-you.php');
        } else {

            echo "<h1 class='bg-red text-light text-center'>KO</h1>";
        }
    ?>
</body>
</html>