<?php
if($page->og_image()->isNotEmpty()){
  $ogimgpath = $page->url() . '/' . $page->og_image()->uri();
} else if($page->site()->og_image()->isNotEmpty()){
  $ogimgpath = $page->site()->url() . "/content/" .$page->site()->og_image()->uri();
} else {
  $ogimgpath = false;
}

$ogtitle = (!empty($controller['title']['field'])) ? $controller['title']['field'] : $page->title();
$ogdesc = (!empty($controller['description']['field'])) ? $controller['description']['field'] : $page->site()->description();
$ogsource = ($page->site()->meta_title()->isNotEmpty()) ? $page->site()->meta_title() : $page->site()->title();

?>

<label class="label">Open Graph Preview</label>
<div class="seo-open-graph" data-og-controller='<?php echo json_encode( $controller, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE ); ?>'>
  <div style="background-image:url(<?php echo ($ogimgpath) ? $ogimgpath : '' ?>);" class="seo-og-image" data-page-url="<?php echo $page->url()?>" id="ogimagepreview"></div>
  <?php if(!$ogimgpath) {?>
  <div class="seo-og-image-warning">Warning: No OpenGraph Image is set for this page and no fallback has been found for the site. You can set an image for this page below and a fallback under site options.</div>
  <?php } ?>
  <div class="seo-og-title seo-view-title"><?php echo $ogtitle ?></div>
  <div class="seo-og-description seo-view-description"><?php echo $ogdesc ?></div>
  <div class="seo-og-link"><?php echo $ogsource ?></div>
</div>
<script type="text/javascript">
  (function(){
    var ogwrapper = document.getElementsByClassName('seo-open-graph')[0];
  });
</script>
