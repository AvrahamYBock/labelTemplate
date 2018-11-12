<?php

    $line1="";

    $line2="";

    $line2br = "";

    //$horizontalCenter = "";

    $firstRow=1;

    $lastRow=20;



    if(!empty($_GET['line1']))

        $line1 = $_GET['line1'];

    if(!empty($_GET['line2'])){

        $line2 = $_GET['line2'];
        $line2br = "<br>" . $line2;
    }/*else{
    $horizontalCenter = ".v-wrap{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }";
    }*/
    if(!empty($_GET['firstRow']))

        $firstRow = $_GET['firstRow'];

    if(!empty($_GET['lastRow']))

        $lastRow = $_GET['lastRow'];



    $style="*{

            box-sizing: border-box;

            font-weight: bold;

        }

        body{

                margin: .38in .41in;

        }

        @media screen{

            body{

                margin-top: 80px;

            }

            td{

                border: 1px solid black;

            }           

        }

        table{

            border-collapse: collapse;

            table-layout: fixed;

            width: 7.68in;

            height: 10.2in;

        }

        td{

            width: 1.18in;

            height: .51in;

            text-align: center;

            /*vertical-align: middle;*/

            font-size: 12px;
            

        }

        td div{

            width: 1.18in;

            height: .51in;

            overflow: hidden;

            padding: 10px 0;

        }

        .gutter{

            width: .12in;

        }

        @page{

            margin: 0;

        }

        #buttonDiv{

             margin: 0 0 30px 30px;

        }

        #buttonDiv button{

            margin-right: 30px;

        }
        
        @media print{
            #buttonDiv, #inputForm{

                display: none;

            }

        }

       /* #textDiv{
            position: relative;
            top: 50%;
            transform: translateY(-35%);
        }*/
/*
        .v-wrap{
            height: 100%;
            white-space: nowrap;
            text-align: center;
        }
        .v-wrap:before{
            content: \"\";
            display: inline-block;
            vertical-align: middle;
            width: 0;
            /* adjust for white space between pseudo element and next sibling */
            margin-right: -.25em;
            /* stretch line height */
            height: 100%; 
        }
        .v-box{
            display: inline-block;
            vertical-align: middle;
            white-space: normal;
        }*/
        
                
";

    $title="Preview";



    include "top.php";

?>

    </div><!--close .container div for printing purpose-->
    <div class="row">

        <div class="col-md-4 col-xs-12 text-center">


            <div id="buttonDiv">

                <button><a href="labels.php">Reset</a></button>

                <button onclick="window.print()">Print</button>

            </div>

            <table>

                <tbody>

                    <?php

                        for($i=1; $i < $firstRow; $i++){

                            echo "<tr>";

                            for($j=0; $j<5; $j++){

                                echo "<td><div></div></td><td class=gutter></td>";

                            }

                            echo "<td><div></div></td>";

                            echo "</tr>";

                        }

                        for($i=$firstRow; $i<=$lastRow; $i++){

                            echo "<tr>";

                            for($j=0; $j<5; $j++){

                                echo "<td>
                                        <!--div class=\"v-wrap\"-->
                                            <div class=\"v-box\" id=\"textDiv\">$line1$line2br</div>
                                        <!--/div-->
                                    </td><td class=gutter></td>";

                            }

                            echo "<td><!--div class=\"v-wrap\"--><div class=\"v-box\" id=\"textDiv\">$line1$line2br</div><!--/div--></td>";

                            echo "</tr>";

                        }

                        for($i=$lastRow; $i<20; $i++){

                            echo "<tr>";

                            for($j=0; $j<5; $j++){

                                echo "<td><div></div></td><td class=gutter></td>";

                            }

                            echo "<td><div></div></td>";

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

                <!--div class="form-group text-left">

                    <label for="firstRow">Start Printing on Row #</label>

                    <input type="number" class="form-control" id="firstRow" name="firstRow" max="20" min="1" maxlength="2">

                </div>

                <div class="form-group text-left">

                    <label for="lastRow">Last Row to Print is Row #</label>

                    <input type="number" class="form-control" id="lastRow" name="lastRow" max="20" min="1" maxlength="2">

                </div-->

                <button class="btn btn-primary" type="submit" class="btn btn-default">Preview</button>

            </form>

        </div>
    </div>

    <div><!--opening div to replace .container opening div which was closed earlier-->

 

<?php include "bottom.php" ?>