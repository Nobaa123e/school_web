<!DOCTYPE html>
<html>
 
<head>
    <title>REGISTRATION FORM</title>
</head>
 
<body>
    <center>
        <?php
 
        // $serverName = "localhost";
        // $userName = "root"
        // $password = '';


        /*----------------------if there is no --registration-- database, create first the database in cmd and name it as registration.---------------------
        
            CREATE DATABASE registration;
        
        */

        // $databaseName = "registration";
        $conn = mysqli_connect('localhost', 'root', '', 'registration') or die("ERROR: Could not connect. ". mysqli_connect_error());
          
        

        /*----------------Use the --registration-- database and Create the table and name it as storeddata with the following values:(copy and paste to cmd)
        
        CREATE TABLE storeddata(First_Name VARCHAR(20),Last_Name VARCHAR(20),Gender VARCHAR(6),Address VARCHAR(30), Email_Address VARCHAR(30));

        */
         
        // Requesting all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
         
        // Inserting data to table storeddata
        $sql = "INSERT INTO storeddata VALUES ('$first_name',
            '$last_name','$gender','$address','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Successfully Registered</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Could not insert data ". mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>