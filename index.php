<?php
 include 'PhpController.php';
$data =  $admin->get_all();
 if(isset($_POST)&& isset($_POST['name'])){
	 
	$admin->new_user($_POST); 
	 
 }

?>
<html>
<form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
             
                <div class="modal-footer">
                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                </div>
            </form>
</html>