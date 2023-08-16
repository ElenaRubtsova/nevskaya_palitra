jQuery(document).ready(function($) {
    
    $(document).on('click', '.brand-load-full', function(e) {
        e.preventDefault();
        
        var $target = $(this),
            code = $target.data('code'),
            url = window.location.href,
            currentItems = $('#' + code + ' .index-catalog .row .col-4to12');

        if (!$(this).hasClass("action-load")) {
            $target.addClass("action-load");
            $.post(url, { brand_full_list: true, brand_req_code: code }, function(response) {
                $($target).remove();
                let items = $(response).find('#' + code + ' .index-catalog .row .col-4to12');
                if (items.length <= currentItems.length) return;
                console.log(items.length);
                items.splice(0, currentItems.length);
                console.log(items.length);
                $('#' + code + ' .index-catalog .row').append(items);
                let images = document.querySelectorAll('img.olazy');
                images.forEach(function(image) {
                    var src = image.dataset.src
                    image.src = src;
                    image.onload = function() {
                    image.classList.add('loaded');
                        if ( this.parentNode.querySelector('.spinner') !== null ) {
                            this.parentNode.removeChild( this.parentNode.querySelector('.spinner') )
                            // this.parentNode.querySelector('.spinner').remove()
                        }
                    }
                });
            });
        }
        
    });
    
});