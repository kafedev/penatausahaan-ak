<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2019 by MaqwaStudio</p>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="https://github.com/msazzuhair" target="blank">Visit our Github page</a></li>
			</ul>
		</footer>
	</div>
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/form-validation.js') ?>"></script>
	<?php foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
</body>
</html>