<!DOCTYPE html>
<html>
<head>
	<title>GALLERY :: battlecruiser.co</title>

<script src="/jquery-3.2.1.min.js"></script>

<!-- META META META META META -->
<meta charset="UTF-8">
<meta name="description" content="!HardCore4Life! ~★battlecruiser.co★~ :: GALLERY ::">
<meta name="keywords" content="battlecruiser, hardcore, gallery, stereo, girlz, art">
<meta name="author" content="The Woodcutter">

<link rel="icon" type="image/png" href="/images/layout/Color-08.png">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100077007-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100077007-3');
</script>

<!-- STYLES -->
<style type="text/css">
body{ 
  background-image:url('/images/layout/gallery-bg.jpg');
  background-repeat:;
  background-size:100% auto;
}

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
  width: 85% !important;
  height: auto !important;
  margin: 4px;
}

@media (max-width: 1900px) {
  #photos {
  -moz-column-count:    5;
  -webkit-column-count: 5;
  column-count:         5;
  }
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
	// $dir = './';
	// if (is_dir($dir)) {
	// 	if ($all = opendir($dir)) {
 //      // var_dump($all);
 //      // return;
	// 		while (($file = readdir($dh)) !== false) {
	// 			echo "<a href='/images/gallery/" . $file . "' target='_blank'><img width='100%' src='/images/gallery/" . $file . "'></a><br>";
	// 		}
	// 	}
	// 	closedir($dh);
 // 	}
?>
</section>
</body>
</html>