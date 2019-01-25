<?php 
include 'connection.php';
class PhpController extends connection {
	private $links;
	 public function __construct(){

        $this->links = $this->mysqliConnection();
       
    }
	public function new_user($post){
		$name = $post['name'];
		
        $query = mysqli_query($this->links, " INSERT INTO users set name='$name'" ) or die(mysqli_error($this->links));
        echo 'ok';die;
	}
	public function get_all(){
		return 'ok';
		
	}
	
	
	
}
$admin = new PhpController;
?>