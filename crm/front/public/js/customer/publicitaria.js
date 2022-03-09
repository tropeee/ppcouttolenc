$('#aplicaciones-table').DataTable({
    
    dom       : 'rt<"dataTables_footer"ip>',
    columnDefs    : [
        {
            // Target the id column
            targets: 0,
            width  : '72px',
        },
        {
            targets: 2,
            render : function (data, type) {
                if ( type === 'display' )
                {
                    var split = data.split(",");
                    var i;
                    var text = "";
                    for (i = 0; i < split.length-1; i++) {
                        
                        text += Number(split[i]) + split[split.length - 1] + " x ";
                    }
                    text = text.slice(0,-2);
                    return text;
                }

                return data;
            }
        },
        {
            targets   : 3,
            filterable: false,
            sortable  : false
        }
    ],
    lengthMenu    : [30, 60, 90, 120],
    pageLength    : 30,
    scrollY       : 'auto',
    scrollX       : false,
    responsive    : true,
    autoWidth     : false,
    scrollCollapse: true
});

$('.input-item').change(function(e){
    var items = $('.input-item:checked').length;
    if(items>5){
        $(this).prop('checked',false);
    }
});

$(".btn-add").click(function(){ 
    var html = $(".clone").html();
    $(".clone").before(html);
});

$("body").on("click",".btn-remove",function(){ 
    $(this).parents(".input-group").remove();
});

$('input[name="duracion"]').change(function (e) {
    checkTipoCampania();
});

function checkTipoCampania(){
    var val = $('input[name="duracion"]:checked').val();
    console.log(val);
    if(val == 2){
        $('.fecha-fin').removeClass('d-none');
    } else {
        $('.fecha-fin').addClass('d-none');
    }
}

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

$('#moreGrafico').change(function (e) {
    checkGrafico();
});

function checkGrafico() {
    if ( $('#moreGrafico').prop('checked') ){
        $('.show_more_grafico').slideDown();
    } else {
        $('.show_more_grafico').slideUp();
    }
}

setTimeout(() => {
    checkTipoCampania();
    checkMore();
    checkGrafico();
}, 1000);

// $('#solicitar').click(function(e){
//     $('#campaniaForm').submit();
// });