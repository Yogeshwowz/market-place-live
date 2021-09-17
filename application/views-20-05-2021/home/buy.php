<section class="about_section">
        <div class="about_banner" style="background-image: url('<?php echo base_url();?>assets/front-end/img/about-banner2.jpg');">
            <div class="about_banner_bg d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-white pt-2">Buy</h1>
            </div>
        </div>
    </section>
	<section class="about_section_body py_80 bg_white">
        <div class="container">
         
            <div class="row">
                <?php if(!empty($resources['buy'])) { echo $resources['buy']; }?>

		   </div>
        </div>
    </section>
