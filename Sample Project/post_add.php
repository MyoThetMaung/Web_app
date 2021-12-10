
<?php include "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_list.php">Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Post</li>
            </ol>
        </nav>
    </div>
</div>

        <?php
            if(isset($_POST['add_post'])){
                post_add();
            }
        ?>


<form class="row" method="post">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary"></i> Create New Post
                    </h4>
                    <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
        
                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                   
                    <div class="form-group mb-0">
                        <label for="">Post Description</label>
                        <textarea type="text" name="description" id="description" rows="12" class="form-control" required></textarea>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-4" >
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="feather-layers text-primary"></i> Select category
                        </h4>
                        <a href="<?php echo $url; ?>/category_list.php" class="btn btn-outline-primary">
                            <i class="feather-list"></i>
                        </a>
                </div>
                <hr>
                <div class="form-group">
                    <?php foreach (categories() as $category) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category_id" id="category_id" value="<?php echo $category['id']; ?>">
                            <label class="form-check-label" for="category_id">
                                <?php echo $category['title']; ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            <button name="add_post" class="btn btn-primary">Add Post</button>
            </div>
        </div>
    </div>
</form>

<?php include "template/footer.php"; ?>

<script>
    $("#description").summernote({
        placeholder: 'Write Description',
        tabsize : 2,                                                            //summernote is for long text <see in summernote.com>
        height : 500
    });
</script>