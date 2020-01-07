<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bahria University Learning Management System</title>
    
    
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.css"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.min.css"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-reboot.css"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-reboot.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-reboot.min.css.map"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css.map"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css.map"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.css.map"/>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.min.css.map"/>
<script type="text/javascript" src="../../js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../../js/bootstrap.bundle.js.map"></script>
<script type="text/javascript" src="../../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.bundle.min.js.map"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js.map"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js.map"></script>

    </head>
    <body>
    
    <div class="container" align="center">

	<!-- table div end -->
   <!-- Now draw horizental table -->
		<div class="vertical"  align="center">
        
			<div class="heading" align="center"><h2>Working With json</h2></div>
            <?php
if (isset($result_msg)) {
echo "<div id='res_msg' align='center' style='color:#000'>";
echo $result_msg;
echo "</div>";
}
?>				<!-- form dive start -->
            	<div class="row" style="margin:70px" >
           <form method="post" enctype="multipart/form-data" action="data_insert">
            
                    <div class="col-6" style="font-weight:bold">Title</div>
                     <div class="col-6"><input type="text" name="title" class="title" /></div>
                     
                    <div class="col-6" style="font-weight:bold">Assignment File</div> 
                    <div class="col-6"><input type="file" name="assignmentfile" class="session" accept="image/jpeg/pdf" /></div>
                    
                    <div class="col-6" style="font-weight:bold">From Date </div> 
                    <div class="col-6"><input type="date" name="fromdate" class="session" /></div>
                    
                    <div class="col-6" style="font-weight:bold">To Date</div> 
                    <div class="col-6"><input type="date" name="todate" class="session" /></div>
                    
                    <div class="col-12" align="center" style="padding:20px">
                    <input type="submit" class="btn-dark" value="Submit" /></div>
</form>



		</div><!-- form  div end -->
        
        		

</div><!-- vertical div end -->
<!-- dislay saved record -->
  <div align="center" class="row">
               
               <div class="col-2" style="font-weight:bold" >Id</div>
                <div class="col-2" style="font-weight:bold">Title</div> 
                <div class="col-2" style="font-weight:bold">From Date</div>
                 <div class="col-2" style="font-weight:bold">To Date</div>
                 <div class="col-2" style="font-weight:bold">User File</div>
               </div>
<?php
$classes = $this->db->get('assignment')->result_array();
										foreach($classes as $row) {
										 
										?>
                    <!-- to display the databse valuse -->
                    <!-- div satart for row of display value -->
                          <div align="center" class="row">
                         
             <div class="col-2"><?php echo $row['id']; ?></div> 
             <div class="col-2"><?php echo $row['title']; ?></div>
              <div class="col-2"><?php echo $row['from_date']; ?></div>
              <div class="col-2"><?php echo $row['to_date']; ?></div>
              <div class="col-2"><a href="../../<?php echo $row['assignment_file']?>" target="_blank">Click To View Document</a>
              </div>

</div><!-- div end of display value  -->
<?php
										}
?>
</div><!-- div center end -->

    
    
    
    </body>
    
    </html>







<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>-->