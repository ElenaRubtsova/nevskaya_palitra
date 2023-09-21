function show_popup(item) {
    document.getElementById('p-title').innerHTML = item.data('name');

    var photo = document.getElementById('p-photo');
    if (photo != null) photo.src = item.data('image');

    document.getElementById('p-description').innerHTML = item.data('detail-text');

    var url = document.getElementById('p-url');
    if (url != null && item.data('href') != null) url.href = item.data('href');
    //else url.addClass('no');

    $("#set_popup").addClass('active');
}

function close_popup() {
    $(".overlay.active").removeClass("active");
}
