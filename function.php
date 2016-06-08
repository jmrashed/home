<?php

class Operation{
	
public $servername = "localhost";
public $username = "root";
public $password = "";
public $dbname = "mdrasheduzzaman"; 



public function Get_Info($info)
{
	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

	$sql = "SELECT {$info} FROM  rasheduzzaman where id=1";
	$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo  '<pre>'. $row["{$info}"]. "</pre>";
    }
} else {
    echo "<pre>Not yet !</pre>";
}
$conn->close();
	
	
	
}

	

	public function Get_project_details($lid){
		$count=1;
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

	$sql = "SELECT *, project.description as des FROM  project, languages where project.languagesid={$lid} and languages.id={$lid}";
 
	$result = $conn->query($sql);

 if ($result->num_rows > 0) {
 
 	$totalprojectnumber=$result->num_rows;
 	echo 'Total PHP Projects : ' . $totalprojectnumber;
 	echo '<img src="img/stars.png" width="500px" height="30px"> ';
 		 
 
    
    while($row = $result->fetch_assoc()) {
        $language=$row['language'];
        $proname=$row['projectname'];
        $title=$row['title'];
        $description=$row['des'];
        $date=$row['date'];
        $duration=$row['duration'];
        $datetime=$row['datetime'];
        $downloadlink=$row['link'];
        echo '<h3 class="title">'.$proname . '</h3>'; 
	echo '<table class="table table-responsive table-bordered" width="100%">';
?>
	<tr>
		<td>Project Name </td><td> <?=$proname; ?> </td>
	</tr>
	<tr>
		<td>Project Title </td><td> <?=$title; ?> </td>
	</tr>
	<tr>
		<td>Project Description </td><td> <?=$description; ?> </td>
	</tr>
	<tr>
		<td>Build Language </td><td> <?=$language; ?> </td>
	</tr>
	<tr>
		<td>Completed Date </td><td> <?=$date; ?> </td>
	</tr>
	<tr>
		<td>Project Duration </td><td> <?=$duration; ?> </td>
	</tr>
	<tr>
		<td>Project entry Date time </td><td> <?=$datetime; ?> </td>
	</tr>
	<tr>
		<td>Download from here </td><td> <a href="<?=$downloadlink; ?>"> Download</a> </td>
	</tr>

<?php 
 echo '</table><br>  ';
    }

   
} else {
    echo "<h3>Not yet !</h3>";
}
$conn->close();
	
	

	}




public function Get_Project($info)
{
	 
	$project = new Operation;
	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

	$sql = "SELECT id FROM  languages where language='{$info}'";
 
	$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $languageid= $row["id"];
         
        $project ->Get_project_details($languageid);

    }
} else {
    echo "<pre>Not yet !</pre>";
}
$conn->close();
	
	
	
}

















}
















?>