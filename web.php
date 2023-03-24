<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fanucchi Farm Rundown</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="design.css">
        <script src="myjava.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
</script>

    </head>
    <body onload= "createTable()">
        <div id="mykey"> </div>
        <div class="container">
            <div class="row">
                <div id="mysvg" class="col-sm-6">where svg will go </div>
                <div id="info" class="col-sm-6">Info for the field</div>
                <div id="info1" class="col-sm-6"> other section </div>
            </div>
        </div>
        
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
    </body>
</html>