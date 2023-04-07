function show_popup(item) {
    document.querySelector('.title').innerHTML = item.data('name');
    document.querySelector('.photo').src = item.data('image');
    document.querySelector('.photo').alt = item.data('name');
    document.querySelector('.description').innerHTML = item.data('detail-text');

    $("#review").addClass('active');
}

function close_popup() {
    $(".overlay.active").removeClass("active");
}
