<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>

	<link rel="stylesheet" type="text/css" href="<?php echo $this->getStyleSheet('style.css')?>" />
	<?php  Loader::element('header_required'); ?>

</head>
<body>




    <!-- top wrapper -->
    <div id="topWrapper">
      <div id="topBanner"></div>
    </div>
    <div id="topnav">
       <?php
	  					$a = new Area('Header Nav');
	  					$a->display($c);
	  				?>

    </div>
    <!-- end top wrapper -->
    <div id="wrapper">
      <div id="bg">
        <div id="header"></div>
        <div id="page">
          <!-- begin container -->
          <div id="container">
            <!--  content -->
            <div id="content">
              <div id="center">
                 <?php
									$a = new Area('Main');
									$a->display($c);
				?>
              </div>
              <div id="right">
                <div id="sidebar">
                  <?php
				  						$a = new Area('Sidebar');
				  						$a->display($c);
					?>
                </div>
              </div>
              <div class="clear" style="height:40px"></div>
            </div>
            <!-- end content -->
          </div>
          <!-- end container -->
        </div>
        <div id="footerWrapper"></div>
      </div>
    </div>
    <div id="bottomWrapper">
      <div id="footer">
        <p style="padding-top:20px">
              A <a href="http://www.zipyourcode.com" shape="rect">ZipYourCode.com</a> creation.
        </p>
      </div>
    </div>


<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<?php  Loader::element('footer_required'); ?>

</body>
</html>