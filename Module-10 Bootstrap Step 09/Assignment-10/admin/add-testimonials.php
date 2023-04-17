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
      $imageName='client-'.time().'-'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    }
      if(!empty($title)){
        $insert="INSERT INTO iphone_testimonials(testi_title,testi_subtitle,testi_image)
        VALUES('$title','$subtitle','$imageName')";

        if(mysqli_query($con,$insert)){
          move_uploaded_file($image['tmp_name'],'uploads/client/'.$imageName);
          echo "Successfully Upload Testimonials Information.";
        }else{
          echo "Testimonials Upload Failed!";
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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Add Testimonials Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-testimonials.php"><i class="fa fa-th"></i>All Testimonials</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Testimonials Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title">
                      </div>
                   </div>
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Testimonials SubTitle:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="subtitle">
                      </div>
                   </div>
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Testimonials Image:</label>
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
