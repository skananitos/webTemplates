<?php include('header.php') ?>
	
	<!--CAROUSEL-->
	<?php include('carousel.php') ?>

	
	<!--CUSTOM CONTENT -->
	<?php include('custom.php') ?>
	
	<!--CONTACT -->
  <div style="margin:auto; position:relative; left:43%; max-width:100%; margin-bottom:20px">

    <div id="myHideApp" ng-controller="CollapseCtrl">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ng-click="isCollapsed = !isCollapsed"  style="margin-bottom:4px">
          <span class="glyphicon glyphicon-menu-down in" aria-hidden="false"></span> CONTACT US</button>
          <!--Hidden drop down menu -->
      	<div uib-collapse="isCollapsed" style="margin: 0px 61% 0px -24%">
      		<?php include('hidden.php'); ?>
      	</div>
      </div>

  </div>

<?php include('footer.php') ?>