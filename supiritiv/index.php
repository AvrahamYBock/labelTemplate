<?php

    $line1 = "";

    $line2 = "";

    $line2br = "";

    $color="#000000";
	
	$font="Arial";

    $firstRow = 1;

    $lastRow = 20;

    $fontSize = "12px";



    if(!empty($_GET['line1']) && !isset($_GET['reset']))

        $line1 = $_GET['line1'];

    if(!empty($_GET['line2']) && !isset($_GET['reset'])){

        $line2 = $_GET['line2'];
        $line2br = "<br>" . $line2;
    }
	
	if(!empty($_GET['font']) && !isset($_GET['reset'])){

        $font = $_GET['font'];
    }
	
	if(!empty($_GET['color']) && !isset($_GET['reset'])){

        $color = $_GET['color'];
    }

    if(!empty($_GET['firstRow']))
        $firstRow = $_GET['firstRow'];

    if(!empty($_GET['lastRow']))
        $lastRow = $_GET['lastRow'];

    if(strlen($line1) < 11 && strlen($line2) < 11)
        $fontSize = "14px";
        $style="*{

            box-sizing: border-box;
            font-weight: bold;
            margin: 0;
            padding: 0;

        }

        body{

            margin: .38in .41in;

        }

        td.textTd{		
            height: 0.514in;
            width: 1.17in;
          	
			font-family: $font;

            font-size: $fontSize;
			
			color: $color;
        }

        td.gutterTd{
	
            width: .12in;
        }
        table{
            border-collapse: collapse;
            text-align: center;
            //table-layout: fixed;
            //: 7.68in;
            //height: 10.2in;
        }
    
         
        @page{
    
            margin: 0;
    
        }

       
        #modalWrapper{
            display: none;
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            
        }
        #printingModal{
            border: 1px solid black;
            //position: fixed;
            width: 60%;
            //height: 500px;
            background-color: lightgray;
            //top: 0;
            //left: 0;
            opacity: 1;
            margin: 5% 0 0 20%;
            padding: 20px;
            overflow-y: auto;
            max-height: 80%;        
            
        }

        @media screen{

            body{

                margin-top: 80px;

            }  
            td{

                border: 1px solid black;
            }
            table{
                table-layout: fixed;
                width: 7.68in;
                height: 10.2in;
            }

        }
     
        #buttonDiv{

             margin: 0 0 30px 30px;

        }

        #buttonDiv button{

            margin-right: 30px;

        }
        
        @media print{
            #buttonDiv, #inputForm, #printingModal{

                display: none;

            }

        }
 
";

    $title="Preview";



    include "top.php";

?>
    </div><!--close .container div for printing purpose-->
    <div class="row">
        <div class="col-md-4 col-xs-12 text-center">
            <table>
                <tbody>
                    <?php

                        for($i=0; $i < 20; $i++){				
                            echo "<tr>";
                                for($j=0; $j<6; $j++){

                                    echo "<td class='textTd'>
                                            <span>".$line1.$line2br."</span>
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
        </div>
        <div class="well col-md-3 col-md-offset-4 col-xs-12" id = "inputForm">    

            <form class="form" action="index.php" class="form-inline text-center">

                <h3 class="text-center">Enter text to print on labels</h3>

                <div class="form-group text-left">

                    <label for="line1">Line 1</label>

                    <input type="text" class="form-control" id="line1" value=<?='"'.$line1.'"'?> name="line1" maxlength="15" placeholder="type first line of text here">

                </div>

                <div class="form-group text-left">

                    <label for="line2">Line 2</label>

                    <input type="text" class="form-control" id="line2" value=<?='"'.$line2.'"'?> name="line2" maxlength="15" placeholder="type second line of text here">

                </div>

				<div class="form-group text-left">
					<label for="font">Choose a Font:</label>
				    <select name="font">
						<option <?php if($font=="Times New Roman")echo "selected"; ?> >Times New Roman</option>
						<option <?php if($font=="Arial")echo "selected"; ?> >Arial</option>
						<option <?php if($font=="Monospace")echo "selected"; ?> >Monospace<option>
					</select>
			    </div>
				
                <div class="form-group text-left">
					<label for="color">Choose a color:</label>
					<input type="color" name="color" value=<?='"'.$color.'"' ?> >
			    </div>

                <button class="btn btn-primary" type="submit" name="apply">Apply Changes</button>
                <button class="btn btn-primary" id="printInstructionsButton" name="print">Print...</button>
                <button class="btn btn-primary" id="reset" name="reset">Reset</button>

            </form>
        </div>
    </div>
    <div id="modalWrapper">
        <div id="printingModal">
            <?php include "printingInstructions.html" ?>
            <div class="text-center">
                <button class="btn btn-primary" id="gotIt">Close</button>
            </div>
        </div>
    </div>
    <div><!--opening div to replace .container opening div which was closed earlier-->
 
<script src="javascript/index.js"></script>

<?php include "bottom.php" ?>