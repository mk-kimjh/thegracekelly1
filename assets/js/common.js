(function($) {
    
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    
    $(document).on('click', '#header .btn-open-menu', function() {
        $('body').addClass('aside-open');
        $('#aside .btn-close-menu').focus();
    });
    
    $(document).on('click', '#aside .btn-close-menu', function() {
        $('body').removeClass('aside-open');
        $('#header .btn-open-menu').focus();
    });
    
    $(document).on('click', '#aside', function(e) {
        if ($(e.target).attr('id') == 'aside') {
            $('body').removeClass('aside-open');
            $('#header .btn-open-menu').focus();
        }
    }); 
    
})(jQuery);