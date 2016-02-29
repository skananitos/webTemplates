<?php

$arr = $posts = array();
$posts[101] = array(
	"title" => "ABOUT PRIVATE WEB",
	"img" => "img/content1.png",
	"text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nibh sit amet molestie tempus. Curabitur cursus volutpat leo at malesuada. Aliquam sagittis ante ut est egestas iaculis et vel ante. Proin tincidunt metus sed ante porttitor, placerat tincidunt lorem varius."	
);
$posts[102] = array(
	"title" => "MY PRIVATE WEB",
	"img" => "img/content2.png",
	"text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nibh sit amet molestie tempus. Curabitur cursus volutpat leo at malesuada. Aliquam sagittis ante ut est egestas iaculis et vel ante. Proin tincidunt metus sed ante porttitor, placerat tincidunt lorem varius."	
);
$posts[103] = array(
	"title" => "SERVICES",
	"img" => "img/content4.png",
	"text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nibh sit amet molestie tempus. Curabitur cursus volutpat leo at malesuada. Aliquam sagittis ante ut est egestas iaculis et vel ante. Proin tincidunt metus sed ante porttitor, placerat tincidunt lorem varius."	
);
$posts[104] = array(
	"title" => "PRODUCTS",
	"img" => "img/content5.png",
	"text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nibh sit amet molestie tempus. Curabitur cursus volutpat leo at malesuada. Aliquam sagittis ante ut est egestas iaculis et vel ante. Proin tincidunt metus sed ante porttitor, placerat tincidunt lorem varius."	
);
?>

<div class="row marg-top">
	<div class="col-md-2"></div>
	
	<div class="col-md-5">
		<?php 

			$x = 0;
			$countPosts = count($posts);

			// Appear radom posts
			for ( $i = 1; $i <= $countPosts; $i++ ) { 

				// If the posts array is empty, re-populate it
				if ( empty($posts) )
				   $posts = $arr;

				// Select a random key
  				$key = array_rand($posts, 1);
 
  				// Save the record in $selected
  				$radPost = $posts[$key];

  				// Remove the key/pair from the array
  				unset($posts[$key]);

				// Echo the selected value
				echo '<div class="col-md-6">';
				echo '<div class="thumbnail thumbnail-style">';
				echo '<h4>' . $radPost["title"] . '</h4>';
				echo '<img src="' . $radPost["img"] . '" alt="' . $radPost["title"] . '" class="f-width">';
				echo '<div class="caption">';
				echo '<p>' . $radPost["text"] . '</p>';
				echo '<p class="read-more"><button type="submit" class="btn btn-default out-more"><span class="glyphicon glyphicon-menu-right in-more" aria-hidden="true"></span></button> Read more</p>';
				echo '</div>';
				echo '</div>';
				echo '</div>';

				$x++;

				if ($x % 2 == 0) {
					echo '<div class="row"></div>';
				}
			}
		?>
		<div id="myPagination" ng-controller="PaginationCtrl" class="col-md-12">
    		<uib-pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-link-numbers="true" rotate="false"></uib-pagination>
    	</div>

	</div> 
  
	<div class="col-md-3" style="margin-right=100px">
		<div class="thumbnail thumbnail-style">
			<h4>KEY PERFPRMANCE INDICATORS</h4>
				<div class="btn-group" role="group" aria-label="xa">
				<button type="button" class="btn btn-default">Indicators SMA</button>
				<button type="button" class="btn btn-default">Parity</button>
				<button type="button" class="btn btn-default">Μerchandise</button>
				</div>
		  <p style="font-size:smaller"><button type="submit" class="btn btn-default" style="border-style:hidden"><span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: #286583; line-height: 0.7"></span></button> NASDAQ Composite(COMP)</p>
		  <img src="img/content3.png" alt="article01" class="f-width">
		  <div class="table-responsive">    
		  <table class="table table-striped" style="font-size:smaller">
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Change</th>
				<th>Change (%)</th>
				<th>Time</th>
			</tr>
			<tr>
				<td>Momentum indicators</td>
				<td>1000</td>
				<td>-34</td>
				<td>+250</td>
				<td>13.20</td>
			</tr>
			<tr>
				<td>Momentum indicators</td>
				<td>1000</td>
				<td>-34</td>
				<td>+250</td>
				<td>13.20</td>
			</tr>
		  </table>
		  </div>
			<p style="font-size:smaller;color:#a9aaac">Delay in updating prices</p>
		</div>
		<div class="row"></div>
		<div class="thumbnail thumbnail-style">
			<h4 style="padding:0px 5px;">INVESTMENT OUTLOOK</h4>
			<p style="padding:0px 5px;color:#a9aaac; font-size:small">tincidunt metus sed ante porttitor, placerat tincidunt lorem varius</p>
			<div class="caption">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nibh sit amet molestie tempus. Curabitur cursus volutpat leo at malesuada. Aliquam sagittis ante ut est egestas iaculis et vel ante. Proin tincidunt metus sed ante porttitor, placerat tincidunt lorem varius.</p>
				<p class="read-more"><button type="submit" class="btn btn-default in-more-pdf"><span class="glyphicon glyphicon-menu-right in-more" aria-hidden="true"></span> PDF</button> Market trends</p>
				<p class="read-more"><button type="submit" class="btn btn-default in-more-pdf"><span class="glyphicon glyphicon-menu-right in-more" aria-hidden="true"></span> PDF</button> Climate Change</p>
				<p class="read-more"><button type="submit" class="btn btn-default in-more-pdf"><span class="glyphicon glyphicon-menu-right in-more" aria-hidden="true"></span> PDF</button> Investment Opportunities</p>
			</div>
		</div>
	</div>
    <div class="col-md-2"></div>
	</div>