<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang Chủ</title>
</head>
<body>
	<h1>Đây là TRANG cHỦ</h1>
	<?php 
		while (have_posts()) {
			the_post();
			?>
			<h2><?php the_title() ?></h2>
			<?php the_content() ?>
			<?php
		}
	?>
</body>
</html>