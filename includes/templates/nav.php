<!-- start .navbar navbar-default -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="<?php echo echoClassIfRequestMatches("index", "selected ", True)?>navbar-brand"
               href="<?php echo(CONFIG_ROOT_URL) ?>">About Josh</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
            <a class="<?php echo echoClassIfRequestMatches("resume", "selected")?>"
               href="<?php echo(CONFIG_ROOT_URL) ?>resume.php">Resume</a>
        </li>
        <li>
            <a class="<?php echo echoClassIfRequestMatches("portfolio", "selected")?>"
               href="<?php echo(CONFIG_ROOT_URL) ?>portfolio.php">Portfolio</a>
        </li>
        <li>
            <a class="<?php echo echoClassIfRequestMatches("blog", "selected")?>"
               href="<?php echo(CONFIG_ROOT_URL) ?>blog-and-some-thoughts/">Blog</a>
        </li>
        <li>
            <a class="<?php echo echoClassIfRequestMatches("testing-area", "selected")?>"
               href="<?php echo(CONFIG_ROOT_URL) ?>testing-area.php">Testing Area</a>
        </li>
        <li>
            <a class="<?php echo echoClassIfRequestMatches("biography", "selected")?>"
               href="<?php echo(CONFIG_ROOT_URL) ?>biography.php">Biography</a>
        </li>
        <li>
            <a class="<?php echo echoClassIfRequestMatches("contact", "selected")?>"
               href="<?php echo(CONFIG_ROOT_URL) ?>contact.php">Contact</a>
        </li>
      </ul>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end .navbar navbar-default -->