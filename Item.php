<?php

/**
 * 

 */
class Item
{
	var $name;
	var $id;
	var $initialBidAmount;

	function __construct()
	{
		# code...
	}
	public function intialBid($amt)
	{
		$this.$initialBidAmount = $amt;
	}
	public function releaseBid()
	{
		# code...
	}
}
?>