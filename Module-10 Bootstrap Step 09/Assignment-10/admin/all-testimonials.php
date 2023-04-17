<?php
  require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']=='1'){
  get_header();
  get_sidebar();
?>
  <div class="row">
      <div class="col-md-12 main_content">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All Testimonials Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="add-testimonials.php"><i class="fa fa-th"></i>Add Testimonials</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Testimonials Title</th>
                      <th scope="col">Testimonials SubTitle</th>
                      <th scope="col">Testimonials Image</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sel="SELECT * FROM iphone_testimonials ORDER BY testi_id DESC";
                      $Q=mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($Q)){
                    ?>
                    <tr>
                      <td><?= $data['testi_title']; ?></td>
                      <td><?= $data['testi_subtitle']; ?></td>
                      <td>
                        <?php if($data['testi_image']!=''){ ?>
                          <img height="50" src="uploads/client/<?= $data['testi_image']; ?>"/>
                        <?php }else{ ?>
                          <img height="50" src="images/avatar.png"/>
                        <?php } ?>
                      </td>
                      <td>
                          <a href="view-testimonials.php?v=<?= $data['testi_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                          <a href="edit-testimonials.php?e=<?= $data['testi_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                          <a href="delete-testimonials.php?d=<?= $data['testi_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
            <div class="card-footer text-center">
                .
            </div>
          </div>
      </div>
  </div>
<?php
  get_footer();

  }else{
    header('Location:index.php');
  }
?>
