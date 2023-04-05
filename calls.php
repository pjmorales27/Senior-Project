<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="design.css">
        <?php
        $dbservername = "127.0.0.1";
        $dbusername = "mario";
        $dbpassword = "DailyUpdate";
        $dbname = "Rundown";

        $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
        ?>

    </head>

    <body>

       



        <?php if(isset($_POST['id']) && $_POST['id'] === 'field200') { ?>
            
            <section class="tractor-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>               
                                    <th scope="col"> Driver Name </th>
                                    <th scope="col"> Task </th>
                                    <th scope="col"> Tractor </th>
                                    <th scope="col"> Equipment </th>
                                    <th scope="col"> Crop </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Get_TractorDriver(1);";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $tractor = $row['Tractor_des'];
                                            $equipment = $row['Equipment_des'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$id.'</th>
                                            <td>'.$acres.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$task.'</td>
                                            <td>'.$tractor.'</td>
                                            <td>'.$equipment.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                    
                    <section class="linemen-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                    <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>               
                                    <th scope="col"> Linemen Name </th>
                                    <th scope="col"> Task </th>
                                    <th scope="col"> Crop </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Get_Linemen(1);";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$id.'</th>
                                            <td>'.$acres.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$task.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>

                    <section class="irrigator-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>               
                                    <th scope="col"> Irrigator Name </th>
                                    <th scope="col"> Task </th>
                                    <th scope="col"> Crop </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Get_Irrigator(1);";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $crop = $row['Crop_name'];


                                            echo '<tr>
                                            <th scope= "row">'.$id.'</th>
                                            <td>'.$acres.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$task.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
        <?php } ?>

        

        <?php if(isset($_POST['id']) && $_POST['id'] === 'field201') { ?>
            
            <section class="tractor-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>               
                                    <th scope="col"> Driver Name </th>
                                    <th scope="col"> Task </th>
                                    <th scope="col"> Tractor </th>
                                    <th scope="col"> Equipment </th>
                                    <th scope="col"> Crop </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Get_TractorDriver(2);";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $tractor = $row['Tractor_des'];
                                            $equipment = $row['Equipment_des'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$id.'</th>
                                            <td>'.$acres.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$task.'</td>
                                            <td>'.$tractor.'</td>
                                            <td>'.$equipment.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                    
                    <section class="linemen-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                    <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>               
                                    <th scope="col"> Linemen Name </th>
                                    <th scope="col"> Task </th>
                                    <th scope="col"> Crop </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Get_Linemen(2);";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$id.'</th>
                                            <td>'.$acres.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$task.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>

                    <section class="irrigator-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>               
                                    <th scope="col"> Irrigator Name </th>
                                    <th scope="col"> Task </th>
                                    <th scope="col"> Crop </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Get_Irrigator(2);";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $crop = $row['Crop_name'];


                                            echo '<tr>
                                            <th scope= "row">'.$id.'</th>
                                            <td>'.$acres.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$task.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                    
        <?php } ?>


        
    </body>
</html>

