<!DOCTYPE html>

<!-- include php files here -->
<?php require("/includes/config.php"); ?>
<?php include('variables.php'); ?>
<!-- end of php file inclusion -->
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
<meta name="description" content="" />
 
<meta name="keywords" content="" />
 
<meta name="author" content="" />
 
<link rel="stylesheet" type="text/css" href="<?php echo(SITE_STYLES_LOCATION) ?>style.css" media="screen" />
 
<title>1stWebDesigner PHP Template</title>
 
</head>
 
    <body>
 
        <div id="wrapper">
            <?php include('header.php'); ?>

            <?php include('nav.php'); ?>

 
<div id="content">
 
<h1>Heading1</h1>
<h2>Heading2</h2>
<h3>Heading3</h3>
<h4>Heading4</h4>
<h5>Heading5</h5>
 
<h3>Paragraph Element</h3>
 
<p>
 
Welcome
 
</p>

<p>
Root Dir: <?php echo (ROOT_DIR); ?>
<br />
Root url: <?php echo (ROOT_URL); ?>
<br />
APP ROOT <?php echo (APP_ROOT); ?>
<br />
Includes <?php echo (DOT); ?>

</p>

<p>
 
Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
 
</p>
 
<h3>Another Heading Starting Point</h3>
 
<p>
 
Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
 
</p>
 
<p>
 
Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non 
ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac 
mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. 
Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales 
fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc 
pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
 
</p>


<a href='./myone/mytwo22/123456789123456789.php'>long url</a>
 
</div> <!-- end #content -->
 

<?php include('sidebar.php'); ?>
 
<?php include('footer.php'); ?>
 
        </div> <!-- End #wrapper -->
 
    </body>
 
</html>