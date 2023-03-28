$(document).ready(function() {
    
    $(document).on('click', '#load_more_reviews', function(e) {
        
        var $this = $(this),
            url = $this.data('url'),
            containerID = '#reviews-list',
            container = $(containerID).find('> .row'),
            pagination = $('#reviews-list .load_more_wrapper');

        if (url) {
            $(pagination).remove();
            $.post(url, function(response) {
                var reviews = $(response).find('#reviews-list .the-review');
                var pagination = $(response).find('#reviews-list .load_more_wrapper');
                
                $(container).append(reviews);
                if ($(pagination).length) $(containerID).append(pagination);
                
                var images = document.querySelectorAll('.olazy');
                images.forEach(function (image) {
                    var src = image.dataset.src
                    image.src = src;
                    image.onload = function () {
                        image.classList.add('loaded');
                        if (this.parentNode.querySelector('.spinner') !== null) {
                            this.parentNode.removeChild(this.parentNode.querySelector('.spinner'))
                            // this.parentNode.querySelector('.spinner').remove()
                        }
                    }
                });
            });
        }
                
    });
    
});