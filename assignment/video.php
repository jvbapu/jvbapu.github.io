<?php include 'header.php'; ?>
<div >
  <img src="image/video.jpg" class="image">
</div>

<div class="category">
  <center><h1>VIDEO</h1></center>
  <center><span class="feature_category">FEATURED CATEGORIES</span></center><br>

  <div class="container">
    <div>
      <img src="image/video1.jpg" class="image1"><img src="image/video2.jpg" class="image1">
    </div>
    <div class="information">
       <center><span class="info_size">INFORMATION</span></center>
       <center><p>Video is an electronic medium for the recording, copying, playback, broadcasting, and display of moving visual media. Video was first developed for mechanical television systems, which were quickly replaced by cathode ray tube systems which were later replaced by flat panel displays of several types.</p></center>
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