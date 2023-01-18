<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);
$res = mysqli_query($link, "select * from orders");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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
                <th>Hospital Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Date</th>
                <th>organ id</th>
            </t>
            <?php
            while ($rows = mysqli_fetch_assoc($res)) {
            ?>
                <tr>
                    <td><?php echo $rows['hosp_name']; ?></td>
                    <td><?php echo $rows['adress']; ?></td>
                    <td><?php echo $rows['ph_no']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td><?php echo $rows['organ_id']; ?></td>

                </tr>
            <?php

            }
            ?>
    </div>


    </table><br>
</body>

</html>