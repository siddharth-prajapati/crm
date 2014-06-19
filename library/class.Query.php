<?php
class Query
{
	private $loader;
	private $page;
	private $module;
    private $type;


	public function __construct ()
	{
		global $loader;
		$this->loader = $loader;
	}
	
	public static function getRow($query)
	{
		$result = mysql_query($query);
		return mysql_fetch_object($result);
	}
	
	public static function getResults($query)
	{
		$result = mysql_query($query);

		while($rows = mysql_fetch_object($result))
		{
			$results[] = $rows;
		}
		return $results;
	}
	
	public static function genquery($query)
	{
		$result = mysql_query($query);
		if($result){ return true;}
		else{ return false;}
	}

    public static function getBulkRows($query)
	{
	   $result=mysql_query($query);
	   $rowarr=array();
	   while($bulkrow=mysql_fetch_array($result)){
	       array_push($rowarr,$bulkrow);
	   }
	   return $rowarr;
	}

}