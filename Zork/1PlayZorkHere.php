<html>
<body>
<?php require "DO NOT DELETE.php"; ?>
<form action= <?php echo $_SERVER ['PHP_SELF']; ?> method="POST">
	<input type="text" name="command">
	<input type="hidden" name="start" value="startbut">
	<input type="hidden" name="coordinate" value="<?php echo $coord; ?>">
	<input type="hidden" name="suit" value="<?php echo $suit; ?>">
	<input type="hidden" name="pickaxe" value="<?php echo $pickaxe; ?>">
	<input type="hidden" name="matchlamp" value="<?php echo $matchlamp; ?>">
	<input type="hidden" name="sword" value="<?php echo $sword; ?>">
	<input type="hidden" name="helmet" value="<?php echo $helmet; ?>">
	<input type="hidden" name="suit" value="<?php echo $suit; ?>">
	<input type="hidden" name="secret" value="<?php echo $secret; ?>">
	<input type="hidden" name="rock" value="<?php echo $rock; ?>">
	<input type="hidden" name="hp" value="<?php echo $hpcount; ?>">
	<input type="hidden" name="zombie" value="<?php echo $zcount; ?>">
	<input type="hidden" name="infernozombie" value="<?php echo $izcount; ?>">
	<input type="hidden" name="voltagezombie" value="<?php echo $vzcount; ?>">
	<input type="hidden" name="ice" value="<?php echo $ice; ?>">
	<input type="hidden" name="teleporter" value="<?php echo $teleporter; ?>">
	<input type="hidden" name="map" value="<?php echo $map; ?>">
	<input type="submit" name="submit" value="Submit Command">
</form>
</body>
</html>