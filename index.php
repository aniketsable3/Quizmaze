<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <a class="navbar-brand" href="index.php">Quizmaze</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="output.php">Result</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                    <div class="mx-2">
                        <a href="login.php"><button type="button" class="btn btn-success">Login</button></a>
                        <a href="signUp.php"><button type="button" class="btn btn-success">SignUp</button></a>

                </form>
            </div>
        </nav>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" class="img-fluid" src="img/qingbao-meng-01_igFr7hd4-unsplash.jpg"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" class="img-fluid" src="img/david-marcu-78A265wPiO4-unsplash.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" class="img-fluid" src="img/chalo-gallardo-yLB6MkiL2Io-unsplash.jpg"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <div class="container">
        <div class="container my-3">
            <h2 class="text-center my-3">Review Section
                <a href="addpeople.php"><button type="button" class="btn btn-success float-right">ADD
                        Review</button></a>


            </h2>


            <div class="row">
                <?php
                include 'dbconnect.php';
           $sql= 'SELECT * FROM `thread`';
           $result= mysqli_query($conn, $sql);

           while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $cat = $row['username'];
            $desc = $row['category_description'];

            echo '<div class="col-md-4">
                        <div class="card my-2" style="width: 18rem;">
                            <img src="img/card-'.$id.'.jpg" class="card my-2-img-top" alt="'.$cat.'">
                            <div class="card my-2-body">
                                <h5 class="card my-2-title"><a href="thread.php?catid=' . $id . '">' . $cat . '</a></h5>
                                <p class="card my-2-text">'.substr($desc,0,90).'...</p>
                                <a href="thread.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                            </div>
                        </div>
                    </div>';


           } 


            ?>
            </div>
        </div>
    </div>




    <div class="container-fluid bg-dark text-light">
        <p class="text-center">All rights reserved|2023</p>
    </div














        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

</html>