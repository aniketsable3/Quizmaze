<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Output</title>
</head>

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
            <a class="nav-link" href="#">Link</a>
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




    <div class="container">
        <h1 class="text-center">These are the peolpe who Are Logged In The Test </h1>
        <?php

include "dbconnect.php";
$sql = "SELECT * FROM `quizmaze`";
$result= mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
echo $num;
echo " Records in database<br>";
?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if($num>0){ while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['sno'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>


                </tr>

                <?php } }?>
            </tbody>
        </table>
    </div>

<hr>
<div class="container">
<h1 class="text-center">This Is the scorecard Of the test </h1>
        <?php

include "dbconnect.php";
$sql = "SELECT * FROM `quiz_scores`";
$result= mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
echo $num;
echo " Records in database<br>";
?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Score_id</th>
                    <th scope="col">Sno</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody>
                <?php if($num>0){ while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['score_id'] ?></td>
                    <td><?php echo $row['sno'] ?></td>
                    <td><?php echo $row['score'] ?></td>


                </tr>

                <?php } }?>
            </tbody>
        </table>

 </div>


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