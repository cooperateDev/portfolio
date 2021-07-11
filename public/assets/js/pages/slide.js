(function ($) {
function preview_profile_image(input) {
        if (input.files && input.files[0]) {
            var filerdr = new FileReader();

            filerdr.onload = function(e) {
                jQuery('.list_prev').attr(src, e.target.result);
            }
            filerdr.readAsDataURL(input.files[0]);
        }
    }

})(jQuery);