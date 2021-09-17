<section class="contact_us_page d-flex flex-column justify-content-center align-items-center text-center bg_white"> 
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-center">
            <h1 class="py-3">Contact Us</h1>
            <h6 class="font_normal pb-5">For general enquiries and technical support send your query using the form below</h6>
            <div class="contact_us_form">
                <div class="row cuf_top m-0">
					
                    <div class="col-md-6 mb-4">
                        <input class="w-100 p-2" type="text" name="first_name" placeholder="First Name">
                    </div>
                    <div class="col-md-6 mb-4">
                        <input class="w-100 p-2" type="text" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="col-md-12 mb-4 mt-2">
                        <input class="w-100 p-2" type="email" name="email" placeholder="Work Email">
                    </div>
                    <div class="col-md-12 mb-4 mt-2">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="main-btn1 mx-auto">Submit</button>
                    </div>                
             	
					
                         
            </div>  
  <div class="d-flex flex-column text-center justify-content-center align-items-center p_20">
                   <?php if(!empty($contact['description'])) { echo $contact['description']; }?>
                </div>			
        </div>
    </section>