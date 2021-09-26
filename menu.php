<ul>
<?php 
include './vendor/includefiles.php';

$excludes = array( 'layout.php', 'menu.php', 'footer.php', 'vendor');

includeFiles($excludes, '<li>', '<a href="', '">', "</a></li>");

?>
</ul>