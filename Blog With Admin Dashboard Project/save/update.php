<?php

    require_once "connection.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM to_do WHERE id =$id";
    $query = mysqli_query($connection,$sql);
    $row  = mysqli_fetch_assoc($query);

?>

    <form action="" method="get">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="message" value ="<?php echo $row['message']; ?>" required>
        <button name="update">Update</button>
    </form>


<?php

    if(isset($_GET['update'])){

        $id  = $_GET['id'];
        $message = $_GET['message'];

        $sql = "UPDATE to_do SET message='$message' WHERE id = $id";
        $query = mysqli_query($connection,$sql);
        if($query){
            header("Location: read.php");
        }
        else{
            echo "update error!";
        }
    }


?>


    