<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/transaction.php');

//Instantiate transaction
$transaction = new Transaction();

//Get Customer
$transactions = $transaction->getTransactions();

//print_r($customers);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>View Transactions</title>
</head>
<body>
	<div class="container mt-4">
	<div class="btn-group" role="group">
	    <a href="customers.php" class="btn btn-secondary">Customers</a>
	    <a href="transactions.php" class="btn btn-primary">Transaction</a>
	    
	</div><hr>
		<h2>Transactions</h2>
		<table class="table table-stiped">
		    <thead>    
		        <tr>
		            <th>Transaction ID</th>
		            <th>Customer</th>
		            <th>Deposit For</th>
		            <th>Amount</th>
		            <th>Date</th>
		        </tr>
		    </thead>
		    <tbody>
            <?php foreach($transactions as $t): ?>
            <tr>
               <td><?php echo $t->id; ?></td>
               <td><?php echo $t->customer_id; ?></td>  
            
               <td><?php echo $t->product; ?></td>
               <td><?php echo sprintf('%.2f', $t->amount/100); ?> <?php echo strtoupper( $t->currency); ?> </td> 
                <td><?php echo $t->created_at; ?></td> 
            </tr>
            
            
            
            
            <?php endforeach; ?>
		        
		    </tbody>
		</table>
		<br>
		<p class="btn btn-light"><a href="http://localhost:8080/Hotel/hotel.php">Home</a></p>

	</div>

</body>
</html>