<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fanucchi Farm Rundown</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="design.css">
        <script src="myjava.js"></script>
        <?php include 'calls.php'; ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <button><a href="web.php?">Home</a></button>
        <div class="container">
            <div class="row">
                <div id="mysvg" class="col1">where svg will go </div>
                <script>
                    $(document).ready(function(){

                    $("#mysvg").load("mymap.svg", function(){
                    $("#mysvg svg").css("max-width","100%", "max-height", "100%", "z-index", "1");

                    $("#themap").click(function(evt){
                        switch(evt.target.id){        
                            case "field200":
                                console.log ("field200 Clicked");
                                $.post("calls.php", { id: "field200" }, function(data) {
                                    $("#info").html("<h1> Field 200 Worker List </h1>");
                                    $("#info").html(data);
                                });
                                break;
                            case "field201":
                                console.log ("field201 Clicked");
                                $.post("calls.php", { id: "field201" }, function(data) {
                                    $("#info").html("<h1> Field 201 Worker List </h1>");
                                    $("#info").html(data);
                                });
                                break;
                            case "field203":
                                console.log ("field203 Clicked");
                                $.post("calls.php", { id: "field203" }, function(data) {
                                    $("#info").html("<h1> Field 203 Worker List </h1>");
                                    $("#info").html(data);
                                });
                                break;
                            default:
                                break;
                                }
                            });
                        })
                    })
                </script>

               
                <div id="info" class="col2"> 
                    <h1>Tri-Fanucchi Farms</h1>
                    <h2> Rundown</h2>
                    <section class="tractor-table">
                        <table class = "table">
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
                                    $sql = "call Daily_Drivers;";
                                    $result = mysqli_query($conn, $sql);
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
                                            <td>
                                                <button class="btn btn-primary"> <a href="newupdate.php?updateDriver='.$name.'"class="text-light">Update</a> </button>
                                            </td>
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
                                    <th scope="col"> Linemen Name </th>
                                    <th scope="col"> Task </th>               
                                    <th scope="col"> Field ID </th>
                                    <th scope="col"> Acres </th>
                                    <th scope="col"> Crop </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Daily_Linemen;";
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
                                            <td>
                                                <button class="btn btn-primary"> <a href="newupdate.php?updateLinemen='.$name.'"class="text-light">Update</a> </button>
                                            </td>
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
                                    <th scope="col"> Irrigator Name </th>
                                    <th scope="col"> Task </th>               
                                    <th scope="col"> Update </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "call Daily_Irrigator;";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $name = $row['Worker_name'];
                                            $task = $row['Task_des'];
                                            //$id = $row['Field_ID'];
                                            //$acres = $row['acres'];            
                                            //$crop = $row['Crop_name'];


                                            echo '<tr>
                                            <th scope= "row">'.$name.'</th>
                                            <td>'.$task.'</td>
                                            
                                            <td>
                                                <button class="btn btn-primary"> <a href="newupdate.php?updateIrrigator='.$name.'"class="text-light">Update</a> </button>
                                            </td>
                                            </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>