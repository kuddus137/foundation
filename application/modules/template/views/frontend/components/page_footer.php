 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>




<!--Donate Form-->
<form action="#" method="get" class="row m0 donate_form mfp-hide" id="donate_box">
    <h3>ENTER YOUR DONATION AMOUNT</h3>

    <input type="radio" name="donate-amount" id="donate-amount01" value="10">
    <label for="donate-amount01">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <input type="radio" name="donate-amount" id="donate-amount02" value="25">
    <label for="donate-amount02">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <input type="radio" name="donate-amount" id="donate-amount03" value="100">
    <label for="donate-amount03">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <input type="radio" name="donate-amount" id="donate-amount04" value="500">
    <label for="donate-amount04">
        <strong>DONATE <span>$10</span></strong><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ips tum sed, suscipit sit amet arcu. Ut ut finibus tortor
    </label>

    <h5>ENTER CUSTOM AMOUNT</h5>

    <div class="input-group">
        <span class="input-group-addon left">$</span>
        <input type="number" class="form-control" name="donate-amount">
        <span class="input-group-addon right">
            <button type="submit" class="btn-primary">donate now</button>
        </span>
    </div>
</form>

<!--Color Change Setting-->
<div class="row m0 color_change_setting">
   <div class="setting_box"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
   <div class="row m0 colors_variations">
      <h3 class="hhh h2">Change Color</h3>
      <div class="colors row m0">
         <a href="javascript:chooseStyle('none', 60)" class="default-theme working">1</a>
         <a href="javascript:chooseStyle('yellow-theme', 60)" class="yellow-theme">2</a>
         <a href="javascript:chooseStyle('blue-theme', 60)" class="blue-theme">3</a>
         <a href="javascript:chooseStyle('red-theme', 60)" class="red-theme">4</a>
         <a href="javascript:chooseStyle('purple-theme', 60)" class="purple-theme">5</a>
         <a href="javascript:chooseStyle('orange-theme', 60)" class="orange-theme">6</a>
     </div>
 </div>
</div>

<script src="<?php echo base_url()?>public/assets/js/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="<?php echo base_url()?>public/assets/js/bootstrap.min.js"></script>
<!--Bootstrap Select-->
<script src="<?php echo base_url()?>public/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<!--Magnific Popup-->
<script src="<?php echo base_url()?>public/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<!--Owl Carousel-->
<script src="<?php echo base_url()?>public/assets/vendors/owl.carousel/owl.carousel.min.js"></script>
<!--CounterUp-->
<script src="<?php echo base_url()?>public/assets/vendors/couterup/jquery.counterup.min.js"></script>
<!--WayPoints-->
<script src="<?php echo base_url()?>public/assets/vendors/waypoint/waypoints.min.js"></script>
<!--Theme Script-->
<script src="<?php echo base_url()?>public/assets/js/min/theme.min.js"></script>
<!--StyleSwitch-->
<script src="<?php echo base_url()?>public/assets/js/styleswitch.js"></script>
<script type="text/javascript">

</script>
</body>
</html>