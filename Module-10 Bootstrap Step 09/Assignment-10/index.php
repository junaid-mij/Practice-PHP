<?php
    require_once('functions/manage.php');
    get_header();
?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <?php 
                    $selban="SELECT * FROM iphone_banner ORDER BY ban_id DESC LIMIT 0,2";
                    $Qb=mysqli_query($con,$selban);
                    while($banner=mysqli_fetch_assoc($Qb)){
                ?>
                <li data-target="#main-slider" data-slide-to="0" class="<?php if($banner['ban_active']==1){echo 'active';} ?>"></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner">
                <?php 
                    $selban="SELECT * FROM iphone_banner ORDER BY ban_id DESC LIMIT 0,2";
                    $Qb=mysqli_query($con,$selban);
                    while($banner=mysqli_fetch_assoc($Qb)){
                ?>
                <div class="item <?php if($banner['ban_active']==1){echo 'active';} ?>" style="background-image: url(admin/uploads/<?= $banner['ban_image']; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><?= $banner['ban_title']; ?></h1>
                                    <div class="animation animated-item-2">
                                        <?= $banner['ban_subtitle']; ?>
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#"><?= $banner['ban_button']; ?></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->
                <?php } ?>
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            
            <div class="row">
                <div class="features">
                    <?php
                        $selfeat="SELECT * FROM iphone_feature ORDER BY feat_id ASC LIMIT 0,4";
                        $Qf=mysqli_query($con,$selfeat);
                        while($feature=mysqli_fetch_assoc($Qf)){
                    ?>
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="<?= $feature['feat_icon']; ?>"></i>
                            </div>
                            <h2><?= $feature['feat_title']; ?></h2>
                            <p><?= $feature['feat_subtitle']; ?></p>
                        </div>
                    </div>  
                    <?php } ?>
                    
                    
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <?php 
                    $selwork="SELECT * FROM iphone_works ORDER BY work_id ASC LIMIT 0,6";
                    $Qw=mysqli_query($con,$selwork);
                    while($works=mysqli_fetch_assoc($Qw)){
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="admin/uploads/portfolio/<?= $works['work_image']; ?>" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="admin/uploads/portfolio/<?= $works['work_image']; ?>" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!--/.row-->
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="portfolio.php" class="btn btn-primary">Show More</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <?php
                    $selserv="SELECT * FROM iphone_service ORDER BY serv_id ASC LIMIT 0,6";
                    $Qs=mysqli_query($con,$selserv);
                    while($service=mysqli_fetch_assoc($Qs)){
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="admin/uploads/services/<?= $service['serv_image']; ?>">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?= $service['serv_title']; ?></h3>
                            <p><?= $service['serv_subtitle']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <section id="middle" class="skill-area" style="background-image: url(images/skill-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>All users on MySpace will know that there are millions of people out there. Every <br> day besides so many people joining this community.</p>
                    </div>
                </div>
                <!--/.col-sm-6-->

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Graphic Design</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>HTML</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>CSS</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Wordpress</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>
                                            <div class="media-body">
                                                <h2>Adipisicing elit</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active in text-right" id="tab2">
                                        <div class="video-box">
                                            <img src="images/tab-video-bg.png" alt="video">
                                            <a class="video-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                    </div>
                                </div>
                                <!--/.tab-content-->
                            </div>
                            <!--/.media-body-->
                        </div>
                        <!--/.media-->
                    </div>
                    <!--/.tab-wrap-->
                </div>
                <!--/.col-sm-6-->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#content-->

    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="testimonial-slider owl-carousel">
                <?php
                    $seltesti="SELECT * FROM iphone_testimonials ORDER BY testi_id ASC LIMIT 0,6";
                    $Qt=mysqli_query($con,$seltesti);
                    while($testi=mysqli_fetch_assoc($Qt)){
                ?>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="admin/uploads/client/<?= $testi['testi_image']; ?>" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p><?= $testi['testi_subtitle']; ?></p>
                        <h4><?= $testi['testi_title']; ?></h4>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="partners">
                <ul>
                    <?php
                        $selpart="SELECT * FROM iphone_partners ORDER BY part_id ASC LIMIT 0,5";
                        $Qp=mysqli_query($con,$selpart);
                        while($partners=mysqli_fetch_assoc($Qp)){
                    ?>  
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="admin/uploads/partners/<?= $partners['part_image']; ?>"></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->

<?php
    get_footer();
?>
