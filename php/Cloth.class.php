<?php

	class Cloth extends Product
	{
		private $discount;

		public function setDiscount($discount)
		{
			$this->discount = $discount;
		}

		public function getDiscount()
		{
			return $this->discount;
		}
	}
?>