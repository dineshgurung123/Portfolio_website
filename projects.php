<link rel="stylesheet" href="style.css">


<?php

$userName = 'root';
$password = 'sspear54321';
$host = 'localhost';
$database = 'my_portfolio';

$connection = mysqli_connect($host, $userName, $password, $database);


$query = "select * from projects";

$result  =  mysqli_query($connection, $query);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<div class="container">

 <?php  include ('header.php') ?>
 
  <h1 class="project-heading">My Projects</h1>

 <div class="table-container">

<table class="table">
 
  <thead>
    <tr>
      
      <th class="table-title" scope="col" >Image</th>
      <th class="table-title"  scope="col">Name</th>
      <th class="table-title"  scope="col">Links</th>
    </tr>
  </thead>
  <tbody>
    
   <?php foreach($rows as $data ): ?>
    <tr>
      
      <td class="project-image"><img src=<?= $data['imageURL'] ;?> alt="" height="60px" width="60px"></td>
      <td class="table-name"> <?= $data['name']; ?></td>
       <td ><a class="table-links" href= <?= $data['links'] ; ?>> Run links </a> </td>
    </tr>
   
  

  <?php endforeach; ?>
  </tbody>
</table>



</div>

<?php  include('footer.php') ?>

</div>