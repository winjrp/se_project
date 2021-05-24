<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "ผลการเลือกกรรมการ(admin)";

?>

<head>
    <!-- Okp config -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Load style.css file, which store in css folder -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Latest compiled JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='utf-8'>
    <script>
        $(function() {
            $('#ui_main').load('<?= base_url('Controller/ui_main') ?>');
            $('#ui_footer').load('<?= base_url('Controller/ui_footer') ?>');
            $('#ui_tab').load('<?= base_url('Controller/ui_tabtch') ?>');
        })
    </script>
    <style media="screen">
        .bgimg {
            background-image: url('<?= base_url('./image/back_inweb.jpg') ?>');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            /* z-index: -1; */
        }
    </style>
    <title><?php echo $web ?></title>
</head>

<!--############################################## Header ###########################################################################-->
<header style="height: 12.7vh">
	<div id='ui_main'></div>
</header>

<!--############################################## Body ###########################################################################-->

<body>
	<div class="container-fluid text-center">
		<div class="row">
			<!-- Bar -->
			<div class="col-sm-2 colora" style="min-height: 87.3vh">
				<div id='ui_tab'></div>
			</div>
			<!-- End Bar -->
			<div class="col-sm-10 text-left bgimg">
				<div class="colora" style="padding: 10px">
					<h2><?php echo $topic ?></h2>
				</div>
				<div class="container-fluid well">
					<!-- Body -->
                    <?php
                    $show_grp = $show[0];
                    $time = $show[1];
                    $room = $show[2];
                    $times = array();
                    $rooms = array();
                    $name_projects = array();
                    $comment1 = array();
                    $comment2 = array();
                    
                    foreach ($show_grp->result() as $row_grp) {//get data and push in array
                        array_push($name_projects, $row_grp->name_project);
                    }
                    foreach ($show_grp->result() as $row_com1) {
                        array_push($comment1, $row_com1->comment1);
                        
                    }
                    foreach ($show_grp->result() as $row_com2) {
                        array_push($comment2, $row_com2->comment2);
                        
                    }
                    for($i = 0; $i < sizeof($time); $i++) {
                        array_push($times, $time[$i]);
                    }
                    for($i = 0; $i < sizeof($room); $i++) {
                        array_push($rooms, $room[$i]);
                    }
                    
                    ?>
                    
                    <table class="table table-bordered table-striped">
                        <tr>
                              <?php //create colum
                                echo "<tr>";
                                echo "<th>"."เวลา"."</th>";
                               for($i = 0; $i < sizeof($rooms); $i++) {
                               
                               echo "<td>$room[$i]</td>";
                            }
                            echo "</tr>";

                            ?>

                        </tr>

                        

                        <?php //create row
                        $count = 0;
                        for ($i = 0; $i < sizeof($name_projects)/sizeof($rooms); $i++) {
                            $checkcomment1 = array();
                            $checkcomment2 = array();
                            $check = true;

                          

                          
                            echo "<tr>";
                            echo "<td>$times[$i]</td>";
                            while($count != (sizeof($rooms)*($i+1)))
                            {
                                
                                
                                if($count >= sizeof($name_projects))//out of range
                                {
                                    break;
                                }

                                // if($check)
                                // {
                                //     break;
                                // }
                                if($count < sizeof($name_projects))//create row data
                                {  
                                  
                                    $check1 = $comment1[$count];
                                    $check2 = $comment2[$count];
                                    array_push($checkcomment1, $check1);
                                    array_push($checkcomment2, $check2);
                                  
                                   
                                    if(sizeof($checkcomment1) > 1)
                                    {  
                                       for($j = 0;$j < (sizeof($rooms))-1;$j++) //check comment
                                    {

                                        if($check1 == $checkcomment1[$j] )
                                        {
                                          echo "<td><input list=browsers></td>";    
                                          $check = false;
                                        }
                                        elseif($check1 == $checkcomment2[$j] )
                                        {
                                            echo "<td><input list=browsers></td>";           
                                            $check = false;

                                        }
                                       elseif($check2 == $checkcomment2[$j] )
                                        {
                                            echo "<td><input list=browsers></td>";
                                            $check = false;
                                        }
                                        elseif($check2 == $checkcomment1[$j] )
                                        {
                                            echo "<td><input list=browsers></td>";
                                            $check = false;
                                        }
                                         elseif($check)
                                         {
                                             echo "<td>$name_projects[$count] $comment1[$count] $comment2[$count]</td>";  
                                         }
                                    }
                                   
                                    }
                                    else{
                                    echo "<td>$name_projects[$count] $comment1[$count] $comment2[$count]</td>";  
                                  }
                                $count = $count+1;    
                               
                                }
                                
                            }
                       }
                        echo "</tr>";
                        ?>
                    </table>
                    <button class="btn btn-success">Accept</button>
                    <!-- Body -->
                </div>
            </div>
        </div>
    </div>
</body>
<!--############################################## Footer ###########################################################################-->

<footer>
    <div id='ui_footer'></div>
</footer>
<!--############################################## End ###########################################################################-->

</html>