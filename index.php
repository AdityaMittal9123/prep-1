<?php
// including the php file for index.php
include_once 'index_php.php';
?>

<!DOCTYPE html>
<html>
<head>

  <!-- Including Header file  -->
	<?php include 'header.php';?>

<body class="center" style="background-color:#ffe6e6;background-position:center; background-size:cover;background-attachment: fixed;">
	<h4 class="center black-text">Welcome!</h4>
    <div class="container">
    	<div class="row">
    		<?php foreach ($datas as $data) {?>
    			<div class="col col-12 col-md-4 col-lg-3">
    				<div class="card z-depth=0" style="width:300px">
    					<div class="card-content center">
    						<div class="card-image" style="height:400px"><img src="<?php echo ($data['cover_image']); ?>"></div>
    						<h6><?php echo htmlspecialchars($data['name']); ?></h6>
    						 <div><?php echo htmlspecialchars($data['author_name']); ?></div>
    						 </div>
    					<div class="card-action right-align">
    						  <a href="Book_details.php?id=<?php echo $data['id'] ?>"><i class="material-icons">arrow_forward</i></a>
    					</div>
    				</div>
    			</div>

    		<?php }?>
    	</div>
    </div>
   </body>
  </html>



