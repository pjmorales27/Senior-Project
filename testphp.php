<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo "Hello world <br> \n";
    echo "Date is: " . date('j-m-y, h:i:s');

?>

<?php
    
    if(isset($_POST['btn-atc'])){
        
        //echo 'Hello everybody.. you just clicked on this button';
        global $wpdb;
        $wpdb->insert
        (
            $wpdb->prefix.'products',
                [
                      'title'   => 'This is our first title'
                ]
        );
    }
?>

<form method = 'post'>
        <input type = "submit" name = "btn-atc" value = "Add Cart">
</form>


<form>
    <input type = "text" name= "num1" placeholder = "Numnber 1">
    <input type = "text" name= "num2" placeholder = "Numnber 2">
    <select name = "operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type = "submit" name = "submit" value = "submit">Calculate</button>
</form>

<p>The answer is:</p>

<?php
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
                case "None":
                    echo "You need to select a method";
                break;
                
                case "Add":
                    echo $result1 + $result2;
                break;
                
                case "Subtract":
                    echo $result1 - $result2;
                break;
                
                case "Multiply":
                    echo $result1 * $result2;
                break;
                
                case "Divide":
                    echo $result1 / $result2;
                break;
        }
    }
?>

//<?PHP
//
//echo "<h3> PNG Image </h3>";
//foreach (global("*.png") as $filename){
//
//    echo <img src= '$filename' alt= '$filename' />;
//}
//?>

<h1> How to use an image as a link in HTML </h1>

    <a href = "" target= " blank">
        <img src="image/FanucchiMap.png" width = "80%">
    </a>

<?PHP

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "Rundown";

    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
?>

<?PHP
    $sql = "SELECT * FROM Field_List;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['Field_ID'] . "<br>";
        }
    }
?>

//<?php
//phpinfo();
//?>

</body>
</html>

