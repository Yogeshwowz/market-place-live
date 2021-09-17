$(document).ready(function(){
	var baseUrl = $('#baseURL').val();
	
	$( "#my_resources" ).submit(function( event ){ //on form submit 

     // event.preventDefault(); 	
       H5_loading.show();
	   $( "#my_resources" ).submit();

	});
	$("#my_admin_form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	 $('body').on('click', '.delete-admin-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'User has been successfully deleted!',
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
                    title: 'Deactived!',
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
                    title: 'Actived!',
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
	$( "#my_testimonial" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_testimonial input[required=true],textarea[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					//$('.invalid-feedback').show();
                }
               
        });
        if(proceed){
			H5_loading.show();
		    $( "#my_testimonial" ).submit();
			
				
        }
        event.preventDefault(); 
    });
	$("#my_testimonial input[required=true],textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
		 $('body').on('click', '.delete-testimonial', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this testimonial?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Testimonial has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteTestimonial",
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