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
        <section class="tractor-table">
            <table class = "table" >
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Driver Name </th>
                        <th scope="col"> Task ID </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="select * from drivers where Driver_Name = '$Dname';";
                        $result= mysqli_query($conn,$sql);  
                        if($result){
                            while ($row = mysqli_fetch_assoc($result)){
                                $id = $row['Driver_ID'];
                                $name = $row['Driver_Name'];
                                $task = $row['Task_ID'];

                                echo '<tr>
                                <th scope= "row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$task.'</td>
                                
                                </tr>';
                            }
                        }
                        $result->close();
                        $conn->next_result();
                        
                        
                    ?>
                </tbody>
            </table>
            <form>        
                <label>Task Options:</label>
                <select class="taskoption" name= "thetask">
                    <option> none </option>
                    <option> wilcox </option>
                    <option> disc </option>
                    <option> rip </option>
                </select>
                <?php echo "<button name='submit1' value='$name'> Submit  </button>";?>

                <label>Tractor Options:</label>
                <select class="tractoroption" name= "thetractor">
                    <option> none </option>
                    <option> white </option>
                    <option> green </option>
                    <option> red </option>
                    <option> orange </option>
                </select>
                <?php echo "<button name='submit2' value='$name'> Submit  </button>";?>     
            </form>
                      
            <?php if($Dname != null){
                $newtask = $_GET['thetask'];
                echo $name;
                switch ($newtask) {
                       
                    case "wilcox":
                        
                        echo "sql update wilcox right here";
                        echo '<table class = "table" >
                                    <thead>
                                        <tr>
                                        <th scope="col"> ID </th>
                                        <th scope="col"> Driver Name </th>
                                        <th scope="col"> Task ID </th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    
                                        $sql="call change_wilcox('$name');";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $id = $row['Driver_ID'];
                                                $name = $row['Driver_Name'];
                                                $task = $row['Task_ID'];
            
                                                echo '<tr>
                                                <th scope= "row">'.$id.'</th>
                                                <td>'.$name.'</td>
                                                <td>'.$task.'</td>
                                            
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    
                                    echo '</tbody>
                                </table>';

                    break;

                    case "disc":
                        echo "sql update disc right here";
                    break;

                    case "rip":
                        echo "sql update green right here";
                    break;

                    case "red":
                        echo "sql update red right here";
                    break;
                    
                    }
                }
            ?>  
            
            <?php if($Dname != null){
                $newtractor = $_GET['thetractor'];
    
                switch ($newtractor) {
                       
                    case "white":
                    
                        echo "sql update white right here";
                        echo '<table class = "table" >
                                    <thead>
                                        <tr>
                                        <th scope="col"> ID </th>
                                        <th scope="col"> Driver Name </th>
                                        <th scope="col"> Task ID </th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    
                                        $sql="select * from drivers where Driver_Name = '$name';";
                                        $result= mysqli_query($conn,$sql);  
                                        if($result){
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $id = $row['Driver_ID'];
                                                $name = $row['Driver_Name'];
                                                $task = $row['Task_ID'];
            
                                                echo '<tr>
                                                <th scope= "row">'.$id.'</th>
                                                <td>'.$name.'</td>
                                                <td>'.$task.'</td>
                                            
                                                </tr>';
                                            }
                                        }
                                        $result->close();
                                        $conn->next_result();
                                    
                                    echo '</tbody>
                                </table>';

                    break;

                    case "green":
                        echo "sql update green right here";
                    break;

                    case "orange":
                        echo "sql update orange right here";
                    break;

                    case "red":
                        echo "sql update red right here";
                    break;
                    
                    }
                }
                
            ?>  

        </section>
        
    </body>

</html>