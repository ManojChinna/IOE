<?php
session_start();
$_SESSION["name"]="mySession";
if(isset($_SESSION['page1visits'])) ++$_SESSION['page1visits']; else $_SESSION['page1visits']=1;
?>
<!doctype html>
<html>
    <head>
        <!--created by Kadari-->
        <title>Sessions</title>
        <meta charset ="UTF-8">

    </head>
    <body>
        <h1> PHP sessions- uou are on page 1 </h1>
        <form action="page2.php" method='POST'>
            <p>
                <?php
                 if(isset($_SESSION['name'])){
                    $_SESSION['page1Msg']="hello from page1";
                     echo "<p> Session name is: " .$_SESSION['name']. "</p>";
                     echo "<p>You visited this page" >$_SESSION['page1visits']." times </p>";
                     echo"</p>";
                    
                    echo (isset($_SESSION["page1Msg"]))? "Message from Page1: " .$_SESSION["page1Msg"]:"No Message from page 1 yet.";
                    echo"<p></p>";

                    echo (isset($_SESSION["page2Msg"]))? "Message from Page2: " .$_SESSION["page2Msg"]:"No Message from page 2 yet.";
                    echo"<p></p>";


                    echo (isset($_SESSION["page3Msg"]))? "Message from Page3: " .$_SESSION["page3Msg"]:"No Message from page 3 yet.";
                    echo"</p>";

                
                }

                ?>
                <p> <input type="submit" value="Go to Page 2"></p>
                <p><button><a href ="page3.php" style='text-decoration:none'> Go to Page 3
                </a></buttton></p>
        </form>
            
    </body>
<html>
