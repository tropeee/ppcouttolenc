<br>
<hr>
<br>
<p class="text-center">
	Aplicaciones gráficas
</p>
<div class="form-group">
	<div class="form-check">
		<label class="form-check-label">
			<input type="checkbox" class="form-check-input" name="moreGrafico" id="moreGrafico" value="1"/>
			<span class="checkbox-icon"></span>
			<span>Deseo solicitar aplicaciones gráficas</span>
		</label>
	</div>
</div>
<p class="show_more_grafico">Por favor marque aquellos elementos que sean requeridos. (Máximo 5 elementos)</p>
<div class="show_more_grafico">
	<table id="aplicaciones-table" class="table dataTable">
		<thead>
			<tr>
				<th>
					<div class="table-header">
						<span class="column-title">#</span>
					</div>
				</th>
				<th>
					<div class="table-header">
						<span class="column-title">Nombre</span>
					</div>
				</th>
				<th>
					<div class="table-header">
						<span class="column-title">Tamaño</span>
					</div>
				</th>
				<th>
					<div class="table-header">
						<span class="column-title">Solicitar</span>
					</div>
				</th>
			</tr>
		</thead>
	
		<tbody>
			@php
			$cont = 1;
			@endphp
			@foreach ($data as $d)
				@php
					$s = $d['item'];
				@endphp
				@if ($d['force_individual'] == "true")
				<tr>
					<td>
						{{$cont++}}
					</td>
					<td>
						<span class="title font-weight-bold">{{$s['nombre']}}</span>
					</td>
					<td>
						{{$s['base']}},{{ $s['altura']}},{{$s['unit_area'] }}
					</td>
					<td>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="form-check-input input-item" name="items[]" id="item{{$d['id']}}" value="{{$d['id']}}"/>
							<span class="custom-control-indicator"></span>
						</label>
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>