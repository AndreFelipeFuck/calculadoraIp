<?php 
	include "cabecalho.php"
?>
<br>
	<div class="conteiner1">
		<section class="calcCont">
			<div class="card1"><h3>Calculadora IP</h3></div>
					<p>- Para calcular o IP você precisará do Endereço e da contagem da máscara em BITs</p>
					<p>Ex: 192.168.0.10/24</p>
					<form class="form-group" method="post" action="Calculadora.php">
						<div class="form-group">
							<label for="exampleFormControlInput1">Endereço IP:</label>
							<input type="text"  class="form-control" id="exampleFormControlInput1" name="ip" maxlength="12" required="required">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput2">Máscara em BITs:</label>
							<input type="text"  class="form-control" id="exampleFormControlInput2" maxlength="2" name="barra" required="required">
						</div>

						<br>
						<div class="form-group">
							<button type="submit" class="btn" id="btn-calc">Calcular</button>
						</div>
					</form>
		</section>
		<section class="infoCont">
			<div class="card1"><h3>Informações:</h3></div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</section>			
	</div>

<?php 
	include "rodape.php"
?>