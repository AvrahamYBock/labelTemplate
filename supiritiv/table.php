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

	div.textDiv{
		display: inline-block;
		height: 0.51in;
		width: 1.18in;
		border: solid black 1px
	}

	div.gutterDiv{

		display: inline-block;
		height: 0.51in;
		width: .12in;
	}

	
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
	<div>
		<?php

			for($i=0; $i < 20; $i++){				

				for($j=0; $j<6; $j++){

					echo "<div class='textDiv'>
							Name Name N
						</div>";

					if($j<5){
						echo "<div class='gutterDiv'>n</div>";
					}
				}
					echo "<br>";

			
			}
		?>
	</div>

</body>