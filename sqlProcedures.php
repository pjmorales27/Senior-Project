<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content= "ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modal</title>
            <link href= "style.css" rel= "stylesheet">
            <script defer src= "script.js"> </script>
            
</head>
<body>
<!------------------------modal number 1------------------->
    <button data-modal-target= "#modal"> Open Modal</button>
    <div class= "modal" id= "modal">
        <div class= "modal-header">
            <div class= "title"> Example Modal</div>
            <button data-close-button class= "close-button"> &times;</button>
        </div>
        <div class= "modal-body">
            
            <?PHP

                $dbservername = "127.0.0.1";
                $dbusername = "mario";
                $dbpassword = "DailyUpdate";
                $dbname = "Rundown";

                $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
            ?>

            <?PHP
                $sql = "call Get_Linemen(1);";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo $row['Worker_name'] . "<br>";
                    }
                }
            ?>
        </div>
    </div>
    <div id= "overlay"> </div>

//connection to database
<?PHP
$dbservername = "127.0.0.1";
$dbusername = "mario";
$dbpassword = "DailyUpdate";
$dbname = "Rundown";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
?>

//access stored procedure
<?php
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$res = mysqli_query($conn, "call Get_Linemen(1)")
?>

</body>
</html>
