(function($) {
    $.fn.checkFileType = function(options) {
        var defaults = {
            allowedExtensions: [],
            success: function() {},
            error: function() {}
        };
        options = $.extend(defaults, options);

        return this.each(function() {

            $(this).on('change', function() {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1);

                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    options.success();

                }

            });

        });
    };

})(jQuery);

$(function() {
    $('#attachment_file').checkFileType({
        allowedExtensions: ['zip','rar'],
        success: function() {
           // alert('Success');
        },
        error: function() {
            alert('You should must select Zip File');
        }
    });

});

 $('#attachment_file').bind('change', function() {
    if (this.files[0].size/1024/1024 > 1) {
        
        alert('File Should be less then 1 MB');
    }
    
 });