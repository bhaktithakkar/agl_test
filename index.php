<?php
include_once 'jsonController.php';
$controller = new jsonController();
$catsList = $controller->getJSONData();
?>
<html>
	<head>
	<title> AGL Code TEST </title>
	</head>
	<body>
		<div id="catsList">
		<?php 
			if(isset($catsList)){
				foreach($catsList as $key=>$value){
					asort($value); ?>
					<h2> <?php echo $key;?></h2>
					<ul>
					<?php foreach($value as $catName){?>
						<li> <?php echo $catName; ?> </li>
					<?php }  ?>
					</ul>
				<?php }
			}
		?>
		<div>
	</body>
</html>
