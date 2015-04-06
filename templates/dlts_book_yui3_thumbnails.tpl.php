<?php
   $imagePath = base_path() . drupal_get_path('theme',$GLOBALS['theme']) . "/images/loadhold.png";
   $imageMarkup =  '<div class="loaderHolder"><img src="' . $imagePath . '" width="220" height="356"></div>';
?>

<div id="thumbnails" class="yui3-g pane thumbnails hidden">
  <div class="yui3-u-1">
    <div class="yui3-g">
      <div class="thumbnails-container yui3-u-1">
        <div id="book-navbar" >
          <div class="item-list" >
            <ul class="pager">
              <li >&nbsp;</li>
            </ul>
          </div>
        </div>
        <div class="view view-book-thumbnails view-id-book_thumbnails view-display-id-page" >
          <div class="view-content">
            <div class="views-row views-row-1"><?php echo  $imageMarkup; ?> </div>
            <div class="views-row views-row-2"><?php echo  $imageMarkup; ?>  </div>
            <div class="views-row views-row-3"><?php echo  $imageMarkup; ?>   </div>
            <div class="views-row views-row-4"><?php echo  $imageMarkup; ?>  </div>
            <div class="views-row views-row-5"><?php echo  $imageMarkup; ?>   </div>
            <div class="views-row views-row-6"><?php echo  $imageMarkup; ?>   </div>
            <div class="views-row views-row-7"><?php echo  $imageMarkup; ?>   </div>
            <div class="views-row views-row-8"><?php echo  $imageMarkup; ?>  </div>
            <div class="views-row views-row-9"><?php echo  $imageMarkup; ?>  </div>
            <div class="views-row views-row-10"><?php echo $imageMarkup; ?>  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
