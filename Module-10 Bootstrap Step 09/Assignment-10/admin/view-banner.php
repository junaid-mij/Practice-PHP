<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  $id=$_GET['v'];
  $sel="SELECT * FROM iphone_banner WHERE ban_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);
?>
  <div class="row">
      <div class="col-md-12 main_content">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Banner Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-banner.php"><i class="fa fa-th"></i>All Banner</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                            <tr>
                                <td>Banner Title</td>
                                <td>:</td>
                                <td><?= $data['ban_title']; ?></td>
                            </tr>
                            <tr>
                                <td>Banner Subtitle</td>
                                <td>:</td>
                                <td><?= $data['ban_subtitle']; ?></td>
                            </tr>
                            <tr>
                                <td>Banner Button</td>
                                <td>:</td>
                                <td><?= $data['ban_button']; ?></td>
                            </tr>
                            <tr>
                                <td>Banner URL</td>
                                <td>:</td>
                                <td><?= $data['ban_url']; ?></td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td>:</td>
                                <td>
                                    <?php if($data['ban_image']!=''){ ?>
                                        <img height="100" src="uploads/<?= $data['ban_image']; ?>"/>
                                    <?php }else{ ?>
                                        <img height="100" src="images/avatar.png"/>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Banner Active</td>
                                <td>:</td>
                                <td><?= $data['ban_active']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer text-center">
                .
            </div>
          </div>
      </div>
  </div>
<?php
  get_footer();
?>
