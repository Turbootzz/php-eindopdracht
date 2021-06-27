<?php require "figuur.class.php"; 
 require "vierkant.class.php"; 
 require "cilinder.class.php"; 

// Create a new object from Rectangle class
$obj = new figuur;
 
// Get the object properties values
echo $obj->height; // 0utput: 0
echo $obj->width; // 0utput: 0
 
// Set object properties values
$obj->height = 5;
$obj->width = 5;
 
// Read the object properties values again to show the change
echo $obj->height;
echo $obj->width; 
 
 
// Call the object methods
// echo $obj->getVierkant(); // 0utput: 100
// echo $obj->getArea(); // Output: 600
?>