
<?php

session_start();
$name = $_SESSION['name'] ?? null;
$class = $_SESSION['details'] ?? null;

// Clear the session variable
unset($_SESSION['name']);
unset($_SESSION['details']);


if(isset($_SESSION['imageURL'])){
  // Retrieve the image URL from the session variable
  $imageURL = $_SESSION['imageURL'];
  unset($_SESSION['imageURL']); // Clear the session variable
}
else{
  // If the session variable is not set, handle the case accordingly
  $imageURL = 'default.png';
}

if(isset($_SESSION['image'])) {
    $uploadedImage = $_SESSION['image'];
  
    // echo "<h2>User Uploaded Image</h2>";
    // echo "<img src=\"$uploadedImage\" alt=\"User Uploaded Image\">";

    
} else {
    echo "No image uploaded.";
}

if($imageURL === 'eid2023.png'){
  $bgW = '699px';
  $bgH = '800px';
  $Heid = 'position: absolute;
  height: auto;
  width: 220px;
  margin-left: 76px;
  margin-top: 225px;
  z-index: -4;';

  $txtSt= 'position: absolute;
  font-size: 13pt;
  text-align: center;
  font-weight: 700;
  margin-top: -37px;
  margin-left: 75px;
  width: 223px;
  font-family: barlow;';
}


?>
<?php
// if(isset($_POST['submit'])){
//   $name = $_POST['name'];
//     $class = $_POST['details']; 
// }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Destination Page</title>
    <style>
body
{
    font-family: arial;
}
#html-content-holder
{
	height: <?php echo $bgH; ?>;
	width: <?php echo $bgW; ?>;
	
}
.bg
{
	position: absolute;
	height: <?php echo $bgH; ?>;
	width: <?php echo $bgW; ?>;
	//z-index: -2;
}
.user
{
  
	<?php echo $Heid  ?>
}
.devider
{
	height: 516px;
}
.name
{

   <?php echo $txtSt ?>
}
.desig
{
    vertical-align: middle;
    position: relative;
    color:white;
    
}
#btn-Convert-Html2Image
{
	display: none;
	color: white;
    font-weight: 600;
    font-size: 12pt;
    padding: 15px;
    background: #24c184;
    border: none;
    border-radius: 10px;
    text-decoration: none;
}
#btn-Preview-Image
{
    color: white;
    font-weight: 600;
    font-size: 12pt;
    padding: 15px;
    background: #0099e5;
    border: none;
    border-radius: 10px;
    text-decoration: none;
}


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
</head>
<body>
<!-- <div> -->
<div id="html-content-holder">
		<img class="user" src="<?php echo $uploadedImage; ?>" alt="user">
		<img class="bg" src="<?php echo $imageURL; ?>" alt="user">
		<div class="devider"></div>
    <div class='name'><a style="font-size: 13pt;"><?php echo $name; ?></a></div>
	
    <!-- <center><a class="desig" style="font-size: 11pt;"></a></center>-->
  
	</div>
<br><br>



    <a id="btn-Preview-Image" href="#">Generate Download Link</a>
    <a id="btn-Convert-Html2Image" href="#">Download</a>


    <script>
$(document).ready(function(){	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                getCanvas = canvas;
             }
         });
    });
	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "<?php echo $name;?>").attr("href", newData);
	});

});

</script>
<script>
$(document).ready(function(){
  $("#btn-Preview-Image").click(function(){
    $("#btn-Preview-Image").hide(500);
  });
  $("#btn-Preview-Image").click(function(){
    $("#btn-Convert-Html2Image").show(500);
  });
});
</script>
</body>
</html>
<?php
      // if (isset($_POST['submit'])) {
      //   $name = $_POST['name'];
      //   $details = $_POST['details'];
      //   $image = $_POST['image'];

      //   echo '<img src="' . $image . '" alt="Uploaded Image">';
      //   echo '<h3>Name: ' . $name . '</h3>';
      //   echo '<h3>Class: ' . $details . '</h3>';
      // }
      ?>