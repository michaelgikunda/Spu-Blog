<?php
    //Databse connection script
    include 'dbcon.php';

    if(isset($_POST['submit'])){
        //Setting the values from the form to variables
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        //Sellecting Values for the Table credentials
        $sql = "SELECT * FROM CREDENTIALS";
        $query  = mysqli_query($dbconn, $sql);


        //For loop to alliterate through the values in the list

        foreach($query as $q){
            //Check if the values are in the table

            if($q['email'] == $Email && $q['password'] == sha1($Password)){
                //Redirects to the Blog Page if email and password are same
                header("Location: home.php");

            }elseif($q['email'] == $Email && $q['password'] != sha1($Password)){
                //Outputed if password does not correspond to the email
                echo "Invalid Password";
            }
            else{
                //Outputed if both the email and password are not in the databse
                $sql2 = "SELECT * FROM admin";
                $query2  = mysqli_query($dbconn, $sql2);


                //For loop to alliterate through the values in the list

                foreach($query2 as $q2){
                    //Check if the values are in the table

                    if($q2['email'] == $Email && $q2['password'] == sha1($Password)){
                        //Redirects to the Blog Page if email and password are same
                        session_start();
                        $_SESSION['name'] = $row['name'];
                        header("Location: admin.php");

                    }elseif($q2['email'] == $Email && $q2['password'] != sha1($Password)){
                        //Outputed if password does not correspond to the email
                        echo "Invalid Password";
                    }
                    else{
                        //Outputed if both the email and password are not in the databse
                        echo "Invalid Email And Password";
                    }
                }
            }
        }
    }
?>