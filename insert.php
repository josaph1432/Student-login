<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert page</title>
</head>
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "","josaph");
        if($conn === false) {
            die("ERROR: could not connect.". mysqli_connect_error());
        }
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];

        $sql = "INSERT INTO Student VALUES ('$id','$name')";
        if(mysqli_query($conn, $sql)){
            echo "<h1> data stored in database successfully</h1>";
                }else {
                    echo "ERROR: Hush! Sorry $sql." . mysqli_error($conn);

                }
                mysqli_close($conn);
                ?>
                    </center>
</body>
</html>