<?php include 'header.php'; ?>
<div >
  <img src="image/drone.jpg" class="image">
</div>
<div class="category">
  <center><h1>PHOTO</h1></center>
  <center><span class="feature_category">FEATURED CATEGORIES</span></center><br>
  <div class="container">
    <div>
      <img src="image/drone1.jpg" class="image1"><img src="image/drone2.jpg" class="image1">
    </div>
    <div class="information">
      <center><span class="info_size">INFORMATION</span></center>
       <center><p>An unmanned aerial vehicle is an aircraft without a human pilot on board and a type of unmanned vehicle. UAVs are a component of an unmanned aircraft system; which include a UAV, a ground-based controller, and a system of communications between the two.</p></center>
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