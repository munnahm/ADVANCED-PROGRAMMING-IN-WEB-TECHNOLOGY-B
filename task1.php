<?php
class Department{
	public $student = [];
	function addStudent($name,$id,$cgpa,$depatment){
		global $student;
		$s1=new Student($name,$id,$cgpa,$depatment);
		$student[]=$s1;
	}
	function deleteStudent($id){
		global $student;
		$index=-1;

		foreach ($student as $value) {
			$index++;
			#echo $value->id." ".$id." ".$index;
			#echo $value->id;
			if($value->id == $id){
				unset($student[$index]);
				break;
			}
		}
	}
	function showStudent(){
		global $student;
		foreach ($student as $record){
			echo "ID: $record->id  <br>";
			echo "NAME: $record->name  <br>";
			echo "CGPA: $record->cgpa  <br>";
			echo "DEPARTMENT: $record->depatment  <br>";
			echo "_______________<br>";
		}
		
	}
}
class Student{
	public $name;
	public $id;
	public $cgpa;
	public $depatment;
	function __construct($name,$id,$cgpa,$depatment){
		$this->name=$name;
		$this->id=$id;
		$this->cgpa=$cgpa;
		$this->depatment=$depatment;
	}

}
$d1=new Department();
$d1->addStudent("MAHEDI",100001,3.61,"CSE");
$d1->addStudent("HASAN",100002,3.61,"CSE");
$d1->addStudent("Munna",100003,3.61,"CSE");
$d1->showStudent();

echo "<br><br><b>____After Delete____</b><br>";
$d1->deleteStudent(100002);
$d1->showStudent();
?>