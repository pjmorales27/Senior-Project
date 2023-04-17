<!DOCTYPE html>
<html>
    <head>
    <script type="text/javascript" src="myjava.js"></script>
    <link rel="stylesheet" href="design.css">
    <?php 
        $dbservername = "127.0.0.1";
        $dbusername = "mario";
        $dbpassword = "DailyUpdate";
        $dbname = "Rundown";

        $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

        if(isset($_GET['updateDriver'])){
            $Dname=$_GET['updateDriver'];
            echo $Dname;  
        }
        else if(isset($_GET['submit1'])){
            $Dname=$_GET['submit1'];
            echo $Dname;
        }
        else if(isset($_GET['submit2'])){
            $Dname=$_GET['submit2'];
            echo $Dname;
        }
        else if(isset($_GET['submit3'])){
            $Dname=$_GET['submit3'];
            echo $Dname;
        }
        else if(isset($_GET['submit4'])){
            $Dname=$_GET['submit4'];
            echo $Dname;
        }
        else if(isset($_GET['updateLinemen'])){
            $Lname=$_GET['updateLinemen'];
            echo $name;
        }
        else if(isset($_GET['submitL1'])){
            $Lname=$_GET['submitL1'];
            echo $Lname;
        }
        else if(isset($_GET['submitL2'])){
            $Lname=$_GET['submitL2'];
            echo $Lname;
        }
        else if(isset($_GET['updateIrrigator'])){
            $Iname=$_GET['updateIrrigator'];
            echo $Iame;
        }
        else if(isset($_GET['submitI1'])){
            $Iname=$_GET['submitI1'];
            echo $Iname;
        }
        else if(isset($_GET['submitI2'])){
            $Iname=$_GET['submitI2'];
            echo $Iname;
        }
        else die();
        
    ?>
    </head>
    
    <body>
        <button><a href="web.php?">Home</a></button>
        <?php if($Dname != null){?>
            <?php echo "driver selected" ?>
            <section class="tractor-table">
            <table class = "table" >
                <thead>
                    <tr>
                        <th scope="col"> Driver name </th>
                        <th scope="col"> Tractor </th>               
                        <th scope="col"> Task </th>
                        <th scope="col"> Equipment </th>
                        <th scope="col"> Field ID </th>
                        <th scope="col"> Acres </th>
                        <th scope="col"> Crop </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="call One_Driver('$Dname');";
                        $result= mysqli_query($conn,$sql);  
                        if($result){
                            while ($row = mysqli_fetch_assoc($result)){
                                $name = $row['Worker_name'];
                                $tractor = $row['Tractor_des'];
                                $task = $row['Task_des'];
                                $equipment = $row['Equipment_des']; 
                                $id = $row['Field_ID'];
                                $acres = $row['acres'];                                                                                      
                                $crop = $row['Crop_name'];

                                echo '<tr>
                                <th scope= "row">'.$name.'</th>
                                <td>'.$tractor.'</td>
                                <td>'.$task.'</td>
                                <td>'.$equipment.'</td>
                                <td>'.$id.'</td>
                                <td>'.$acres.'</td>
                                <td>'.$crop.'</td>
                                </tr>';
                            }
                        }
                        $result->close();
                        $conn->next_result();
                    ?>
                </tbody>
            </table>
                <form>        
                    <label>Tractor Options:</label>
                    <select class="tractoroption" name= "thetractor">
                        <option> none </option>
                        <option> A-1 2355 JD </option>
                        <option> A-2 2640 JD </option>
                        <option> A-4 4020 JD </option>
                        <option> A-5 4020 JD </option>
                    </select>
                    <?php echo "<button name='submit1' value='$Dname'> Submit  </button>";?>
                    
                    <label>Task Options:</label>
                    <select class="taskoption" name= "thetask">
                        <option> none </option>
                        <option> Wilcox </option>
                        <option> Disc </option>
                        <option> Rip </option>
                        <option> Chisel </option>
                        <option> Water Roads </option>
                        <option> Off </option>
                    </select>
                    <?php echo "<button name='submit2' value='$Dname'> Submit  </button>";?> 
                    
                    <label>Equipment Options:</label>
                    <select class="equipmentoption" name= "theequipment">
                        <option> none </option>
                        <option> Plow </option>
                        <option> Trailer </option>
                        <option> Disker </option>
                    </select>
                    <?php echo "<button name='submit3' value='$Dname'> Submit  </button>";?> 

                    <label>Field Options:</label>
                    <select class="fieldoption" name= "thefield">
                        <option> none </option>
                        <option> 200 </option>
                        <option> 201 </option>
                        <option> 203 </option>
                    </select>
                    <?php echo "<button name='submit4' value='$Dname'> Submit  </button>";?>
                </form>

                <?php 
                    if($Dname != null){
                        $newtractor = $_GET['thetractor'];
                        switch($newtractor) {
                            case "A-1 2355 JD":
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_tractor_A1('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case "A-2 2640 JD":
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_tractor_A2('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case "A-4 4020 JD":
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_tractor_A4('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case "A-5 4020 JD":
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_tractor_A5('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                        }
                    }
                ?>
                <?php 
                    if($Dname != null){
                        $newtask = $_GET['thetask'];
                        switch($newtask) {
                            case ("Wilcox"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_Wilcox('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case ("Disc"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_Disc('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case ("Rip"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_Rip('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case ("Chisel"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_Chisel('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case ("Water Roads"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_Water_Roads('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case ("Off"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call Change_to_Off('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                        }
                }?>
                <?php 
                    if($Dname != null){
                        $newfield = $_GET['thefield'];
                        switch($newfield) {
                            case("200"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call ChangeD_to_field200('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case("201"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call ChangeD_to_field201('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                            case("203"):
                                echo 
                                '<table class = "table" >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Driver name </th>
                                            <th scope="col"> Tractor </th>               
                                            <th scope="col"> Task </th>
                                            <th scope="col"> Equipment </th>
                                            <th scope="col"> Field ID </th>
                                            <th scope="col"> Acres </th>
                                            <th scope="col"> Crop </th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
                                        $sql="call ChangeD_to_field203('$Dname');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $name = $row['Worker_name'];
                                                $tractor = $row['Tractor_des'];
                                                $task = $row['Task_des'];
                                                $equipment = $row['Equipment_des']; 
                                                $id = $row['Field_ID'];
                                                $acres = $row['acres'];                                                                                      
                                                $crop = $row['Crop_name'];
                
                                                echo '<tr>
                                                <th scope= "row">'.$name.'</th>
                                                <td>'.$tractor.'</td>
                                                <td>'.$task.'</td>
                                                <td>'.$equipment.'</td>
                                                <td>'.$id.'</td>
                                                <td>'.$acres.'</td>
                                                <td>'.$crop.'</td>
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                
                                    '</tbody>
                                </table>';
                            break;
                        }
                    }?>
                <?php 
                    if($Dname != null){?>

                <?php }?>
        <?php }?>

        <?php if($Lname != null){?>
            <?php echo "linemen selected" ?>
            <section class="linemen-table">
                <table class = "table">
                    <thead>
                        <tr>
                            <th scope="col"> Linemen Name </th>
                            <th scope="col"> Task </th>               
                            <th scope="col"> Field ID </th>
                            <th scope="col"> Acres </th>
                            <th scope="col"> Crop </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "call One_Linemen('$Lname');";
                            $result = mysqli_query($conn, $sql);
                            if($result){
                                while ($row = mysqli_fetch_assoc($result)){
                                    $name = $row['Worker_name'];
                                    $task = $row['Task_des'];                                   
                                    $id = $row['Field_ID'];
                                    $acres = $row['acres'];
                                    $crop = $row['Crop_name'];

                                    echo '<tr>
                                    <th scope= "row">'.$name.'</th>
                                    <td>'.$task.'</td>
                                    <td>'.$id.'</td>
                                    <td>'.$acres.'</td>
                                    <td>'.$crop.'</td>
                                    </tr>';
                                }
                                $result->close();
                                $conn->next_result();
                            }
                        ?>
                    </tbody>
                </table>
                <form>        
                    <label>Task Options:</label>
                    <select class="taskoption" name= "thetask">
                        <option> none </option>
                        <option> Move Lines </option>
                        <option> Main Line </option>
                        <option> Spray Weeds </option>
                        <option> Off </option>
                    </select>
                    <?php echo "<button name='submitL1' value='$Lname'> Submit  </button>";?>
                    
                    <label>Field Options:</label>
                    <select class="fieldoption" name= "thefield">
                    <option> none </option>
                        <option> 200 </option>
                        <option> 201 </option>
                        <option> 203 </option>
                    </select>
                    <?php echo "<button name='submitL2' value='$Lname'> Submit  </button>";?> 
                </form>
            </section>
            <?php 
                if($Lname != null){
                    $newtask = $_GET['thetask'];
                    switch($newtask) {
                        case "Move Lines":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_Move_Lines('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "Main Line":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_Main_Line('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "Spray Weeds":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_Spray_Weeds('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "Off":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_Off('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                    }
                }
            ?>
            <?php 
                if($Lname != null){
                    $newfield = $_GET['thefield'];
                    switch($newfield) {
                        case "200":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_field200('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "201":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_field201('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "203":
                            echo 
                            '<table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Linemen Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeL_to_field203('$Lname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];                                   
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                    }
                }
            ?>
        <?php }?>

        <?php if($Iname != null){?>
            <?php echo "irrigator selected" ?>
            <section class="irrigator-table">
                <table class = "table">
                    <thead>
                        <tr>
                            <th scope="col"> Irrigator Name </th>
                            <th scope="col"> Task </th>               
                            <th scope="col"> Field ID </th>
                            <th scope="col"> Acres </th>
                             <th scope="col"> Crop </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "call One_Irrigator('$Iname');";
                            $result = mysqli_query($conn, $sql);
                            if($result){
                                while ($row = mysqli_fetch_assoc($result)){
                                    $name = $row['Worker_name'];
                                    $task = $row['Task_des'];
                                    $id = $row['Field_ID'];
                                    $acres = $row['acres'];            
                                    $crop = $row['Crop_name'];

                                    echo '<tr>
                                    <th scope= "row">'.$name.'</th>
                                    <td>'.$task.'</td>
                                    <td>'.$id.'</td>
                                    <td>'.$acres.'</td>
                                    <td>'.$crop.'</td>  
                                    </tr>';
                                }
                                $result->close();
                                $conn->next_result();
                            }
                        ?>
                    </tbody>
                </table>
                <form>        
                    <label>Task Options:</label>
                    <select class="taskoption" name= "thetask">
                        <option> none </option>
                        <option> Mettler </option>
                        <option> Mettler Almonds </option>
                        <option>  Mettler Drip </option>
                        <option>  Copus Adobe </option>
                        <option>  David </option>
                        <option> Off </option>
                    </select>
                    <?php echo "<button name='submitI1' value='$Iname'> Submit  </button>";?>
                </form>
            </section>
            <?php 
                if($Iname != null){
                    $newtask = $_GET['thetask'];
                    switch($newtask) {
                        case "Mettler":
                            echo'
                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Irrigator Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeI_to_Mettler('$Iname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];            
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>  
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "Mettler Almonds":
                            echo'
                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Irrigator Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeI_to_MettlerAlmonds('$Iname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];            
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>  
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "Mettler Drip":
                            echo'
                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Irrigator Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeI_to_MettlerDrip('$Iname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];            
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>  
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "Copus Adobe":
                            echo'
                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Irrigator Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeI_to_Copus/Adobe('$Iname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];            
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>  
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                        case "David":
                            echo'
                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Irrigator Name </th>
                                        <th scope="col"> Task </th>               
                                        <th scope="col"> Field ID </th>
                                        <th scope="col"> Acres </th>
                                        <th scope="col"> Crop </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    $sql = "call ChangeI_to_David('$Iname');";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            $id = $row['Field_ID'];
                                            $acres = $row['acres'];            
                                            $crop = $row['Crop_name'];

                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$acres.'</td>
                                            <td>'.$crop.'</td>  
                                            </tr>';
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    }
                                '</tbody>
                            </table>';
                        break;
                    }
                }
            ?>
        <?php }?>
    </body>
</html>