<table class="table table-hover mt-3 mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>User</th>
            <th>Control</th>
            <th>Created_at</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach (categories() as $category) {
        ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['title']; ?></td>
            <td><?php echo user($category['user_id'])['username']; ?></td>
            <td>
                <a href="category_delete.php?id=<?php echo $category['id']; ?>" 
                onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw"></i>Delete</a>
                
                <a href="category_edit.php?id=<?php echo $category['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="feather-trash-2 fa-fw"></i>Edit</a>
            </td>
            <td><?php echo show_time($category['created_at']); ?></td>  
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

<script>
    $(".table").dataTable({
        "order": [[ 3, "desc" ]]                                            //table sorting descending <can see in data table.com >
    });
</script>