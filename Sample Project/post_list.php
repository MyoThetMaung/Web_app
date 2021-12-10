
<?php include "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posts</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12  ">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-list"></i> Post list
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary">
                            <i class="feather-plus-circle"></i>
                        </a>                                                                                    
                        <a href="#" class="btn btn-outline-primary full-screen-btn">                        <!--maximize screen-->
                            <i class="feather-maximize-2"></i>
                        </a>
                    </div>
</div>
    <hr>

    <table class="table table-hover mt-3 mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <?php if($_SESSION['user']['role'] == 0){   ?>
                    <th>User</th>                                                                               <!--if user is admin, this will show-->
                <?php } ?>
                <th>Control</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach (posts() as $post) {
            ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo short_text($post['title']) ; ?></td>
                <td><?php echo short_text(strip_tags(html_entity_decode($post['description']))); ?></td>        <!--html_entity_decode is to remove like <p></p> and strip_tags remove bold or italic or ...-->
                <td><?php echo category($post['category_id'])['title']; ?></td> 
                <?php if($_SESSION['user']['role'] == 0){   ?>
                    <td><?php echo user($post['user_id'])['username']; ?></td>                                   <!--if user is admin, this will show-->
                <?php } ?>    
                
                <td>
                    <a href="post_detail.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-info btn-sm"><i class="feather-info fa-fw"></i>Post detail</a>
                    
                    <a href="post_delete.php?id=<?php echo $post['id']; ?>" 
                    onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw"></i>Delete</a>
                    
                    <a href="post_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="feather-trash-2 fa-fw"></i>Edit</a>
                </td>
                <td><?php echo show_time($post['created_at']); ?></td>  
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
   

            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>

<script>
    $(".table").dataTable({
        "order": [[ 3, "desc" ]]                             //table sorting descending <can see in data table.com >
    });
</script>