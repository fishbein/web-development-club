<?php
	//Arrays with strings (first one) and integers (second one)
	$name = array("Phil", "Jacob", "Dan", "Paul", "Robin");
	$age = array(16, 17, 18, 19);

	$number = $_POST['number'];
	$rand1 = $_POST['rand1'];
	$rand2 = $_POST['rand2'];
	$operation = $_POST['operation'];

	//Foreach Loops
	foreach ($name as $value => $name) {
		echo "<li>".$name."</li>";
	}
	foreach ($age as $value => $turkey) {
		echo "<li>".$turkey."</li>";
	}

	//If Loops
	if($operation=="+"){
		$equation = $rand1+$rand2;
	}
	else if($operation=="-"){
		$equation = $rand1-$rand2;
	}
	else if($operation=="*"){
		$equation = $rand1*$rand2;
	}
	else if($operation=="/"){
		$equation = $rand1/$rand2;
	}
	
	echo $equation;
	if($equation==$number){
		echo "Correct";
	}
	else{
		echo "Incorrect";
	}
?>