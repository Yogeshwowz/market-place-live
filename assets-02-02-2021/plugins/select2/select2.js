$(document).ready(function() {
   'use strict';

   $('.select2').select2({
	 minimumResultsForSearch: Infinity
   });

   

   // Select2 by showing the search
   $('.select2-show-search').select2({
    dir: "ltr",
	 minimumResultsForSearch: '',
	 placeholder: "Search"
   });

   $('#job').select2({
	 minimumResultsForSearch: '',
	 placeholder: "Search jobs here "

   });
   $('#employe').select2({
	 minimumResultsForSearch: '',
	 placeholder: "Search profiles here "
   });

   function formatState (state) {
	  if (!state.id) { return state.text; }
	  var $state = $(
		'<span><img src="../assets/images/flags/' +  state.element.value.toLowerCase() +
	'.svg" class="img-flag" /> ' +
	state.text +  '</span>'
	 );
	 return $state;
	};

	$(".select2-flag-search").select2({
	  templateResult: formatState,
	  templateSelection: formatState,
	   escapeMarkup: function(m) { return m; }
	});
	
	$("select2").select2({
        width: '100%'
    });
	$(".ad-post-status").select2({
        width: '100%',
		theme: "classic"
    });
	
	$('.select2-show-search-property').select2({
	 dir: "ltr",
	 placeholder: "Select Owner Entity Type",
	  multiple: true,
	  allowClear: true
		
   });
   
    $("#interested_in").select2({
	  placeholder: "You are interested in",
	  allowClear: true,
	  width: '100%'
	});
	$("#field_1").select2({
	  placeholder: "You are a(n)",
	  allowClear: true,
	  width: '100%'
	});
 });
