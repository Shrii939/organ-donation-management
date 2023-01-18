<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);

if ($con) {
    echo (" ");
} else {
    die("connection failed" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <div class="container-sm mt-5 border p-5">

        <form class="container-sm m-2 p-3" method="post" action="">
            <div class="form-group p-3">
                <input name="user_name" type="text" class="form-control" id="exampleInputText" placeholder="Enter  hospital name">
            </div>
            <div class="form-group p-3">
                <input name="contact" type="text" class="form-control" id="exampleInputText" placeholder="Contact">
            </div>

            <div class="form-group p-3">
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button name="submit" type="submit m-2" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>
<?php
if (isset($_POST["submit"])) {
    mysqli_query($link, "insert into user values('$_POST[user_name]','$_POST[contact]','$_POST[password]')");
    echo "submited";
} ?>