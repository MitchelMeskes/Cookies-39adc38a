<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Football <small>(#1)</small></h1>
        <h1>Basketball <small>(#2)</small></h1>
        <h1>Honkbal <small>(#3)</small></h1>

        <h2>Kies een Nummer van 1 t/m 3</h2>
        <form method="POST">
            <input type="number" id="number" name="Cookie" required
               minlength="0" maxlength="30" size="10">
            <input type="submit" value="Submit" size="5">
        </form>
        <?php
        session_start ();
        if (isset($_POST["Cookie"])){
            setcookie("Cookie", $_POST["Cookie"]);
        }
        ?>
    </body>
</html>