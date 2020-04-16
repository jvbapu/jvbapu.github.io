<?php include 'header.php'; ?>
<div >
  <img src="image/photo.jpg" class="image">
</div>
<div class="category">
  <center><h1>PHOTO</h1></center>
  <center><span class="feature_category">FEATURED CATEGORIES</span></center><br>
  <div class="container">
    <div>
      <img src="image/photo1.jpg" class="image1"><img src="image/photo2.jpg" class="image1">
    </div>
    <div class="information">
      <center><span class="info_size">INFORMATION</span></center>
       <center><p>Photography is the art, application and practice of creating durable images by recording light or other electromagnetic radiation, either electronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film.</p></center>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
$(document).ready(function () {
    var url = window.location;
    $('ul.abc a[href="'+ url +'"]').addClass('active');
    $('ul.abc a').filter(function() {
         return this.href == url;
    }).addClass('active');
});
</script> 