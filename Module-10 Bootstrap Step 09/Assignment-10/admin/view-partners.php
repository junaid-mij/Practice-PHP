<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  $id=$_GET['v'];
  $sel="SELECT * FROM iphone_partners WHERE part_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);
?>
  <div class="row">
      <div class="col-md-12 main_content">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Partners Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-partners.php"><i class="fa fa-th"></i>All Partners</a>
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
                                <td>Partners Title</td>
                                <td>:</td>
                                <td><?= $data['part_title']; ?></td>
                            </tr>
                            <tr>
                                <td>Partners Photo</td>
                                <td>:</td>
                                <td>
                                    <?php if($data['part_image']!=''){ ?>
                                        <img height="100" src="uploads/partners/<?= $data['part_image']; ?>"/>
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
