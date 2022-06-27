--TEST--
Bug #71063 (filter_input(INPUT_ENV, ..) does not work)
--EXTENSIONS--
filter
--ENV--
PATH=/
--INI--
variables_order=E
--FILE--
<?php
var_dump($_ENV['PATH']);
var_dump(filter_input(INPUT_ENV, 'PATH'));
?>
--EXPECT--
string(1) "/"
string(1) "/"
