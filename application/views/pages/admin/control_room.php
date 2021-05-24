<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "จัดห้องสอบ(admin)";

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
                    
                    <form action="<?= base_url('Controller/control_room1') ?>" method = "post">
                    <div class="w3-container ">
                        <div class="w3-third w3-container ">
                            <div class="input-group">
                                <span class="input-group-addon w3-white">จำนวนห้อง</span>
                                <!-- <input name="num_of_room" type="text" class="form-control w3-light-gray" placeholder="3"> -->
                                <select NAME="num_of_room" class="form-control w3-light-gray"> 
                                <option value=2>2</option>
                                <option value=3>3</option>
                                

                                </select>
                                                    
                            </div>
                        </div>
                        <div class="w3-third w3-container">
                            <div class="input-group">
                                <span class="input-group-addon w3-white">เวลาแต่ละกลุ่ม</span>
                                <input name="time_for_group" type="text" class="form-control w3-light-gray" placeholder="นาที เช่น 30">
                            </div>
                    </div>
                    <br><br><br><br>
                    <div class="w3-container ">
                        </div>
                        <div class="w3-third w3-container">
                            <div class="input-group">
                                <span class="input-group-addon w3-white">เวลาเริ่ม</span>
                                <input name="start_time" type="text" class="form-control w3-light-gray" placeholder="9.00">
                             
                            </div>
                        </div>
                        <div class="w3-third w3-container">
                            <div class="input-group">
                                <span class="input-group-addon w3-white">เวลาสิ้นสุด</span>
                                <input name="fin_time" type="text" class="form-control w3-light-gray" placeholder="16.00">
                                <!-- <div class="w3-dropdown-hover">
                                <button class="w3-button w3-black">Hover Over Me!</button>
                                <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="#" class="w3-bar-item w3-button">2</a>
                                <a href="#" class="w3-bar-item w3-button">3</a>
                                
                                </div>
                            </div> -->
                            
           
            
                               
                            </div> 
                           
                        </div>
                    </div><br> <br> <br>
                    

                    <br><br><br>
                    <button class="button colora" value="confirm">ยืนยัน</button>
                    </form>
                    <!--  Body -->
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