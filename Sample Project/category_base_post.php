<?php require_once "front_panel/head.php"; ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8"> 
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo category($_GET['category_id'])['title']; ?> Category</li>
            </ol>
            </nav>
                <div class="">
                <?php foreach (post_by_category($_GET['category_id']) as $post) { ?>
                        
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
