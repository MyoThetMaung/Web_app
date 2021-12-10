
<?php include "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<?php $current = post($_GET['id']); ?>

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
                    <i class="feather-user text-primary">
                        <?php echo user($current['user_id'])['username']; ?>
                    </i>
                    <i class="feather-layers text-success">
                        <?php echo category($current['category_id'])['title']; ?>
                    </i>
                    <i class="feather-calendar text-secondary">
                        <?php echo show_time($current['created_at'],"j M Y"); ?>
                    </i>
                    <div class="">
                        <?php echo html_entity_decode($current['description'],ENT_QUOTES);  ?>
                    </div>


            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>

<script>
    $(".table").dataTable({
        "order": [[ 3, "desc" ]]                                                 //table sorting descending <can see in data table.com >
    });
</script>

