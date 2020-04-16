<?php include 'header.php'; ?>
<div >
  <img src="image/audio.jpg" class="image">
</div>
<div class="category">
  <center><h1>PHOTO</h1></center>
  <center><span class="feature_category">FEATURED CATEGORIES</span></center><br>
  <div class="container">
    <div>
      <img src="image/audio1.jpg" class="image1"><img src="image/audio2.jpg" class="image1">
    </div>
    <div class="information">
      <center><span class="info_size">INFORMATION</span></center>
       <center><p>Audio is a term used to describe any sound or noise that is within a range the human ear is capable of hearing. </p></center>
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