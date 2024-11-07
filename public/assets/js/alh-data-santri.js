function showSantri(url) {
    $.ajax({
        url: url,
        type: 'GET',
    }).done(function (data) {
        $("#content-show-santri").html(data)
    });
}