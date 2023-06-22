<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <?php
        include "function.php";
    ?>

</head>
<body class="container my-3">

    <div class="text-center">
        <h1>
            Password generator
        </h1>
        <form class="my-3">
            <label for="length">Length</label>    
            <input type="number" name="length" id="length">
            <input type="submit" value="CREATE">
            <br>
            <input type="checkbox" name="letters" id="letters">
            <label for="letters">letters</label>
            <input type="checkbox" name="numbers" id="numbers">
            <label for="numbers">numbers</label>
            <input type="checkbox" name="symbols" id="symbols">
            <label for="symbols">symbols</label>
            <input type="checkbox" name="ripetition" id="ripetition">
            <label for="ripetition">ripetition</label>
        </form>
    </div>
</body>
</html>