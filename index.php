<?php
	if(isset($_POST['toDolist'])){
		$todo_list=$_POST['toDolist'];
	}
	else{
		$todo_list=array();
	}
	$errors=array();
	switch($_POST['action']){
		case 'add':
			$task=$_POST['newTask'];
			if(empty($task)){
				$errors[]='The task cannot be empty. ';
			}
			else{
				$todo_list[]=$task;
			}
			break;
		case 'delete':
			$task_index=$_POST['taskid'];
			unset($todo_list[$task_index]);
			$todo_list=array_values($todo_list);
			break;
	}
	include('todo_list.php');
?>