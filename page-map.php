<?php Themewrangler::setup_page();get_header(/***Template Name: Map */); ?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="page-content_wrapper">
	<div class="fs-row">
		<article class="page-content fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
			<?php the_post(); the_content(); ?>
		</article>
	</div>
</div>

<div class="fs-row map-wrapper">
	<div class="fs-cell fs-all-full">
		<dv class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-contained fs-right">
			<div class="banner banner-map map-map" id="map"></div>
		</dv>
		<dv class="fs-cell fs-lg-4 fs-md-2 fs-sm-3 fs-contained">
			<div class="banner banner-map bg-color-red map-content">
				<div class="wrapper wrapper-extra">
					<div id="controls"></div>
				</div>
			</div>
		</dv>
	</div>
</div>

<script>
	$(document).ready(function(){
		var LocsA = [
			<?php $number = count(get_field('map')); $count = 0 ;?>
			<?php while ( have_rows('map') ) : the_row(); $address = get_sub_field('map'); ?>

			{
		        lat: <?php echo $address['lat']; ?>,
		        lon: <?php echo $address['lng']; ?>,
		        title: "<?php if(get_sub_field('category')):?><span><?php the_sub_field('category'); ?>:</span><br><?php endif; ?><?php the_sub_field('name'); ?>",
		        html: "<h4><?php the_sub_field('name'); ?><br><?php echo $address['address']; ?></h4><p><?php the_sub_field('description'); ?></p>",
		        icon: 'http://maps.google.com/mapfiles/markerA.png',
		    },
		    <?php endwhile; ?>
		    
		    {
		        lat: 29.964969,
		        lon: -90.049001,
		        title: "Marigny Opera House",
		        html: "<h5>Marigny Opera House</h5>",
		        icon: '/assets/venue.png',
		    }
		]
		new Maplace({
		    locations: LocsA,
		    map_div: '#map',
		    show_markers: true,
		    controls_type: 'list',
		    controls_on_map: false
		}).Load();
	});
</script>

<?php get_footer(); ?>