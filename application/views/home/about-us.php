<section class="about_section">
        <div class="about_banner" style="background-image: url('<?php echo base_url();?>assets/upload/<?php if(!empty($aboutUs['banneraboutUs'])) { echo $aboutUs['banneraboutUs']; }?>');">
            <div class="about_banner_bg d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-white pt-2">ABOUT US</h1>
            </div>
        </div>
    </section>
	<section class="about_section_body py_80 bg_white">
        <?php if(!empty($aboutUs['description'])) { echo $aboutUs['description']; }?>
   </section>
