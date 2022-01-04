<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Single Page Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card my-5 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Contact app</h4>
                            <div class="">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add contact</button>
                                <button class="btn btn-outline-info" onclick="show_list()">
                                    <i class="fas fa-list"></i>List
                                </button>
                                <button class="btn btn-outline-success" onclick="show_grid()">
                                    <i class="fas fa-th-large"></i>Grid
                                </button>
                            </div>
                        </div>
                        <div class="output">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create contact <span id='result'></span></h5> 
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form action="save.php" method="POST" id="add_content">
               <div class="form-row">
                   <div class="col-12 col-md-6">
                        <label for="">Contact Name</label>
                        <input type="text" name="name" class="form-control">
                   </div>
                   <div class="col-12 col-md-6">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" class="form-control">    
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                      <button type="button" class="btn btn-secondary mr-4" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">save</button>
                    </div>
                  
               </div>
           </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
<script>

    function show_grid(){
        $.get('grid.php', function(data){
            $('.output').html(data);
        })
    }

    function show_list(){
        $.get('list.php', function(data){
            $('.output').html(data);
        })
    }

    $('#add_content').on("submit", function(event){
        event.preventDefault();
        let inputs = $(this).serialize();
    
        $.post($(this).attr('action'),inputs, function(data){
            if(data == 'success'){
                $('#result').html("<span class='badge badge-pill badge-success'>Added successfully</span>");
                $('input').val('');
                show_list();
            }else{
                $('#result').html("<span class='badge badge-pill badge-danger'>Fail</span>");
            }
        })
    })

    show_list();

</script>

</body>
</html>