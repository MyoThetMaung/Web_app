<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .show_photo img{
            height: 200px;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <label for="" >Single File upload</label> <br><br>
        <input type="file" name="upload" required>
        <button>Upload</button>
    </form>

    <div class="show_photo">
        <?php 
            $img_dir = scandir("store/");

            foreach ($img_dir as $key => $value) {
        ?>  
            <img src="store/<?php echo $value; ?>" alt="">
        
        <?php
            }
        ?>
    </div>
</body>
</html>