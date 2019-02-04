<?php
	$fontFamily = 'arial';
	$fontSize = '14px';

	for($i=0; $i<20; $i++){
		//if($i<5){
			$text[$i][0] = "Bock";
			$text[$i][1] = "<br>732-364-3580";
		//}else{
		//	$text[$i][0] = "";
		//	$text[$i][1] = "";
		//}
	}
	//$text[0][0] = "600dpi dell";
	//$text[0][1] = "<br>media: labels";

	
?>


<style>

	*{
		box-sizing: border-box;
		font-weight: bold;
		margin: 0;
		padding: 0;
	}

	span{
		font-family: <?= $fontFamily ?>;
		font-size: <?= $fontSize ?>;		
	}

	body{
		/*these measurements were fine tuned and tested on 1/3/19 */
		margin: .43in 0.41in 0in .41in; 
	}

	td.textTd{		
		height: 0.514in;
		width: 1.17in;
	}

	td.gutterTd{
	
		width: .12in;
	}
	table{
		border-collapse: collapse;
		text-align: center;
		//table-layout: fixed;
        //width: 7.68in;
        //height: 10.2in;
	}

	@media screen{

		td{

			border: 1px solid black;
		}    
	}
	
	@page{

		margin: 0;

	}

	
</style>
    
<body>
	<table>
		<tbody>
			<?php

				for($i=0; $i < 20; $i++){				
					echo "<tr>";
						for($j=0; $j<6; $j++){

							echo "<td class='textTd'>
									<span>".$text[$i][0].$text[$i][1]."</span>
								</td>";

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