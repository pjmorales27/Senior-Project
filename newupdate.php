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
        else if(isset($_GET['updateLinemen'])){
            $Lname=$_GET['updateLinemen'];
            echo $name;
        }
        else if(isset($_GET['submit1'])){
            $Lname=$_GET['submit1'];
            echo $Lname;
        }
        else if(isset($_GET['submit2'])){
            $Lname=$_GET['submit2'];
            echo $Lname;
        }
        else if(isset($_GET['updateIrrigator'])){
            $Iname=$_GET['updateIrrigator'];
            echo $Iame;
        }
        else if(isset($_GET['submit1'])){
            $Iname=$_GET['submit1'];
            echo $Iname;
        }
        else if(isset($_GET['submit2'])){
            $Iname=$_GET['submit2'];
            echo $Iname;
        }
        else die();
        
    ?>
    </head>
    
    <body>

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

                            break;
                        }
                    }
                ?>
        <?php }?>

        <?php if($Lname != null){?>
            <?php echo "linemen selected" ?>
        <?php }?>

        <?php if($Iname != null){?>
            <?php echo "irrigator selected" ?>
        <?php }?>
    </body>
</html>