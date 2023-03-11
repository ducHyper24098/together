<?php
$host = "sql313.epizy.com";
$dnname = "epiz_33635810_duc";
$username = "epiz_33635810";
$pass = "yI39kvHAm4gh";
$connect = new PDO("mysql:host=$host;dbname=$dnname;charset=utf8","$username","$pass");
$sql = "SELECT * FROM test1";
$statement = $connect->prepare($sql);
$statement->execute();
$result =  $statement->fetchAll();
?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
         
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($result); $i++) { 
            $id = $result[$i]['id'] ;
            $name = $result[$i]['name'] ;
          
            ?>
            <tr>
                <td><?php echo $id  ?></td>
                <td><?php echo $name  ?></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>