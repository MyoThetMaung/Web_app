<div class="card-columns">
   
            
        <?php
            require "base.php";
            $sql = "SELECT * FROM contact ORDER BY id DESC";
            $query = mysqli_query(connection(),$sql);
            while($row = mysqli_fetch_assoc($query)){
        ?>
         <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4><?= $row['name']?></h4>
                    <p><?= $row['phone']?></p>
                    <button class="btn btn-outline-info btn-sm"> <i class='fas fa-fw fa-pencil-alt'></i>Edit </button>
                    <button class="btn btn-outline-danger btn-sm"><i class='fas fa-fw fa-trash'></i>Delete</button>
                </div>
            </div>
        </div>
    
        <?php   } ?>

    
</div>