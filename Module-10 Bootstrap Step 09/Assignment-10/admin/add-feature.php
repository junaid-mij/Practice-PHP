<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  if(!empty($_POST)){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $icon=$_POST['icon'];
      
      if(!empty($title)){
        $insert="INSERT INTO iphone_feature(feat_title,feat_subtitle,feat_icon)
        VALUES('$title','$subtitle','$icon')";

        if(mysqli_query($con,$insert)){
          echo "Successfully Upload Feature Information.";
        }else{
          echo "Feature Upload Failed!";
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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Add Feature Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-feature.php"><i class="fa fa-th"></i>All Feature</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Feature Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title">
                      </div>
                   </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Feature Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Feature ICON:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="icon">
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
