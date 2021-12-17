
<div class="col-12 col-md-4">
    <div style="position: sticky; top: 15px">


        <div class="card">
            <div class="card-body">
                <?php if(isset($_SESSION['user']['id'])){  ?>
                    <p>Hi <b><?php echo $_SESSION['user']['username']; ?> </b></p>
                     <a href="dashboard.php" class="btn btn-primary">Go Dashboard</a>
                <?php }else{ ?>
                    <p> Hi Guest </p>
                     <a href="register.php" class="btn btn-primary">Register here</a>
                <?php } ?>
            </div>
        </div>

        <h4>Category List</h4>
        <div class="list-group mb-4">

            <a href="<?php echo $url; ?>/index.php" class="list-group-item list-group-item-action active">All categories</a>

            <?php foreach (panel_categories() as $category) { ?>
                
                <a href="category_base_post.php?category_id=<?php echo $category['id']; ?>" 
                class="list-group-item list-group-item-action 
                <?php echo isset($_GET['category_id']) ? $_GET['category_id'] == $category['id'] ? "active" :'': ''?>" >
                    <?php echo $category['title']; ?>
                </a>
            <?php } ?> 
        </div>
       
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <form action="search_by_date.php" method="post">
                    <div class="form-group">
                        <label for="">Start Date</label>
                        <input type="date" name="start"  class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">End Date</label>
                        <input type="date" name="end"  class="form-control" required>
                    </div>
                    <button class="btn btn-primary">
                        <i class="feather-calendar"></i> Search by date
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>