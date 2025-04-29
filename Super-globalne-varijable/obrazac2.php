<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrazac-2</title>
</head>
<body>
    <h1>Uploadajte sliku</h1>
    <hr>
    <form action="obrada2.php" method="POST" enctype="multipart/form-data">
        <label>Slika:
        <input type="file" name="slika"><br><br>
        </label>
        <br>
        <br>
        
        <input type="submit" value="Pošaljite datoteku">
    </form>

</body>
</html>