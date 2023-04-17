<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  $id=$_GET['e'];
  $sel="SELECT * FROM iphone_partners WHERE part_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);

  if(!empty($_POST)){
    $title=$_POST['title'];
    $image=$_FILES['image'];
    $imageName='';

    if($image['name']!=''){
      $imageName='banner-'.time().'-'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    }
      if(!empty($title)){
        $update="UPDATE iphone_partners SET part_title='$title' WHERE part_id='$id' ";
        
        if(mysqli_query($con,$update)){
          if($image['name']!=''){
            $imgUpdate="UPDATE iphone_partners SET part_image='$imageName' WHERE part_id='$id'";
            mysqli_query($con,$imgUpdate);
            move_uploaded_file($image['tmp_name'],'uploads/partners/'.$imageName);
            header('Location:view-partners.php?v='.$id);
          }else{
            header('Location:view-partners.php?v='.$id);
          }
        }else{
          echo "Partners Update failed!";
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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update Partners Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-partners.php"><i class="fa fa-th"></i>All Partners</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Partners Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title" value="<?= $data['part_title']; ?>">
                      </div>
                    </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">Partners Image:</label>
                   <div class="col-sm-4">
                     <input type="file" id="" name="image">
                   </div>
                   <div class="col-md-2">
                    <?php if($data['part_image']!=''){ ?>
                      <img height="80" src="uploads/partners/<?= $data['part_image']; ?>"/>
                    <?php }else{ ?>
                      <img height="80" src="images/avatar.png"/>
                    <?php } ?>
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
