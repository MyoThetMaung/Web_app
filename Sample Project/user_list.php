
<?php include "core/auth.php"; ?>
<?php include "core/is_admin.php"; ?>
<?php include "template/header.php"; ?>


<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                        <i class="feather-users"></i> User list
                    </h4>
                    <div>                                                                                
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
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Control</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach (users() as $user) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $role[$user['role']] ; ?></td>
                <td></td>
                <td><?php echo show_time($user['created-at']); ?></td>  
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
        "order": [[ 3, "desc" ]]                                            //table sorting descending <can see in data table.com >
    });
</script>