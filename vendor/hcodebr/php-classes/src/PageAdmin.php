<?php
	/**
	 * Created by PhpStorm.
	 * User: gilsonalves
	 * Date: 2019-01-04
	 * Time: 17:51
	 */

	namespace Hcode;


	class PageAdmin extends Page
	{
		public function __construct(array $opts = array(), $tpl_dir = "/views/admin/") {
			parent::__construct($opts, $tpl_dir);
		}
	}