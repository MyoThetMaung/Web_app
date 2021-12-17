
<?php include "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<?php 
    $id = $_GET['id'];
    $current = post($id); 
?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_list.php">Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo post($_GET['id'])['title']; ?>
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-info"></i> Post Detail
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary">
                            <i class="feather-plus-circle"></i>
                        </a>    
                        <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary">
                            <i class="feather-list"></i>
                        </a>                                                                                      
                    </div>
                </div>
                    <hr>
                <h3><?php echo $current['title']; ?></h3>
                <div class="my-3">
                    <i class="feather-user text-primary">
                        <?php echo user($current['user_id'])['username']; ?>
                    </i>
                    <i class="feather-layers text-success">
                        <?php echo category($current['category_id'])['title']; ?>
                    </i>
                    <i class="feather-calendar text-secondary">
                        <?php echo show_time($current['created_at'],"j M Y"); ?>
                    </i>
                </div>
                <div class="">
                    <?php echo html_entity_decode($current['description'],ENT_QUOTES);  ?>
                </div>
               
            </div>
        </div>
    </div>

    <div class="col-12 col-md-8 col-lg-6">
       <div class="card">
           <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-users"></i> Post Viewer
                    </h4>
                    <div class="">
                        <a href="" class="btn btn-outline-secondary full-screen-btn"><i class="feather-maximize-2"></i></a>                                                                               
                    </div>
                </div>
                <hr>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Who</th>
                            <th>Device</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (viewer_count_by_post($id) as $view) { ?>
                        <tr>
                            <td class="text-nowrap text-capitalize">
                                <?php 
                                    if($view['user_id'] == 0){
                                        echo "guest";
                                    }else{
                                        echo user($view['user_id'])['username'];
                                    }
                                ?>
                            </td>
                            <td><?php echo $view['device']; ?></td>
                            <td class="text-nowrap"><?php echo show_time($view['created_at']); ?></td> 
                        </tr>
                           
                        <?php } ?>
                    </tbody>
                </table>
           </div>
       </div>
    </div>
</div>


<?php include "template/footer.php"; ?>

<script>
    $(".table").dataTable({
        "order": [[ 0, "desc" ]]                                                 //table sorting descending <can see in data table.com >
    });
</script>

