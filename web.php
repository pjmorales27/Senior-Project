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

                                    $sql = "select * from Tractor_Drivers;";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Driver_ID'];
                                            $name = $row['Worker_name'];
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
                                            </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                    
                    <section class="linemen-table">
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

                                    $sql = "select * from Linemen;";
                                    $result = mysqli_query($conn, $sql);
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
                    </section>

                    <section class="irrigator-table">
                        <table class = "table">
                            <thead>
                                <tr>
                                    <th scope="col"> ID </th>
                                    <th scope="col"> Irrigator Name </th>
                                    <th scope="col"> Task ID </th>
                                    <th scope="col"> Field ID </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "select * from Irrigator;";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['Irrigator_ID'];
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
                    </section>
                </div>
            </div>
        </div>
        
    </body>
</html>