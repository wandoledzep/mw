<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>

  <?php print $skipnav ?>

	<div id='page' class="page-blocks"><div class='limiter clear-block'>
		
	  <?php if ($help || ($show_messages && $messages)): ?>
	    <div id='console'><div class='limiter clear-block'>
	      <?php print $help; ?>
	      <?php if ($show_messages && $messages): print $messages; endif; ?>
	    </div></div>
	  <?php endif; ?>

		<?php if ($header): ?>
	    <div id='header'><div class='limiter clear-block'>
	      <?php print $header; ?>
	    </div></div>
	  <?php endif; ?>

    <div id='main' class='clear-block'>
        <?php if ($breadcrumb) print $breadcrumb; ?>
        <?php if ($title): ?><h1 class='page-title'><?php print $title ?></h1><?php endif; ?>
        <?php if ($tabs) print $tabs ?>
        <?php if ($tabs2) print $tabs2 ?>
        <div id='content' class='clear-block'><?php print $content ?></div>
    </div>

  </div></div>

  <?php print $scripts ?>
  <?php print $closure ?>

  </body>
</html>
