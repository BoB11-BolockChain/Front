<fieldset>
	<!-- <div class="form-check">
	<input class="form-check-input" type = "radio" name = "Index_Select" value = "Create_Challenges" -->
	<!-- 
	<label class="form-check-label">Create Challenges</label></div> -->

	<label>
	<input type = "radio" name = "Index_Select" value = "Create_Challenges"
	<?php if ($H_GenSel == "Create_Challenges") {echo "checked";}?>/><span>Create Challenges</span>
	</label>

	<label>
	<input type = "radio" name = "Index_Select" value = "Show_Agents"
	<?php if ($H_GenSel == "Show_Agents") {echo "checked";}?>/><span>Show Attack Agents List</span>
	</label>

	<label>
	<input type = "radio" name = "Index_Select" value = "temp1" disabled 
	<?php if ($H_GenSel == "temp1") {echo "checked";}?>/>
	<span>temp1</span>
	</label>

	<label>
	<input type = "radio" name = "Index_Select" value = "temp2" disabled
	<?php if ($H_GenSel == "temp2") {echo "checked";}?>/>
	<span>Temp2</span>
	</label>
</fieldset>

 <!-- Fontawesome -->
 <link type="text/css" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<!-- Pixel CSS -->
<link type="text/css" href="../css/neumorphism.css" rel="stylesheet">