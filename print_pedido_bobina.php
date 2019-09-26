<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Pedido de Bobinas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php
	session_start("pedido");
	require_once 'checa.php';
	
	if ($_POST) {  
	include("./includes/conexao.php");
			$data = $_POST["data"];
			$vexb = $_POST["vexb"];
			$ccod = $_POST["ccod"];
			$cnom = $_POST["cnom"];
			$craz = $_POST["craz"];
			$cend = $_POST["cend"];
			$cbai = $_POST["cbai"];
			$ccid = $_POST["ccid"];
			$cuf = $_POST["cuf"];
			$ccep = $_POST["ccep"];
			$ccnp = $_POST["ccnp"];
			$cies = $_POST["cies"];
			$cte1 = $_POST["cte1"];
			$cema = $_POST["cema"];
			$ccon = $_POST["ccon"];
			$bobi = $_POST["bobi"];
			$bvia = $_POST["bvia"];
			$bpap = $_POST["bpap"];
			$nume = $_POST["nume"];
			$core = $_POST["core"];
			$loca = $_POST["loca"];
			$qtcx = $_POST["qtcx"];
			$valu = $_POST["valu"];
			$valu = str_replace(",",".",$valu);
			$valt = str_replace(",",".",$qtcx)*str_replace(",",".",$valu);
			$praz = $_POST["praz"];
			$tran = $_POST["tran"];
			$arte = $_POST["arte"];
			$obse = $_POST["obse"];
			$aimg = $_POST["aimg"];
			if (is_float($valt)){
			number_format($valt,2);}
						
			
			try { 
                     $conecta = new PDO("mysql:host=localhost:3308;dbname=baseproducao","root","piske"); //istancia a classe PDO
			         $comandoSQL = "INSERT INTO pedbobina (data,vexb,ccod,cnom,craz,cend,cbai,ccid,cuf,ccep,ccnp,cies,cte1,cema,ccon,bobi,bvia,bpap,nume,core,loca,qtcx,valu,valt,praz,tran,arte,obse,aimg) VALUES ('$data','$vexb','$ccod','$cnom','$craz','$cend','$cbai','$ccid','$cuf','$ccep','$ccnp','$cies','$cte1','$cema','$ccon','$bobi','$bvia','$bpap','$nume','$core','$loca','$qtcx','$valu','$valt','$praz','$tran','$arte','$obse','$aimg')";
			         
					 $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			         $grava->execute(array()); 	                                        
                     echo '<br/><div class="alert alert-success" role="alert">
                                
                           </div>';
						   
		          } catch(PDOException $e) { // caso retorne erro
                     
                     echo '<br/><div class="alert alert-success" role="alert">
                                Erro ' . $e->getMessage() . 
                          '</div>';
		          }
	}

?>
<h3 align="center"><a href="index_vendedoras.php"><img src="images/logo.jpg" alt="" height="30"></a><strong>Pedido de Bobinas (Aperte Crtl P) para imprimir o pedido</strong></h3>
<h5 nowrap=true><strong>Data:</strong><?php echo $data; ?></h5><img name="aimg" src="<?php echo $aimg ?>" width='250px' align="right"/>
<h5 nowrap=true><strong>Vendedora:</strong><?php echo $vexb; ?></h5>
<h5 nowrap=true><strong>Nome Fantasia:</strong><?php echo $cnom; ?></h5>
<h5 nowrap=true><strong>Razão Social:</strong><?php echo $craz; ?></h5>
<h5 nowrap=true><strong>Endereço:</strong><?php echo $cend; ?></h5>
<h5 nowrap=true><strong>Bairro:</strong><?php echo $cbai; ?></h5>
<h5 nowrap=true><strong>Cidade:</strong><?php echo $ccid; ?></h5>
<h5 nowrap=true><strong>Estado:</strong><?php echo $cuf; ?></h5>
<h5 nowrap=true><strong>Cep:</strong><?php echo $ccep; ?></h5>
<h5 nowrap=true><strong>CNPJ / CPF:</strong><?php echo $ccnp; ?></h5>
<h5 nowrap=true><strong>Insc. Estadual:</strong><?php echo $cies; ?></h5>
<h5 nowrap=true><strong>Telefone 1:</strong><?php echo $cte1; ?></h5>
<h5 nowrap=true><strong>E-mail:</strong><?php echo $cema; ?></h5>
<h5 nowrap=true><strong>Contato:</strong><?php echo $ccon; ?></h5>
<h3>Bobinas</h3>
<h5 nowrap=true><strong>Bobina:</strong><?php echo $bobi; ?></h5>
<h5 nowrap=true><strong>Nº de Vias:</strong><?php echo $bvia; ?></h5>
<h5 nowrap=true><strong>Tipo de Papel:</strong><?php echo $bpap; ?></h5>
<h5 nowrap=true><strong>Local da Impressão:</strong><?php echo $loca; ?></h5>
<h5 nowrap=true><strong>Nº de Cores:</strong><?php echo $nume; ?></h5>
<h5 nowrap=true><strong>Cores:</strong><?php echo $core; ?></h5><img name="aimg" src="images/carimbo.jpg" width="200" align="right"/>
<h5 nowrap=true><strong>Tipo de Arte:</strong><?php echo $arte; ?></h5>
<h5 nowrap=true><strong>Quant. de Caixas:</strong><?php echo $qtcx; ?></h5>
<h5 nowrap=true><strong>Valor Unitário: R$ </strong><?php echo $valu; ?></h5>
<h5 nowrap=true><strong>Valor Total: R$ </strong><?php echo $valt; ?></h5>
<h5 nowrap=true><strong>Prazo de Pagamento:</strong></h5><h5 nowrap=true><?php echo $praz; ?></h5>
<h5 nowrap=true><strong>Transporte:</strong></h5><h5 nowrap=true><?php echo $tran; ?></h5>
<h5 nowrap=true><strong>Observações:</strong></h5><h5 nowrap=true><?php echo $obse; ?></h5>
<h5 nowrap=true><strong>PAPEL KPR 55 CONFORME NOVA LEGISLAÇAO</strong></h5>
<h5 nowrap=true><strong>ARTE - FAVOR CONFERIR E SÓ ASSINAR SE ESTIVER DE ACORDO COM A MESMA</strong></h5>
<h5 nowrap=true><strong>PELO PRESENTE DOCUMENTO, AUTORIZO A EMPRESA LUNARDI IND.COM.LTDA LTDA A CONFECÇÃO</strong></h5>
<h5 nowrap=true><strong>DESSE PRODUTO CONFORME AS ESPECIFICAÇÕES ACIMA, E DECLARO QUE ACEITO O PRESENTE </strong></h5>
<h5 nowrap=true><strong>PEDIDO COM PROVÁVEL VARIAÇÃO DE + OU - 10% NA QUANTIDADE DE CAIXAS SOLICITADA.</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>VALIDADE DESSA PROPOSTA: 03 DIAS</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>DATA DESSA PROPOSTA: ___________________________</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>DE ACORDO: _____________________________________</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>IDENTIFICAÇÃO DA ASSINATURA: ___________________</strong></h5>



</body>
</html>