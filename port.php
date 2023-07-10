<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
		<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
		<script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
		
		<style>

		.image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		#main
{
	background: linear-gradient(90deg, #d9e7ff 0%,#e3ffe7  100%);
}
.image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}


		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
input
{
    background: #ffff;
    padding: 10px;
    border-radius: 7px;
    border: none;
    margin: 5px 0px 5px 0px;
    width: 100%;
    
}
.panels
{
    background:#3498db;
    padding: 30px;
    border-radius:20px;
}
.panels h4
{
    color: white;
}
 .loader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 800px;
                height: 800px;
                z-index: 9999;
                background: url('https://flevix.com/wp-content/uploads/2019/07/Facebook-Loading-Icons-1.gif') 50% 50% no-repeat rgb(249,249,249);
                display:none;
            }
            .campaign_image img
            {
                height: 350px;
                width: auto;
            }
            .img-container
            {
                
  			overflow: hidden;
            }
		</style>
	</head>
	<body>
		<?php include 'navbar.php' ?>
		<?php
// Extract the ID from the URL
$id = $_GET['id'] ?? null;

// Determine the image source based on the ID
$imageSrc = '';
if ($id === '1') {
    $imageSrc = 'eid2023.png';
} elseif ($id === '2') {
    $imageSrc = '2.png';
} elseif ($id === '3') {
    $imageSrc = '3.jpg';
} else {
    $imageSrc = 'default.jpg';
}
?>

  <main id="main">

    <!-- ======= Breadcrumbs Section =======
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <hr>
          <br/>
      <div data-aos="fade-up">
          <center><h2>Eid 2023</h2></center>
        </div>
      <br />
      <br />
			<div class="panel panel-default">
			    <div class="row">
			        
			        <div class="col-md-6"> 
			        <div class="campaign_image">
			            <img src="<?php echo $imageSrc; ?>">
			        </div>
			        </div>
			        <div class="col-md-6"> 
			        <div class="row">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					<div class="image_area">
						<form method="post" enctype="multipart/form-data">
							<label for="upload_image">
								<img src="https://getstamped.co.uk/wp-content/uploads/WebsiteAssets/Placeholder.jpg" id="uploaded_image" class="img-responsive img-circle" />
								<input type="file" name="image" class="image" id="upload_image" style="display:none" required/>
								<input type="hidden" name="photo" class="image" id="add" />
								<input type="text" name="name" placeholder="Name" required>
								<!-- <input type="text" name="details" placeholder="Class" required> -->
							</label><br>
							<input type="submit" name="submit" class="btn btn-primary" value="Upload">
						</form>
					</div>
			    </div>

				<br><br>
    		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabel">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			        		<button type="button" class="btn btn-primary" id="crop">Crop</button>
			      		</div>
			    	</div>
			  	</div>
			</div>			
		</div>

		</section>
	

<div id="preloader"></div>

  
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include 'footer.php' ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php 
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Get the value from the form input
    $name = $_POST['name'];
	$class = $_POST['details']; 

    // Store the value in a session variable
    $_SESSION['name'] = $name;
	$_SESSION['details'] = $class;

    // Redirect to another page to display the result
	
    
}
  
		if(isset($_POST['submit'])){
			// Store the image URL in a session variable
			$_SESSION['imageURL'] = $imageSrc;
			echo " <script> window.location.href='image.php';</script>";
			
			
		}
		
		?>
	</body>
</html>

<script>

$(document).ready(function(){

	
	
	var $modal = $('#modal');
	var image = document.getElementById('sample_image');
	var cropper;

	//$("body").on("change", ".image", function(e){
	$('#upload_image').change(function(event){
    	var files = event.target.files;
    	var done = function (url) {
      		image.src = url;
      		$modal.modal('show');
    	};
    	//var reader;
    	//var file;
    	//var url;

    	if (files && files.length > 0)
    	{
      		/*file = files[0];
      		if(URL)
      		{
        		done(URL.createObjectURL(file));
      		}
      		else if(FileReader)
      		{*/
        		reader = new FileReader();
		        reader.onload = function (event) {
		          	done(reader.result);
		        };
        		reader.readAsDataURL(files[0]);
      		//}
    	}
	});

	$modal.on('shown.bs.modal', function() {
    	cropper = new Cropper(image, {
    		aspectRatio: 3/4,
    		viewMode: 3,
    		preview: '.preview'
    	});
	}).on('hidden.bs.modal', function() {
   		cropper.destroy();
   		cropper = null;
	});

	$("#crop").click(function(){
    	canvas = cropper.getCroppedCanvas({
      		width: 400,
      		height: 400,
    	});

    	canvas.toBlob(function(blob) {
        	//url = URL.createObjectURL(blob);
        	var reader = new FileReader();
         	reader.readAsDataURL(blob); 
         	reader.onloadend = function() {
            	var base64data = reader.result;  
            
            	$.ajax({
            		url: "upload.php",
                	method: "POST",                	
                	data: {image: base64data},
                	success: function(data){
                    	console.log(data);
                    	$modal.modal('hide');
                    	$('#uploaded_image').attr('src', data);
                    	//alert("success upload image");
                	}
              	});
         	}
    	});
    });
	
});
</script>

<!--Php cropper js example, Php crop image before upload, crop image using cropper.js Php, Php crop image before upload cropper.js, cropper js Php example, Php image upload cropper, how to use image cropper in Php!-->