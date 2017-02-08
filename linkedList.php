<?php

/**
 * implementation example of linked list
 */
class Node {

	private $value;

	private $head = null;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function value()
	{
		return $this->value;
	}

	public function head()
	{
		return $this->head;
	}


	public function setHead($value)
	{
		$this->head = $value;
	}
}


class LinkedList {

	private $list = [];

	private $data = [];

	public function create(Node $node)
	{
		array_push($this->list,$node);
	}

	public function link(Node $node,Node $head)
	{
		$find = $this->search($node->value());
		if($find instanceof Node) {
			
			if($find->head() == null) {
				//link together
				$find->setHead($head->value());
			}
			else {

				return sprintf("cannot create link that already exists.link => $node->head()");
			}
		}
		else {

			return sprintf("Element on stack are not found %d",$node->value());
		}
	}

	/**
	 * searching is always O(n) cause
	 * @param  [type] $head [description]
	 * @return [type]       [description]
	 */
	public function search($head) {

		foreach($this->list as $key => $val ) {

			if($val->value() === $head) {
				return $val;
				break;
			}
		}

		return false;
	}

	public function list()
	{
		return $this->list;
	}

	public function toArray()
	{
		foreach($this->list as $key => $value ) {
			$this->data[$key] = [$value->value(),$value->head()];
		}

		return $this->data;
	}
}


$a = new Node(8);
$b = new Node(5);
$c = new Node(6);

$linkedlist = new LinkedList();
$linkedlist->create($a);
$linkedlist->create($b);
$linkedlist->create($c);
$linkedlist->link($a,$b);
$linkedlist->link($b,$c);

print_r($linkedlist->toArray());