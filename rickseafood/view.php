<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>template: home</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

	<!-- **** layout stylesheet **** -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getStyleSheet('style/style.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getStyleSheet('style/typography.css')?>" />
	<!-- **** colour scheme stylesheet **** -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getStyleSheet('style/colour.css')?>" />
	<?php echo Loader::element('header_required');?>

</head>

<body>
	<div id="main">
		<div id="links">
			<!-- **** INSERT LINKS HERE **** -->
			<?php 
				$a = new Area('Top Promotion Area');
				$a->display($c);			
			?>
		</div>
		<div id="logo"><h1><?php echo SITE?></h1></div>
		<div id="content">
			<div id="menu">
				<?php 
					$a = new Area('Header Nav');
					$a->display($c);
				?>			
			</div>
			<div id="column1">
				<div class="sidebaritem">
					<div class="sbihead">
						<h1>
							<?php 
							$a = new Area('Sidebar 1 Header');
							$a->display($c);
							?>			
						</h1>
					</div>
					<?php  if ($c->isEditMode()) { ?>
						<br /><br />
					<?php  } ?>							
					
					<div class="sbicontent">
						<!-- **** INSERT NEWS ITEMS HERE **** -->
							<?php 
							$a = new Area('Sidebar 1 Content');
							$a->display($c);
							?>
					</div>
				</div>
				<div class="sidebaritem">
					<div class="sbihead">
						<h1>
						<?php 
							$a = new Area('Sidebar 2 Header');
							$a->display($c);
						?>						
						</h1>			
						
					</div>
					<div class="sbilinks">
						<!-- **** INSERT ADDITIONAL LINKS HERE **** -->
						<?php  if ($c->isEditMode()) { ?>
							<br /><br />
						<?php  } ?>										
						<div>
						<?php 
							$a = new Area('Sidebar');
							$a->display($c);						
						?>
						</div>
<!-- 
						<ul>
							<li><a href="http://www.opendesigns.org">open designs</a></li>
							<li><a href="http://www.w3schools.com/xhtml/default.asp">learn XHTML</a></li>
							<li><a href="http://www.w3schools.com/css/default.asp">learn CSS</a></li>
							<li><a href="http://www.mozilla.com/firefox">get firefox</a></li>
						</ul>
 -->
					</div>
				</div>
				<div class="sidebaritem">
					<div class="sbihead">
						<h1>
						<?php 
							$a = new Area('Sidebar 3 Header');
							$a->display($c);
						?>			
						</h1>
					</div>
					<div class="sbicontent">
						<?php  if ($c->isEditMode()) { ?>
							<br /><br /><br />
						<?php  } ?>									
						<?php 
							$a = new Area('Sidebar 3 Content');
							$a->display($c);
						?>
					</div>
				</div>
			</div>
			<div id="column2">
			<?php  if ($c->isEditMode()) { ?>
				<br /><br />
			<?php  } ?>		
				<?php echo $innerContent?>
			</div>
		</div>
		<div id="footer">
			copyright &copy; 2006 your name | <a href="#">email@emailaddress</a> | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a>
		</div>
	</div>
	Loader::element('footer_required');
</body>
</html>
