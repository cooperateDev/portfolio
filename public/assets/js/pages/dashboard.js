(function ($) {
    $('.month').change(function() {
    	var postData = {
	        "year" : $('.year').val(),
	        "month" : $('.month').val(),
	    };

    	$.ajax({
            url: 'admin/filter',
            type: 'get',
            dataType: 'html',
            data: postData,
            success: function (data) {
                
            }
        });
    });

    $('.year').change(function() {
    	var postData = {
	        "year" : $('.year').val(),
	        "month" : $('.month').val(),
	    };

    	$.ajax({
            url: 'admin/filter',
            type: 'get',
            dataType: 'html',
            data: postData,
            success: function (data) {
                
            }
        });
    });

})(jQuery);

