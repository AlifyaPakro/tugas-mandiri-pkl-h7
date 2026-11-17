<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Membuat segitiga</h1>
    <br>
    <form method="POST" action="alur.php">
        <label for="tinggi-segiiga">Tinggi Segitiga</label>
        <br>
        <input id="tinggi-segitiga" name="tinggi-segitiga[]" type="number" min="1" max="20">
        <br>
        <br>
        <button type="submit">Oke</button>
    </form>
</body>
</html>