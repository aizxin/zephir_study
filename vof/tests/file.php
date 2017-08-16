<?php
	use Vof\Cache\Backend\File;
 	use Vof\Cache\Frontend\Output as FrontOutput;

	 // Cache the file for 2 days
	 $frontendOptions = [
	     "lifetime" => 172800,
	 ];

	 // Create an output cache
	 $frontCache = FrontOutput($frontOptions);

	 // Set the cache directory
	 $backendOptions = [
	     "cacheDir" => "../app/cache/",
	 ];

	 // Create the File backend
	 $cache = new File($frontCache, $backendOptions);

	 $content = $cache->start("my-cache");

	 if ($content === null) {
	     echo "<h1>", time(), "</h1>";

	     $cache->save();
	 } else {
	     echo $content;
	 }
?>