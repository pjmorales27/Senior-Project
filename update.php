<!DOCTYPE html>
<html>
    <head>
    <script type="text/javascript" src="myjava.js"></script>
    <link rel="stylesheet" href="design.css">
    <?php 
        $dbservername = "127.0.0.1";
        $dbusername = "root";
        $dbpassword = "Blueheat27";
        $dbname = "Overview";

        $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

        if(isset($_GET['updateid'])){
            $name=$_GET['updateid'];
            echo $name;  
        }
        else if(isset($_GET['submit1'])){
            $name=$_GET['submit1'];
            echo $name;
        }
        else if(isset($_GET['submit2'])){
            $name=$_GET['submit2'];
            echo $name;
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
            
            
            <?php if($name != null){
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
            
            <?php $name=$_GET['submit2']; if(isset($name)){
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