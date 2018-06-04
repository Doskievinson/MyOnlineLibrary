<?php 
include("inc/data.php");
include("inc/function.php");
	
$pageTitle = "My Online Library";
$section = null;

include("inc/header.php"); ?>
<div class= "section catalog random">
	<div class="wrapper">
		<h2>May We Suggest Something</h2>
		
	<ul class="items">
		<?php 
		$ramdom = array_rand($catalog,4);
		foreach ($random as $id) {
			echo get_item_html($id,$catalog[$id]);
		}
	</ul>
		
		
	</div>
		</div>
		
	<? php include("inc/footer.php"); ?>