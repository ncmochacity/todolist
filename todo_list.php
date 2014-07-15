<?php include 'view/header.php'; ?>
<div class="row">
	<div class="large-12 columns" >
		<h1>To-Do-List Manager</h1>
	</div>
</div>
<div class="row">
	<div class="large-12 columns" id="content">
		<?php if (count ($errors) > 0) : ?>
		<h2>Errors</h2>
			<ul>
				<?php foreach ($errors as $error) : ?>
					<li><?php echo $errors; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<h2>Tasks</h2>
			<?php if (count ($todo_list) == 0) : ?>
				<p>You haven't added any activities in the To-Do-List</p>
			<?php else: ?>
			<ul id="myTask">
				<?php foreach ($todo_list as $id => $myTask) : ?>
					<li><?php echo $id + 1 . ' . ' . $myTask; ?></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		<h2>Add Task</h2>
		<form action="." method="post">
			<?php foreach($todo_list as $myTask) : ?>
				<input type="hidden" name="toDolist[]" value="<?php echo $myTask; ?>">
			<?php endforeach; ?>
			<input type="hidden" name="action" value="add">
			<label>Task: </label>
			<input type="text" name="newTask" id="newTask"> <br />
			<label>&nbsp;</label>
			<input type="submit" value="Add Task"> <br />
		</form>
	</div>
</div>
<?php include 'view/footer.php'; ?>
