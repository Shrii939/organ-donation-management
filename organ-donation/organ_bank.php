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

        .button {
            text-align: center;
            position: center;
        }

        input[type=submit] {
            background-color: #191970;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            position: relative;
            cursor: pointer;
            margin-top: 6px;
        }

        input[type=submit]:hover {
            background-color: #1E90FF;

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
                <h1> Organ bank information</h1>
            </center>
            <hr>
            <label> organ_id </label>
            <input type="text" name="organ_id" placeholder="organ id" size="5" required/>
            <label> test_details </label>
            <input type="text" name="test_details" placeholder="test details" size="50" />
            <label> Organ type </label>
            <input type="text" name="org_type" placeholder="organ type" size="15" />


            <label for="issues">issues</label>
            <textarea id="issues" name="issues" placeholder="issues if please.." style="height:100px"></textarea>
            <div class="button">
                <input type="submit" name="save2" value="submit">
                <br>
                
            </div>
    </form>
</body>

</html>
<?php
if (isset($_POST["save2"])) {

    mysqli_query($link, "insert into organ_bank values('$_POST[organ_id]','$_POST[test_details]','$_POST[issues]','$_POST[org_type]')");
    echo "insertion done";
}


if (isset($_POST["delete"])) {
    mysqli_query($link, "delete from donor where donor_id='$_POST[donor_id]'");
    echo "Deletion succesfull";
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);
$res = mysqli_query($link, "select * from trigger1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available organs</title>
    <style>
        .order {
            text-align: center;
            position: center;
        }

        .show {
            background-color: #778899;
            border-radius: 50px;


        }
      

        input[type=submit] {
            background-color: #191970;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            position: relative;
            cursor: pointer;
            margin-top: 6px;
        }

        input[type=submit]:hover {
            background-color: #1E90FF;

        }
    </style>
</head>

<body>

    <div class="show">
        <table align="center" border="5px" style="width:800px; line-height:30px;">
            <tr>
                <th colspan="4">
                    <h2>Available</h2>

                </th>
            </tr>
            <t>
                <th>Organ id</th>
                <th>Test details</th>
                <th>Organ_type</th>
                <th>Time</th>
                <th>order</th>
            </t>
            <?php
            while ($rows = mysqli_fetch_assoc($res)) {
            ?>
                <tr>
                <tr>
                    <td><?php echo $rows["organ_id"] ?></td>
                    <td><?php echo $rows["test_details"] ?></td>

                    <td><?php echo $rows["organ_type"] ?></td>
                    <td><?php echo $rows["now_Date"] ?></td>
                    <!-- date_format($date,"Y/m/d H:i:s"); -->

                    <td width='170'>
                        <?php
                        echo '<form method="POST" action="orderform.php" >
    <input type="submit"  value="Order"/>
  </form>'; ?>
                    </td>
                </tr>
            <?php

            }
            ?>

    </div>


    </table><br>
    <div class="order">
    

    </div>
</body>

</html>
