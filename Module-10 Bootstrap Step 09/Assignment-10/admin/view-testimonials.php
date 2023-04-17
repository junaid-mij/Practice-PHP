<?php
  require_once('functions/function.php');
  needLogged();
  get_header();
  get_sidebar();
  $id=$_GET['v'];
  $sel="SELECT * FROM iphone_testimonials WHERE testi_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);
?>
  <div class="row">
      <div class="col-md-12 main_content">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Testimonials Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-testimonials.php"><i class="fa fa-th"></i>All Testimonials</a>
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
                                <td>Testimonials Title</td>
                                <td>:</td>
                                <td><?= $data['testi_title']; ?></td>
                            </tr>
                            <tr>
                                <td>Testimonials SubTitle</td>
                                <td>:</td>
                                <td><?= $data['testi_subtitle']; ?></td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td>:</td>
                                <td>
                                    <?php if($data['testi_image']!=''){ ?>
                                        <img height="100" src="uploads/client/<?= $data['testi_image']; ?>"/>
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
