<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../src/database/connection.php'); ?>

<div class="colunms">
	<div class="column"></div>
	<div class="column is-theree-quarters"></div>
	<form method="post" action="../src/student_control/create.php">
		<h1>New Student</h1>
		<hr>
		<div class="field">
		<div class="control">
			<input class="input" type="text" placeholder="FullName" name="fullname">
		</div>
	    </div>
	    <div class="field">
		<div class="control">
			<input class="input" type="date" placeholder="Birthdate" name="birthdate">
		</div>
	    </div>
	    <br>

	    <div class="control is-agrouped is-pulled-right">
	    	<button class="button is-success">Save</button>
	    	<a class="button is-danger">Cancel</a>
	    </div>
	</form>
</div>
<div class="column"></div>
<br>

<?php require_once('../templates/footer.php'); ?>
