<?php
class Paging {


	private $_records;
	private $_max_pp;
	private $_numb_of_pages;
	private $_numb_of_records;
	private $_current;
	private $_offset = 0;
	public static $_key = 'pg';
	public $_url;




	public function getPaging() {
		$links = $this->getLinks();
		if (!empty($links)) {
			$out  = "<ul class=\"paging\">";
			$out .= $links;
			$out .= "</ul>";
			return $out;
		}
	}





}
