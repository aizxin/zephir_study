<?php
	$logs = [[1,2],[2,3]];
	$da = array_map(function ($log)
		{
			var_dump($log);  // [1,2]  // [2,3]
			return test($log[ 0 ], $log[ 1 ]);
		},
		$logs
	);
	function test($i,$a){
		return $i + $a;
	}
	var_dump($da);
 ?>