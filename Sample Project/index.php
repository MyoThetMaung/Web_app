<?php session_start(); ?>
<?php require_once "front_panel/head.php"; ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8"> 
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
            </nav>
                <div class="">
                    <div class="dropdown mb-4 text-right">
                        <a class="btn btn-primary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="feather-calendar"></i> Sort News
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="?order_column=created_at&order_type=asc"> 
                                <i class="feather-arrow-down-circle"></i> Oldest to newest</a></li>
                            <li><a class="dropdown-item" href="?order_column=created_at&order_type=desc">
                                <i class="feather-arrow-down-circle"></i> Newest to oldest</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="feather-list"></i>Default</a></li>
                        </ul>
                    </div>
                    
                <?php 

                    $order_type = @$_GET['order_type'];
                    $order_column = strtoupper(@$_GET['order_column']);                               //@ sign to avoid error from get data

                    if(isset($order_type) && isset($order_column)){
                        $panel_posts = panel_posts($order_column,$order_type);
                    }else{
                        $panel_posts = panel_posts();
                    }   

                    foreach ($panel_posts as $post) { 
                ?>
                        
                    <div class="card shadow-sm mb-4 post">
                        <div class="card-body">
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

                    <?php } ?> 
                </div>
            </div>

            <?php require_once "front_panel/right_sidebar.php"; ?>
        </div>
    </div>


<?php   require_once "front_panel/foot.php"; ?>
