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
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All Contact Message</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="#"><i class="fa fa-th"></i>Link</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Company</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Message</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sel="SELECT * FROM iphone_contact ORDER BY con_id DESC";
                      $Q=mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($Q)){
                    ?>
                    <tr>
                      <td><?= $data['con_name']; ?></td>
                      <td><?= $data['con_email']; ?></td>
                      <td><?= $data['con_phone']; ?></td>
                      <td><?= $data['con_company']; ?></td>
                      <td><?= substr($data['con_subject'],0,20); ?>...</td>
                      <td><?= substr($data['con_message'],0,20); ?>...</td>

                      <td>
                          <a href="view-message.php?v=<?= $data['con_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                          <a href="delete-message.php?d=<?= $data['con_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
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
