<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";
$link = mysqli_connect($servername, $username, $password, $dbname);
// $res = mysqli_query($link, "select * from trigger1");
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Calibri, Helvetica, sans-serif;
            background-color: pink;
        }

        .container {
            padding: 50px;
            background-color: #cce5ff;
        }

        input[type=text],
        input[type=password],
        textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: orange;
            outline: none;
        }

        div {
            padding: 10px 0;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        .order {
            text-align: center;
            position: center;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            position: relative;
            cursor: pointer;
            margin-top: 6px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
        }



        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #f5f5f5;
            margin-right: 20px;
        }

        .nav-items a {
            text-decoration: none;
            color: #000;
            padding: 35px 20px;
        }

        input[type=submit]:hover {
            background-color: #45a049;

        }
    </style>
</head>

<body>
<header class="header">
        <nav class="nav-items">
            <a href="home.php">Home</a>
            <a href="donor.php">Add Donor</a>
            <a href="organ.php">Donate</a>
            <a href="organ_bank.php">Tested</a>
            <a href="ordersshow.php">Orders</a>
            <a href="adduser.php">USERS</a>
        </nav>
    </header>
    
    <form name="form2" action="" method="post">
        <div class="container">
            <center>
                <h1> Organ Order Form</h1>
            </center>
            <hr>
            <label> Hospital name</label>
            <input type="text" name="hosp_name" placeholder="hosp-name" size="20" />
            <label> address</label>
            <input type="text" name="adress" placeholder="address" size="50" />
            <label> Contact </label>
            <input type="text" name="ph_no" placeholder="contact" size="13" />
            <label> Date</label>
            <input type="text" name="date" placeholder="date" size="10" />
            <label> organ_id </label>
            <input type="text" name="organ_id" placeholder="organ id" size="15" />
            <br>
            <div class="order">
                <!-- <a href="home.php"><input type="submit" name="save" value="submit"> </a> -->
                <button class="btn" name="save">submit</button>
            </div>
    </form>
</body>

</html>
<?php
if (isset($_POST["save"])) {
    echo "hiet";   
    mysqli_query($link, "insert into orders values('$_POST[hosp_name]','$_POST[adress]','$_POST[ph_no]','$_POST[date]','$_POST[organ_id]')");
    echo "submited";
    mysqli_query($link, "DELETE FROM trigger1 WHERE organ_id='$_POST[organ_id]'");
    header("Location: home.php");
}


?>



