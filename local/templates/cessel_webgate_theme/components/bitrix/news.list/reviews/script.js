function show_popup(item) {
    let popup = $(".popup");
    console.log(item);
    $("#review").addClass('active');
    document.querySelector('.photo').src = item['IMAGE'];
    document.querySelector('.photo').alt = item['NAME'];
    document.querySelector('.title').innerHTML = item['NAME'];
    document.querySelector('.description').innerHTML = item['TEXT'];

    //popup.getElementById('description').innerHTML = 't3';
}
function close_popup() {
    $(".overlay.active").removeClass("active");
}
$(document).ready(function () {
    var i = 1;

    $(document).on('click', '#load_more_reviews', function (e) {
        i++;
        var url = window.location.pathname + '?PAGEN_2=' + i,
            rewcount = document.querySelectorAll('.the-review').length,
            maxcount = parseInt(document.querySelector('.max-count').innerHTML),
            containerID = '#reviews-list',
            container = $(containerID).find('> .row'),
            pagination = $('#reviews-list .load_more_wrapper');

        $(pagination).remove();
        $.post(url, function (response) {
            var reviews = $(response).find('#reviews-list .the-review');
            var pagination = $(response).find('#reviews-list .load_more_wrapper');

            rewcount += $(reviews).length;
            if (rewcount <= maxcount) {

                $(container).append(reviews);
                $(containerID).append(pagination);
                document.querySelector('.rew-count').innerHTML = rewcount.toString();

                if (rewcount == maxcount)
                    document.getElementById('load_more_reviews').disabled = true;
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
        });
    });
});