<br>
<hr>
<br>
<p class="text-center">
	Información adicional
</p>
<div class="form-group">
	<div class="form-check">
		<label class="form-check-label">
			<input type="checkbox" class="form-check-input" id="moreInfo" name="moreInfo" value="1"/>
			<span class="checkbox-icon"></span>
			<span>Deseo adjuntar un archivo</span>
		</label>
	</div>
</div>
<p class="show_more_info">Por favor seleccione el archivo y describa para qué es necesario.</p>
<div class="show_more_info row">
	<div class="col-12 col-md-6">
		<br>
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="extraFile" name="extraFile" aria-describedby="descrExtraFileHelp">
			<label id="labelExtraFile" class="custom-file-label" for="extraFile">Adjuntar archivo</label>
			<small id="extraFileHelp" class="form-text text-muted">Seleccione el archivo para adjuntar</small>
		</div>
	</div>
	<div class="col-12 col-md-6">
		<div class="form-group">
			<textarea class="form-control" id="descrExtraFile" name="descrExtraFile" rows="3" aria-describedby="descrExtraFileHelp"></textarea>
			<label for="descrExtraFile">Modo de uso del archivo</label>
			<small id="descrExtraFileHelp" class="form-text text-muted">Describa cómo debemos usar el contenido del archivo adjunto</small>
		</div>
	</div>
</div>