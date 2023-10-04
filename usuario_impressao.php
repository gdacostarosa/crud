

<?php

// ===========================================================================================================================================
// Inicia a Geração do PDF
ob_clean();
ob_start();




// -------------------------------------------------------------------------------------------------------
// Tabela Impressão ?>

<style>

	td {
		border: solid 1px #000;
		justify-content: center !important;
		width: 70%;
		font-size: 18px;
		
	  }
	  th {
		font-size: 22px;
		text-align: center;
		padding-top: 10px;
		justify-content: center !important;
		width: 100%;
		
	  }
	  table{
		justify-content: center !important;
		
		margin: 10px;
	  }

</style>

<page backtop="8mm" backbottom="10mm" backleft="10mm" backright="10mm">
	<!-- Cabeçalho -->
	<page_header>
		<table border="0" style="width: 100%; margin-top:17px;" cellpadding="5" align="center;">
			<tr align="center;" style="justify-content: center;">
				<td style="border=none;" style="width: 42.33%; text-align:right;">CRUD &nbsp;|&nbsp; testando PDF</td>
				<td style="border=none;" style="width: 42.33%; text-align:center;">Gerado em <?= date("d/m/Y - H:i") ?></td>
			</tr>
		</table>
	</page_header>
	<!-- Tabela de Resultados -->
	<br>
	<table cellpadding="0" cellspacing="0" border="1" style="width:100%;" align='center'>
		<!-- Título -->
		<tr style="text-align:center; background: #CCC;">
			<td style="padding: 5px" colspan="100%" style="width:80%"><h3>LISTAGEM DOS CADASTROS</h3></td>
		</tr>
		<!-- Cabeçalho da Tabela -->
		<tr align='center' style="background: #E5E5E5;"> 
			<td	style="width:80%" style="height:30px">Teste de Impressão - CRUD</td>
		</tr>
	</table>
	<br>
	<table align='center' style='width: 100%;'>
				<tr style="width:80%">
					<th style="width:90px">ID </th>
        			<th style="width:290px">Nome</th>
        			<th style="width:200px">E-mail</th>
        			<th style="width:165px" >Data de Nascimento<</th>	
				</tr>	
</table>
				 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// valida conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		print "<table align='center'>";
			print "<tr align='center' style='width:300px;'>";
			print "<td style='background: #E5E5E5;' style='width:87px';'>";
			echo $row["id"];
			print "</td>";
			print "<td style='width:300px';>";
			echo $row["nome"];
			print "</td>";
			print "<td style='width:210px';>";
			echo $row["email"];
			print "</td>";
			print "<td style='width:140px'>";
			echo $row["data_nasc"];
			print "</td>";
			print	"</tr>" ;		
			print "</table>";
			
		}

    }


	
	} else {
    echo "Não houve resultados";
}
$conn->close();
?>



				
				
	
</page> <?php
// -------------------------------------------------------------------------------------------------------
// Gerar o PDF

$html = ob_get_clean();
include('html2pdf2/html2pdf.class.php');

try
	{
	
	$html2pdf = new HTML2PDF('L', 'A4', 'pt', true, 'UTF-8', 0);
	$html2pdf->pdf->SetDisplayMode('fullpage');
	$html2pdf->setTestTdInOnePage(true);
	$html2pdf->writeHTML($html, isset($_GET['vuehtml']));
	$html2pdf->Output('impressao.pdf');
	}
catch (HTML2PDF_exception $e)
	{
	echo $e;
	exit;
	}

// ===========================================================================================================================================