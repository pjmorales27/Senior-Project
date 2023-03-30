<?php
$dbservername = "127.0.0.1";
$dbusername = "mario";
$dbpassword = "DailyUpdate";
$dbname = "Rundown";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
?>



<?php
if(isset($_POST['id']) && $_POST['id'] === 'field200') {
    $sql = "call Get_Linemen(1);";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['Worker_name'] . "<br>";
        }
    }
}

if(isset($_POST['id']) && $_POST['id'] === 'field201') {
    $sql = "call Get_Linemen(2);";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['Worker_name'] . "<br>";
        }
    }
}
?>

