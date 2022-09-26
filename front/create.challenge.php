<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset = "utf-8">
        <title>Create Basic Challenges</title>
		<?php require_once(dirname(__FILE__).'/admin.header.php'); ?>
</head>
<?php
$systemSel = $_POST["system"];
$scenarioSel = $_POST["scenario"];
?>
<section class="section section-lg pb-5 z-2 bg-soft">
<div class="container mb-6">
	<center><h2 class="h3"><b>Create Challenges</b></h2></center>
	<div class="card bg-primary border-light shadow-soft" style="margin-right: 150px;margin-left: 150px;">
		<form class="col-12 pt-4" method= "POST" action = "<?php echo $_SERVER['PHP_SELF'];?>">
			<input class="form-control" type="text" name="title" id="chall_title" placeholder="Title" style="width:100%;"><br>
			<input class="form-control" type="text" name="title" id="chall_desc" placeholder="Description" style="width:100%;height:150px;"><br>
			<input class="form-control" placeholder = "Score" type="number" name="score" id="chall_score"><br><br>
			<b>System</b> : <select class="btn btn-primary" name="system" id="system">
				<option value="" selected="selected">Select <b>system</b></option>
			</select><br><br>
			<b>Scenario</b> : <select class="btn btn-primary" name="scenario" id="scenario">
    			<option value="" selected="selected">Please select system first</option>
  			</select>
			<br><br>
			<input class="btn btn-primary text-dark mr-2 mb-2" type = "submit" value = "Create Challenges" style="width:100%;"/>
		</form>
	</div>
</div>
<section>
</html>


<?php require_once ('./admin.footer.php') ?>
<!-- Pixel CSS -->
<script>
	var systemObject = {
		"Linux": ["ex_ATK1", "ex_ATK2"],
  		"Windows": ["ex_ATK1", "ex_ATK2"],
		"Network": ["ex_ATK1"],
		"Web": ["ex_ATK1"],
		"Custom": ["ex_ATK1"]
	}
	window.onload = function() {
		var systemSel = document.getElementById("system");
		var scenarioSel = document.getElementById("scenario");
		for (var x in systemObject) {
			systemSel.options[systemSel.options.length] = new Option(x, x);
		}
		systemSel.onchange = function() {
			scenarioSel.length = 1;
			var y = systemObject[systemSel.value];
			for (var i = 0; i < y.length; i++) {
				scenarioSel.options[scenarioSel.options.length] = new Option(y[i]);
			}
		}
	}
</script>