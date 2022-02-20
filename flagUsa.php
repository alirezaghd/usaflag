<html>

<head>
	<meta name="description" content="design USA Flag">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="flag,star,USA">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="stars">
		<?php
		$stars = '<img  src="star.png" alt="Image" width="13" height="13" />'; ?>
		<?php for ($i = 0; $i < 49; $i++) : ?>
			 <span style="position: fixed; left: <?php  print(rand(5, 140)); ?>; top: <?php print(rand(15, 105)); ?>;">
				<?php print ($stars); ?>
			<?php endfor; ?>
			</span>
	</div>
	<div>
		<table border="1" class="flag">
			<?php for ($i = 0; $i < 7; $i++) : ?>
				<tr>
					<td class="V_flag"></td>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
</body>

</html>
