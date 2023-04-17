<?php
    require_once('functions/manage.php');
    get_header();
?>
    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Contact us</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Drop Your Message</h2>
                <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <?php
                    if(!empty($_POST)){
                        $name=htmlentities($_POST['name'],ENT_QUOTES);
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $company=$_POST['company'];
                        $subject=$_POST['subject'];
                        $message=$_POST['message'];
                        //$msg='Name: '.$name.'\n Email: '.$email.'\n Phone:'.$phone.'\n Company:'.$company.'\n Subject'.$subject.'\n Message'.$message;

                        if(!empty($name)){
                            $insert="INSERT INTO iphone_contact(con_name,con_email,con_phone,con_company,con_subject,con_message)
                            VALUES('$name','$email','$phone','$company','$subject','$message')";
                            if(mysqli_query($con,$insert)){
                                //mail("info@domain.com","Website Contact Message",$msg);
                                echo "Successfully Send Your Message...";
                            }else{
                                echo "Message Send Failed...";
                            }
                        }else{
                            echo "Please Enter Your Name..";
                        }
                    }
                ?>
                <form class="contact-form" method="post" action="">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<?php
    get_footer();
?>