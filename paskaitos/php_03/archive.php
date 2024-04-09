<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 03</title>
</head>
<body>
    <?php
        if (
            isset($_POST['first_name'])
            && trim($_POST['first_name']) != ''
            && isset($_POST['last_name'])
            && trim($_POST['last_name']) != ''
        ) {
            
        }
    ?>
    <form action="" method="POST">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name" required>
        <br>
        <label for="last_name_field">Miestas: </label>
        <input id="last_name_field" type="text" name="last_name" required>
        <br>
        <button>Pateikti</button>
    </form>
    
</body>
</html>