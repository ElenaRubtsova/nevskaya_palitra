$(document).ready(function () {
    var i = 1;

    $(document).on('click', '#load_more_reviews', function (e) {
        i++;
        var url = '/reviews/?PAGEN_1=' + i,
            rewcount = parseInt(document.querySelector('.rew-count').innerHTML),
            maxcount = parseInt(document.querySelector('.max-count').innerHTML),
            containerID = '#reviews-list',
            container = $(containerID).find('> .row'),
            pagination = $('#reviews-list .load_more_wrapper');

        $(pagination).remove();
        $.post(url, function (response) {
            var reviews = $(response).find('#reviews-list .the-review');
            var pagination = $(response).find('#reviews-list .load_more_wrapper');
            $(container).append(reviews);

            rewcount += $(reviews).length;
            if (rewcount <= maxcount) {
                //document.querySelector('.rew-count').innerHTML = rewcount;
                if ((rewcount + $(reviews).length) <= maxcount) {
                    $(containerID).append(pagination);
                }
            }

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
            console.log(container);
            console.log(pagination);
        });
    });
});