</head>
<body class="bg-light">
<div class="container">
    <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary my-3 rounded">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $url; ?>/index.php">Sample Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" action="<?php echo $url; ?>/search.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_key"> 
                <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
          </nav>
        </div>

        <div class="col-12">
            <?php foreach (ads() as $ad) { ?>

              <a href="<?php echo $ad['link'] ;?>" target="blank">
                  <img src="<?php echo $ad['image']; ?>" class="w-100 mb-2 rounded shadow-lg" alt="">
              </a>

            <?php  }  ?>
        </div>
    </div>
</div>