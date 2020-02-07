<?php
$id = $connect->query("SELECT * FROM log_shop")->num_rows;
$user = $connect->query("SELECT * FROM user")->num_rows;
?>
<br>
<?php
		echo '<div style="margin-bottom:30px;">';
		echo '<a class="btn btn-primary col-4" href="?page=backend&home"><i class="fa fa-cog"></i>&nbsp;หน้าแรก</a>';
		echo '<a class="btn btn-info col-4" href="?page=backend&settings"><i class="fa fa-cog"></i>&nbsp;แก้ไข เว็บไซต์</a>';
		echo '<a class="btn btn-warning col-4" href="?page=backend&items"><i class="fa fa-cog"></i>&nbsp;แก้ไข สินค้า</a>';
		echo '</div>';
if(isset($_GET['settings'])) {
		if(isset($_POST['save-edit'])) {
			   $update = $connect->query("UPDATE config SET title = '{$_POST['title']}',
				description = '{$_POST['description']}',
				icon = '{$_POST['icon']}',
				name = '{$_POST['name']}',
				www = '{$_POST['www']}',
				alert = '{$_POST['alert']}',
				website = '{$_POST['website']}',
				me = '{$_POST['me']}',
				promotion_tm = '{$_POST['promotion_tm']}',
				promotion_tw = '{$_POST['promotion_tw']}',
				truewallet_phone = '{$_POST['truewallet_phone']}',
				truewallet_name = '{$_POST['truewallet_name']}',
				truewallet_msg = '{$_POST['truewallet_msg']}',
				truewallet_email = '{$_POST['truewallet_email']}',
				truewallet_password = '{$_POST['truewallet_password']}'
			   ");
			if($update) {
					iDisplayMSG('isuccess','Success Saveed','บันทึกข้อมูลสำเร็จ','true','?page=backend&settings');			
			}else {
				iDisplayMSG('error','Error Database','เกิดข้อผิดพลาด '.$query.'','false','');	
			} 
		}
	?>
		<form method="post">
			 <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Title</span>
				<input type="text" class="form-control" value="<?php echo $config['title'];?>" name="title" placeholder="Title">
			  </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Description</span>
				<input type="text" class="form-control" value="<?php echo $config['description'];?>" name="description" placeholder="Description">
			  </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Icon</span>
				<input type="text" class="form-control" value="<?php echo $config['icon'];?>" name="icon" placeholder="Icon">
			  </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Name</span>
				<input type="text" class="form-control" value="<?php echo $config['name'];?>" name="name" placeholder="Name">
			  </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Www</span>
				<input type="text" class="form-control" value="<?php echo $config['www'];?>" name="www" placeholder="www">
			  </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Domain</span>
				<input type="text" class="form-control" value="<?php echo $config['website'];?>" name="website" placeholder="Domain">
			  </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Alert News</span>
				<input type="text" class="form-control" value="<?php echo $config['alert'];?>" name="alert" placeholder="Alert News">
			  </div>
			  
			  <div class="input-group" style="margin-top:25px;">
				<span class="input-group-text"><i class="fab fa-facebook-square"></i>&nbsp;Facebook Pange</span>
				<input type="text" class="form-control" value="<?php echo $config['me'];?>" name="me" placeholder="Facebook Pange">
			  </div>
			  
			  
			  <div class="input-group" style="margin-top:25px;">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Promotion TrueMoney</span>
				<input type="text" class="form-control" value="<?php echo $config['promotion_tm'];?>" name="promotion_tm" placeholder="Promotion TrueMoney">
			  </div>
			  
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;Promotion TrueWallet</span>
				<input type="text" class="form-control" value="<?php echo $config['promotion_tw'];?>" name="promotion_tw" placeholder="Promotion TrueWallet">
			  </div>
			   
			  <div class="input-group" style="margin-top:25px;">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;TrueWallet Phone</span>
				<input type="text" class="form-control" value="<?php echo $config['truewallet_phone'];?>" name="truewallet_phone" placeholder="TrueWallet Phone">
			 </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;TrueWallet Name</span>
				<input type="text" class="form-control" value="<?php echo $config['truewallet_name'];?>" name="truewallet_name" placeholder="TrueWallet Name">
			 </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;TrueWallet Message</span>
				<input type="text" class="form-control" value="<?php echo $config['truewallet_msg'];?>" name="truewallet_msg" placeholder="TrueWallet Message">
			 </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;TrueWallet Email</span>
				<input type="text" class="form-control" value="<?php echo $config['truewallet_email'];?>" name="truewallet_email" placeholder="TrueWallet Email">
			 </div>
			  <div class="input-group">
				<span class="input-group-text"><i class="fas fa-edit"></i>&nbsp;TrueWallet Password</span>
				<input type="text" class="form-control" value="<?php echo $config['truewallet_password'];?>" name="truewallet_password" placeholder="TrueWallet Password">
			 </div>
				
				<button type="submit" style="margin-top:20px;" name="save-edit" class="btn btn-success btn-block"><i class="fas fa-edit"></i>&nbsp;เซฟการตั้งค่า</button>
			 
		</form>
	<?php
}
if(isset($_GET['items'])) {
		if(isset($_GET['edit'])){
		$query = $connect->query("SELECT * FROM shop WHERE id = {$_GET['edit']}");
		$data = $query->fetch_assoc();
?>
<i class="fa fa-shopping-cart"></i>&nbsp;จัดการสินค้า<hr>
<div class="row">
	<div class="col-5">
	<div style="background: white;border-radius: 10px;padding: 20px;" >
		<i class="fa fa-shopping-cart"></i>&nbsp;<text>จัดการสินค้า</text><hr>
	<form method="post" action="?page=backend&items&edit=<?php echo $_GET['edit'] ?>&act=save">
				<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">ชื่อ : </span>
					  </div>
					  <input type="text" name="name" class="form-control" placeholder="ชื่อ" value="<?php echo $data['name']; ?>">
				</div>
				<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">รูปภาพ : </span>
					  </div>
					  <input type="text" name="img" class="form-control" placeholder="รูปภาพ" value="<?php echo $data['img']; ?>">
				</div>
				<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">ข้อมูล : </span>
					  </div>
						<input type="text" name="lore" class="form-control" placeholder="ข้อมูล" value="<?php echo $data['lore']; ?>">
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">ราคา : </span>
				  </div>
					<input type="text" name="price" class="form-control" placeholder="ราคา" value="<?php echo $data['price']; ?>">
				</div>
					<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">ที่อยู่ไฟล์ : </span>
				  </div>
				  <input type="text" name="dist" class="form-control" placeholder="ที่อยู่ไฟล์" value="<?php echo $data['dist']; ?>">
				</div>
		<button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i>&nbsp;บันทึกข้อมูล</button>
		<a href="?page=backend&items" class="btn btn-primary btn-block"><i class="fa fa-home"></i>&nbsp;กลับ</a>
	</div>
	</div>
	<div class="col-7">
		<div style="background: white;border-radius: 10px;padding: 20px;" >
			<i class="fa fa-file"></i>&nbsp;<text>จัดการข้อมูล</text><hr>
					<textarea class="form-control" style="height: 200px;" name="txt"><?php echo Read("_dist/id/".$data['dist']); ?></textarea><br>
				<button type="submit" name="save_txt" class="btn btn-danger btn-block"><i class="fa fa-save"></i>&nbsp;บันทึกข้อมูล</button>
			</form>
		</div>	
	</div> 
</div>

<?php 
	if(@$_GET['act'] == "save"){
		if(empty($_POST['name']) || empty($_POST['img']) || empty($_POST['lore']) || empty($_POST['price']) || empty($_POST['dist']) ){
			iDisplayMSG('error','Error Empty','กรุณากรอกข้อมูลให้ครบ','false','');
		}else{
			$query = $connect->query("UPDATE shop SET name = '{$_POST['name']}', img = '{$_POST['img']}',lore = '{$_POST['lore']}',price = '{$_POST['price']}',dist = '{$_POST['dist']}' WHERE id = $_GET[edit]");
		if($query){
			iDisplayMSG('isuccess','Success Saveed','บันทึกข้อมูลสำเร็จ','true','?page=backend&items&edit='.$_GET['edit']);
		}else{
			iDisplayMSG('error','Error Database','เกิดข้อผิดพลาด '.$query.'','false','');			
			}
		}
	  if(isset($_POST['save_txt'])){
			Write("_dist/id/".$data['dist'],$_POST['txt']);
			iDisplayMSG('isuccess','Success Saveed','บันทึกข้อมูลสำเร็จ','true','?page=backend&items&edit='.$_GET['edit']);
	  }
	}
	  echo '<hr>';
}
if(isset($_GET['add'])) {
	if(isset($_POST['add-items'])) {
			if(empty($_POST['name']) || empty($_POST['img']) || empty($_POST['lore']) || empty($_POST['price']) || empty($_POST['dist']) || empty($_POST['txt'])){
				iDisplayMSG('error','Error Empty','กรุณากรอกข้อมูลให้ครบ !!','false','');
	}else {
		$query = $connect->query("INSERT INTO `shop` (`id`, `name`, `lore`, `dist`, `price`, `img`) VALUES (NULL, '{$_POST['name']}', '{$_POST['lore']}', '{$_POST['dist']}', '{$_POST['price']}', '{$_POST['img']}');");
		if($query) {
			Write("_dist/id/".$_POST['dist'],$_POST['txt']);
			iDisplayMSG('isuccess','Success Added','เพิ่มสินค้าเรียบร้อย','true','?page=backend&items');
		}else {
			iDisplayMSG('error','Error Database','เกิดข้อผิดพลาด '.$query.'','false','');			
		}
	}
}
?>
<i class="fa fa-shopping-cart"></i>&nbsp;จัดการสินค้า<hr>
<div class="row">
	<div class="col-5">
	<div style="background: white;border-radius: 10px;padding: 20px;" >
		<i class="fa fa-shopping-cart"></i>&nbsp;<text>เพิ่มสินค้า</text><hr>
<form method="post">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ชื่อ : </span>
  </div>
  <input type="text" name="name" class="form-control" placeholder="ชื่อ">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">รูปภาพ : </span>
  </div>
  <input type="text" name="img" class="form-control" placeholder="รูปภาพ">
</div>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ข้อมูล : </span>
  </div>
  <input type="text" name="lore" class="form-control" placeholder="ข้อมูล">
</div>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ราคา : </span>
  </div>
  <input type="text" name="price" class="form-control" placeholder="ราคา">
</div>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ที่อยู่ไฟล์ : </span>
  </div>
  <input type="text" name="dist" class="form-control" placeholder="ที่อยู่ไฟล์">
</div>
 <a href="?page=backend&items" class="btn btn-primary btn-block"><i class="fa fa-home"></i>&nbsp;กลับ</a>
	</div>
	</div>
	<div class="col-7">
		<div style="background: white;border-radius: 10px;padding: 20px;" >
			<i class="fa fa-file"></i>&nbsp;<text>จัดการข้อมูล</text><hr>
<textarea class="form-control" style="height: 200px;" name="txt" placeholder="dev@itorkungz.me:passw0rd&#10;game@itorkungz.me:passw1rd">
</textarea><br>
		<button type="submit" name="add-items" class="btn btn-danger btn-block"><i class="fa fa-save"></i>&nbsp;เพิ่มสินค้า</button>
			</form>
		</div>
	</div> 
</div>
			<?php
		}
	echo '
		<div class="row" style="margin-top:20px;">
	';
if(isset($_GET['delete'])) {
	if(empty($_GET['number'])) {
		iDisplayMSG('error','Error Empty','กรุณาอย่าเว้นช่องว่าง','false','');
	}else {
	$query = $connect->query("SELECT * FROM shop where id = {$_GET['number']}");
	if($query->num_rows == 1) {
		$connect->query("DELETE FROM `shop` WHERE `shop`.`id` = {$_GET['number']}");
		iDisplayMSG('isuccess','Success Delete','ลบสินค้านี้ เรียบร้อย !!','true','?page=backend&items');
	}else {
		iDisplayMSG('ierror','Error Empty','ไม่พบสินค้านี้.','true','?page=backend&items');
	}
	}
}
$query = $connect->query("SELECT * FROM shop");
while($ez = $query->fetch_assoc()){
?>
	<div class="col-4" style="  padding: 5px;">
		<div class="card" style="padding: 10px; background: rgba(0,0,0,0.1); ">
			<img class="card-img-top" src="<?php echo $ez['img']; ?>" style="width:320px;height:300px;">
		<div class="card-body" style="background: white;">
			Name : <?php echo $ez['name']; ?>
			<br>Lore :<br>&nbsp;<?php  echo $ez['lore']; ?>
			<br>Price : <?php  echo $ez['price']; ?>
			<br>File : <?php  echo $ez['dist'].' ('.stock($ez['dist']).' ไอดี)';?><hr>
			<a class="btn btn-success btn-block" href="?page=backend&items&edit=<?php echo $ez['id'] ?>"><i class="fa fa-cog"></i>&nbsp;แก้ไขสินค้า</a>
			<a class="btn btn-danger btn-block" href="javascript:idelete('<?php echo $ez['id'] ?>');"><i class="fas fa-trash-alt"></i>&nbsp;ลบสินค้า</a>
		</div>
		</div>
	</div>
<?php
}
?>
	<div class="col-4" style="padding: 5px;">
		<div class="card" style="padding: 10px; background: rgba(0,0,0,0.1); ">
		<div class="card-body" style="background: white;">
		<center><img src="https://www.colourbox.com/preview/5697410-icon-plus-black.jpg" style="width: 30%">
			<hr>
			<h3>เพิ่มสินค้า</h3></center>
			<a class="btn btn-info btn-block" style="margin-top:20px;" href="?page=backend&items&add"><i class="fas fa-cart-plus"></i>&nbsp;เพิ่มสินค้า</a>
		</div>
		</div>
	</div>
<?php
echo ' </div>';
	}elseif(isset($_GET['home'])) {
		header('Location: ?page=backend&settings');
	}
?>