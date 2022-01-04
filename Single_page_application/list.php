
    <table class="table table-hover mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Control</th>
        </tr>
    </thead>
        <tbody>
        <?php
            require "base.php";
            $sql = "SELECT * FROM contact ORDER BY id DESC";
            $query = mysqli_query(connection(),$sql);
            while($row = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?= $row['name']?></td>
                <td><?= $row['phone'] ?></td>
                <td>
                    <button class="btn btn-outline-info btn-sm">Edit</button>
                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                </td>
            </tr> 
        </tbody>
        <?php   } ?>
    </table>
