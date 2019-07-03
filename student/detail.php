<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<br><br>



<div align="right" > 
    <div align="control is-agrouped is-pulled-right">
        <button class="button is-info is-outlined">Imprimir Constancia</button>
        <button class="button is-info is-outlined">Asignar</button>
   </div>
</div>
                        
           



                        


<?php include_once('../src/database/connection.php'); 

$sql = "select st.fullname as Name, st.codigo as Codigo, round(year(now())-year(st.birthdate)) as Edad,s.name as Subject, y.year as Ciclo, sy.end_date as Estado,  sby.score  as Nota
	from subject s, year y, subject_year sy, student_subject_year sby, student st
	WHERE sy.year_id = y.id
	and sy.subject_id = s.id
	and sby.subject_year_id = sy.id
	and sby.student_id = st.id
	and st.id = 1";



	if ($db_con) {
	$result = $db_con -> query($sql);
	foreach ($result as $values) {
		echo "<p>". $values['Name'] ."</p>"  .
	       "<p>" . $values['Codigo']. "</p>" .
	        "<p>" . $values['Edad']. "</p>";
	        break 1;

    }
	$result = $db_con -> query($sql);
    echo "<table class='table is-hoverable'>" . 
			 "<tr>" . 
			 "<th>Cursos</th>".
			 "<th>Ciclo</th>".
			 "<th>Estado</th>". 
			 "<th>Nota</th>".
			 "</tr>" ;

	        
	foreach ($result as $values) {
		echo 
			 "<tr>" .
		   		"<td>" . $values['Subject'] ."</td>"  .
	       		"<td>" . $values['Ciclo']. "</td>" .
	       		"<td>" . $values['Estado']. "</td>" .
	       		"<td>" . $values['Nota'] . "</td>" .
	      	 "</tr>" ;
	      	 
	

	}
	echo "</table>";
}

?>

<?php require_once('../templates/footer.php'); ?>
