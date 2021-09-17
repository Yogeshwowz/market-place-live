$(document).ready(function(){
	var baseUrl = $('#baseURL').val();
	$( "#my_admin_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_admin_form input[required=true]").each(function(){
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
			var formData = $("#my_admin_form").serialize();
					$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addAdminUser',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						var editUserId = $('#editUserId').val();
						
						if(editUserId==undefined){
							$('#my_admin_form input[type="text"],#my_admin_form input[type="email"]').val('');
						}
						$('#add-admin-form-success').show();
						$('#add-admin-form-warning').hide();
					}
					if(msgData==0){
						$('#add-admin-form-warning').show();
						$('#add-admin-form-success').hide();
					}
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	$("#my_admin_form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	 $('body').on('click', '.delete-admin-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this admin user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Admin User has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteAdminUser",
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
	$('body').on('click', '.active-admin-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to deactive this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'User has been  successfully deactived!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deactiveAdminUser",
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
	$('body').on('click', '.deactive-admin-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to active this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'User has been  successfully actived!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/activeAdminUser",
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
		$( "#my_profile_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_profile_form input[required=true]").each(function(){
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
			var formData = $("#my_profile_form").serialize();
					$.ajax({
				type: "POST",
				url: baseUrl+'administrator/updateProfile',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						$('#add-admin-form-success').show();
					}
					
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	$("#my_profile_form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	$( "#my_staff_user_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_staff_user_form input[required=true]").each(function(){
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
			var formData = $("#my_staff_user_form").serialize();
					$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addNewStaffUser',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						$('#my_staff_user_form input[type="text"],#my_staff_user_form input[type="email"],#my_staff_user_form textarea').val(''); 
						$('#add-admin-form-success').show();
						$('#add-admin-form-warning').hide();
					}
					if(msgData==0){
						$('#add-admin-form-warning').show();
						$('#add-admin-form-success').hide();
					}
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	$("#my_staff_user_form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
		$( "#my_category_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_category_form input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
              
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#my_category_form").serialize();
				$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addNewCategory',
				data: {
					formdata : formData
				},
				success: function(response) {
					H5_loading.hide();
					var obj = JSON.parse(response);
					if(obj.msg==1){
						var editCatId = $('#editCatId').val();
						if(editCatId==undefined){
							$('#my_category_form input[type="text"]').val('');
						}else{
							$('#mess-cate').text('category has been updated successfully');
						}
					   $('#add-admin-form-success').show();
					}
					if(obj.msg==0){
						$('#add-admin-form-warning').show();
						$('#add-admin-form-success').hide();
					}
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	$('body').on('click', '.delete-category', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this category?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Category has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteCategory",
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
	
	
	
		$( "#my_event_type_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_event_type_form input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
              
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#my_event_type_form").serialize();
				$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addNewEventType',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						var editEventTypeId = $('#editEventTypeId').val();
						if(editEventTypeId==undefined){
							$('#my_event_type_form input[type="text"]').val('');
						}else{
							$('#mess-cate').text('Event has been updated successfully');
						}
					   $('#add-admin-form-success').show();
					}
					if(msgData==0){
						$('#add-admin-form-warning').show();
						$('#add-admin-form-success').hide();
					}
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	$('body').on('click', '.delete-eventtype', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this event Type?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Event Type has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteEventType",
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
	
	
	
$( "#add_more_category" ).click(function(){  
 var categoryid =$('#categoryid').val();		
    
	 if(categoryid==''){
		$('#categoryid').css('border-color','red');
		return false;
	 }    
     H5_loading.show();
			var formData = $("#my_stock_form").serialize();
				$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addNewCategory',
				data: {
					formdata : formData
				},
				success: function(response) {
					$('#selectcategory').empty();
					H5_loading.hide();
					var obj = JSON.parse(response);
					
					if(obj.msg==1){
						$('#categoryid').val('');
					   $('#add-admin-form-success').show();
					   $('#selectcategory').html(obj.getcategory);
					}
					
					return false;
				}
			});
	});
	$( "#add_more_theme_year" ).click(function( ){
     var from_theme_year =$('#from_theme_year').val();		
     var to_theme_year =$('#to_theme_year').val();	
	 if(from_theme_year=='' ||  to_theme_year==''){
		$('#from_theme_year').css('border-color','red');
		$('#to_theme_year').css('border-color','red');
		 return false;
	 }	
     H5_loading.show();
			var formData = $("#my_stock_form").serialize();
				$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addThemeYear',
				data: {
					formdata : formData
				},
				success: function(response) {
					$('#selecttheme_year').empty();
					H5_loading.hide();
					var obj = JSON.parse(response);
					
					if(obj.msg==1){
						$('#categoryid').val('');
					   $('#add-theme-year-form-success').show();
					   $('#selecttheme_year').html(obj.getthemeYear);
					}
					
					return false;
				}
			});
	});
	$( "#add_more_location" ).click(function(){
	 var stock_orders =$('#stock_orders').val();
     var locationid =$('#locationid').val();		
     var locationAddress =$('#locationAddress').val();		
     var locationRegion =$('#locationRegion').val();		
    
	if(locationid=='' || locationAddress=='' || locationRegion==''){
		$('#locationid,#locationAddress,#locationRegion').css('border-color','red');
		return false;
	 }	
      var pageURL = $(location). attr("href");
	  var mainPageurl = baseUrl+'create-order';
		if(pageURL==mainPageurl){
		  var formData = $("#my_orders_form").serialize();
		}else{
			
			var formData = $("#my_stock_form").serialize();
		}
     H5_loading.show();
			
				$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addLocation',
				data: {
					formdata : formData
				},
				success: function(response) {
					$('#select_location').empty();
					H5_loading.hide();
					var obj = JSON.parse(response);
					
					if(obj.msg==1){
					  $('#locationid,#locationAddress,#locationRegion').val('');
					   $('#add-location-form-success').show();
					   $('#select_location').html(obj.getlocation);
					}
					
					return false;
				}
			});
	});
	
	$( "#add_more_truck" ).click(function(){
	 var trucknumber =$('#trucknumber').val();		
     var yearManufactured =$('#yearManufactured').val();		
     var mileage =$('#mileage').val();		
     var serviceDate =$('#serviceDate').val();		
     var inspectionDate =$('#inspectionDate').val();		
     var trucklocation =$('#trucklocation').val();		
    
	 if(trucknumber=='' || yearManufactured=='' || mileage=='' || serviceDate=='' || inspectionDate=='' || trucklocation==''){
		$('#trucknumber,#yearManufactured,#mileage,#serviceDate,#inspectionDate,#trucklocation').css('border-color','red');
		return false;
	 }	
     H5_loading.show();
			var formData = $("#my_stock_form").serialize();
				$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addTruck',
				data: {
					formdata : formData
				},
				success: function(response) {
					$('#select_truck').empty();
					H5_loading.hide();
					var obj = JSON.parse(response);
					
					if(obj.msg==1){
					  $('#trucknumber,#yearManufactured,#mileage,#serviceDate,#inspectionDate,#trucklocation').val('');
					   $('#add-truck-form-success').show();
					   $('#select_truck').html(obj.gettruck);
					}
					
					return false;
				}
			});
	});


$('body').on('change', '.cat-common-filter', function() {
		$("#program_levelDiv,\
		.pre-launch-elementry,\
		.pre-launch-middle,\
		#themeDiv,\
		.teacher-huddle-elementary,\
		.teacher-huddle-middle,\
		.prizes-elementary,\
		.prizes-middle,\
		.pledge-kits-elementary,\
		.pledge-kits-middle,\
		.tickers-stock,\
		.shirts-stock-elementry,\
		.general_Supplies,\
		.color_Powder,\
		#prizeDiv,#dollar_valueDiv,#total_countDiv\
		").addClass("by-default-hide");
		
		var pLevel = $('#program_level').val(null).trigger('change');
		var category = $('#selectcategory').val();

		if(category==9 || category==8 || category==7 || category==6 || category==4){ $("#program_levelDiv").removeClass("by-default-hide"); }
		if(category==5){
			$("#program_levelDiv").addClass("by-default-hide");
			$("#themeDiv,.tickers-stock").removeClass("by-default-hide");
		}
		
		if(category==3){
		$("#program_levelDiv").addClass("by-default-hide");
		$("#themeDiv,.general_Supplies").removeClass("by-default-hide");
		}
		if(category==2){
		$("#program_levelDiv").addClass("by-default-hide");
		$(".color_Powder").removeClass("by-default-hide");
		}
		
	});




	$('body').on('change', '.common-filter', function() {
		$("#program_levelDiv,\
		.pre-launch-elementry,\
		.pre-launch-middle,\
		#themeDiv,\
		.teacher-huddle-elementary,\
		.teacher-huddle-middle,\
		.prizes-elementary,\
		.prizes-middle,\
		.pledge-kits-elementary,\
		.pledge-kits-middle,\
		.tickers-stock,\
		.shirts-stock-elementry,\
		.general_Supplies,\
		.color_Powder\
		").addClass("by-default-hide");
		var pLevel = $('#program_level').val();
		var category = $('#selectcategory').val();
		
		if(category==9){
			$("#program_levelDiv").removeClass("by-default-hide");
				if(category==9 && pLevel==1){
					$(".pre-launch-elementry").removeClass("by-default-hide");
					$(".pre-launch-middle").addClass("by-default-hide");
					$("#prizeDiv,#dollar_valueDiv,#total_countDiv").removeClass("by-default-hide");
				}else if(category==9 && pLevel==2){
					$(".pre-launch-elementry").addClass("by-default-hide");
					$(".pre-launch-middle").removeClass("by-default-hide");
					$("#prizeDiv,#dollar_valueDiv,#total_countDiv").removeClass("by-default-hide");
				}else{
					$(".pre-launch-elementry,.pre-launch-middle,#themeDiv").addClass("by-default-hide");
				}
	   }
	   if(category==8){
			$("#program_levelDiv").removeClass("by-default-hide");
			if(category==8 && pLevel==1){
				$("#themeDiv,.teacher-huddle-elementary").removeClass("by-default-hide");
				$(".teacher-huddle-middle").addClass("by-default-hide");
			}else if(category==8 && pLevel==2){
					$(".teacher-huddle-elementary").addClass("by-default-hide");
				  $("#themeDiv,.teacher-huddle-middle").removeClass("by-default-hide");
				}else{
					$(".pre-launch-elementry,.pre-launch-middle,.teacher-huddle-elementary,.teacher-huddle-middle").addClass("by-default-hide");
				}
	   }
	   if(category==7){
			$("#program_levelDiv").removeClass("by-default-hide");
			if(category==7 && pLevel==1){
				$("#themeDiv,.prizes-elementary").removeClass("by-default-hide");
				$(".prizes-middle").addClass("by-default-hide");
			}else if(category==7 && pLevel==2){
					$(".prizes-elementary").addClass("by-default-hide");
				    $("#themeDiv,.prizes-middle").removeClass("by-default-hide");
				}else{
					$(".prizes-elementary,.prizes-middle").addClass("by-default-hide");
				}
	   }
	   if(category==6){
			$("#program_levelDiv").removeClass("by-default-hide");
			if(category==6 && pLevel==1){
				$("#themeDiv,.pledge-kits-elementary").removeClass("by-default-hide");
				$(".pledge-kits-middle").addClass("by-default-hide");
			}else if(category==6 && pLevel==2){
					$(".pledge-kits-elementary").addClass("by-default-hide");
				    $("#themeDiv,.pledge-kits-middle").removeClass("by-default-hide");
				}else{
					$(".pledge-kits-elementary,.pledge-kits-middle").addClass("by-default-hide");
				}
	   }
	   
	  if(category==5){
		    $("#program_levelDiv").addClass("by-default-hide");
		    $("#themeDiv,.tickers-stock").removeClass("by-default-hide");
	}
	if(category==4){
		$("#program_levelDiv").removeClass("by-default-hide");
			if(category==4 && pLevel==1){
				$("#themeDiv,.shirts-stock-elementry").removeClass("by-default-hide");
			}else if(category==4 && pLevel==2){
					$("#themeDiv,.shirts-stock-elementry").removeClass("by-default-hide");
				  
				}else{
					$(".shirts-stock-elementary").addClass("by-default-hide");
				}
			
	 }
	 if(category==3){
		    $("#program_levelDiv").addClass("by-default-hide");
		    $("#themeDiv,.general_Supplies").removeClass("by-default-hide");
	 }
	  if(category==2){
		    $("#program_levelDiv").addClass("by-default-hide");
		    $(".color_Powder").removeClass("by-default-hide");
	 }
		
	});	
	
		$('body').on('keyup', '.filter_keyup', function() {
		var relValue = $(this).attr('rel');	
		$('#'+relValue+'_total').val('');
		var count = $('#'+relValue+'_count').val();
		var value = $('#'+relValue+'_value').val();
		var total = parseFloat(count) * parseFloat(value);
		if(total > 0){
			$('#'+relValue+'_total_count').val(count);
			$('#'+relValue+'_total').val(total.toFixed(2));
		}
		});
		
		
	$(".numbervalidation").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });


		 $('.numberdecimalcls').keypress(function (event) {
            return isNumber(event, this)
        });
	    function isNumber(evt, element) {
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (
					(charCode != 45 || $(element).val().indexOf('-') != -1) &&      // Check minus and only once.
					(charCode != 46 || $(element).val().indexOf('.') != -1) &&      // Check dot and only once.
					(charCode < 48 || charCode > 57))
					return false;

				return true;
		}


   // Stock Value//

	$('body').on('change', '.category-common-filter', function() {
		$("#program_levelDiv,\
		.pre-launch-elementry,\
		.pre-launch-middle,\
		#themeDiv,\
		#locationDiv,\
		.teacher-huddle-elementary,\
		.teacher-huddle-middle,\
		.prizes-elementary,\
		.prizes-middle,\
		.pledge-kits-elementary,\
		.pledge-kits-middle,\
		.tickers-stock,\
		.shirts-stock-elementry,\
		.general_Supplies,\
		.color_Powder,\
		#prizeDiv,#dollar_valueDiv,#total_countDiv\
		").addClass("by-default-hide");
		var category = $('#selectcategory').val();
        var pLevel = $('#program_level').val(null).trigger('change');
	    var locationid = $('#select_location').val(null).trigger('change');
		var ThemeYear = $('#selecttheme_year').val(null).trigger('change');
		
		if(category==9  || category==8 || category==7 || category==6 || category==4){ 
			$("#program_levelDiv").removeClass("by-default-hide"); 
		}
		if(category==5 ){ 
			$("#themeDiv").removeClass("by-default-hide"); 
		}
		if(category==3 || category==2){
			$("#program_levelDiv").addClass("by-default-hide");
			$("#locationDiv").removeClass("by-default-hide");
		}
		return false;
	});
	
	$('body').on('change', '.common-filter-stock', function() {
		
		$("#program_levelDiv,\
		.pre-launch-elementry,\
		.pre-launch-middle,\
		 #themeDiv,\
		 #locationDiv,\
		.teacher-huddle-elementary,\
		.teacher-huddle-middle,\
		.prizes-elementary,\
		.prizes-middle,\
		.pledge-kits-elementary,\
		.pledge-kits-middle,\
		.tickers-stock,\
		.shirts-stock-elementry,\
		.general_Supplies,\
		.color_Powder,\
		#prizeDiv,#dollar_valueDiv,#total_countDiv\
		").addClass("by-default-hide");
		
		var pLevel = $('#program_level').val();
		var locationid = $('#select_location').val(null).trigger('change');
		var ThemeYear = $('#selecttheme_year').val(null).trigger('change');
		
		var category = $('#selectcategory').val();
      	if(category==9){
			
			  if(category==9 && pLevel==1){
					$("#program_levelDiv,#locationDiv").removeClass("by-default-hide");
				}else if(category==9 && pLevel==2){
					$("#program_levelDiv,#locationDiv").removeClass("by-default-hide");
				}else{
					$("#locationDiv").addClass("by-default-hide");
				}
	   }
	   if(category==8 || category==7 || category==6 || category==4){
		  if((category==8 && pLevel==1) || (category==7 && pLevel==1) || (category==6 && pLevel==1) || (category==4 && pLevel==1)){
				$("#program_levelDiv,#themeDiv").removeClass("by-default-hide");
			}else if((category==8 && pLevel==2) || (category==7 && pLevel==2) || (category==6 && pLevel==2) || (category==4 && pLevel==2)){
					$("#program_levelDiv,#themeDiv").removeClass("by-default-hide");
				}else{
					$("program_levelDiv").addClass("by-default-hide");
				}
		   
			
	   }
	 
	   
	  if(category==5){
		    $("#program_levelDiv").addClass("by-default-hide");
		    $("#themeDiv").removeClass("by-default-hide");
	}
	
	 if(category==3 || category==2){
		    $("#program_levelDiv").addClass("by-default-hide");
		    $("#locationDiv").removeClass("by-default-hide");
	 }
	
		
	});
	var interval = null;
	$('body').on('change', '.common-filter-location', function() {
		var pageURL = $(location). attr("href");
		var mainPageurl = baseUrl+'inventory-stock-count-value';
		var pLevel = $('#program_level').val();
		var category = $('#selectcategory').val();
		var locationid = $('#select_location').val();
		var ThemeYear = $('#selecttheme_year').val();
		
		if(category==9){
			
				if(category==9 && pLevel==1 && locationid!=''){
					$(".pre-launch-elementry").removeClass("by-default-hide");
					$(".pre-launch-middle").addClass("by-default-hide");
					if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
					
				}else if(category==9 && pLevel==2 && locationid!=''){
					$(".pre-launch-elementry").addClass("by-default-hide");
					$(".pre-launch-middle").removeClass("by-default-hide");
					if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
				}else{
					$(".pre-launch-elementry,.pre-launch-middle,#themeDiv").addClass("by-default-hide");
				}
	   }
	   if(category==8){
			if(category==8 && pLevel==1 && ThemeYear!=''){
				$(".teacher-huddle-elementary").removeClass("by-default-hide");
				$(".teacher-huddle-middle").addClass("by-default-hide");
				if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
			}else if(category==8 && pLevel==2 && ThemeYear!=''){
						$(".teacher-huddle-elementary").addClass("by-default-hide");
						$(".teacher-huddle-middle").removeClass("by-default-hide");
						if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
				}else{
					$(".pre-launch-elementry,.pre-launch-middle,.teacher-huddle-elementary,.teacher-huddle-middle").addClass("by-default-hide");
					
				}
	   }
	   if(category==7){
			if(category==7 && pLevel==1 && ThemeYear!=''){
				$(".prizes-elementary").removeClass("by-default-hide");
				$(".prizes-middle").addClass("by-default-hide");
				if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
			}else if(category==7 && pLevel==2 && ThemeYear!=''){
					$(".prizes-elementary").addClass("by-default-hide");
				    $(".prizes-middle").removeClass("by-default-hide");
					if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
				}else{
					$(".prizes-elementary,.prizes-middle").addClass("by-default-hide");
				}
	   }
	   if(category==6){
			if(category==6 && pLevel==1 && ThemeYear!=''){
				$(".pledge-kits-elementary").removeClass("by-default-hide");
				$(".pledge-kits-middle").addClass("by-default-hide");
				if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
			}else if(category==6 && pLevel==2 && ThemeYear!=''){
					$(".pledge-kits-elementary").addClass("by-default-hide");
				    $(".pledge-kits-middle").removeClass("by-default-hide");
					if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
				}else{
					$(".pledge-kits-elementary,.pledge-kits-middle").addClass("by-default-hide");
				}
	   }
	   
	  if(category==5){
		  if(ThemeYear!=''){
		    $("#program_levelDiv").addClass("by-default-hide");
		    $(".tickers-stock").removeClass("by-default-hide");
			if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
		  }
	}
	if(category==4){
		if(category==4 && pLevel==1 && ThemeYear!=''){
				$(".shirts-stock-elementry").removeClass("by-default-hide");
				if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
			}else if(category==4 && pLevel==2 && ThemeYear!=''){
					$(".shirts-stock-elementry").removeClass("by-default-hide");
					if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
				  
				}else{
					$(".shirts-stock-elementary").addClass("by-default-hide");
				}
			
	 }
	
	 if(category==3){
		 if(locationid!=''){
			$("#program_levelDiv").addClass("by-default-hide");
		    $(".general_Supplies").removeClass("by-default-hide");
			if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
		 }
		   
	 }
	  if(category==2){
		  if(locationid!=''){
			$("#program_levelDiv").addClass("by-default-hide");
		    $(".color_Powder").removeClass("by-default-hide");
			if(pageURL==mainPageurl){
						getinventoryCountValue(category);
						getinventoryCountValueCount(category,pLevel,locationid);
						var interval = setInterval(stockCalculation, 2000);
					 }else{
						getinventoryCount(category,pLevel,locationid); 
					 }
		 }
		   
	 }
		
	});	
	
	
	$( "#my_stock_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_stock_form input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
               
        });
        if(proceed){
			var stock_count = $('#stock_count').val();
			if(stock_count==1){
				$url =  baseUrl+'inventory/addInventoryStockCount';
			}else{
				$url =  baseUrl+'inventory/addInventoryStockValue';
			}
			H5_loading.show();
			var formData = $("#my_stock_form").serialize();
			 $.ajax({
				type: "POST",
				url: $url,
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					 $('#my_stock_form_success').show();
					 $( "#selectcategory" ).focus();
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	
	
		/*$( "#my_stock_form_count" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_stock_form_count input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
               
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#my_stock_form_count").serialize();
			 $.ajax({
				type: "POST",
				url: baseUrl+'inventory/addInventoryStockCount',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					 $('#my_stock_form_success').show();
					 $( "#selectcategory" ).focus();
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });*/
	function getinventoryCount(category,pLevel,locationid){
		var inventory_stock_value = $('#inventory_stock_value').val();
		H5_loading.show();
		 $.ajax({
				type: "POST",
				url: baseUrl+'inventory/getinventoryCount',
				data: {
					category : category,
					pLevel : pLevel,
					locationid : locationid,
					inventory_stock_value : inventory_stock_value
				},
				success: function(response) {
					H5_loading.hide();
					var obj = JSON.parse(response);
					if(obj.numRow==0){
						$('.filter_keyup').val('');
						$('#inventory_stock_value').val('');
					}else{
						if(obj.inventoryValue.inventory_id!=''){
							$('#inventory_stock_value').val(obj.inventoryValue.inventory_id);
						}
					}					  
					$.each( obj.inventoryValue, function(fieldName, value){
						$('#'+fieldName+'_value').val(value);
					});
					
					
				   return false;
				}
			});
	}


		$('body').on('change', '.category-stock-filter-value', function() {
		$(".pre-launch-elementry,\
		.pre-launch-middle,\
		.teacher-huddle-elementary,\
		.teacher-huddle-middle,\
		.prizes-elementary,\
		.prizes-middle,\
		.pledge-kits-elementary,\
		.pledge-kits-middle,\
		.tickers-stock,\
		.shirts-stock-elementry,\
		.general_Supplies,\
		.color_Powder\
		").addClass("by-default-hide");
	
		var category = $('#selectcategory').val();
		getinventoryValue(category);
		if(category==9){
			$(".pre-launch-elementry").removeClass("by-default-hide");
			$(".pre-launch-middle").removeClass("by-default-hide");
			
			
	   }
	   if(category==8){
		   $(".teacher-huddle-elementary").removeClass("by-default-hide");
			$(".teacher-huddle-middle").removeClass("by-default-hide");
			$("#program_levelDiv").removeClass("by-default-hide");
			
	   }
	   if(category==7){
			$(".prizes-elementary").removeClass("by-default-hide");
			$(".prizes-middle").removeClass("by-default-hide");
			
	   }
	   if(category==6){
			$(".pledge-kits-elementary").removeClass("by-default-hide");
			$(".pledge-kits-middle").removeClass("by-default-hide");
	   }
		if(category==5){
		   
		    $(".tickers-stock").removeClass("by-default-hide");
	  }
	if(category==4){
		$(".shirts-stock-elementry").removeClass("by-default-hide");
	}
	 if(category==3){
		   $(".general_Supplies").removeClass("by-default-hide");
	 }
	  if(category==2){
		   $(".color_Powder").removeClass("by-default-hide");
	 }
		
	});	
	
	function getinventoryValue(category){
		var inventory_stock_value = $('#inventory_stock_value').val();
		H5_loading.show();
		 $.ajax({
				type: "POST",
				url: baseUrl+'inventory/getinventoryValue',
				data: {
					category : category
					
				},
				success: function(response) {
					H5_loading.hide();
					var obj = JSON.parse(response);
					if(obj.numRow==0){
						$('.filter_keyup').val('');
						$('#inventory_stock_value').val('');
					}else{
						if(obj.inventoryValue.inventory_id!=''){
							$('#inventory_stock_value').val(obj.inventoryValue.inventory_id);
						}
					}					  
					$.each( obj.inventoryValue, function(fieldName, value){
						$('#'+fieldName+'_value').val(value);
					});
					
					
				   return false;
				}
			});
	}
	
		function getinventoryCountValueCount(category,pLevel,locationid){
		var inventory_stock_value = $('#inventory_stock_value').val();
		H5_loading.show();
		 $.ajax({
				type: "POST",
				url: baseUrl+'inventory/getinventoryCount',
				data: {
					category : category,
					pLevel : pLevel,
					locationid : locationid,
					inventory_stock_value : inventory_stock_value
				},
				success: function(response) {
					H5_loading.hide();
					var obj = JSON.parse(response);
					if(obj.numRow==0){
						$('.filter_keyup').val('');
						$('#inventory_stock_value').val('');
					}else{
						if(obj.inventoryValue.inventory_id!=''){
							$('#inventory_stock_value').val(obj.inventoryValue.inventory_id);
						}
					}					  
					$.each( obj.inventoryValue, function(fieldName, value){
						$('#'+fieldName+'_count').val(value);
					});
					
					
				   return false;
				}
			});
	}
	function getinventoryCountValue(category){
		console.log('hello');
		var inventory_stock_value = $('#inventory_stock_value').val();
		H5_loading.show();
		 $.ajax({
				type: "POST",
				url: baseUrl+'inventory/getinventoryValue',
				data: {
					category : category
					
				},
				success: function(response) {
					H5_loading.hide();
					var obj = JSON.parse(response);
					if(obj.numRow==0){
						$('.filter_keyup').val('');
						//$('#inventory_stock_value').val('');
					}else{
						if(obj.inventoryValue.inventory_id!=''){
							//$('#inventory_stock_value').val(obj.inventoryValue.inventory_id);
						}
					}					  
					$.each( obj.inventoryValue, function(fieldName, value){
						$('#'+fieldName+'_value').val(value);
					});
					
					
				   return false;
				}
			});
	}
	
	function stockCalculation(){
			console.log('tr');
			
			
		$("#my_stock_form input[rel]").each(function(){
			var relValue = $(this).attr('rel');	
			//console.log(relValue);
			$('#'+relValue+'_total').val('');
			var count = $('#'+relValue+'_count').val();
			var value = $('#'+relValue+'_value').val();
			var total = parseFloat(count) * parseFloat(value);
			//console.log(count);
			//console.log(value);
			if(total > 0){
				$('#'+relValue+'_total_count').val(count);
				$('#'+relValue+'_total').val(total.toFixed(2));
			}
			
			});
		clearInterval(interval);
		
		//intervalTime = 0;	
	
	}
	
	$( ".search-common-item" ).change(function(){
		var itemsName = $('#items_name').val();
		var locationid = $('#select_location').val();
		 H5_loading.show();
		 $.ajax({
				type: "POST",
				url: baseUrl+'inventory/getSingleInventoryCountByField',
				data: {
					itemsName : itemsName,
					locationid : locationid
				},
				success: function(response) {
					H5_loading.hide();
					var obj = JSON.parse(response);
					$('#stock_count_value').val(obj.numRow);
					$('#order-count').show();
					$('#msg-id').text('This item has ' +obj.numRow+ ' count only');
					return false;
				}
			});
	});
	
	
	$( "#my_orders_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_orders_form input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
                
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#my_orders_form").serialize();
					$.ajax({
				type: "POST",
				url: baseUrl+'inventory/addOrders',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					$('#my_orders_form input[type="text"],#my_orders_form input[type="date"]').val('');
					$('#select_location').val(null).trigger('change');
					$('#items_name').val(null).trigger('change');
					
					
					$('#order-count').css('display','none');
					$('#add-admin-form-success').show();
					return false;
				}
			});
				
        }
        event.preventDefault(); 
    });
	
	 $('body').on('click', '.delete-orders', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this order?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Order has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "inventory/deleteOrder",
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

});