<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="write.php" method="POST">

            <label for="">Username</label>
            <input type="text" name="username">
            <br> <br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br><br>
            <button>Submit</button>

        </form>
        
        <?php
            echo "<pre>";
            $list  =  scandir("store_file/");                            //show filename under store_file folder
     
            foreach ($list as $key => $value) {
                if($key >1){
        ?>
                <a href="delete.php?name=<?php echo $value ?>">Delete</a> 
        <?php
                echo $value."<br>";
                }
            }
        ?>
</body>
</html>