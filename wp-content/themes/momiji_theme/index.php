
<?php get_header() ?>

<div id="main"> 
    <div id="content">
        <div id="main-content">
            <ul class="list-box">
                
                <?php $home_posts = new WP_Query('showposts=1&cat=4&offset=1'); ?>
                <?php while ($home_posts->have_posts()): $home_posts->the_post(); ?>
                
                <li class="box">
                    <div class="bar">

                    </div>
                    <div class="box-main">
                        <div class="above">
                            <h3 class="box-title"><a href="<?php echo get_category_link(4) ?>"><?php echo get_cat_name(4); ?></a></h3>
                            <div class="box-post">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail("medium") ?></a>
                                </div>
                                <div class="box-content">
                                    <a href="<?php the_permalink() ?>"><h4 class="content-title"><?php the_title() ?></h4></a>
                                    <div class="time"><?php the_time('F j, Y') ?></div>
                                    <p><?php echo my_excerpt(26); ?></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="box-meta">
                            <ul>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                            </ul>
                        </div>
                        <a href="#" class="more-footer">Xem thêm</a>
                    </div>
                </li>
                
                <?php endwhile; wp_reset_postdata(); ?>
                
                <?php $home_posts = new WP_Query('showposts=1&cat=4&offset=1'); ?>
                <?php while ($home_posts->have_posts()): $home_posts->the_post(); ?>
                
                <li class="box">
                    <div class="bar">

                    </div>
                    <div class="box-main">
                        <div class="above">
                           <h3 class="box-title"><a href="<?php the_permalink() ?>"><?php echo get_cat_name(4); ?></a></h3>
                            <div class="box-post">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail("medium") ?></a>
                                </div>
                                <div class="box-content">
                                    <a href="<?php the_permalink() ?>"><h4 class="content-title"><?php the_title() ?></h4></a>
                                    <div class="time"><?php the_time('F j, Y') ?></div>
                                    <p><?php echo my_excerpt(26); ?></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="box-meta">
                            <ul>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                            </ul>
                        </div>
                        <a href="#" class="more-footer">Xem thêm</a>
                    </div>
                </li>
                
                <?php endwhile; wp_reset_postdata(); ?>
                <?php $home_posts = new WP_Query('showposts=1&cat=4&offset=1'); ?>
                <?php while ($home_posts->have_posts()): $home_posts->the_post(); ?>
                
                <li class="box">
                    <div class="bar">

                    </div>
                    <div class="box-main">
                        <div class="above">
                            <h3 class="box-title"><a href="<?php the_permalink() ?>"><?php echo get_cat_name(4); ?></a></h3>
                            <div class="box-post">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail("small") ?></a>
                                </div>
                                <div class="box-content">
                                    <a href="<?php the_permalink() ?>"><h4 class="content-title"><?php the_title() ?></h4></a>
                                    <div class="time"><?php the_time('F j, Y') ?></div>
                                    <p><?php echo my_excerpt(26); ?></p>
                                    <!--<div class="read-more"><a href="<?php// the_permalink() ?>">Xem thêm</a></div>-->
                                </div>
                            </div>
                        </div>
                        <div class="box-meta">
                            <ul>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <a href="#" class="more-footer">Xem thêm</a>
                    </div>
                </li>
                
                <?php endwhile; wp_reset_postdata(); ?>
                <?php $home_posts = new WP_Query('showposts=1&cat=4&offset=1'); ?>
                <?php while ($home_posts->have_posts()): $home_posts->the_post(); ?>
                
                <li class="box">
                    <div class="bar">

                    </div>
                    <div class="box-main">
                        <div class="above">
                            <h3 class="box-title"><a href="<?php the_permalink() ?>"><?php echo get_cat_name(4); ?></a></h3>
                            <div class="box-post">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail("medium") ?></a>
                                </div>
                                <div class="box-content">
                                    <a href="<?php the_permalink() ?>"><h4 class="content-title"><?php the_title() ?></h4></a>
                                    <div class="time"><?php the_time('F j, Y') ?></div>
                                    <p><?php echo my_excerpt(26); ?></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="box-meta">
                            <ul>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/dau-cham-19.png" /> <a href="#">Những khó khăn khi duc học tại nhật bản</a></li>
                            </ul>
                        </div>
                        <a href="#" class="more-footer">Xem thêm</a>
                    </div>
                </li>
                
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
        <!-- End list - box main -->

        <?php get_sidebar() ?>
        <!-- End right bar -->
    </div>
    <!-- End content -->

    <div class="clear"></div>
    <div id="banner">
        <a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/banner/banner-34.jpg" /></a>
    </div>
    <!-- End banner -->

    <div id="about-service">
        <div class="first-col">
            <h3 class="about-title">CÁC DỊCH VỤ CỦA CHÚNG TÔI</h3>
            <ul>
                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-trai-37.png" /><a href="#">Tư vấn du học</a></li>
                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-trai-38.png" /><a href="#">Đào tạo tiếng Nhật</a></li>
                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-trai-39.png" /><a href="#">Tư vấn việc làm</a></li>
                <li><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-trai-40.png" /><a href="#">Tổ chức hội thảo du học</a></li>
            </ul>
        </div>

        <div class="second-col">
            <div class="bg-col">
                <h3 class="about-title">CÁC DỊCH VỤ CỦA CHÚNG TÔI</h3>
                <ul>
                    <li class="ft-box">
                        <div class="ft-icon"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-phai-41.png" /></div>
                        <div class="ft-content">
                            <h3>UY TÍN</h3>
                            <p>Khó khăn lớn nhất phải kể đến đới với du họ Nhật Bản, một nơi đắt đỏ nhất thế giưới là chi phí cao ...</p>
                        </div>
                    </li >
                    <li class="ft-box">
                        <div class="ft-icon"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-phai-43.png" /></div>
                        <div class="ft-content">
                            <h3>TIẾT KIỆM</h3>
                            <p>Khó khăn lớn nhất phải kể đến đới với du họ Nhật Bản, một nơi đắt đỏ nhất thế giưới là chi phí cao ...</p>
                        </div>
                    </li>
                    <li class="ft-box">
                        <div class="ft-icon"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-phai-42.png" /></div>
                        <div class="ft-content">
                            <h3 class="ft-title">TẬN TÌNH</h3>
                            <p>Khó khăn lớn nhất phải kể đến đới với du họ Nhật Bản, một nơi đắt đỏ nhất thế giưới là chi phí cao ...</p>
                        </div>
                    </li>
                    <li class="ft-box">
                        <div class="ft-icon"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/under-banner/icon-ben-phai-44.png" /></div>
                        <div class="ft-content">
                            <h3>CAM KẾT</h3>
                            <p>Khó khăn lớn nhất phải kể đến đới với du họ Nhật Bản, một nơi đắt đỏ nhất thế giưới là chi phí cao ...</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End About -->
</div>
<!-- End main -->

<?php get_footer() ?>