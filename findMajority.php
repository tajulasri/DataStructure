<?php

/**
 * Searching majority element in array data set
 * which is sizeof(array) / 2 times
 */


/**
 * first method is using voting more algorithm
 * @link https://en.wikipedia.org/wiki/Boyer%E2%80%93Moore_majority_vote_algorithm
 */

class FindMajority {

	/**
	 * [$array description]
	 * @var [type]
	 */
	private $array;

	/**
	 * 
	 * @param  \ArrayAcces $array [description]
	 * @return [type]             [description]
	 */
	public function __construct(array $array)
	{
		$this->array = $array;
	}

	/**
	 * 
	 * @return mix 
	 */
	public function search()
	{
		$frequency = $this->calculateFrequency();
		//loop one more for find majority
		foreach($frequency as $key => $value) {
			if($value == ((floor($this->getElementSize() / 2)))) {
				return $key;
				break;
			}

			return false;
		}
	}

	/**
	 * calculate given dataset
	 * @return [type] [description]
	 */
	private function calculateFrequency()
	{
		$output = [];
		for($i = 0; $i < $this->getElementSize(); $i++) {
			if(!isset($output[$this->array[$i]])) {
				$output[$this->array[$i]] = 0;
			}

			$output[$this->array[$i]] += 1;
		}

		return $output;
	}

	/**
	 * get element size
	 * @return [type] [description]
	 */
	private function getElementSize()
	{
		return count($this->array);
	}
}


/*
	in this case 1 should be a majority element
	int(1)
 */
$element = [1,1,1,1,12,3,4,5,6];
$find = (new FindMajority($element))->search();
var_dump($find);