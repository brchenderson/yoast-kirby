<?php
if($page->twitter_image()->isNotEmpty()){
  $twitterimgpath = $page->url() . '/' . $page->twitter_image()->uri();
} else if($page->site()->twitter_image()->isNotEmpty()){
  $twitterimgpath = $page->site()->url() . "/content/" .$page->site()->twitter_image()->uri();
} else {
  $twitterimgpath = false;
}

$twittertitle = (!empty($controller['title']['field'])) ? $controller['title']['field'] : $page->title();
$twitterdesc = (!empty($controller['description']['field'])) ? $controller['description']['field'] : $page->site()->description();
$twittersource = ($page->site()->meta_title()->isNotEmpty()) ? $page->site()->meta_title() : $page->site()->title();

?>

<label class="label">Twitter Card Preview</label>
<div class="seo-twitter" data-twitter-controller='<?php echo json_encode( $controller, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE ); ?>'>
  <div class="seo-twitter-image"  id="twitterimagepreview" style="background-image:url(<?php echo ($twitterimgpath) ? $twitterimgpath : '' ?>);"></div>
  <?php if(!$twitterimgpath) {?>
  <div class="seo-twitter-image-warning">Warning: No OpenGraph Image is set for this page and no fallback has been found for the site. You can set an image for this page below and a fallback under site options.</div>
  <?php } ?>
  <div class="seo-twitter-title seo-view-title"><?php echo $twittertitle ?></div>
  <div class="seo-twitter-description seo-view-description"><?php echo $twitterdesc ?></div>
  <div class="seo-twitter-link"><?php echo $page->url() ?></div>
</div>
<script type="text/javascript">
  (function(){
    var twitterwrapper = document.getElementsByClassName('seo-open-graph')[0];
  });
</script>
