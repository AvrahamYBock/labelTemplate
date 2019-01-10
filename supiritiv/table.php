<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>

        Label App

    </title>
<style>
	*{
		box-sizing: border-box;
		font-weight: bold;
		margin: 0;
		padding: 0;
	}

	body{
			margin: .38in .41in;
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

      
	
	@page{

		margin: 0;

	}

	#sizeDiv{
		height: 0.51in;
		width: 1.18in;
	}
</style>

    

</head>

<body>
	<table>
		<tbody>
			<?php

				for($i=0; $i < 20; $i++){				
				echo "<tr>";
					for($j=0; $j<6; $j++){

						echo "<td class='textTd'>
								Name Name N
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