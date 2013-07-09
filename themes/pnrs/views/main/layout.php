<script type="text/javascript">
$(function(){
	
	// show/hide report filters and layers boxes on home page map
	$("a.toggle").toggle(
		function() { 
			$($(this).attr("href")).show();
			$(this).addClass("active-toggle");
		},
		function() { 
			$($(this).attr("href")).hide();
			$(this).removeClass("active-toggle");
		}
	);
	
});

</script>





     <?php								
                // Map Blocks
                echo $div_map;
     ?>
     <script type="text/javascript" charset="utf-8"> 
        $("#map").width('99.8%');
        $("#map").height('85%');
        // Dimensions of the viewport have changed
        // Trigger a resize
        map.trigger("resize");
     </script>

  <header>
        
	
</header> 