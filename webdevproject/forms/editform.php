<?php 
    include_once("../dbConnection/mysqliconfig_connection.php");
    $id = $_GET['id'];
    $result = mysqli_query($dbc, "SELECT * FROM tblsubject WHERE Subject_ID=$id");
    while($res =mysqli_fetch_array($result)) {
        $code =$res["Subject_Code"];
        $name =$res["Subject_Name"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/edit.php" name="form1" method="post">
        <table style="border=0">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code" value="<?php echo$code;?>"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name" value="<?php echo$name;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET;?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>