<div id="right-bar">
            <h3 class="bar-title">Tìm kiếm ra trường</h3>
            
            <?php 
            $taxonomies = get_terms('university', array('parent'=>0));
            ?>
            
            
            <div class="advance-serch">
                <form class="search-form" method="get" action="<?php echo home_url() ?>/?page_id=47">
                    <label>Thành phố</label>
                    <div class="form-select">
                        <select class="select" name="city" id="city">
                            <?php
                            if($taxonomies){
                                foreach ($taxonomies as $term){ ?>
                                    <option value="<?php echo $term->term_id ?>"><?php echo $term->name ?></option>
                                <?php }
                            }
                            ?>
                        </select>
                        <div class="dropdown"><img src="<?php echo get_template_directory_uri() ?>/asset/source/body/mui-ten-xuong-cot-ben-phai-truoc-27.png" /></div>
                    </div>
                    
                    <?php $univers = get_terms('university', array('parent'=>24)); ?>
                    
                    <label>Tên trường</label>
                    <div class="form-select">
                        <select class="select" name="university" id="university">
                            <?php foreach ($univers as $term){ ?>
                            <option value="<?php echo $term->term_id ?>"><?php echo $term->name ?></option>
                            <?php } ?>
                        </select>
                        <div class="dropdown"><img src="<?php echo get_template_directory_uri() ?>/asset/source/body/mui-ten-xuong-cot-ben-phai-truoc-27.png" /></div>
                    </div>
       
                    <label>Ngành</label>
                    <div class="form-select">
                        <input type="text" name="s" value="" placeholder="Ngành" />
                    </div>
                    <input type="submit" value="Tìm kiếm" />
                    <div class="clear"></div>
                </form>
                <script>
                    jQuery(document).ready(function(){
                       jQuery(".dropdown").bind("click", function(){
                           var select = jQuery(this).parent(".form-select").find(".select option");
                           jQuery("#logo").click();
                       }) ;
                    });
                </script>
            </div>

            <div class="more-news">
                <ul>
                    <li><a href=""><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/icon-cot-ben-phai-29.png" /></a><a href="<?php echo home_url() ?>/?p=71" class="text">Xếp hạng các trường Đại học</a></li>
                    <li><a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/icon-cot-ben-phai-30.png" /></a><a href="<?php echo home_url() ?>/?p=73" class="text">Đánh giá của du học sinh</a></li>
                    <li><a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/icon-cot-ben-phai-31.png" /></a><a href="<?php echo home_url() ?>/?p=75" class="text">Chỉ tiêu đầu vào các trường</a></li>
                    <li><a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/asset/source/body/icon-cot-ben-phai-32.png" /></a><a href="<?php echo home_url() ?>/?p=77" class="text">Mức học phí các trường</a></li>
                </ul>
            </div>
        </div>