<?php

/**
 * implementation of binary tree using php
 */


class Node {

	/**
	 * root value for Node
	 * @var int
	 */
	private $value;

	/**
	 * left value
	 * @var null
	 */
	private $left = null;

	/**
	 * right value
	 * @var null
	 */
	private $right = null;

	public function __construct($value) 
	{
		$this->value = $value;
	}

	public function value()
	{
		return $this->value;
	}

	public function left()
	{
		return $this->left;
	}

	public function right()
	{
		return $this->right;
	}

	public function setLeft($value)
	{
		$this->left = $value;
	}

	public function setRight($value)
	{
		$this->right = $value;
	}
}


class BST {

	private $root = null;
	private $tree = [];

	public function __construct(Node $node)
	{
		if($this->root == null ) {
			$this->root = $node;
			$this->push($this->root);
		}
	}

	/**
	 * tree searching O(n)
	 * @param  Node   $node  [description]
	 * @param  Node   $value [description]
	 * @return [type]        [description]
	 */
	public function insert(Node $node,Node $value)
	{
		//should using traverse searching here
		
 	}


	/**
	 * O(n) searching node in tree
	 * @param  [type] $array  [description]
	 * @param  [type] $needle [description]
	 * @return [type]         [description]
	 */
	public function traverse($array,$needle)
	{
		$root = $array[0];

		if($root->left() != null ) {

			if( $root->left()[0]->value() === $needle) {

				return $root->left()[0];
			}
			else {
				
				$this->traverse($root->left(),$needle);
			}
		}

		if($root->right() != null ) {

			if( $root->right()[0]->value() === $needle) {

				return $root->right()[0];
			}
			else {

				$this->traverse($root->right(),$needle);
			}
		}

		return false;
	}

	protected function fillable(Node $node,$left = false) {
		if(! $left ) {
			return is_null($node->right()) ? true : false; 
		}
		return is_null($node->left()) ?  true : false;
	}

	public function tree()
	{
		return $this->tree;
	}

	private function push($entity)
	{
		return array_push($this->tree,$entity);
	}
}


$root = new Node(1);
$b = new Node(3);
$c = new Node(5);
$d = new Node(10);

$j = new Node(30);

//initiate tree
$bt = new BST($root);
//$bt->insert($root,$b);

var_dump($bt->insert($root,$b));