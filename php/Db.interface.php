<?php
	interface Db{
		public function query($sql);
		public function select($sql, $condtion);
		public function delete($sql, $condtion);
	}
?>