<?php include "core/auth.php"; ?>
<?php include "core/is_editor_and_admin.php"; ?>
<?php include "template/header.php"; ?>

<?php
    if(isset($_POST['paynow'])){                    
        paynow();
    }
?>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wallet</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                    <i class="feather-dollar-sign text-primary"></i> Wallet
                    </h4>                                                                       
                    <a href="#" class="btn btn-outline-primary full-screen-btn">                                             <!--maximize screen-->
                        <i class="feather-user"></i> Your money : <?php echo user($_SESSION['user']['id'])['money']; ?>
                    </a>
                </div>
                <hr>

                <form method="post">
                    <div class="form-inline">
                        <select name="to_user" id="" class="custom-select mr-2 w-25" required>
                            <option value="0" disabled selected>Select User</option>
                            <?php foreach (users() as $user) { 
                                if($user['id'] != $_SESSION['user']['id']){  ?>
                                <option value="<?php echo $user['id']; ?>">  <?php echo $user['username']; ?></option>                                                <!--not include current user-->
                            <?php }} ?>
                        </select>
                        <input type="number" class="form-control mr-2 w-25" name="amount" min="100" max="<?php echo user($_SESSION['user']['id'])['money']; ?>"  placeholder="Enter pay amount" required>
                        <input type="text" class="form-control mr-2" name="description" placeholder="Description" required>
                        <button class="btn btn-primary" name="paynow">Transfer</button>
                    </div>
                </form>
                <hr>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Date</th>
                        </tr>
                        <tbody>
                            <?php foreach (transitions() as $tran){ ?>
                                <tr>
                                    <td><?php echo $tran['id']; ?></td>
                                    <td><?php echo user($tran['from_user'])['username']; ?></td>
                                    <td><?php echo user($tran['to_user'])['username']; ?></td>
                                    <td><?php echo $tran['amount']; ?></td>
                                    <td><?php echo $tran['description'];?></td>
                                    <td><?php echo date("d-m-Y / h:i a",strtotime($tran['created_at'])); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </thead>
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

