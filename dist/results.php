

		<div class="container py-5">
			<h1 class="display-1">Results</h1>
			
			

			<h2>
				<?php echo round($forecast["currently"]["temperature"]); ?>
			</h2>
			<p class="lead">
				Relative Humidity: <?php echo $humidity_current; ?>%
			</p>
		</div>
	

<?php include 'partials/footer.php'; ?>