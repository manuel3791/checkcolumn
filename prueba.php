<?php

$tags = array('A', 'B', 'C', 'D', 'E', 'F', 'G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
// $ctr = 1;

// print "<table><tr><td valign=top>";
// for ($i = 0; $i < sizeof($list); $i++)
// {
    // if ($ctr == 5)  { $ctr = 1; print "</td><td valign=top>"; }
    // print $list[$i];
    // print "<br/>";
    // $ctr++;
// }
// print "</td></tr></table>";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>test</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src='js/index.js'></script>
		<style>
			.checkbox-inline{
			-webkit-column-count: 4;
			-moz-column-count: 4;
			column-count: 4;
			}
		</style>
	</head>
	<body>
		<div class="control-group">
			<label class="control-label" for="course_details">Select Tags:</label><p></p>
			<div class="checkbox-inline">
			<?php for($i=0; $i<26; $i++): ?>
				<div>
					<input name='tag[]' class="checkbox" type="checkbox" value="<?php echo $tag['tag_code'] ?>"></p>
				</div>
			<?php endfor; ?>
			</div>
		</div>
	</body>
</html>