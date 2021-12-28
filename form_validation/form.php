<?php 
    session_start();
    include "base.php";
    include "function.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="my-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="font-weight-bold text-uppercase">Register Form</h3> <hr>
                                <?php
                                    if(isset($_POST['submit'])){
                                            register();
                                    }
                                ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- name -->
                                <div class="form-group">
                                    <label for="name"> Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo old('name') ?>">
                                    <?php 
                                        if(get_error('name')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('name'); ?></small>
                                        <?php } ?>
                                </div> <hr>
                                
                                <!-- email -->
                                <div class="form-group">
                                    <label for="email"> Your Email</label>
                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo old('email') ?>">
                                    <?php 
                                        if(get_error('email')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('email'); ?></small>
                                        <?php } ?>
                                </div> <hr>
                                
                                <!-- phone -->
                                <div class="form-group">
                                    <label for="phone"> Your Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo old('phone') ?>">
                                    <?php 
                                        if(get_error('phone')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('phone'); ?></small>
                                        <?php } ?>
                                </div> <hr>
                                
                                <!-- address -->
                                <div class="form-group">
                                    <label for="address"> Your address</label>
                                    <textarea type="text" id="address" name="address" class="form-control"><?php echo old('address') ?></textarea>
                                    <?php 
                                        if(get_error('address')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('address'); ?></small>
                                        <?php } ?>
                                </div> <hr>
                                
                                <!-- gender -->
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <div class="">
                                        <?php foreach($gender_arr as $gen){ ?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="gender" name="gender" class="custom-control-input" <?php echo old('gender')==$gen ? 'checked' : ''; ?> value="<?php echo $gen; ?>">
                                                    <label for="customRadioInline1" class="custom-control-label"><?php echo $gen; ?></label>
                                                </div>
                                        <?php } ?>
                                    </div>
                                    <?php 
                                        if(get_error('gender')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('gender'); ?></small>
                                        <?php } ?>
                                </div> <hr>
                                
                                <!-- skill -->
                                <div class="form-group">
                                    <label for="gender" class="text-primary font-weight-bold">Your skill</label>
                                    <div class="border border-faded rounded p-2">
                                        <?php foreach($skill_arr as $skill){ ?>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input class="custom-control-input" name="skill[]" type="checkbox" 
                                                        id="<?php echo $skill; ?>" value="<?php echo $skill; ?>"
                                                        <?php 
                                                            if(old('skill')){
                                                                echo in_array($skill,old('skill')) ? 'checked' : ''; 
                                                            }
                                                        ?>>
                                                    <label class="custom-control-label" for="<?php echo $skill; ?>">
                                                        <?php echo $skill; ?>
                                                    </label>
                                                </div>
                                        <?php } ?>
                                    </div>
                                    <?php 
                                        if(get_error('skill')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('skill'); ?></small>
                                        <?php } ?>
                                </div> <hr>


                                <!-- file -->
                                <div class="form-group">
                                    <label for="file"> Upload file</label>
                                    <input type="file" id="file" name="file" class="form-control p-1" value="<?php echo old('file') ?>">
                                    <?php 
                                        if(get_error('file')){ ?>
                                            <small class="text-danger font-weight-bold"><?php echo get_error('file'); ?></small>
                                        <?php } ?>
                                </div> 
                                
                                <!-- button -->
                                <div class="form-row justify-content-between align-items-center">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">All correct</label>
                                </div>
                                    <button name="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <?php clear_error(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>