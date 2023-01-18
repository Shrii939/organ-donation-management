<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);

if ($con) {
    echo ("connection ok ");
} else {
    die("connection failed" . mysqli_connect_error());
}
?>

<html>

<head>
    <title>organ list</title>
</head>

<body>
    <form name="form1" action="" method="post">
        <table>
            <tr>
                <td>
                    enter organ_id
                </td>
                <td><input type="text" name="donor_id"></td>
            </tr>
            <tr>
                <td>
                    enter donor_id
                </td>
                <td><input type="text" name="organ_id"></td>
            </tr>
            <tr>
                <td>
                    enter organ type
                </td>
                <td><input type="text" name="organ_type"></td>
            </tr>
            <tr>
                <td>
                    enter details of organ tests
                </td>
                <td><textarea id="details" name="details" placeholder="details please.." style="height:200px"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="sub1" value="insert">
                    <input type="submit" name="sub2" value="delete">
                    <input type="submit" name="sub3" value="update">
                    <input type="submit" name="sub4" value="display">
                    <input type="submit" name="sub4" value="search">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST["sub1"])) {
    mysqli_query($link, "insert into aat values('$_POST[organ_id]','$_POST[donor_id]','$_POST[organ_type]','$_POST[details]')");
    echo "insertion done";
}
if (isset($_POST["sub2"])) {
    mysqli_query($link, "delete from aat where organ_id='$_POST[organ_id]'");
    echo "Deletion succesfull";
}
if (isset($_POST["sub3"])) {
    mysqli_query($link, "update aat set donor_id='$_POST[donor_id]' where organ_id = '$_POST[organ_id]'");
}
if (isset($_POST["sub4"]))
{
    $res = mysqli_query($link, "select *from aat");
    echo "<table border=1>";
    echo "<tr>";
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
    echo "</tr>";

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
        echo "<td>";
        echo $row["details"];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
if (isset($_POST["sub5"]))
{
    $res = mysqli_query($link, "select *from aat where organ_id= '$_POST[organ_id]'");
    echo "<table border=1>";
    echo "<tr>";
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
    echo "</tr>";

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
        echo "<td>";
        echo $row["details"];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>