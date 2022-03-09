$('#aplicaciones-table').DataTable({
    
    dom       : 'rt<"dataTables_footer"ip>',
    columnDefs    : [
        {
            // Target the id column
            targets: 0,
            width  : '72px',
        },
        // {
        //     // Target the image column
        //     targets   : 1,
        //     filterable: false,
        //     sortable  : false,
        //     width     : '80px'
        // },
        {
            //targets: 3,
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
            // Target the image column
            // targets   : 4,
            targets   : 3,
            filterable: false,
            sortable  : false
        }
    ],
    // initComplete  : function () {
    //     var api = this.api(),
    //         searchBox = $('#aplicaciones-search-input');

    //     // Bind an external input as a table wide search box
    //     if ( searchBox.length > 0 )
    //     {
    //         searchBox.on('keyup', function (event) {
    //             api.search(event.target.value).draw();
    //         });
    //     }
    // },
    lengthMenu    : [30, 60, 90, 120],
    pageLength    : 30,
    scrollY       : 'auto',
    scrollX       : false,
    responsive    : true,
    autoWidth     : false,
    scrollCollapse: true
});


$('#solicitar_aplicaciones').click(function(e){
    
    if( !checkCanSend() ){
        e.preventDefaut();
    }
});

$('#clean_all').click(function(e){
    $('.input-item').each(function(ind,ele){
        $(ele).prop('checked',false);
    });
    disableSend();
});

$('.input-item').change(function(e){
    checkCanSend();
});

function checkCanSend(){
    var items = $('.input-item:checked').length;
    var edades = $('.input-edad:checked').length;
    var niveles = $('.input-nivel:checked').length;
    if(items>0 && edades>0 && niveles>0){
        $('#solicitar_aplicaciones').attr('disabled',false);
        $('#solicitar_aplicaciones').attr('value',"Solicitar (" + items + ")");
        return true;
    } else {
        disableSend();
        return false;
    }
}

function setFocus(elemento){
    $('#' + elemento).trigger('focus');
}

function disableSend(){
    $('#solicitar_aplicaciones').attr('disabled',true);
    $('#solicitar_aplicaciones').attr('value',"Solicitar");
}

function getValor(elemento){
    return $('#' + elemento).val();
}

$(".btn-add").click(function(){ 
    var html = $(".clone").html();
    $(".clone").before(html);
});

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

setTimeout(function(){
    checkMore();
    checkCanSend();
},1000);