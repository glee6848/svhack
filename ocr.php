<!DOCTYPE html>
<html>
	<head>
		<title>Expressionizr</title>
	</head>
	<?php
		echo "<script type=\"text/javascript\">var needsOCR = new Image();needsOCR.src=\"". $_POST['file'] . "\";</script>";
	?>
	</head>
	<body>
		<script type="text/javascript">
			document.body.appendChild(needsOCR);
		</script>
	</body>
</html>