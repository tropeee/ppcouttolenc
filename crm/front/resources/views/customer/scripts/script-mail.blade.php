$('.btn-toggle-important').click(function(e){
	id = $(this).attr('data-task');
	valor = invertir( $(this).attr('data-important') );
	link = "{{ url('solicitudes') }}/" + id;
	$.post(link, { importante: valor, _token: '{{ csrf_token() }}', _method: 'PUT'},function(data){
		console.log(data);
		if(data.error == 0){
			btn = '.btn-toggle-important[data-task="' + id + '"]';
			$(btn).attr('data-important',valor);
			if(valor==0){
				$(btn + ' i').removeClass('icon-alert-circle');
				$(btn + ' i').addClass('icon-alert-circle-outline');
				$(btn + ' i').css('color','');
			} else {
				$(btn + ' i').addClass('icon-alert-circle');
				$(btn + ' i').removeClass('icon-alert-circle-outline');
				$(btn + ' i').css('color','red');
			}
		}
	})
	.fail( function( jqXHR, textStatus, errorThrown){
		console.log( errorThrown );
		console.log( textStatus );
		console.log( jqXHR );
	} );
});

$('.btn-toggle-favorite').click(function(e){
	id = $(this).attr('data-task');
	valor = invertir( $(this).attr('data-favorite') );
	link = "{{ url('solicitudes') }}/" + id;
	$.post(link, { destacado: valor, _token: '{{ csrf_token() }}', _method: 'PUT'},function(data){
		console.log(data);
		if(data.error == 0){
			btn = '.btn-toggle-favorite[data-task="' + id + '"]';
			$(btn).attr('data-favorite',valor);
			if(valor==0){
				$(btn + ' i').removeClass('icon-star');
				$(btn + ' i').addClass('icon-star-outline');
				$(btn + ' i').css('color','');
			} else {
				$(btn + ' i').addClass('icon-star');
				$(btn + ' i').removeClass('icon-star-outline');
				$(btn + ' i').css('color','yellow');
			}
		}
	})
	.fail( function( jqXHR, textStatus, errorThrown){
		console.log( errorThrown );
		console.log( textStatus );
		console.log( jqXHR );
	} );
});

function invertir(valor){
	return (valor-1)*(-1);
}