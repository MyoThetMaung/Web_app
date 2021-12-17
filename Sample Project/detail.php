<?php session_start(); ?>
<?php require_once "front_panel/head.php"; ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"; ?>
<?php
     $id = $_GET['id'];
     $current = post($id);
     $current_category = $current['category_id'];
    
     if(isset($_SESSION['user']['id'])){
         $user_id = $_SESSION['user']['id'];
    }else{
        $user_id = 0;
    }
    viewer_record($user_id,$id,$_SERVER['HTTP_USER_AGENT']);
?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8"> 
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
            </ol>
            </nav>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="">
                            <h3><?php echo $current['title']; ?></h3>
                            <i class="feather-user text-primary">
                                <?php echo user($current['user_id'])['username']; ?>
                            </i>
                            <i class="feather-layers text-success">
                                <?php echo category($current['category_id'])['title']; ?>
                            </i>
                            <i class="feather-calendar text-secondary">
                                <?php echo show_time($current['created_at'], "j M Y"); ?>
                            </i>
                            <div class="">
                                <?php echo html_entity_decode($current['description'], ENT_QUOTES);  ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <?php foreach (post_by_category($current_category, 2,$id) as $post) { ?>
                        <div class="col-12 col-md-6">
                        
                        <div class="card shadow-sm mb-4 post ">
                            <div class="card-body ">
                                <a href="detail.php?id=<?php echo $post['id'] ?>" class="text-primary">
                                    <h3><?php echo $post['title']; ?></h3>
                                </a>
                                <i class="feather-user text-primary">
                                    <?php echo user($post['user_id'])['username']; ?>
                                </i>
                                <i class="feather-layers text-success">
                                    <?php echo category($post['category_id'])['title']; ?>
                                </i>
                                <i class="feather-calendar text-secondary">
                                    <?php echo show_time($post['created_at'],"j M Y"); ?>
                                </i>
                                <p class="">
                                    <?php echo short_text(strip_tags(html_entity_decode($post['description'])),200); ?>
                                </p>
    
                            </div>
                        </div>
                    </div>
                        <?php } ?> 
                </div>
    </div>

            <?php require_once "front_panel/right_sidebar.php"; ?>
        </div>
    </div>


<?php   require_once "front_panel/foot.php"; ?>
