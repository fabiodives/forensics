<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>LACAM - Machine Learning group</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
        <h1>Fabio Leuzzi</h1>
	  <h2>@ LACAM <span class="alternate_colour">Machine Learning Group</span></h2>
        </div>
	<div class="sidebar">
	  <a href="http://lacam.di.uniba.it" > <img src="style/Lacam.gif" width="120px" alt="LACAM logo"/></a>
	</div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="tab_selected" in the li tag for the selected page - to highlight which page you're on -->
       <!-- put class="tab_selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li class="tab_selected"><a href="publications.php">Publications</a></li>
          <li><a href="tutoring.html">Teaching/Tutoring</a></li>
          <li><a href="curriculum.html">Curriculum</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="style/banner_lacam.png" alt="tree tops" /></div>
    
      <div id="content">
      
        <!-- insert the page content here --> 

	<center>  <h2> Articles </h2>  </center>
        <table width="100%" cellpadding="0" cellspacing="0">
                <?php
		$_GET['bib']='leuzzi.bib';
		$_GET['type']='article';

		/*$_GET['all']=1;*/
		include( 'bibtexbrowser.php' );
		?>
        </table>

      	<center>  <h2> Inproceedings </h2> </center>
        <table width="100%" cellpadding="0" cellspacing="0">
                <?php
		$_GET['bib']='leuzzi.bib';
		$_GET['type']='inproceedings';

		/*$_GET['all']=1;*/
		include( 'bibtexbrowser.php' );
		?>
        </table>
     
        
      </div>
    <div id="site_content_bottom"></div>
    </div>
  </div>
</body>
</html>
