<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  $id=$_GET['e'];
  $sel="SELECT * FROM iphone_feature WHERE feat_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);

  if(!empty($_POST)){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $icon=$_POST['icon'];
    
      if(!empty($title)){
        $update="UPDATE iphone_feature SET feat_title='$title', feat_subtitle='$subtitle', feat_icon='$icon' WHERE feat_id='$id' ";
      
        if(mysqli_query($con,$update)){
            header('Location:view-feature.php?v='.$id);
        }else{
          echo "Feature Update failed!";
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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update Feature Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-feature.php"><i class="fa fa-th"></i>All Featuer</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Feature Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title" value="<?= $data['feat_title']; ?>">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Feature Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle" value="<?= $data['feat_subtitle']; ?>">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Feature ICON:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="icon" value="<?= $data['feat_icon']; ?>">
                      </div>
                    </div>
              
              <div class="card-footer text-center">
                  <button type="submit" class="btn btn-sm btn-dark submit_btn">UPDATE</button>
              </div>
            </div>
        </form>
      </div>
  </div>
<?php
  get_footer();
?>
