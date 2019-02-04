<?php
	//assign default values to all variables
	$line1 = 'Sample';
	$line2 = '<br>123-456-7890';

	$fontFamily = 'arial';
	$fontWeight = 'normal';
	$color = 'black';
	$backgroundColor = 'white';
	$fontSize = 14;
	$lineHeight = 20;

	$marginTop = 0.43;
	$marginRight = 0.41;
	$marginBottom = 0;
	$marginLeft = 0.41;

	$rowHeight = 0.514;
	$cellWidth = 1.17;
	$gutterWidth = 0.12;

	//overwrite default values with GET whenever a GET value exists
	if(isset($_GET['line1'])){
		$line1 = $_GET['line1'];
		//if line1 param was passed in then clear out default $line2 value
		$line2 = '';
	}
	if(!empty($_GET['line2'])){
		$line2 = '<br>'.$_GET['line2'];
	}
	if(!empty($_GET['fontFamily'])){
		$fontFamily = $_GET['fontFamily'];
	}
	if(!empty($_GET['fontWeight'])){
		$fontWeight = $_GET['fontWeight'];
	}
	if(!empty($_GET['color'])){
		$color = $_GET['color'];
	}
	if(!empty($_GET['backgroundColor'])){
		$backgroundColor = $_GET['backgroundColor'];
	}
	if(!empty($_GET['fontSize']) && is_numeric($_GET['fontSize'])){
		$fontSize = $_GET['fontSize'];
	}
	if(!empty($_GET['lineHeight']) && is_numeric($_GET['lineHeight'])){
		$lineHeight = $_GET['lineHeight'];
	}
	if(!empty($_GET['marginTop']) && is_numeric($_GET['marginTop'])){
		$marginTop = $_GET['marginTop'];
	}
	if(!empty($_GET['marginRight']) && is_numeric($_GET['marginRight'])){
		$marginRight = $_GET['marginRight'];
	}
	if(!empty($_GET['marginBottom']) && is_numeric($_GET['marginBottom'])){
		$marginBottom = $_GET['marginBottom'];
	}
	if(!empty($_GET['marginLeft']) && is_numeric($_GET['marginLeft'])){
		$marginLeft = $_GET['marginLeft'];
	}
	if(!empty($_GET['rowHeight']) && is_numeric($_GET['rowHeight'])){
		$rowHeight = $_GET['rowHeight'];
	}
	if(!empty($_GET['cellWidth']) && is_numeric($_GET['cellWidth'])){
		$cellWidth = $_GET['cellWidth'];
	}
	if(!empty($_GET['gutterWidth']) && is_numeric($_GET['gutterWidth'])){
		$gutterWidth = $_GET['gutterWidth'];
	}
?>

<style>

	*{
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}

	#labelTable{
		font-family: <?= $fontFamily ?>;
		font-weight: <?= $fontWeight ?>;
		color: <?= $color ?>;
		background-color: <?= $backgroundColor ?>;
		font-size: <?= $fontSize.'px' ?>;
		line-height: <?= $lineHeight. 'px' ?>;
	}

	body{
		margin: <?= $marginTop.'in '. $marginRight. 'in '. $marginBottom.'in '. $marginLeft. 'in' ?>; 
	}
	tr{
		height: <?= $rowHeight. 'in' ?>;
	}

	td.textTd{
		width: <?= $cellWidth. 'in' ?>;
	}

	td.gutterTd{	
		width: <?= $gutterWidth. 'in' ?>;
	}
	table{
		border-collapse: collapse;
		text-align: center;
	}

	/*display border on screen only, but not for printing*/
	@media screen{
		td{
			border: 1px solid black;
		}    
	}

	/*removes extra printer margins*/
	@page{
		margin: 0;
	}
	
</style>
    
<body>
	<table id='labelTable'>
		<tbody>
			<?php
				//create 20 rows
				for($i=0; $i < 20; $i++){				
					echo "<tr>";
						//create 6 columns
						for($j=0; $j<6; $j++){
							echo "<td class='textTd'>
									<span>".$line1.$line2."</span>
								</td>";
							//create empty gutter td between each "text cell"
							if($j<5){
								echo "<td class='gutterTd'></td>";
							}
						}
					echo "</tr>";	
				}
			?>
		</tbody>
	</table>

</body>