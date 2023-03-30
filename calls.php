<?php
$dbservername = "127.0.0.1";
$dbusername = "mario";
$dbpassword = "DailyUpdate";
$dbname = "Rundown";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
?>



<?php
if(isset($_POST['id']) && $_POST['id'] === 'field200') { ?>
    

    <table class = "table">
        <thead>
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Linemen Name </th>
                <th scope="col"> Task ID </th>
                <th scope="col"> Field ID </th>
            </tr>
        </thead>
            <tbody>
                <?php
                    $sql = "call Get_Linemen(1);";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($result){
                        while ($row = mysqli_fetch_assoc($result)){
                            $id = $row['Linemen_ID'];
                            $name = $row['Worker_name'];
                            $task = $row['Task_ID'];
                            $fieldid = $row['Field_ID'];

                            echo '<tr>
                            <th scope= "row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$task.'</td>
                            <td>'.$fieldid.'</td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
    </table>
<?php } ?>


<?php
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

