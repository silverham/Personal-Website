<!DOCTYPE html> 
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo CONFIG_ROOT_URL."favicon.ico"; ?>" type="image/x-icon" />
<!-- CSS files -->
<?php
foreach ($this->stylesheets as $stylesheet) {
echo '<link href="' . $stylesheet . '" rel="stylesheet" type="text/css" />' . "\n";
}
?> 
<!-- end of CSS files -->
<!-- JS files top -->
<?php
    foreach ($this->javascriptsTop as $javascript) {
        echo '<script src="' . $javascript . '"></script>' . "\n";
    }
?>
<!-- end of JS files top -->
<!-- Custom data top -->
<?php echo $this->customHeaders; ?>
<!-- end custom data top -->
<?php include_once("analyticstracking.php") ?>
<title><?php echo $this->title; ?> - <?php echo STYLES_SITE_HEADING ?></title>
 
</head>

    <body>
        <!-- start .container -->
        <div class="container">     
            <!-- start #content -->
            <div class="content no-sidebar">
                <!-- heading -->
                <h2 id="heading"><?php echo $this->heading; ?></h2>
                <!-- end heading -->
                
                <?php echo $this->body; ?>
                
            </div> 
            <!-- end #content -->

            <?php include('footer.php'); ?>
        
        </div> 
        <!-- End #wrapper -->
        <!-- Js files bottom -->
        <?php
            foreach ($this->javascriptsBottom as $javascript) {
                echo '<script src="' . $javascript . '"></script>' . "\n";
            }
        ?>
        <!-- end of JS files bottom -->
        <!-- Custom data bottom -->
        <?php echo $this->customBottom; ?>
        <!-- end custom data bottom -->
    </body>
    
</html>