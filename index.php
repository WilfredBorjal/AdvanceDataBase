<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
 ?>
 <!DOCTYPE html>
 <html>
    <head>
        <title> Simple Crud </title>
    </head>
    <body>
        <H1>My Subjects</H1>
        <a href="forms/addform.php"></a><br/><br/>
        <table width='100%' style="border=1" >
            <tr style="background-color=#CCCCCC">
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Action</td>   
            </tr>
            <?php
                while ($res = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$res["Subject_ID"]."</td>";
                    echo "<td>".$res["Subject_Code"]."</td>";
                    echo "<td>".$res["Subject_Name"]."</td>";
                    echo "<td><a href=\"forms/editform.php?id.$res[Subject_ID]\">Edit</td> |
                    <a href=\"forms/editform.php?id.$res[Subject_ID]\"
                    onClick\"return confirm('Are your sure you want to delete?')\">Delete</a></td>";
                }
             ?>
        </table>
    </body>
 </html>