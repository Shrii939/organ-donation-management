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
            <label> organ id </label>
            <input type="text" name="organ_id" placeholder="organ id" size="15" />
            <label> donor id </label>
            <input type="text" name="donor_id" placeholder="donor id" size="15" />
            <label> Organ type </label>
            <input type="text" name="org_type" placeholder="organ type" size="15" />
            <label for="details">Other details</label>
            <textarea id="details" name="details" placeholder="details please.." style="height:100px"></textarea>
            <div class="button">
                <input type="submit" name="save1" value="submit">
                <br>
                <input type="submit" name="sub4" value="view">
            </div>
    </form>
</body>

</html>
<?php
if (isset($_POST["save1"])) {

    mysqli_query($link, "insert into organ values('$_POST[organ_id]','$_POST[donor_id]','$_POST[org_type]','$_POST[details]')");
    echo "insertion done";
}
if (isset($_POST["sub4"])) {
    $res = mysqli_query($link, "select *from organ");
    echo "<table border=1>";
    echo "<tr >";
    echo "<th>";
    echo "organ_id";
    echo "</th>";
    echo "<th>";
    echo "donor_id";
    echo "</th>";
    echo "<th>";
    echo "organ_type";
    echo "</th>";
    echo "<th>";
    echo "details";
    echo "</th>";


    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>";
        echo $row["organ_id"];
        echo "</td>";
        echo "<td>";
        echo $row["donor_id"];
        echo "</td>";
        echo "<td>";
        echo $row["organ_type"];
        echo "</td>";
        echo "</tr>";
        echo "<td>";
        echo $row["details"];
        echo "</td>";
    }
    echo "</table>";
}
?>