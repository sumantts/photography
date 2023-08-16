<?php 
    include('common/head.php'); 
    $error_messages = '';
    $success_messages = '';
    
    $sql = "SELECT * FROM gallery";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $status = true;	
        $row = $result->fetch_array();
        $gal_id = $row['gal_id'];			
        $album_id = $row['album_id'];		
        $album_name = $row['album_name'];		
        $photo_title = $row['photo_title'];
        $photo_description = $row['photo_description'];	
        $gallery_photo_old = $row['gallery_photo'];	
    } else {
        $gal_id = 0;
        $album_name = '';
        $album_id = '';
        $photo_title = '';
        $photo_description = '';
        $gallery_photo_old = '';
    }

    //Update data    
    if(isset($_POST["submitForm"]))
    {
        $gal_id = $_POST["gal_id"];
        $hom_title = $_POST["hom_title"];
        $hom_description = mysqli_real_escape_string($mysqli, $_POST["hom_description"]);	
        $gallery_photo = $_FILES["gallery_photo"];
        $hom_middle_img = $_FILES["hom_middle_img"];
        $gallery_photo = $_FILES["gallery_photo"];
        $target_dir = "assets/images/gallery/";

        if($gal_id > 0){
            $status = true;
            $sql = "UPDATE home_page SET hom_title = '" .$hom_title. "', hom_description = '" .$hom_description. "' WHERE gal_id = '" .$gal_id. "' ";
            $result = $mysqli->query($sql);
        }else{
            $sql = "INSERT INTO home_page (`hom_title`, `hom_description`) VALUES ('" .$hom_title. "', '" .$hom_description. "')";

            $result = $mysqli->query($sql);
            $gal_id = $mysqli->insert_id;
            if($gal_id > 0){
                $status = true;                
            }else{
                $return_result['error_message'] = 'Photo size is soo large';
                $status = false;
            }		
        }

        if(basename($_FILES["gallery_photo"]["name"]) != ''){
            $target_file = $target_dir . basename($_FILES["gallery_photo"]["name"]);
            $gallery_photo = basename($_FILES["gallery_photo"]["name"]);
            $gallery_photo_old = $_POST["gallery_photo_old"];
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["gallery_photo"]["tmp_name"]);
            if($check !== false) {
                $success_messages .= "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $error_messages .= "File is not an image.";
                $uploadOk = 0;
            }
            
            // Check if file already exists
            /*if (file_exists($target_file)) {
                $error_messages .= " Sorry, file already exists.";
                $uploadOk = 0;
            }*/
            
            // Check file size
            if ($_FILES["gallery_photo"]["size"] > 500000) {
                $error_messages .= " Sorry, your file is too large.";
                $uploadOk = 0;
            }
            //$success_messages .= " The file Size: ".$_FILES["gallery_photo"]["size"]; //The file Size: 124933
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_messages .= " Sorry, only JPG, JPEG, PNG files are allowed.";
                $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $error_messages .= " Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                $unlink_file_path = $target_dir . $gallery_photo_old;
                if (file_exists($unlink_file_path)) {
                    unlink($unlink_file_path);
                }

              if (move_uploaded_file($_FILES["gallery_photo"]["tmp_name"], $target_file)) {
                $success_messages .= " The file ". htmlspecialchars( basename( $_FILES["gallery_photo"]["name"])). " has been uploaded.";
                $sql2 = "UPDATE home_page SET gallery_photo = '" .$gallery_photo. "' WHERE gal_id = '" .$gal_id. "' ";
                $mysqli->query($sql2);

              } else {
                $error_messages .= " Sorry, there was an error uploading your file.";
              }
            }

        }//end 1st image upload if

        //sleep(3);
        header("location:?p=gallery&gr=setup");
    }
?>


<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->	
	<?php include('common/nav.php'); ?>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<?php include('common/top_bar.php'); ?>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?=$title?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"><?=$title?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5> Add/Update Gallery</h5>
                        <div class="card-header-right">                            
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <?php if($success_messages != ''){?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="orgFormAlert">
                            <strong>Success!</strong><?=$success_messages?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
                        <?php } ?>

                        <?php if($error_messages != ''){?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="orgFormAlert1">
							<strong>Error!</strong> <?=$error_messages?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
                        <?php } ?>

                        <form class="needs-validation" name="myForm" id="myForm" action="" method="post" enctype="multipart/form-data">                        
                            <div class="form-row">  
                                <div class="col-md-3 mb-3">
                                    <label for="album_name">New Album Name*</label>
                                    <input type="text" class="form-control" id="album_name" name="album_name" value="<?=$album_name?>"/> 
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Title.
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="album_id">Choose Album Name*</label>
                                    <select class="form-control" id="album_id" name="album_id"> 
                                        <option value="0" <?php if($album_id == '0'){?> selected <?php } ?>>Select</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Title.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="photo_title">Title</label>
                                    <input type="text" class="form-control" id="photo_title" name="photo_title"> 
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Title.
                                    </div>
                                </div>
                            </div>    

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="photo_description">Short Description</label>
                                    <textarea class="form-control" id="photo_description" name="photo_description" ><?=$photo_description?></textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Biography.
                                    </div>
                                </div>   

                                <div class="col-md-4 mb-2 mt-4">
                                    <input type="file" accept="image/*" class="custom-file-input" name="gallery_photo" id="gallery_photo" aria-describedby="gallery_photo" onchange="_savePhoto()">
                                    <input type="hidden" name="gallery_photo_old" id="gallery_photo_old" value="<?=$gallery_photo_old?>">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose Images...</label>
                                    <small id="gallery_photoError" class="form-text text-danger"> </small>

                                    <?php if($gallery_photo_old != ''){?>
                                    <img src="assets/images/home_page/<?=$gallery_photo_old?>" id="image" width="200">  
                                    <?php } ?>                                  
                                </div>   

                                <div class="col-md-4 mb-2 mt-4">  
                                    <input type="hidden" id="gal_id" name="gal_id" value="<?=$gal_id?>">                            
                                    <input type="submit" class="btn  btn-primary" name="submitForm" id="submitForm" />                                 
                                </div>   
                            </div> 
                        </form>
                    </div>
                          
                    <!-- Toast Message -->
                    <div style="position:absolute; top:40px; right: 40px">
                        <div class="toast hide toast-right" role="alert" aria-live="assertive" data-delay="3000" aria-atomic="true">
                            <div class="toast-header">
                                <img src="assets/images/<?=$ico?>" alt="" class="img-fluid m-r-5" style="width:20px;">
                                <strong class="mr-auto"><?=$p_name?></strong>
                                <small class="text-muted">11 mins ago</small>
                                <button type="button" class="m-l-5 mb-1 mt-1 close" data-dismiss="toast" aria-label="Close">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                            Success! Form data saved successfully.
                            </div>
                        </div>
                    </div>                             
                    <!-- Toast Message -->

                </div>
                
                <div class="card">

                    <div class="card-header">
                        <h5> Gallery Table</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
							<strong>Success!</strong> Your Data Deleted successfully.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert1">
							<strong>Success!</strong> Your Data saved successfully.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>

                        
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>                      

                    </div>
                </div>

            </div>

            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
	<?php include('common/footer.php'); ?>
    

    <script type="text/javascript">
    tinymce.init({
        selector: '#hom_description',
        width: 900,
        height: 400,
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css'
    });
    </script>
    
    <script src="setup/gallery/function.js"></script>