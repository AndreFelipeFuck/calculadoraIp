<?php 
	include "cabecalho.php";
	//var_dump($_POST);
?>
<br>
	<div class="conteiner1">
		<section class="resultCont">
			<div class="card2"><h3>Resultado:</h3></div>
				<form class="form-group">
					<div class="form-group">
						<label for="exampleFormControlInput1"><h4>O IP inserido foi: <?php echo $_POST['ip'];?></h4></label>
						<br>
						<label for="exampleFormControlInput1"><h4>A máscara inserida foi: <?php echo $_POST['barra'];?></h4></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>A quantidade de sub-redes:<?php $calc->qtdSubRedes();?></h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>Quantidade de hots por rede: <?php   $calc -> qtdNumeroHots();?></h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>O endereços de rede:
							<?php 
								/*foreach ($endereco['rede'] as $key => $value) {
									print_r($calc->ip[0]);
									echo ".";
									print_r($calc->ip[1]);
									echo ".";
									print_r($calc->ip[2]);
									echo ".";
									?>
									<pre><?php echo "$value";?></pre>
									<?php 
								}*/
							?>
						</h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>O endereços do broadcast:
							<?php 
								/*foreach ($endereco['broadcast'] as $key => $value) {
									print_r($calc->ip[0]);
									echo ".";
									print_r($calc->ip[1]);
									echo ".";
									print_r($calc->ip[2]);
									echo ".";
									?>
									<pre><?php echo "$value";?></pre>
									<?php 
								}*/
							?>
						</h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>O primeiro endereço de host:</h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>O último endereço de host:</h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>Nova máscara de rede em formato decimal: <?php $calc->novaMascara();?></h5></label>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>Classe do IP: </h5></label>
						<h3><samp class="badge badge-pill badge-danger"><?php $calc->classeIp(); ?></samp></h3>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1"><h5>O endereço de IP é: </h5></label>
						<h3><samp class="badge badge-pill badge-danger"><?php $calc->tipoIp(); ?></samp></h3>
					</div>
					<div>
						<button type="submit" class="btn" id="btn-menu" action="">⬅ Menu</button>
					</div>
				</form>
		</section>
		
	</div>
<?php 
	include "rodape.php";
?>