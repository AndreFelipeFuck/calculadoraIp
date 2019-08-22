<?php 
	//error_reporting(E_ALL);
	include "cabecalho.php";
	
?>
<br>
	<section class="conteiner1">
		<section class="resultCont">
			<div class="card2"><h3>Resultado:</h3></div>
				<div class="form-group">
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
						
						<table class="table">
						  <thead class="tabela">
							<tr>
							  <th scope="col">Endereço de Rede:</th>
							  <th scope="col">Primeiro endereço de host:</th>
							  <th scope="col">Último endereço de host:</th>
							  <th scope="col">Endereços do broadcast:</th>
							</tr>
						  </thead>
						  <tbody>
							<?php for ($i=0; $i < $qtd ; $i++) { 
								?><tr>
									<td>
										<?php  
											print_r($calc->ip[0]);
											echo ".";
											print_r($calc->ip[1]);
											echo ".";
											print_r($calc->ip[2]);
											echo ".";
											echo $result['rede'][$i];
										?>
									</td>

									<td>
										<?php  
											print_r($calc->ip[0]);
											echo ".";
											print_r($calc->ip[1]);
											echo ".";
											print_r($calc->ip[2]);
											echo ".";
											echo $result['primeiro_host'][$i];
										?>
									</td>

									<td>
										<?php  
											print_r($calc->ip[0]);
											echo ".";
											print_r($calc->ip[1]);
											echo ".";
											print_r($calc->ip[2]);
											echo ".";
											echo $result['ultimo_host'][$i];
										?>
									</td>

									<td>
										<?php  
											print_r($calc->ip[0]);
											echo ".";
											print_r($calc->ip[1]);
											echo ".";
											print_r($calc->ip[2]);
											echo ".";
											echo $result['broadcast'][$i];
										?>
									</td>


								</tr><?php
							}?>
								
						  </tbody>
						</table>	
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
				</div>
		</section>
		
	</div>>
<?php 
	include "rodape.php";
?>
