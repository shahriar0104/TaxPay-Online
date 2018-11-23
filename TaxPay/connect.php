<?php
 error_reporting(E_ALL ^ E_NOTICE);
// mysql_connect("localhost","root","");
// mysql_select_db("online_tax_pay");
// echo 'connect';
?>
<?php
class Database{
	private $con;
	public function db_connect(){
		$this->con=mysql_connect("localhost","root","");
                mysql_select_db("online_tax_pay");
	}
}
echo 'connected';
?>