<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_post['submit'])){
            $code=$_post['code'];
            $author=$_post['author'];
            $subject=$_post['subject'];

            if(empty($_post['$code'])){
                if(empty($code)){
                    echo "<font color='red'>Syllabus Code field is empty</font><br/>";
                }
                if(empty($author)){
                    echo "<font color='red'>Syllabus Author field is empty</font><br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }
            else{
                $result=mysqli_query($dbc, "<<UPDATE SQL QUERY>>");
                echo "<font color='green'>Data Added succesfully.</font>";
                echo "<br/><a href='../index.php>View Result</a>'";
            }
        }
        ?>
    </body>
</html>