<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php  
    
     $start=strtotime("Next Monday");
     $end=strtotime("+4 weeks",$start);

     while ($start< $end) {
        echo date("d-M-Y", $start) . "<br>";
        $start = strtotime("+1 week", $start);
      }
      date_default_timezone_set("Africa/Tunis");
      echo "The time is " . date("h:i:sa"); 
    ?>
    
</body>
</html>