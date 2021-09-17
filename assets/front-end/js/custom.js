$(document).ready(function(){
	var baseUrl = $('#baseURL').val();
	    $('.customer-logos').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            dots: false,
                pauseOnHover: false,
                responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        // $('.bs_images').slick({
        //     slidesToShow: 5,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     autoplaySpeed: 4000,
        //     arrows: true,
        //     dots: false,
        //         pauseOnHover: false,
        //         responsive: [{
        //         breakpoint: 992,
        //         settings: {
        //             slidesToShow: 3
        //         }
        //     }, {
        //         breakpoint: 768,
        //         settings: {
        //             slidesToShow: 2
        //         }
        //     }]
        // });

	$( "#register-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#register-frm input[required=true], #register-frm select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
			 var reg_password =$('#reg_password').val();	
			
			 var reg_profile =$('#reg_profile').val();
			 var reg_country =$('#reg_country').val();
			
			if(reg_profile==0){
				  $('#reg_profile').css('border-color','red');
				 proceed = false;
			 }
			 if(reg_country==0){
				  $('#reg_country').css('border-color','red');
				 proceed = false;
			 }
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#register-frm").serialize();
			$.ajax({
				type: "POST",
				url: baseUrl+'login/userRegistartionWithAjax',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						$('#reg_email,\
						#reg_password').val('');
						$('#reg_profile,\
						#reg_country').val(0);
						$('#reg-form-success').show();
						$('#reg-form-warning').hide();
					}else{
						$('#reg-form-success').hide();
					   $('#reg-form-warning').show();
					}
					
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#register-frm input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	
	$( "#login-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#login-frm input[required=true], #login-frm select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
			
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#login-frm").serialize();
			$.ajax({
				type: "POST",
				url: baseUrl+'login/userloginWithAjax',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						window.location.href= baseUrl+"dashboard";
					}else{
						$('#login-form-warning').show();
					}
					
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#login-frm input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	$( "#profile-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#profile-frm input[required=true],#profile-frm select[required=true],#profile-frm textarea[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					
                }
				var field_1 = $('#field_1').val();
				var interested_in = $('#interested_in').val();
				var field_7 = $('#field_7').val();
				var field_4 = $('#field_4').val();
				
				if(field_1==null){
					$('.select2-selection--single').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--single').removeClass('error-select');
				}
				if(interested_in==null){
					$('.select2-selection--single').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--single').removeClass('error-select');
				}
				if(field_7==null){
					$('.select2-selection--single').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--single').removeClass('error-select');
				}
				if(field_4==''){
					$('.select2-selection--multiple').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--multiple').removeClass('error-select');
				}
			  
               
		 });
        if(proceed){
			
				var formData = new FormData();

				//Form data
				var form_data = $('#profile-frm').serializeArray();
				$.each(form_data, function (key, input) {
					formData.append(input.name, input.value);
				});

				//File data
				/*var file_data = $('input[name="userfile"]')[0].files;
				for (var i = 0; i < file_data.length; i++) {
					formData.append("userfile[]", file_data[i]);
				}*/
				var add_photo = $('input[name="add_photo"]')[0].files[0];	
				var add_documents = $('input[name="add_documents"]')[0].files[0];	
				var attach_proof = $('input[name="attach_proof"]')[0].files[0];	
				//var company_logo = $('input[name="company_logo"]')[0].files[0];	
			
				//Custom data
				formData.append('add_photo',add_photo);
				formData.append('add_documents',add_documents);
				formData.append('attach_proof',attach_proof);
				//formData.append('company_logo',company_logo);
				formData.append('key', 'value');
			     H5_loading.show();
			
			
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/updateProfile',
				contentType: false,
				cache: false,
				processData:false,
				data: formData,
					
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						
						var  pageURL = window.location.pathname.split("/").pop();
						if(pageURL=='seller-setting'){
							$('#c-success-msg').show();
							$( "input[name='your_name']" ).focus();
						}else{
							$('#profile-frm').hide();
							$('#profile-form-success').show();
							$('.buy_plan_section').show();
						}
						
					}else{
						
					}
					
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#profile-frm input[required=true],#profile-frm textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	$(document.body).on("change","#field_1",function(){
		$('.select2-selection--single').removeClass('error-select');
	});
	$(document.body).on("change","#interested_in",function(){
		$('.select2-selection--single').removeClass('error-select');
	});
	$(document.body).on("change","#field_4",function(){
		$('.select2-selection--multiple').removeClass('error-select');
	});
	$(document.body).on("change","#field_7",function(){
		$('.select2-selection--single').removeClass('error-select');
	});
	
	
	
	$( "#buyer-profile-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#buyer-profile-frm input[required=true],#buyer-profile-frm select[required=true],#buyer-profile-frm textarea[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					
                }
				var field_1 = $('#field_1').val();
				var interested_in = $('#interested_in').val();
				var field_2 = $('#field_2').val();
				
				if(field_1==null){
					$('.select2-selection--single').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--single').removeClass('error-select');
				}
				if(interested_in==null){
					$('.select2-selection--single').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--single').removeClass('error-select');
				}
				
				if(field_2==''){
					$('.select2-selection--multiple').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--multiple').removeClass('error-select');
				}
			  
               
		 });
        if(proceed){
			
				var formData = new FormData();

				//Form data
				var form_data = $('#buyer-profile-frm').serializeArray();
				$.each(form_data, function (key, input) {
					formData.append(input.name, input.value);
				});

				//File data
				/*var file_data = $('input[name="userfile"]')[0].files;
				for (var i = 0; i < file_data.length; i++) {
					formData.append("userfile[]", file_data[i]);
				}*/
				var add_photo = $('input[name="add_photo"]')[0].files[0];	
				var add_documents = $('input[name="add_documents"]')[0].files[0];	
				var attach_proof = $('input[name="attach_proof"]')[0].files[0];	
				//var company_logo = $('input[name="company_logo"]')[0].files[0];	
			
				//Custom data
				formData.append('add_photo',add_photo);
				formData.append('add_documents',add_documents);
				formData.append('attach_proof',attach_proof);
				//formData.append('company_logo',company_logo);
				formData.append('key', 'value');
			     H5_loading.show();
			
			
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/updateProfile',
				contentType: false,
				cache: false,
				processData:false,
				data: formData,
					
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						
						var  pageURL = window.location.pathname.split("/").pop();
						if(pageURL=='buyer-setting' || pageURL=='investor-setting'){
							$('#c-success-msg').show();
							 $( "input[name='your_name']" ).focus();
						}else{
						$('#buyer-profile-frm').hide();
						$('#profile-form-success').show();
						$('.buy_plan_section').show();
						}
						
					}else{
						
					}
					
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#buyer-profile-frm input[required=true],#buyer-profile-frm textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	$( "#advisor-profile-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#advisor-profile-frm input[required=true],#advisor-profile-frm select[required=true],#advisor-profile-frm textarea[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					
                }
				var field_1 = $('#field_1').val();
				
				var field_2 = $('#field_2').val();
				
				if(field_1==null){
					$('.select2-selection--single').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--single').removeClass('error-select');
				}
				
				
				if(field_2==''){
					$('.select2-selection--multiple').addClass('error-select');
                   proceed = false;
				}else{
					$('.select2-selection--multiple').removeClass('error-select');
				}
			  
               
		 });
        if(proceed){
			
				var formData = new FormData();

				//Form data
				var form_data = $('#advisor-profile-frm').serializeArray();
				$.each(form_data, function (key, input) {
					formData.append(input.name, input.value);
				});

				
				var add_photo = $('input[name="add_photo"]')[0].files[0];	
				var add_documents = $('input[name="add_documents"]')[0].files[0];	
				var attach_proof = $('input[name="attach_proof"]')[0].files[0];	
				//var company_logo = $('input[name="company_logo"]')[0].files[0];	
			
				//Custom data
				formData.append('add_photo',add_photo);
				formData.append('add_documents',add_documents);
				formData.append('attach_proof',attach_proof);
				//formData.append('company_logo',company_logo);
				formData.append('key', 'value');
			     H5_loading.show();
			
			
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/updateProfile',
				contentType: false,
				cache: false,
				processData:false,
				data: formData,
					
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						
						var  pageURL = window.location.pathname.split("/").pop();
						if(pageURL=='advisory-setting'){
							$('#c-success-msg').show();
							 $( "input[name='your_name']" ).focus();
						}else{
						$('#advisor-profile-frm').hide();
						$('#profile-form-success').show();
						$('.buy_plan_section').show();
						}
						
					}else{
						
					}
					
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#advisor-profile-frm input[required=true],#advisor-profile-frm textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	
	
	
	
	$(document.body).on("change","#field_2",function(){
		$('.select2-selection--multiple').removeClass('error-select');
	});
	
	
	$('body').on('click', '#buy-button', function() {
		
		 var buy_plan = $("input[name='buy_plan']").filter(":checked").map(function(){return $(this).val();}).get();
		  var accept = $("input[name='accept']").filter(":checked").map(function(){return $(this).val();}).get();
		   if(buy_plan!=''){
			var b64 = btoa(buy_plan);
			if(buy_plan==1){
				
				// H5_loading.show();
					$.ajax({
						type: "POST",
						url: baseUrl+'dashboard/updatePlan',
						data: {
							buy_plan:buy_plan
						},
						success: function(msgData) {
							if(msgData==1){
							window.location.href=baseUrl+'dashboard';
							return false;
							}
						}
					});
				
				
			}else{ 
			  if(accept==''){
				  $('#accept-error').show();
				  return false;
			  }else{
				 $('#accept-error').hide();  
				 window.location.href=baseUrl+'payment-method/'+b64;
			  }
		      
			
			}
		 }
		
	});
	$(".boxcls").click(function () {
	$('.boxcls ').removeClass('checkedcls');
	$(this).addClass('checkedcls');
	$(this).addClass('hli').find('input').prop('checked', true);
	var paymentMethod= $(this).find('input').val();
	if(paymentMethod=='stripe'){
	$('#stripepaymethod').show();
	$('#paypalpaymethod').hide();
	}else{
	//$('#paypalpaymethod').show();
	$('#stripepaymethod').hide();
	$('#paypal-payment-form').submit();
	return false;
	}
	});
	$("#agoogleid").click(function (event) {
		event.preventDefault();
		var profile_socail = $('#select_profile_socail').val();
		var country_socail = $('#select_country_socail').val();
		if(profile_socail=='0' || country_socail=='0'){
			if(profile_socail=='0'){
				$('#select_profile_socail').css('border-color','red');
			}
			if(country_socail=='0'){
				$('#select_country_socail').css('border-color','red');
			}
		}else{
			//localStorage.setItem(profile_socail,profile_socail);
			//localStorage.setItem(country_socail,country_socail);
			 H5_loading.show();
			$.ajax({
				type: "POST",
				url: baseUrl+'login/setlocalStorage',
				data: {
					profile_socail : profile_socail,
					country_socail : country_socail
				},
				success: function(msgData) {
					if(msgData==1){
					window.location.href = baseUrl+'googlelogin/login';
			        return false;
					}
				}
			});
		}
	});
	$("#afacebookid").click(function (event) {
		event.preventDefault();
		var loginpath = $(this).attr('href');
		var profile_socail = $('#select_profile_socail').val();
		var country_socail = $('#select_country_socail').val();
		if(profile_socail=='0' || country_socail=='0'){
			if(profile_socail=='0'){
				$('#select_profile_socail').css('border-color','red');
			}
			if(country_socail=='0'){
				$('#select_country_socail').css('border-color','red');
			}
		}else{
			H5_loading.show();
			$.ajax({
				type: "POST",
				url: baseUrl+'login/setlocalStorage',
				data: {
					profile_socail : profile_socail,
					country_socail : country_socail
				},
				success: function(msgData) {
					if(msgData==1){
					window.location.href = loginpath;
			        return false;
					}
				}
			});
		}
	});
	
	$(".select_menu").change(function () {
		$('#select_profile_socail').css('border-color','');
		$('#select_country_socail').css('border-color','');
		return false;
	});
	$("#add_photo").change(function(){
		var tag = $(this).attr('rel');
		var Itype = $(this).attr('Itype');
		$('#imagefsize').hide();
		$('#imageextension').hide();
		var fd = new FormData();
		var files = $('#add_photo')[0].files[0];
		var fsize = $('#add_photo')[0].files[0].size;
			var fname = $('#add_photo')[0].files[0].name;
			var ftype = $('#add_photo')[0].files[0].type;
			var fextension = $('#add_photo').val().split('.').pop().toLowerCase();	
			if($.inArray(fextension, ['gif','png','jpg','jpeg']) == -1) {
				$('#imageextension').show();
				return false;
			}
			if(fsize > 1048576){/*1048576-1MB(You can change the size as you want)*/
			$('#imagefsize').show();
                   // alert("File size too large! Please upload less than 1MB");
               return false;
         }
	//$('#BusinessLicenseuploadspan').text(fname);
	fd.append('userfile',files);
	fd.append('tag',tag);
	fd.append('Itype',Itype);
	H5_loading.show();
	$.ajax({
			   url: baseUrl+'dashboard/cImageGallery',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					H5_loading.hide();
					var obj = JSON.parse(response);
					$('#img-preview').append(obj.img);
					$('#imagecount').val(obj.imagecount);
					
				},
			});
	});
	$("#add_documents").change(function(){
		var tag = $(this).attr('rel');
		var Itype = $(this).attr('Itype');
		$('#documentssize').hide();
		$('#documentsextension').hide();
		var fd = new FormData();
		var files = $('#add_documents')[0].files[0];
		var fsize = $('#add_documents')[0].files[0].size;
			var fname = $('#add_documents')[0].files[0].name;
			var ftype = $('#add_documents')[0].files[0].type;
			var fextension = $('#add_documents').val().split('.').pop().toLowerCase();	
			if($.inArray(fextension, ['gif','png','jpg','jpeg','doc','pdf','docx']) == -1) {
				$('#documentsextension').show();
				return false;
			}
			if(fsize > 1048576){/*1048576-1MB(You can change the size as you want)*/
			$('#documentssize').show();
                   // alert("File size too large! Please upload less than 1MB");
               return false;
         }
	
	fd.append('userfile',files);
	fd.append('tag',tag);
	fd.append('Itype',Itype);
	H5_loading.show();
	$.ajax({
			   url: baseUrl+'dashboard/cDocumentGallery',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					H5_loading.hide();
					var obj = JSON.parse(response);
					$('#documents-preview').append(obj.img);
					$('#documentscount').val(obj.imagecount);
					
				},
			});
	});
	$('body').on('blur', '.doctxt', function() {
     var doctxt =$(this).val();	
	 
     var pmid =$(this).attr('rel');	
		H5_loading.show();
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/updateDocName',
				data: {
					doctxt : doctxt,
					pmid : pmid
					
				},
				success: function(msgData) {
					if(msgData==1){
					H5_loading.hide();	
					}
				}
			});
   });
   
   $("#attach_proof").change(function(){
		var tag = $(this).attr('rel');
		$('#proofsize').hide();
		$('#proofextension').hide();
		var fd = new FormData();
		var files = $('#attach_proof')[0].files[0];
		var fsize = $('#attach_proof')[0].files[0].size;
			var fname = $('#attach_proof')[0].files[0].name;
			var ftype = $('#attach_proof')[0].files[0].type;
			var fextension = $('#attach_proof').val().split('.').pop().toLowerCase();	
			if($.inArray(fextension, ['gif','png','jpg','jpeg','doc','pdf','docx']) == -1) {
				$('#proofextension').show();
				return false;
			}
			if(fsize > 1048576){/*1048576-1MB(You can change the size as you want)*/
			$('#proofsize').show();
                   // alert("File size too large! Please upload less than 1MB");
               return false;
         }
	
	fd.append('userfile',files);
	fd.append('tag',tag);
	
	H5_loading.show();
	$.ajax({
			   url: baseUrl+'dashboard/cProofGallery',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					H5_loading.hide();
					$('#proofupload').show();
					
				},
			});
	});
   
   $(".numbervalidation").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });	
		
		
$('body').on('click', '.send-proposal', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to send proposal?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Send Proposal!',
                    text: 'proposal has been send successfully',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "home/sendProposal",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });		
	
$( "#setting-contact-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#setting-contact-frm input[required=true], #setting-contact-frm select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
                //check invalid email
                /*var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }*/
			
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#setting-contact-frm").serialize();
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/userSettingContactAjax',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					$('#c-success-msg').show();
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#setting-contact-frm input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
$( "#setting-deal-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#setting-deal-frm input[required=true], #setting-deal-frm select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
                //check invalid email
                /*var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }*/
			
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#setting-deal-frm").serialize();
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/userSettingdealAjax',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					$('#d-success-msg').show();
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#setting-deal-frm input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});


$( "#change-password-frm" ).submit(function( event ){ //on form submit       
        var proceed = true;
	    $("#change-password-frm input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					
                }
                var ps = $('#password').val();
                var rp = $('#rp').val();
				if(ps!=rp){
					$('#error-pass').show();
					proceed = false;
				}
			
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#change-password-frm").serialize();
			$.ajax({
				type: "POST",
				url: baseUrl+'dashboard/userChangePasswordAjax',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					$('#p-success-msg').show();
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#setting-deal-frm input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	$(".search-filter").click(function() { 
		/*var youarean = [];
            $.each($("input[name='field_1[]']:checked"), function(){
                youarean.push($(this).val());
            });
			youarean = youarean.join(", ");*/
          loadPaginationSeller(0);
	});
	$(".search-filter-change").change(function() { 
		loadPaginationSeller(0);
	});
	
	$(".search-filter-address").blur(function() { 
		loadPaginationSeller(0);
	});
	$(".investcls").change(function() { 
	  var invest_1 = $("#invest-1").val();
	  var invest_2 = $("#invest-2").val();
	  var invest_3 = $("#invest-3").val();
	  var invest_4 = $("#invest-4").val();
	 if(invest_1!='' && invest_2!='' && invest_3!='' && invest_4!=''){
		 loadPaginationSeller(0); 
	  }
		
	});
	// Pagination of Searhing Page//
	
function replaceQueryParam(param, newval, search) {
    var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
    var query = search.replace(regex, "$1").replace(/&$/, '');

    return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
}
	
	
	var pageURL = $(location).attr("href");
	var sellers = baseUrl+'sellers';
	if(pageURL==sellers){ 
		loadPaginationSeller(0);
	}
	
		$('#pagination_seller').on('click','a',function(e){
				e.preventDefault(); 
				 $(window).scrollTop(0);
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationSeller(pageno);
			});
			
			// Load pagination
			function loadPaginationSeller(pagno){
				H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/loadRecordSeller/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData
					},
					success: function(response){
						H5_loading.hide();
						$('#pagination_seller').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}
			
			// Create table list
			function createTable(result,sno){
				var countTable =result.length;
				sno = Number(sno);
				$('#postsList').empty();
				if(countTable > 0){
					for(index in result){
						var user_id = result[index].user_id;
						var user_plan = result[index].user_plan;
						var title = result[index].title;
						var interested_in = result[index].interested_in;
						var field_5 = result[index].field_5;
						var field_8 = result[index].field_8;
						var field_12 = result[index].field_12;
						var field_13 = result[index].field_13;
						var tentative_selling = result[index].tentative_selling;
						sno+=1;
						var pathurl = baseUrl+'view-profile/'+user_id;
						
						var tr='<div class="col-md-6">';
                         tr += '<div class="c_box d-flex flex-column w-100 mb-4">\
                            <div class="pak_tag2">\
                                <h5 class="m-0">'+user_plan+'</h5>\
                            </div>\
							<a href="'+pathurl+'"><p class="c_box_heading pb-2">'+title+'</p></a>\
							<p class="discription">'+field_8+'</p>\
                            <ul class="latest_share d-flex py-3 m-0"><a href="#">\
                                </a><li><a href="#"></a><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>'+field_5+'</a></li>\
                            </ul>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Monthly sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p><span>SGD</span>'+field_12+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Yearly Sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p><span>SGD</span>'+field_13+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Selling Price<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p><span>SGD</span>'+tentative_selling+'</p>\
                            </div>\
                            <a href="'+pathurl+'" class="user_btn ml-auto mt-3">Contact Business</a>\
                        </div>\
                    </div>';
						$('#postsList').append(tr);
					}	
				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsList').append(tr);
				}
				
			}
	
	
	
	//Buyer pagination
	$(".search-filter-buyer").click(function() { 
		loadPaginationBuyer(0);
	});
	$(".search-filter-buyer-change").change(function() { 
		loadPaginationBuyer(0);
	});
	
	$(".search-filter-buyer-address").blur(function() { 
		loadPaginationBuyer(0);
	});
	$(".investclsbuyer").change(function() { 
	  var invest_1 = $("#invest-1").val();
	  var invest_2 = $("#invest-2").val();
	  var invest_3 = $("#invest-3").val();
	  var invest_4 = $("#invest-4").val();
	 if(invest_1!='' && invest_2!='' && invest_3!='' && invest_4!=''){
		 loadPaginationBuyer(0); 
	  }
		
	});
	
	var buyers = baseUrl+'buyers';
	var investors = baseUrl+'investors';
	
	if(pageURL==buyers || pageURL==investors ){ loadPaginationBuyer(0);}
	$('#pagination_buyer').on('click','a',function(e){
				e.preventDefault(); 
				 $(window).scrollTop(0);
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationBuyer(pageno);
			});
			
			// Load pagination
			function loadPaginationBuyer(pagno){
				var  pageUrlSplit = window.location.pathname.split("/").pop();
				

				H5_loading.show();
				var formData = $("#search-form-buyer").serialize();
			   $.ajax({
					url: baseUrl+'home/loadRecordBuyer/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData,
						tag:pageUrlSplit
					},
					success: function(response){
						H5_loading.hide();
						$('#pagination_buyer').html(response.pagination);
						createTableBuyer(response.result,response.row);
					}
				});
			}
			
			// Create table list
			function createTableBuyer(result,sno){
				var countTable =result.length;
				sno = Number(sno);
				$('#postsListbuyer').empty();
				if(countTable > 0){
					for(index in result){
						var user_id = result[index].user_id;
						var user_plan = result[index].user_plan;
						var title = result[index].title;
						var interested_in = result[index].interested_in;
						var discription = result[index].discription;
						var location1 = result[index].location;
						var InvestmentRange = result[index].InvestmentRange;
						var investmentto = result[index].investmentto;
						var IndustriesPref = result[index].IndustriesPref;
						var locationsPref = result[index].locationsPref;
						sno+=1;
						var  pageUrlSplit = window.location.pathname.split("/").pop();
						if(pageUrlSplit=='buyers'){
							var pathurl = baseUrl+'view-buyer/'+user_id;
						}
						else{
							var pathurl = baseUrl+'view-investor/'+user_id;
						}
						
						var tr='<div class="col-md-6">';
						tr +='<div class="c_box d-flex flex-column w-100 mb-4">\
                            <div class="pak_tag2">\
                                <h5 class="m-0">'+user_plan+' </h5>\
                            </div>\
                            <a href="'+pathurl+'"><p class="c_box_heading pb-2">'+title+'</p> </a>\
                            <p class="discription">'+discription+'</p>\
                           <ul class="latest_share d-flex py-3 m-0">\
                                </a><li><a href="#"></a><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>'+location1+'</a></li>\
                            </ul>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Investment Range<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w"><span>SGD </span>'+InvestmentRange+' To '+investmentto+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Industries Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w">'+IndustriesPref+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>locations Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w">'+locationsPref+'</p>\
                            </div>\
                            <a href="'+pathurl+'" class="user_btn ml-auto mt-3">\
							Contact Business</a>\
                        </div>\
						</div>';
						$('#postsListbuyer').append(tr);
					}	
				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsListbuyer').append(tr);
				}
				
			}
	
	
	//Advisory pagination
	$(".search-filter-advisory").click(function() { 
		loadPaginationAdvisory(0);
	});
	$(".search-filter-advisory-change").change(function() { 
		loadPaginationAdvisory(0);
	});
	
	$(".search-filter-advisory-address").blur(function() { 
		loadPaginationAdvisory(0);
	});
	$(".investclsadvisory").change(function() { 
	  var invest_1 = $("#invest-1").val();
	  var invest_2 = $("#invest-2").val();
	  var invest_3 = $("#invest-3").val();
	  var invest_4 = $("#invest-4").val();
	 if(invest_1!='' && invest_2!='' && invest_3!='' && invest_4!=''){
		 loadPaginationAdvisory(0); 
	  }
		
	});
	
	
	var advisory = baseUrl+'advisory';
	if(pageURL==advisory ){ loadPaginationAdvisory(0);}
	$('#pagination_advisory').on('click','a',function(e){
				e.preventDefault(); 
				 $(window).scrollTop(0);
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationAdvisory(pageno);
			});
			
			// Load pagination
			function loadPaginationAdvisory(pagno){
				var  pageUrlSplit = window.location.pathname.split("/").pop();
				

				H5_loading.show();
				var formData = $("#search-form-advisory").serialize();
			   $.ajax({
					url: baseUrl+'home/loadRecordAdvisory/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData,
						tag:pageUrlSplit
					},
					success: function(response){
						H5_loading.hide();
						$('#pagination_advisory').html(response.pagination);
						createTableAdvisory(response.result,response.row);
					}
				});
			}
			
			// Create table list
			function createTableAdvisory(result,sno){
				var countTable =result.length;
				sno = Number(sno);
				$('#postsListadvisory').empty();
				if(countTable > 0){
					for(index in result){
						var user_id = result[index].user_id;
						var user_plan = result[index].user_plan;
						var title = result[index].title;
						var interested_in = result[index].interested_in;
						var discription = result[index].discription;
						var location1 = result[index].location;
						var InvestmentRange = result[index].InvestmentRange;
						var investmentto = result[index].investmentto;
						var IndustriesPref = result[index].IndustriesPref;
						var locationsPref = result[index].locationsPref;
						sno+=1;
						var  pageUrlSplit = window.location.pathname.split("/").pop();
						var pathurl = baseUrl+'view-advisory/'+user_id;
						
						var tr='<div class="col-md-6">';
						tr +='<div class="c_box d-flex flex-column w-100 mb-4">\
                            <div class="pak_tag2">\
                                <h5 class="m-0">'+user_plan+' </h5>\
                            </div>\
                            <a href="'+pathurl+'"><p class="c_box_heading pb-2">'+title+'</p> </a>\
                            <p class="discription">'+discription+'</p>\
                           <ul class="latest_share d-flex py-3 m-0">\
                                </a><li><a href="#"></a><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>'+location1+'</a></li>\
                            </ul>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Investment Range<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w"><span>SGD </span>'+InvestmentRange+' To '+investmentto+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Industries Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w">'+IndustriesPref+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>locations Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w">'+locationsPref+'</p>\
                            </div>\
                            <a href="'+pathurl+'" class="user_btn ml-auto mt-3">\
							Contact Business</a>\
                        </div>\
						</div>';
						$('#postsListadvisory').append(tr);
					}	
				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsListadvisory').append(tr);
				}
				
			}
	
	
	
	
	
	
	var searchResult = baseUrl+'search-result';
	if(pageURL==searchResult  ){ loadPaginationSeller(0);}
	
	$(".filter_btn ").click(function() { 
		var relv= $(this).attr('rel');
		
		if(relv==1){
			$('#postsListbuyer,#pagination_buyer_search').hide();
			$('#postsListbuyer,#pagination_buyer_search').empty();
			$('#postsList,#pagination_seller').show();
			loadPaginationSeller(0);
		}
		if(relv==2){
			$('#postsList,#pagination_seller').hide();
			$('#postsList,#pagination_seller').empty();
			$('#postsListbuyer,#pagination_buyer_search').show();
			loadPaginationBuyerSearch(0);
			
		}
		/*if(relv==1){
			var str = window.location.search;
			str = replaceQueryParam('buyer', 'parm', str);
			window.location = window.location.pathname + str;
			loadPaginationSeller(0);
		}
		if(relv==2){
			
			var str = window.location.search;
			str = replaceQueryParam('investor', 'parm', str);
			window.location = window.location.pathname + str;
			loadPaginationBuyer(0);
		}*/
	});
	
	
	
		$('#pagination_buyer_search').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationBuyerSearch(pageno);
			});
			
			// Load pagination
			function loadPaginationBuyerSearch(pagno){
				var  pageUrlSplit = window.location.pathname.split("/").pop();
				

				H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/loadRecordBuyerSearch/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData,
						tag:pageUrlSplit
					},
					success: function(response){
						H5_loading.hide();
						$('#pagination_buyer_search').html(response.pagination);
						createTableBuyerSearch(response.result,response.row);
					}
				});
			}
			
			// Create table list
			function createTableBuyerSearch(result,sno){
				var countTable =result.length;
				sno = Number(sno);
				$('#postsListbuyer').empty();
				if(countTable > 0){
					for(index in result){
						var user_id = result[index].user_id;
						var user_plan = result[index].user_plan;
						var title = result[index].title;
						var interested_in = result[index].interested_in;
						var discription = result[index].discription;
						var location1 = result[index].location;
						var InvestmentRange = result[index].InvestmentRange;
						var investmentto = result[index].investmentto;
						var IndustriesPref = result[index].IndustriesPref;
						var locationsPref = result[index].locationsPref;
						sno+=1;
						var  pageUrlSplit = window.location.pathname.split("/").pop();
						var pathurl = baseUrl+'view-buyer/'+user_id;
						
						var tr='<div class="col-md-6">';
						tr +='<div class="c_box d-flex flex-column w-100 mb-4">\
                            <div class="pak_tag2">\
                                <h5 class="m-0">'+user_plan+' </h5>\
                            </div>\
                            <a href="'+pathurl+'"><p class="c_box_heading pb-2">'+title+'</p> </a>\
                            <p class="discription">'+discription+'</p>\
                           <ul class="latest_share d-flex py-3 m-0">\
                                </a><li><a href="#"></a><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>'+location1+'</a></li>\
                            </ul>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Investment Range<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w"><span>SGD </span>'+InvestmentRange+' To '+investmentto+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>Industries Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w">'+IndustriesPref+'</p>\
                            </div>\
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">\
                                <p>locations Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>\
                                <p class="text-line1w">'+locationsPref+'</p>\
                            </div>\
                            <a href="'+pathurl+'" class="user_btn ml-auto mt-3">\
							Contact Business</a>\
                        </div>\
						</div>';
						$('#postsListbuyer').append(tr);
					}	
				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsListbuyer').append(tr);
				}
				
			}
	
	
	$('body').on('click', '.send-bookmark', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        var role = $(this).attr('role');
        swal({
            title: "Are you sure you want to bookmark this proposal?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Send Bookmark!',
                    text: 'Bookmark has been send successfully',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "home/sendBookmark",
                        method: "POST",
                        data: {
                            id: ID,
							role:role
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });	
	
	$('body').on('click', '.delete-bookmark', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        
        swal({
            title: "Are you sure you want to delete this bookmark?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted Bookmark!',
                    text: 'Bookmark has been deleted successfully',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "dashboard/deleteBookmark",
                        method: "POST",
                        data: {
                            id: ID
							
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });	
	
	
	$('body').on('click', '.more', function() {
	var tId= $(this).attr('rel');
	var ptag= $('#test_full_'+tId).html();
	$('p#test_half_'+tId).addClass('complete1');
	$('p#test_full_'+tId).removeClass('complete1');
	
	return false;
	});
	$('body').on('click', '.less', function() {
	var tId= $(this).attr('rel');
	$('p#test_half_'+tId).removeClass('complete1');
	$('p#test_full_'+tId).addClass('complete1');
	console.log(tId);
	return false;
	});
	
	
	//End Here
	
	
});
/*document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboardMsg(document.getElementById("copyTarget"), "msg");
});


function copyToClipboardMsg(elem, msgElem) {
	  var succeed = copyToClipboard(elem);
    var msg;
    if (!succeed) {
        msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
    } else {
        msg = "This link will be copy.Now you can share any where."
    }
    if (typeof msgElem === "string") {
        msgElem = document.getElementById(msgElem);
    }
    msgElem.innerHTML = msg;
    setTimeout(function() {
        msgElem.innerHTML = "";
    }, 2000);
}

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}


*/






setInterval("getnotificationuser()", 2000);
function getnotificationuser() {
	var baseUrl = $('#baseURL').val();
	$.ajax({
	type: "POST",
	url: baseUrl+'dashboard/getNotificationUser',
	data: {
		
	},
	success: function(jsonmsg) {
		$('#notificationscount').replaceWith(jsonmsg);
	}

	});
}

 
function removeimage($id){
	var baseUrl = $('#baseURL').val();
	H5_loading.show();
	var imagecount = $("#imagecount"). val();
	if(imagecount >0){
		var imagecountlenth = parseInt(imagecount)-parseInt(1);
		imagecount = $("#imagecount"). val(imagecountlenth);
	}
	$('#'+$id).remove();
	$.ajax({
		   url: baseUrl+'dashboard/removeimage',
			type: 'post',
			data: {
				id :$id
			},
			success: function(response){
				H5_loading.hide();	
				}
			
		});
}



function openModal() {
  document.getElementById("business_images_modal").style.display = "block";
}

function closeModal() {
  document.getElementById("business_images_modal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
}