<?php

$db= new mysqli('localhost', 'root', '', 'sessions_homework');
/*$query= 'INSERT INTO teachers ( ID,First_Name, Last_Name, Email) VALUES ( " NUll ","shafiq", " Ahmadi", "ahmadi@yahoo.com")'; */

//$query='INSERT INTO teachers( First_Name, Last_Name, Email) VALUES ("mahmmod", "poya","poya456@email.com")';

/*$query='UPDATE teachers SET Department = economic WHERE  ID = 4';*/

// $query='DELETE * FROM teacher WHERE ID= 2';

$query= 'SELECT * FROM teachers ';

 $result = $db->query($query);

 $data= $result->fetch_all( MYSQLI_ASSOC);
//var_dump($data);

?>

<style>
   table{
      
      border-radius: 10px;
      margin:auto;
      margin-top: 20px;
      bgcolor:lightblue;
      width: 30px;
   
   }
th{
   border-radius:10px;
 padding:10px;
   
}
td{
   border-radius:10px;
   padding: 10px;
}

</style>



<table >
    <tr>
     <th bgcolor ="gray">  ID</th>
     <th bgcolor ="olive">  First_Name</th>
     <th bgcolor ="violet">  Last_Name</th>
     <th bgcolor ="cream">  Email    </th>
     <th bgcolor ="tan">  Department</th>


</tr>

<tbody>
   <?php
       foreach($data as $record){
         echo  ' <tr>
                   <td bgcolor= "lightgreen"> '. $record['ID'] .'</td>
                   <td bgcolor= "lightblue">'. $record['First_Name']. '</td>
                   <td bgcolor="yellow"> '. $record['Last_Name']. '</td>
                   <td bgcolor="coral"> '. $record['Email']. '</td>
                   <td bgcolor="cyan"> '. $record['Department']. '</td>
                </tr> ';
        }
     ?>
</tbody> 
</table>
         
         


