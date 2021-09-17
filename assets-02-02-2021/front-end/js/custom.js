$(document).ready(function(){
	var baseUrl = $('#baseURL').val();
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
			 var reg_cpassword =$('#reg_cpassword').val();
			 var reg_profile =$('#reg_profile').val();
			 var reg_country =$('#reg_country').val();
			 if(reg_password!=reg_cpassword){
				  $('#reg_cpassword').css('border-color','red');
				  $('#reg-error-pass').show();
				 	proceed = false;
			 }	
			/*if(reg_profile==''){
				  $('#reg_profile').css('border-color','red');
				 proceed = false;
			 }
			 if(reg_country==''){
				  $('#reg_country').css('border-color','red');
				 proceed = false;
			 }*/
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
						#reg_password,\
						#reg_cpassword').val('');
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
	    $("#profile-frm input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					
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
						$('#profile-frm').hide();
						$('#profile-form-success').show();
						$('.buy_plan_section').show();
						
					}else{
						
					}
					
					return false;
				}
			});
		}
        event.preventDefault(); 
    });
	$("#profile-frm input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	$('body').on('click', '#buy-button', function() {
		
		 var buy_plan = $("input[name='buy_plan']").filter(":checked").map(function(){return $(this).val();}).get();
		 if(buy_plan!=''){
			 var b64 = btoa(buy_plan);
             window.location.href=baseUrl+'payment-method/'+b64;
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
	
});