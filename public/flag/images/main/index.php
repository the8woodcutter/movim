<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	#photos {
  /* Prevent vertical gaps */
  line-height: 0;
   
  -webkit-column-count: 4 ;
  -webkit-column-gap:   0px;
  -moz-column-count:    4;
  -moz-column-gap:      0px;
  column-count:         4;
  column-gap:           0px;  
}

#photos img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
}

@media (max-width: 1200px) {
  #photos {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width: 1000px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  #photos {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  #photos {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}
</style>
</head>
<body>
<section id="photos">
<?php 
	$dir = './';
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				echo "<a href='/images/main/" . $file . "' target='_blank'><img width='100%' src='/images/main/" . $file . "'></a><br>";
			}
		}
		closedir($dh);
 	}
?>
</section>
</body>
</html>