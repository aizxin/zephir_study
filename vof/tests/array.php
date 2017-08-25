<?php
	$where['id'] = 1;
	$single_condition = array_diff_key($where, array_flip(
				['AND', 'OR', 'GROUP', 'ORDER', 'HAVING', 'LIMIT', 'LIKE', 'MATCH']
			));
	var_dump($single_condition);
?>