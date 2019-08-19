<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>System Information Display</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Server/File Information</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<h1>Client Information</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>