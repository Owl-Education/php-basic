<?php

include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$linkedList->insertLast(43);
$linkedList->insertLast(21);
$linkedList->deleteNode(43);
//$totalNodes = $linkedList->totalNodes();
//$linkData = $linkedList->readList();

//echo $totalNodes;
//echo implode ('-' , $linkData);