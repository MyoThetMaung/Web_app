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

        .photo_box{
            border: 3px solid black;
            display: inline-block;
            padding: 12px;
        }
    </style>
</head>
<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <label for="" >Multiple File upload</label> <br><br>
        <input type="file" name="upload[]" multiple>                        <!--[] is needed for multiple file upload-->
        <button>Upload</button>
    </form> <br> <br>

    <div class="show_photo">
        <?php

            $connection = mysqli_connect("localhost","root","","my_list");
            $sql = "SELECT * FROM photos";
            $query = mysqli_query($connection,$sql);
           

            while ( $row  = mysqli_fetch_assoc($query)) {
        ?>

        <div class="photo_box">
            <img src="<?php echo $row['photo_link']; ?>" alt=""> <br>
            <a href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a>
        </div>

        <?php
            }
        ?>
    </div>
</body>
</html>