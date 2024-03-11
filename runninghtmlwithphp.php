<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method = "POST">
     <label>Name</label><br>
     <input type="text" name="favcolor"><br>
     <input type="submit" name ="submit" value="submit">
  </form>
  <p>My fav color is:
    <?php
     if(isset($_POST['submit'])){
        $favcolor = $_POST['favcolor'];
        echo $favcolor;
     }


    ?>
  </p>
</body>
</html>
