<?php
include('../dbconfig.php');

$targetDir = "images/maps/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into maps (fileName) VALUE ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}


if(empty($_POST['mapName'])) {
    $nameErr = "Map Details Are Required";
}
else {
    $mapName = mysqli_real_escape_string($conn,$_REQUEST['mapName']);
    $mapSize = mysqli_real_escape_string($conn,$_REQUEST['mapSize']);
    $sql = "INSERT INTO maps (Name,Size) VALUES ('$mapName',$mapSize)";
    if(mysqli_query($conn, $sql)){
    echo "Record Added";
    header("location: ../index.php");
    } else {
    echo "Error: Could not execute $sql. " . mysqli_error($conn);
    }
}

// Display status message
echo $statusMsg;
?>
<html>
<title>FAF Tournament Match Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/pages/1v1.php" class="w3-bar-item w3-button w3-mobile">1v1 Match Data</a>
    <a href="/pages/AddData.php" class="w3-bar-item w3-button w3-mobile">Add Data</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>-->
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;" >Login</a>
</nav>
<main class="w3-container">
    <h1 class="player-h1">Adding Map</h1>
    <p class="player-p">Please Add the Name of the Map you need to add to the data base </p>

    <form class="w3-container" action="/data/maps.php" method="post">
        <label>Map Name</label> 
        <input type="text" name="mapName" id="mapName"><br><br>
        <label>Map Size</label> 
        <input type="number" name="mapSize" id="mapSize"><br><br>
        <label>Upload Map Image</label> 
        <input type="file" name="file" id="mapImg"><br><br>
        <input class="w3-button w3-green" type="submit" value="Submit">

    </form> 
</main>
</html>