<?php
require_once('lib/pdo_db.php');
require_once('models/customer.php');
require_once('config/db.php');

//Instantiate Customer
$customer = new Customer();

//Get Customer
$customers = $customer->getCustomers();

//print_r($customers);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>View Results</title>
	<style>
        body {
            background: aliceblue;
        }
        .head {
            font-family: 'times new romans';
            font-size: 24px;
            color: lightseagreen;
            text-align: center;
        }
        table {
            font-family: 'times new romans';
        }
        
        
    </style>
</head>
<body>
	<div class="container mt-4">
	<div class="btn-group" role="group">
	    <a href="customers.php" class="btn btn-primary">Results</a>
	    
	    
	</div><hr>
		<h2 class="head">Online Voting System.</h2>
		<table class="table table-stiped">
		    <thead>    
		        <tr>
                    <th>No.</th>
		            <th>User ID</th>
		            <th>User Name</th>
		            <th>For President</th>
		             <th>For Governor</th>
		              <th>For Senator</th>
		               <th>For MP</th>
		            
		            <th>Voted_at</th>
		        </tr>
		    </thead>
		    <tbody>
            <?php foreach($customers as $c): ?>
            <tr>
              
               <td><?php echo $c->id; ?></td>
               <td><?php echo $c->user_ID; ?></td>
               <td><?php echo $c->user_name; ?></td> 
              <td> <?php echo $c->for_president; ?></td>
               <td><?php echo $c->for_governor; ?></td>
               <td><?php echo $c->for_senator; ?></td>
               <td><?php echo $c->for_mp; ?></td>
               <td><?php echo $c->created_at; ?></td> 
            </tr>
            
            <?php endforeach; ?>
		        
		    </tbody>
		</table>
		<br>
		<p class="btn btn-light"><a href="../index.php">HOME</a></p>

	</div>

</body>
</html>