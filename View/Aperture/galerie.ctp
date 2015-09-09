<?php
	$this->assign('title', $project['Folder']['name']); 
?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
<!--       <ol class="carousel-indicators"> -->
<!--         <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
<!--         <li data-target="#myCarousel" data-slide-to="1"></li> -->
<!--         <li data-target="#myCarousel" data-slide-to="2"></li> -->
<!--       </ol> -->
      <div class="carousel-inner" role="listbox">
		  <?php
		  	
			foreach ($project['Version'] as $idx => &$version){
				//$this->Html->tag('div', $version['encodedUuid']);
				echo $this->Html->tag('div', 
					
						
					$this->Html->image($idx?'loading.png':urlencode($version['encodedUuid']).'/preview.png', array('data-src' => '/img/'.urlencode($version['encodedUuid']).'/preview.png', 'class' => 'toLoad preview')).

						
					$this->Html->tag('div', $this->Html->link($this->Html->tag('span', '', array('class'=>'glyphicon glyphicon-download')), '/img/'.urlencode($version['encodedUuid']).'/'.$version['name'].'.png',
							array('escape' => false, 'class'=>'', 'target'=>'_blank')) , array('class' => 'carousel-caption')),
					
					array('class' => $idx?'item':'item active'));
				
			}
			?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


<div class="container-fluid">
	<div class="row">
		<h2 id="intro" class="col-xs-12"><?php echo $project['Folder']['name']; ?></h2>
	</div>
	<section class="row">
		<?php foreach ($project['Version'] as $idx => &$version) : ?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2"><a href="#" onclick="javascript: window.scrollTo(0, 0);" class="thumbnail"  data-target="#myCarousel" data-slide-to="<?php echo $idx; ?>"><?php 
				echo $this->Html->image(
						$version['encodedUuid'].'/thumb.png', 
						array('class' => 'img-responsive toLoad thumb'));
			?></a></div>
		<?php endforeach;?>
	</section>
</div>

<script type="text/javascript">
<!--

//-->

	$(function() {
		
		$('#myCarousel').bind('slide.bs.carousel', function (e) {
			var elem = e.relatedTarget;
			$(elem).find('img').trigger('loadImage');
		});

		
	});

	
	$(window).load(function() {

		$('img.toLoad').bind('loadImage', function() {
			if($(this).attr('data-src') !== $(this).attr('src')){
				//console.log($(this).attr('data-src'));
				$(this).attr('src', $(this).attr('data-src'));
			}
		});
		
		$('img.preview').each(function(index, element){
			setTimeout( function(){ $(element).trigger('loadImage'); }, 1000*index);
		});

		$('img.thumb').each(function(index, element){
			setTimeout( function(){ $(element).trigger('loadImage'); }, 100*index);
		});

	});
	
    
</script>

