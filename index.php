<?php 
if(isset($_POST['submit'])) {
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>FORM</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
        }

        a:focus {
            text-decoration: none;
        }

        #form {
            margin-top: 10vh;
        }

        h1,
        p {
            font-size: 18px;
            letter-spacing: 10px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        input {
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 20px;
        }

        .btn {
            font-size: 17px;
            background: #DD2A7B;
            border: none;
            border-radius: 0px;
        }

    </style>
</head>

<body>
    <section id="form">
        <div class="container">
            <form class="d-flex flex-column align-items-center" action="index.php" method="post">
                <img class="mb-4" src="https://www.edigitalagency.com.au/wp-content/uploads/new-instagram-logo-png-transparent-light.png" alt="" width="72" height="72">
                <h1>INSTAGRAM USERNAME CHECK</h1>
                <input type="text" class="form-control w-75" name="instagram" placeholder="Enter username" required autofocus>
                <input class="btn btn-lg btn-primary" type="submit" name="submit" value="SUBMIT">
            </form>

            <?php 
            if(isset($_POST['submit'])) {
                $username = $_POST['instagram'];
                $url = "http://www.instagram.com/$username";
                $str = get_headers($url, 1);
                $sub = explode(" ", $str[2]);
                if($sub[1] == "404") {
                    echo "<p style='color: green'>Username not taken</p>";
                } else {
                    echo "<p style='color: red'>Username already taken</p>";
                }
            } 
            ?>
            <p class="mt-5 mb-3 text-muted">by <a href="tanujnamdeo.me">tanuj namdeo</a></p>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>



<!--
<form action="index.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAge">Age</label>
            <input type="number" class="form-control" name="age" id="inputAge" placeholder="Age">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputNumber">Phone Number</label>
        <input type="number" class="form-control" name="number" id="inputNumber" placeholder="Phone Number">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputFacebook">Facebook</label>
            <input type="text" class="form-control" name="facebook" id="inputFacebook" placeholder="Facebook Id">
        </div>
        <div class="form-group col-md-6">
            <label for="inputInstagram">Instagram</label>
            <input type="text" class="form-control" name="instagram" id="inputInstagram" placeholder="Instagram Id">
        </div>
    </div>
    <input type="submit" placeholder="Submit" name="submit" class="btn btn-primary">
</form>
-->
