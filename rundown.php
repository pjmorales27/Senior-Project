<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fanucchi Farm Rundown</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="design.css">
        <script src="myjava.js"></script>
        <?php 
            $dbservername = "127.0.0.1";
            $dbusername = "root";
            $dbpassword = "Blueheat27";
            $dbname = "Overview";

            $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
        ?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </head>
    <body>

    <div class="container">

        <h1 id="header1" class="">Tri-Fanucchi Farms</h1>
        <h2 id="header1" class="">The Rundown</h2>
        <div id="info1" class="col-sm-6">
            <section class="tractor-table">
                <table class = "table">
                    <thead>
                        <tr>
                            <th scope="col"> ID </th>
                            <th scope="col"> Driver Name </th>
                            <th scope="col"> Task ID </th>
                            <th scope="col"> Tractor </th>
                            <th scope="col"> Equipment </th>
                            <th scope="col"> Field ID </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "select * from Drivers;";
                            $result = mysqli_query($conn, $sql);
                            if($result){
                                while ($row = mysqli_fetch_assoc($result)){
                                    $id = $row['Driver_ID'];
                                    $name = $row['Driver_Name'];
                                    $task = $row['Task_ID'];
                                    $tractor = $row['Tractor_num'];
                                    $equipment = $row['Equipment_num'];
                                    $fieldid = $row['Field_ID'];

                                    echo '<tr>
                                    <th scope= "row">'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$task.'</td>
                                    <td>'.$tractor.'</td>
                                    <td>'.$equipment.'</td>
                                    <td>'.$fieldid.'</td>
                                    <td>
                                        <button class="btn btn-primary"> <a href="update.php? updateid='.$name.'" class="text-light">Update</a> </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger"> <a href="delete.php" class="text-light">Delete</a> </button>
                                    </td>
                                    </tr>';
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </section>
            
        </div>
    

    </body>
</html>