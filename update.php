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
        }
    ?>
    </head>

    <body>
        
        <div class="dropdown"> 
            <div class="select">
                <span class="selected"> Task </span>
                <div class="caret"></div>
            </div>
            
            <ul class="menu">
                <li>Task 1</li>
                <li>Task 2</li>
                <li>Task 3</li>
                <li class="active">Task</li>
            </ul>
        </div>

        <div class="dropdown"> 
            <div class="select">
                <span class="selected"> Equipment </span>
                <div class="caret"></div>
            </div>
            
            <ul class="menu">
                <li>Equipment 1</li>
                <li>Equipment 2</li>
                <li>Equipment 3</li>
                <li class="active">Equipment</li>
            </ul>
        </div>

        <section class="tractor-table">
                    <table class = "table">
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
                            ?>
                        </tbody>
                    </table>
        </section>
        <?php
            if(isset($_POST['submit-Driver'])){
                $id=$_POST['Driver_ID'];
                $name=$_POST['Driver_Name'];
                $task=$_POST['Task_ID'];

                $sql="select * from drivers where Driver_Name = '$name';";
                $result= mysqli_query($conn,$sql);
            }
        ?>

    </body>

</html>