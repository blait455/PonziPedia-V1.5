<?php if (!Auth::userCan('message_users')) page_restricted(); ?>

<?php echo View::make('admin.header')->render() ?>
<?php
$users = DB::table('users')->get();
 

if (isset($_POST['SetReceiver'])) {
	$id       = $_POST['accountid'];
	$username       = $_POST['receivername'];
	ConfirmActivationReceiver($id,$username);
}
 
?> 



 <h3 class="page-header">
	User Details
</h3>

<form action="" method="POST" id="messages_form">

	<table class="table table-striped table-bordered table-hover table-dt" id="messages">
		<thead>
			<tr>
				<th><input type="checkbox" class="select-all" value="1"></th>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Number</th>
				<th>Phone Number</th>
				<th>Bank Name</th>
				<th>Account type</th>
				<th>Account Name</th>
				<th>Account Number</th>
				<th>Country</th>
				<th>State</th>
				<th>Bitcoin Wallet</th>
				<th>Ref Id</th>
				<th>Profile Picture</th>
			</tr>
		</thead>

		   <?php AccountDetailsView(); ?>
		<tbody>
		</tbody>
	</table>
</form>



<?php echo View::make('admin.footer')->render() ?>