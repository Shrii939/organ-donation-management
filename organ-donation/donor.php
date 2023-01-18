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
            background-color: lightblue;
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
    <form name="form2" action="" method="post">
        <div class="container">
            <center>
                <h1> donor organ details form</h1>
            </center>
            <hr>
            <label> Donor id</label>
            <input type="text" name="donor_id" placeholder="Donor id" size="15" />
            <label> name </label>
            <input type="text" name="name" placeholder="Name" size="15" />
            <label> Address </label>
            <input type="text" name="address" placeholder="Address" size="15" />

            <label> Contact </label>
            <input type="text" name="contact" placeholder="Phone number" size="15" />
            <label for="details">details</label>
            <textarea id="details" name="details" placeholder="details please.." style="height:100px"></textarea>
            <div class="button">
                <input type="submit" name="save" value="submit">&nbsp;
                <input type="submit" name="show" value="Available"> &nbsp;
                <input type="submit" name="delete" value="Delete">
                
            </div>
    </form>
</body>

</html>
<?php
if (isset($_POST["save"])) {
    $message = 'Donor added';
    mysqli_query($link, "insert into donor values('$_POST[donor_id]','$_POST[name]','$_POST[address]','$_POST[contact]','$_POST[details]')");
    echo "<script type='text/javascript'>alert('$message')</script>";
    echo '<form method="POST" action="home.php">
  </form>';
}
echo '<form method="POST" action="home.php"><input type="submit" value="Home"/></form>'; 

if (isset($_POST["show"])) {
    $res = mysqli_query($link, "select *from donor");
    echo "<table border=10>";
    echo "<tr >";
    echo "<th>";
    echo "donor_id";
    echo "</th>";
    echo "<th>";
    echo "name";
    echo "</th>";
    echo "<th>";
    echo "contact";
    echo "</th>";
    echo "<th>";
    echo "address";
    echo "</th>";
    echo "<th>";
    echo "details";
    echo "</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>";
        echo $row["donor_id"];
        echo "</td>";
        echo "<td>";
        echo $row["name"];
        echo "</td>";
        echo "<td>";
        echo $row["contact"];
        echo "</td>";
        echo "<td>";
        echo $row["address"];
        echo "</td>";
        echo "<td>";
        echo $row["details"];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
if (isset($_POST["delete"])) {
    mysqli_query($link, "delete from donor where donor_id='$_POST[donor_id]'");
    echo "Deletion succesfull";
}


?>