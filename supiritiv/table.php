<?php

	for($i=0; $i<20; $i++){
		if($i<10 || $i>15){
			$text[$i][0] = "Yona Bock";
			$text[$i][1] = "<br>848-210-4851";
		}else{
			$text[$i][0] = "";
			$text[$i][1] = "";
		}
	}
	
?>


<style>
	*{
		box-sizing: border-box;
		font-weight: bold;
		margin: 0;
		padding: 0;
	}

	body{
			margin: .38in .45in;
	}

	td.textTd{		
		height: 0.51in;
		width: 1.18in;
	}

	td.gutterTd{
	
		height: 0.51in;
		width: .12in;
	}
	table{
		border-collapse: collapse;
		text-align: center;
	}

	@media screen{

    td{

		border: 1px solid black;
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
				}
			?>
		</tbody>
	</table>

</body>