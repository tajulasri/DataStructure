# DataStructure
Data structure Learning 

##Binary tree insertion example
```php
	
	$root = new Node(1);
	$b = new Node(3);
	$c = new Node(5);
	$d = new Node(10);

	$j = new Node(30);

	//initiate tree
	$bt = new BST($root);
	$bt->insert($root,$b);
	$bt->insert($root,$c);
	$bt->insert($b,$d);
	$bt->insert($d,$j);

	print_r($bt->tree());


	Array
(
    [0] => Node Object
        (
            [value:Node:private] => 1
            [left:Node:private] => Array
                (
                    [0] => Node Object
                        (
                            [value:Node:private] => 3
                            [left:Node:private] => Array
                                (
                                    [0] => Node Object
                                        (
                                            [value:Node:private] => 10
                                            [left:Node:private] => Array
                                                (
                                                    [0] => Node Object
                                                        (
                                                            [value:Node:private] => 30
                                                            [left:Node:private] =>
                                                            [right:Node:private] =>
                                                        )

                                                )

                                            [right:Node:private] =>
                                        )

                                )

                            [right:Node:private] =>
                        )

                )

            [right:Node:private] => Array
                (
                    [0] => Node Object
                        (
                            [value:Node:private] => 5
                            [left:Node:private] =>
                            [right:Node:private] =>
                        )

                )

        )

)


```