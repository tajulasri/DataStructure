<?php

/**
 *
 * Stack data structure implementation example
 * stack is first in last out 
 * means first element inserted should be placed on last index of array
 */

interface StackInterface {

	public function push($el);

	public function pop();

	public function isEmpty();

}

class Stack implements StackInterface{

	private $stack = [];

	private $stackSize;

	private $limit;
		
	/**
	 * set by default 10 
	 * @param int|integer $limit [description]
	 */
	public function __construct(int $limit = 10) 
	{
		$this->limit = $limit;
	}	

	/**
	 * push any element to stack
	 * @param  [type] $el [description]
	 * @return [type]     [description]
	 */
	public function push($el)
	{
		if($this->isLimit()) {
			throw new Exception("Stack size are reaching limit");
		}

		return array_unshift($this->stack,$el);
	}

	/**
	 * pop first index of stack
	 * @return [type] [description]
	 */
	public function pop()
	{
		if($this->getSize()) {
			return array_shift($this->stack);
		}

		throw new Exception("Stack are empty. Nothing to remove");
	}

	/**
	 * get stack data
	 * @return [type] [description]
	 */
	public function getStack()
	{
		return $this->stack;
	}

	/**
	 * [isEmpty description]
	 * @return boolean [description]
	 */
	public function isEmpty()
	{
		return $this->getSize() == 0 ?: false;
	}

	/**
	 * [isLimit description]
	 * @return boolean [description]
	 */
	public function isLimit()
	{
		return $this->getSize() == $this->limit ?: false;
	}

	/**
	 * get size
	 * @return [type] [description]
	 */
	public function getSize()
	{
		return count($this->stack);
	}
}

$stack = new Stack;
$stack->push([1,2,3]);
$stack->pop();
var_dump($stack->getStack());