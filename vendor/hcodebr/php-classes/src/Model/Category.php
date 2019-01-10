<?php
	/**
	 * Created by PhpStorm.
	 * User: gilsonalves
	 * Date: 2019-01-04
	 * Time: 21:51
	 */

	namespace Hcode\Model;

	use Hcode\DB\Sql;
	use Hcode\Model;


	class Category extends Model
	{

		public static function listAll() {
			$sql = new Sql();
			return $sql->select("select * from tb_categories order by descategory");
		}

		public function save(){
			$sql = new Sql();
			$results = $sql->select("CALL sp_categories_save(:idcategory, :descategory)", array(
					":idcategory" => $this->getidcategory(),
					":descategory" => utf8_decode($this->getdescategory())
			));
			$this->setData($results[0]);
		}

		public function get($idcategory){
			$sql = new Sql();
			$results = $sql->select("select * from tb_categories where idcategory = :idcategory",array(
					'idcategory' => $idcategory
			));
			$this->setData($results[0]);
		}

		public function delete(){
			$sql = new Sql();
			$sql->query("delete from tb_categories where idcategory = :idcategory" ,array(
					'idcategory' => $this->getidcategory()
			));
		}

	}