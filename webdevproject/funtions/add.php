<!DOCTYPE html>
 <html>
    <head>
        <title> Simple Crud </title>
    </head>
    <body>
        <H1>Add Data</H1>
        <?php
        include_once("../dbConnection/mysqliconfig_connection.php");

        if(isset($_POST["Submut"])){
            $code =$_POST["code"];
            $name =$_POST["name"]; 

            if(empty($code) || empty($name)){
                if(empty($code)){
                    echo"<font color='red'>Subject Code field is empty.</font><br/>";
                }
                if(empty($name)){
                    echo "<font color='red'>Subject Code field is empty.</font><br/>";
                }
                 echo "<br/>,a href='javascript:self.history.back();'>Go back</a>";
        }
        else {
            $result = mysqli_query($dbc, "INSERT INTO tblsubject(Subject_Code, Subject_Name) VALUES('$code','$name')");
            echo"<font color='green'> Data added succesfully.";
            echo"<br/><a href='../index.php'>View Result </a>";
        }

    }
    ?>
    </body>
 </html>