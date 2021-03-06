<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/MyCss2.css">


</head>
<body>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold">Mi logo</h4>
            </div>
            <div class="menu">
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-apps m-2 lead"></i> Index</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-person m-2 lead"></i> Login</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-add m-2 lead"></i> Register</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-help m-2 lead"></i> About</a>
            </div>
        </div>
        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex position-relative">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                    </form>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="/img/user.png" class="img-fluid rounded-circle avatar mr2">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">My profile</a>
                                    <a class="dropdown-item" href="#">Subscription</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Sign off</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="content">
                <section class="py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="font-weight-bold mb-0">COVID</h1>
                                <p class="lead text-muted">Check the latest data</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">

                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="state" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">State</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="infections" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Number of infections per week</label>
                                        </div>
                                        <button type="submit" class="btn btn-submit" name="submite">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>