<?php
include "config.php";
if(isset($_POST['submit']))
{
    $uname=mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password=mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    if($uname!="" && $password!="")
    {
     $sql_query= "SELECT count(*) AS usercount FROM users WHERE uname='".$uname."' AND password='".$password."'";
     $result=mysqli_query($conn,$sql_query);
     $row=mysqli_fetch_array($result);
     $count=$row['usercount'];
     
     $sql_query2="SELECT name as username FROM users WHERE uname='".$uname."' AND password='".$password."'";
     $result2=mysqli_query($conn,$sql_query2);
     $row2=mysqli_fetch_array($result2);
     $name=$row2['username'];

     if(count>0) {
         $_SESSION['uname']=$uname;
         $_SESSION["name"]=$name;
         header('Location: homepage.php');
     }
     else {
         echo"invalid username or password";
     } 
    }
    else{
        echo " password or username not entered";
         }
}
?>
<html>
    <head>
        <title>login page</title>
        <style>
            .container{
                width: 40px;
                margin: 150px auto;
            
            }
            #login{
                brder:1px solid gray
                border-radius: 3px;
                width: 470px;
                height:270px;
                margin: 0 auto;
                box-shadow: 0px 2px 2px 0px;
            }
            #login h1{
                font-weight: bold;
                padding: 10px;
                background-color: blue;
                color:white;
                font-family: sans-serif;
                margin-top:0px;
            }
            #login input{
                margin: 10px;
                padding: 5px;
            }
            #login .textbox{
                width: 96%;
            }
            #login input[type=submit] {
                width: 100px;
                background-color: lightseagreen;
                border: 0px;
                color: white;

            }
        </style>
    </head>
    <body>
        <div class="container">
            <form id="login" methid="post" action="">
                <h1>LOGIN</h1>
                <input type="text" class="textbox" name="txt_uname" placeholder="enter username">
                <input type="text" class="textbox" name="txt_pwd" placeholder="enter password">
                <input type="submit" value="SUBMIT" name="submit">
            </form>
        </div>
    </body>
</html>














