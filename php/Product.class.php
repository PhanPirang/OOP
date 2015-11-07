<?php
	
	class Product
	{
		protected $id;
		protected $name;
		protected $price;
		protected $status; 
		protected $thumbnail;
		protected $cat_id;  
		protected $description; 

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getName()
		{
			return $this->name;
		}

		public function setPrice($price)
		{
			$this->price = $price;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function setCat_id($cat_id)
		{
			$this->cat_id = $cat_id;
		}

		public function getCat_id()
		{
			return $this->cat_id;
		}

		public function setThumbnail($thumbnail)
		{
			$this->thumbnail = $thumbnail;
		}

		public function getThumbnail()
		{
			return $this->thumbnail;
		}

		public function setDescription($description)
		{
			$this->description = $description;
		}

		public function getDescription()
		{
			return $this->description;
		}

	}




?>