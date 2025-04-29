<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POST VARIJABLA</h1>
    <hr>
    <form action="authenticate.php" method="post">
        <div style="padding: 20px">
        <label>Username:
        <input type="text" name="username">
        </label>
        </div>

        <div style="padding: 20px">
        <label>Password:
        <input type="password" name="password">
        </label>
        </div>

        <div style="padding: 20px" display=" flex;">
        <input type="submit" value="login">
        </div>
    </form>
    <?php 
    if(isset($_POST['username'])) {
        echo 'Username: ' . $_POST['username'];
      } else {
        echo 'Username nije postavljen';
      };
    ?>
</body>
</html>