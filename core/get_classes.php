<?php

class TypeFactory {

	var $db;

	function TypeFactory($db) {
		$this->db = $db;
	}

	function get_object($id, $type, $pkey) {
		return $this->get_factory($id, $type, $pkey);
	}

	###################################################################
	//start of get details function
	###################################################################

	function get_factory($id, $type, $pkey) {
		$con = connect_database();
		$o = new $type;
		$nid = $pkey;
		$sql = "SELECT * FROM $type where $nid = " . $id;
		$result = $con->query($sql) or die(mysqli_error($con));
		$o = mysqli_fetch_object($result);
		mysqli_free_result($result);
		$con->close();
		return $o;
	}

	#################################################################
	//end of get detail function
	#################################################################

}

?>