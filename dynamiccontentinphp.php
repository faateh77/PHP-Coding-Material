<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method=POST>
     <label>Enter your favorite color</label>
     <input placeholder="Enter color" name ="favcolor">
     <input type="submit" name="submit" value="Check Now">
   </form> 
   <p>
     <?php
      if(isset($_POST['submit'])){
        $favColor = $_POST['favcolor'];
        
        switch($favColor){
            case "blue":
                echo "your fovourite color is" . " " . $favColor;
                break;
            case "red":
                echo "your favourite color is" . " " . $favColor;
                break;
            case "green":
                echo "your favourite color is" . " " . $favColor;
                break;
        
            default:
                echo "I am not sure about your favorite color";
        
            }
      }
      
     ?>

   </p>
</body>
</html>