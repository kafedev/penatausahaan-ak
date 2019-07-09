<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="card">
		  <div class="card-header">
		    Data Record
		  </div>
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <p class="card-text">
		    	<table border="0" width="100%">
		    		<?php foreach ($export as $key => $value):?>
		    		<tr>
		    			<td><?php echo ucwords(strtolower(str_replace('_', ' ', $key))); ?></td>
		    			<td>: <?php echo $value; ?></td>
		    		</tr>
		    		<?php endforeach;?>
		    	</table>
		    </p>
		    <a href="#" class="btn btn-primary">Kembali</a>
		  </div>
		</div>
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
</body>
</html>