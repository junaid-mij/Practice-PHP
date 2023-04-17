<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  $id=$_GET['v'];
  $sel="SELECT * FROM iphone_service WHERE serv_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);
?>
  <div class="row">
      <div class="col-md-12 main_content">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Service Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-service.php"><i class="fa fa-th"></i>All Service</a>
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
                                <td>Service Title</td>
                                <td>:</td>
                                <td><?= $data['serv_title']; ?></td>
                            </tr>
                            <tr>
                                <td>Service Subtitle</td>
                                <td>:</td>
                                <td><?= $data['serv_subtitle']; ?></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>:</td>
                                <td>
                                    <?php if($data['serv_image']!=''){ ?>
                                        <img height="100" src="uploads/services/<?= $data['serv_image']; ?>"/>
                                    <?php }else{ ?>
                                        <img height="100" src="images/avatar.png"/>
                                    <?php } ?>
                                </td>
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
