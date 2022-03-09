$('#moreInfo').change(function (e) {
    checkMore();
});

$('#extraFile').change(function(e){
    $('#labelExtraFile').text( $(this)[0].files[0].name );
});

function checkMore() {
    if ( $('#moreInfo').prop('checked') ){
        $('.show_more_info').slideDown();
        $('#extraFile').attr('required',true);
        $('#descrExtraFile').attr('required',true);
    } else {
        $('.show_more_info').slideUp();
        $('#extraFile').attr('required',false);
        $('#descrExtraFile').attr('required',false);
    }
}

setTimeout(() => {
    checkMore();
}, 1000);