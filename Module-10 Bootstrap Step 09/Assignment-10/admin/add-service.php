<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  if(!empty($_POST)){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $image=$_FILES['image'];
    $imageName='';
    if($image['name']!=''){
      $imageName='banner-'.time().'-'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    }
      if(!empty($title)){
        $insert="INSERT INTO iphone_service(serv_title,serv_subtitle,serv_image)
        VALUES('$title','$subtitle','$imageName')";

        if(mysqli_query($con,$insert)){
          move_uploaded_file($image['tmp_name'],'uploads/services/'.$imageName);
          echo "Successfully Upload Services Information.";
        }else{
          echo "Services Upload Failed!";
        }
    }else{
      echo "Please enter your title!";
    }
  }
?>
  <div class="row">
      <div class="col-md-12 main_content">
          <form method="post" action="" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Add Service Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-service.php"><i class="fa fa-th"></i>All Service</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Service Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title">
                      </div>
                   </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Service Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Service Image:</label>
                      <div class="col-sm-7">
                        <input type="file" id="" name="image">
                      </div>
                   </div>
              </div>
              <div class="card-footer text-center">
                  <button type="submit" class="btn btn-sm btn-dark submit_btn">Upload</button>
              </div>
            </div>
        </form>
      </div>
  </div>
<?php
  get_footer();
?>
