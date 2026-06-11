<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

     body{
         font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
            background-color: #4dba9d;
            color:yellow;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 48px 20px 64px;
          
        }

    </style>
</head>
<body>
    <?php
       echo "<h1 style='color:blue'>  W1-poomin sawatdee-bit2/3 No.06 </h1>";
    ?>

   <a href="while.php">while loop</a>
     <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit"  value="คำนวณ">
     </form>
     <?php
      if (isset($_GET["num"])){
         $num = $_GET["num"];
      
         echo "<h2>สูตรคูณแม่" .$num . "</h2>";

         for($i = 1; $i<= 12;$i++){
            echo $num."x". $i. "=".$num * $i ."<br>";
         }
      }

     ?>

</body>
</html>