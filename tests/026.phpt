--TEST--
FFI 026: Array iteration by reference
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$a = FFI::new("int[3]");
$a[1] = 10;
$a[2] = 20;
var_dump($a);
foreach ($a as &$val) {
	$val += 5;
}
var_dump($a);
?>
--EXPECTF--
object(FFI\CData)#%d (3) {
  [0]=>
  int(0)
  [1]=>
  int(10)
  [2]=>
  int(20)
}
object(FFI\CData)#%d (3) {
  [0]=>
  int(5)
  [1]=>
  int(15)
  [2]=>
  int(25)
}
