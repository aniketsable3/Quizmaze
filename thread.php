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
    <?php
 
 include 'dbconnect.php';
 $id=$_GET['catid'];
 $sql="SELECT * FROM `thread` WHERE id=$id";
 $result=mysqli_query($conn,$sql);
 while ($row = mysqli_fetch_assoc($result)) {
    $catname=$row['username'];
    $catdesc=$row['category_description'];
    
 }



?>

    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">This is Doctor <?php echo $catname;?> </h1>
            <p class="lead"><?php echo $catdesc;?></p>
            <hr class="my-4">
            <p>This Fourm is to share knowledge with everyone about the doctor.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>

    </div>
    <div class="container">
        <h1 class="py-2">Browse Questions</h1>
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="img/username.png"
                    alt="Generic placeholder image" width="140" height="140">
                <h2>Unabele  to install Python in windows</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
            </div>

            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="img/username.png"
                    alt="Generic placeholder image" width="140" height="140">
                <h2>Unabele  to install Python in windows</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
            </div>

            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="img/username.png"
                    alt="Generic placeholder image" width="140" height="140">
                <h2>Unabele  to install Python in windows</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
            </div>

            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="img/username.png"
                    alt="Generic placeholder image" width="140" height="140">
                <h2>Unabele  to install Python in windows</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
            </div>

            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="img/username.png"
                    alt="Generic placeholder image" width="140" height="140">
                <h2>Unabele  to install Python in windows</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
            </div>

            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="img/username.png"
                    alt="Generic placeholder image" width="140" height="140">
                <h2>Unabele  to install Python in windows</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
            </div>

            
        </div>
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