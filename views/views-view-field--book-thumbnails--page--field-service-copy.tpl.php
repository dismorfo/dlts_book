<?php

/**
 * @file
 *  VIEW for the horizontal line of thumbnails, as seen in the book view only
 *
 */


$where = base_path() . drupal_get_path('theme',$GLOBALS['theme']);
?>
<div class="loaderHolder"><img src="<?php echo $where ?>/images/loadhold.png" width="220" height="356"></div>
<div class="thumbHolder">
<?php
echo $row->field_field_service_copy[0]['rendered'];
?></div>