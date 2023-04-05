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
        
        <div class="container">
            <div class="row">
                <div id="mysvg" class="col-sm-6">where svg will go </div>
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
                                    $("#info1").html(data);
                                });
                                break;
                            case "field201":
                                console.log ("field201 Clicked");
                                $.post("calls.php", { id: "field201" }, function(data) {
                                    $("#info").html("<h1> Field 201 Worker List </h1>");
                                    $("#info1").html(data);
                                });
                                break;
                            default:
                                break;
                                }
                            });
                        })
                    })
                </script>


                <div id="info" class="col-sm-6">Tri-Fanucchi Farms

                </div>
                <div id="info1" class="col-sm-6"> The Rundown
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

                                    $sql = "call Daily_Drivers;";
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

                                    $sql = "call Daily_Linemen;";
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

                                    $sql = "call Daily_Irrigator;";
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
                </div>
            </div>
        </div>
        
    </body>
</html>