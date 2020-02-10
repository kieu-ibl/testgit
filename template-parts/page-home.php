<div class="container">
    <div class="wrap-plu">
        <section id="user-cent" data-aos="fade-in">
            <div class="wrap-user">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h1 class="tit-sec">A USER-CENTRIC ENTERPRISE WALLET</h1>
                        <img class="hero-mb" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hero_mb.png' ?>" alt="">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>Empower the secured-advantage for enterprises to change the way cryptocurrency is accessed, stored and transferred, <strong>which can be operated without the knowledge of blockchain technology.</strong></p>
                    </div>
                </div>
                <img class="hero" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hero.png' ?>" alt="">
                <div class="btn-hero">
                    <a class="btn-video" data-toggle="modal" data-target="#co_modal">Watch video <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/video.svg' ?>" alt=""></a>
                    <a class="btn-try">Try PLUTX <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/try.svg' ?>" alt=""></a>
                </div>
            </div>
        </section>
        <section id="obstacle" data-aos="fade-up">
            <img class="obs-mb" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/bg_obsmb.png' ?>" alt="">
            <div class="wrap-tit">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Fence.png' ?>" alt="">
                <h1 class="tit-sec">THE OBSTACLES OF CURRENT CRYPTO ASSET MANAGEMENT</h1>
            </div>
            <div class="cont-obs">
                  <ul class="list-obs">
                  <?php $arg = array( 'post_type' => 'obstacles',
                                    'post_per_page' => '-1',
                                    'order' => 'asc'
                    );
                    $loop = new WP_Query($arg);
                    while($loop->have_posts()): $loop->the_post();
                    
                    ?>
                    <li data-aos="fade-up"><?php echo get_the_post_thumbnail() ?><p><?php echo get_the_title(); ?></p></li>
                <?php endwhile; ?>
                </ul>
            </div>
        </section>
        <section id="level" data-aos="fade-up">
            <div class="tit-level">
                <h1 class="tit-sec">PLUTX BRINGS YOUR CRYPTO ASSET MANAGEMENT TO THE NEXT LEVEL</h1>
            </div>
            <div class="tit-levmb"><h5>ONLINE BANKING FEATURES AND BEYOND.</h5></div>
            <div class="feature" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-2 col-sm-0 col-xs-0"><img class="link1" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector1.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"> <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector2.png' ?>" alt=""> <span>Custom Request Approval workflow</span></div><img class="link-ite" class="link-ite" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/link-ite.png' ?>" alt=""></div>
                    
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector3.png' ?>" alt=""> <span>Schedule payment </span></div><img class="link-ite" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/link-ite.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector4.png' ?>" alt=""> <span>User-centric designs </span></div><img class="link-ite" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/link-ite.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector5.png' ?>" alt=""> <span>Simplify cryptos transfer by Plutx ID</span></div></div>
                    <div class="col-md-2 col-sm-0 col-xs-0"><img class="link2" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector7.png' ?>" alt=""></div>
                </div>
                <div class="row cen-fea">
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector6.png' ?>" alt=""> <span>Spending limits</span></div></div>
                    <div class="col-md-8 col-sm-0 col-xs-0 tit-fea"><h3>ONLINE BANKING FEATURES AND BEYOND</h3></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector8.png' ?>" alt=""> <span>Self-manage your crypto asset</span></div></div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-0 col-xs-0"><img class="link3" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector9.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector10.png' ?>" alt=""><span>Multi-fiat<br/> currencies</span></div><img class="link-ite" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/link-ite.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector11.png' ?>" alt=""><span>Multi-crypto currencies</span></div><img class="link-ite" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/link-ite.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector12.png' ?>" alt=""><span>Financial report</span></div><img class="link-ite" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/link-ite.png' ?>" alt=""></div>
                    <div class="col-md-2 col-sm-6 col-xs-6"><div class="cont-fea"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector13.png' ?>" alt=""><span>Bulk payment</span></div>
                    <div class="col-md-2 col-sm-0 col-xs-0"><img class="link4" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vector14.png' ?>" alt=""></div>
                </div>
            </div>
            
        </section>
        <section id="physical" data-aos="fade-up">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12 left-phys">
                    <h1 class="tit-sec">ALWAYS OFFLINE PHYSICAL DEVICE FOR SECURITY ENHANCEMENT</h1>
                    <h5 class="sub-tit" data-aos="fade-up">Robust security to reshape the storage digital assets and point-to-point transactions</h5>
                    <p data-aos="fade-up">Your enterprise wallet accounts are just accessed by your whitelisted operators and protected by Customization Rules and Cyber Security Levels</p>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 right-phys">
                    <ul class="lis-phys row">
                    <?php $arg = array( 'post_type' => 'physical',
                                    'post_per_page' => '-1',
                                    'order' => 'asc'
                    );
                    $loop = new WP_Query($arg);
                    while($loop->have_posts()): $loop->the_post();
                    
                    ?>
                    <li class="col-md-4 col-sm-4 col-xs-6" data-aos="fade-up"><div class="circle-phys"><?php echo get_the_title(); ?></div> </li>
                <?php endwhile; ?>
                    </ul>
                </div>
            </div>       
        </section>
        <section id="help" data-aos="fade-up">
            <h1 class="tit-sec">PLUTX HELPS YOU GROW YOUR BUSINESS</h1>
            <h5 class="sub-tit">You are not alone, we are in this together</h5>
            <ul class="lis-help row">
            <?php $arg = array( 'post_type' => 'help',
                            'post_per_page' => '-1',
                            'order' => 'asc'
            );
            $loop = new WP_Query($arg);
            while($loop->have_posts()): $loop->the_post();
            
            ?>
                <li class="col-md-6 col-sm-6 col-xs-12" data-aos="fade-up">  
                <?php echo get_the_post_thumbnail(); ?>
                <div class="cont-help">
                    <h4><?php echo get_the_title(); ?></h4>
                    <p><?php echo get_the_content(); ?></p>
                </div>
            </li>
            <?php endwhile; ?>
            </ul>
            <div class="note-help" data-aos="fade-up">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/phone-call.png' ?>" alt="">
                <h1 class="tit-not">NEED HELPS?</h1>
                <div class="cont-not">
                    <h5>Get a first-class consultation</h5>
                    <a class="btn-contact" href="#request">Contact us</a>
                </div>
            </div>
        </section>
        <section id="about" data-aos="fade-up">
            <div class="wrap-about">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h1 class="tit-sec">WHAT THE EXPERTS SAY ABOUT US</h1>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="right-about">
                            <div id="about-car" class="owl-carousel owl-theme">
                                    <?php $arg = array( 'post_type' => 'about',
                            'post_per_page' => '-1',
                            'order' => 'asc'
                            );
                            $loop = new WP_Query($arg);
                            while($loop->have_posts()): $loop->the_post();
                            
                            ?>  
                            <div class="item">
                                <div class="cont-about">
                                    <div class="img-car"><?php echo get_the_post_thumbnail(); ?></div>
                                    <div class="ite-about">
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <span><?php echo get_field('position'); ?></span>
                                        <div class="box-com">
                                            <img class="com-above" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/d1.png' ?>" alt="">
                                           <div class="text-com"><?php echo get_the_content(); ?></div> 
                                            <img class="com-under" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/d2.png' ?>" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <?php endwhile; ?>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" data-aos="fade-up">
            <div class="tit-team">
                <h1 class="tit-sec">MEET THE TEAM</h1>
                <h5 class="sub-tit">Experts with more than 20 years of combined experience.</h5>
            </div>
            <div class="cont-team">
            <ul class="lis-team row">
            <?php $arg = array( 'post_type' => 'team',
                            'post_per_page' => '-1',
                            'order' => 'asc'
            );
            $loop = new WP_Query($arg);
            while($loop->have_posts()): $loop->the_post();
            
            ?>
                <li class="col-md-4 col-sm-4 col-xs-6" data-aos="fade-up">  
                    <div class="ite-team">
                        <?php echo get_the_post_thumbnail(); ?>
                        <div class="cont-team">
                            <h4><?php echo get_the_title(); ?></h4>
                            <p><?php echo get_field('position'); ?></p>
                        </div>
                    </div>
            </li>
            <?php endwhile; ?>
            </ul>
            </div>
        </section>
        <section id="request" data-aos="fade-up">
            <div class="request">
                <div class="tit-req" data-aos="fade-up">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/mess.png' ?>" alt="">
                    <h1 class="tit-sec">REQUEST A CALL BACK</h1>      
                </div>
                <h5 class="sub-tit" data-aos="fade-up">We will get back to you within 24 hours after the request is submitted.</h5>
                <div data-aos="fade-up"><?php echo do_shortcode('[contact-form-7 id="13035" title="Contact-Plutx"]'); ?></div>
            </div>
            
        </section>
    </div>
    
</div>