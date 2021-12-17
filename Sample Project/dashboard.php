
<?php require_once "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-heart h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up"><?php echo count_total('viewers'); ?></span>
                            </p>
                            <p class="mb-0 text-black-50">Today Visitors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('<?php echo $url; ?>/post_list.php')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-list h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up"><?php echo count_total('posts'); ?></span>
                            </p>
                            <p class="mb-0 text-black-50">Total Posts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('<?php echo $url; ?>/category_add.php')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-layers h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up"><?php echo count_total('category'); ?></span>
                            </p>
                            <p class="mb-0 text-black-50">Total Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('<?php echo $url; ?>/user_list.php')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-users h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up"><?php echo count_total('users'); ?></span>
                            </p>
                            <p class="mb-0 text-black-50">Total Users</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-xl-7">
            <div class="card overflow-hidden shadow mb-4">
                <div class="">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h4 class="mb-0">Visitors</h4>
                        <div class="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                        </div>
                    </div>
                    <canvas id="ov" height="140"></canvas>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-5">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h4 class="mb-0">Category / Post</h4>
                        <div class="">
                            <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                        </div>
                    </div>

                    <canvas id="op" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-12">
            <div class="card overflow-hidden">

                <div class="">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h4 class="mb-0 font-weight-bold mb-4">Recent Posts</h4>
                        <div class="">
                            <?php
                                $current_user_id = $_SESSION['user']['id'];
                                $post_total = count_total("posts");
                                $current_user_post_total = count_total("posts","user_id = $current_user_id" );
                                $current_user_post_percentage = number_format(($current_user_post_total/$post_total)*100,2,'.');

                            ?>
                            <small>Your post : <?php echo $current_user_post_total; ?></small>                     
                            <div class="progress" style="width: 300px; height: 10px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $current_user_post_percentage.'%';
                                ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover mt-3 mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <?php if($_SESSION['user']['role'] == 0){   ?>
                                <th>User</th>                                                                               <!--if user is admin, this will show-->
                            <?php } ?>
                            <th>Viewer count</th>
                            <th>Control</th>
                            <th>Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach (dashboard_posts(5) as $post) {
                        ?>
                        <tr>
                            <td><?php echo $post['id']; ?></td>
                            <td><?php echo short_text($post['title']) ; ?></td>
                            <td><?php echo short_text(strip_tags(html_entity_decode($post['description']))); ?></td>        <!--html_entity_decode is to remove like <p></p> and strip_tags remove bold or italic or ...-->
                            <td><?php echo category($post['category_id'])['title']; ?></td> 
                            <?php if($_SESSION['user']['role'] == 0){   ?>
                                <td><?php echo user($post['user_id'])['username']; ?></td>                                   <!--if user is admin, this will show-->
                            <?php } ?>    
                            <td>
                                <?php echo count(viewer_count_by_post($post['id'])); ?>
                            </td>
                            <td>
                                <a href="post_detail.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-info btn-sm"><i class="feather-info fa-fw"></i>Post detail</a>
                                
                                <a href="post_delete.php?id=<?php echo $post['id']; ?>" 
                                onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw"></i>Delete</a>
                                
                                <a href="post_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="feather-trash-2 fa-fw"></i>Edit</a>
                            </td>
                            <td><?php echo show_time($post['created_at']); ?></td>  
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
   
                </div>
            </div>
        </div>
    </div>


<?php include "template/footer.php"; ?>
<script src="<?php echo $url; ?>/assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/chart_js/chart.min.js"></script>

<script>
    $('.counter-up').counterUp({
    delay: 10,
    time: 1000
});
 
<?php 
    $date_arr = [];
    $visitor_rate =  [];
    $transition_rate =  [];
    $today = date("Y-m-d");
    for ($i=0; $i < 10; $i++) { 
        
        $date = date_create($today);
        date_sub($date,date_interval_create_from_date_string("$i days"));
        $current =  date_format($date,"Y-m-d");
        array_push($date_arr,$current);
        $result = count_total("viewers","CAST(created_at AS DATE) = '$current'");           //arrangemenet by date of viewers table
        array_push($visitor_rate,$result);
        $result2 = count_total("transition","CAST(created_at AS DATE) = '$current'");       //arrangemenet by date of transition table
        array_push($transition_rate,$result2);

    }                   

?>

let dateArr =    <?php echo json_encode($date_arr); ?>;                                      //for 10 days date descs
let viewerCountArr = <?php   echo json_encode($visitor_rate); ?>                            //visitors per a day of viewer table
let transitionCountArr = <?php   echo json_encode($transition_rate); ?>                     //visitors per a day of transition table

let ov = document.getElementById('ov').getContext('2d');
let ovChart = new Chart(ov, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [
            {
                label: 'Viewer Count',
                data: viewerCountArr,
                backgroundColor: [
                    '#007bff30',
                ],
                borderColor: [
                    '#007bff',
                ],
                borderWidth: 1,
                tension:0
            },
            {
                label: 'Transition Count',
                data: transitionCountArr,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    '#007bff',
                ],
                borderWidth: 1,
                tension:0
            }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                display:false,
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes:[
                {
                    display:false,
                    gridLines:[
                        {
                            display:false
                        }
                    ]
                }
            ]
        },
        legend:{
            display: true,
            shape:"circle",
            position: 'top',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
});

<?php 

    $cat_name = [];
    $count_post_by_category = [];
    foreach(categories() as $cat){
        array_push($cat_name,$cat['title']);
        array_push($count_post_by_category,count_total('posts', "category_id = {$cat['id']}"));
    }

?>

let cat_arr = <?php echo json_encode($cat_name) ?>;
let count_arr = <?php echo json_encode($count_post_by_category)?>;

let op = document.getElementById('op').getContext('2d');
let opChart = new Chart(op, {
    type: 'doughnut',
    data: {
        labels:cat_arr,
        datasets: [{
            label: '# of Votes',
            data:count_arr,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                display:false,
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes: [
                {
                    display:false
                }
            ]
        },
        legend:{
            display: true,
            position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
});
</script>


