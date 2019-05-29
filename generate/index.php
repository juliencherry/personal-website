<?php
    global $title;
    $title = "Generate";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/header.php";
?>
        <main>
		  <h1><?php echo $title; ?></h1>
		  <p>An intersection of computer science and art. Created from scratch using the Java programming language, each image was created by randomly placing colored (sets of) pixels on a two-dimensional grid. Restrictions in their color and placement alter the final composition.</p>
          <p>Featured at the <a href="https://camd.northeastern.edu/artdesign/events/symbiotic-spark-art-show/">Symbiotic art show</a> at Northeastern University from April 7<sup>th</sup>&ndash;21<sup>st</sup>, 2017.</p>
          <p>
			<img src="1.gif"/>
			<img src="2.gif"/>
			<img src="3.gif"/>
			<img src="4.gif"/>
			<img src="5.gif"/>
			<img src="6.gif"/>
			<img src="7.gif"/>
			<img src="8.gif"/>
		  </p>
        </main>
<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/footer.php";
?>
