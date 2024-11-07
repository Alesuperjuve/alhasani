
function tampilkanPesan(url) {
    url: url;
    alert(url);
}


function showSantri(url) {
    $.ajax({
        url: url,
        type: 'GET',
    }).done(function (data) {
        html(data)
    });
}
