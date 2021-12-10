
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
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary"></i> Add Post
                    </h4>
                    <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>

                <?php

                    $id = $_GET['id'];
                    $current = post($id);

                    if(isset($_POST['update_post'])){
                        if(post_update()){
                            link_to("post_list.php");
                        }
                    }

                ?>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $current['title']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Select category</label> <br>
                        <select name="category_id" id="" class="custom-select"> 
                            <?php foreach (categories() as $category) { ?>
                                <option value="<?php echo $category['id']; ?>"  <?php echo $category['id']==$current['category_id']? "selected" : ""; ?>>          <!--checking category id and post-->
                                    <?php echo $category['title']; ?>    
                                </option>  
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Post Description</label>
                        <textarea type="text" name="description" rows="12" class="form-control" value="<?php echo $current['description']; ?>" required></textarea>
                    </div>
                    <button name="update_post" class="btn btn-primary">Update Post</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>