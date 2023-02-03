
<?php


 if (!empty($_POST['fname'] && $_POST['username'] && $_POST['password'])) 

  if ($_POST['gender'] == 'male') {
        echo "Thanks Mr." . $_POST['fname'] . " " . $_POST['lname'];}
else{
        echo "Thanks Mss." . $_POST['fname'] . " " . $_POST['lname'];}
echo  "<br>";


echo "Please review your information";
 echo  "<br>";

 echo "Name "  . $_POST['fname'] . " " . $_POST['lname'];;
 echo  "<br>";
 
 
 echo  "<br>";

 echo "address "  .$_POST['address'];;
 echo  "<br>";


 echo "your department "  .$_POST['department'];
 echo  "<br>";

  
echo "your skills";
echo  "<br>";

if(!empty($_POST['checkbox'])) {
    foreach($_POST['checkbox'] as $c) {
      echo $c;
      echo  "<br>";

      if (!isset($_POST['submit'])){
        header("location: registeration.php");
        exit();
    }
    
    }

}


$students=[
        ['name'=>'ali ahmed','department'=>'is','country'=>'cairo','username'=>'ali_ahmed','gender'=>'male','skills'=>['php','css']],
        ['name'=>'mona hany','department'=>'cs','country'=>'zag','username'=>'mona_hany','gender'=>'female','skills'=>['html','css']],
        ['name'=>'sara samy','department'=>'it','country'=>'alex','username'=>'sara_samy','gender'=>'female','skills'=>['js','bootstrap']],
        ['name'=>'ahmed ali','department'=>'is','country'=>'cairo','username'=>'ahmed_ali','gender'=>'male','skills'=>['php','mysql']],
        ];
?>
<table border="1" bgcolor="lightblue" width="80%" align="center">
    <tr>
           <th>name</th>
            <th>department</th>
            <th>country</th>
            <th>username</th>
            <th>gender</th>
            <th>skills</th>
    </tr>

    <?php foreach ($students as $student){ ?>
            <tr>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['department']?></td>
        <td><?php echo $student['country']?></td>
        <td><?php echo $student['username']?></td>
        <td><?php echo $student['gender']?></td>
        <td><?php foreach ($student['skills'] as $skill)
                echo "<ul>".$skill."</ul>";   ?>
        </td>
            </tr>
    <?php } ?>

    <?php if (!empty($_POST['fname']&& $_POST['username']&& $_POST['password'])) ?>
          <tr>
        <td><?php echo $_POST['fname']." ".$_POST['lname']?></td>
        <td><?php echo $_POST['department']?></td>
        <td><?php echo $_POST['country']?></td>
        <td><?php echo $_POST['username']?></td>
        <td><?php echo $_POST['gender']?></td>
        <td><?php foreach ($_POST['checkbox'] as $skill)
                echo "<ul>".$skill."</ul>";  ?>
        </td>
           </tr>

</table>
