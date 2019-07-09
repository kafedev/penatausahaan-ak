<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="row">
			<div class="col-md-7 order-md-1">
				<h4 class="mb-3">Formulir</h4>
				<?php
				$hidden = array('jenisalat' => $jenisalat, 'tglreg' => $tglreg);
				echo form_open('app/submit/ppat', 'class="needs-validation"',$hidden); ?>
					<div class="mb-3">
						<label for="bulan">Pelaporan Bulan</label>
						<input type="month" class="form-control" id="bulan" placeholder="Pelaporan Bulan: YYYY-MM" name="bulan" required autofocus>
						<div class="invalid-feedback" style="width: 100%;">
							Pelaporan bulan harus diisi
						</div>
					</div>
					<div class="mb-3">
						<label for="nosurat">Nomor Surat</label>
						<input type="text" class="form-control" id="nosurat" placeholder="Nomor Surat" name="nosurat" required>
						<div class="invalid-feedback" style="width: 100%;">
							Nomor Surat harus diisi
						</div>
					</div>
					<div class="mb-3">
						<label for="noagenda">Nomor Agenda</label>
						<input type="text" class="form-control" id="noagenda" placeholder="Nomor Agenda" name="noagenda" required>
						<div class="invalid-feedback" style="width: 100%;">
							Nomor Agenda harus diisi
						</div>
					</div>
					<div class="mb-3">
						<label for="noak">Nomor Alat Keterangan</label>
						<input type="text" class="form-control" id="noak" placeholder="Nomor Alat Keterangan" name="noak" required>
						<div class="invalid-feedback" style="width: 100%;">
							Nomor Alat Keterangan harus diisi
						</div>
					</div>
					<div class="mb-3">
						<label for="keterangan">Keterangan</label>
						<textarea class="form-control" style="resize: none;" id="keterangan" placeholder="Keterangan" name="keterangan"></textarea>
					</div>
					
					<hr class="mb-4">
					<div class="row">
						<div class="col-md-6 order-md-2 mb-3">
							<button class="btn btn-success btn-lg btn-block" type="submit">Simpan</button>
						</div>
						<div class="col-md-6 order-md-1 mb-3">
							<a class="btn btn-danger btn-lg btn-block" href="<?php echo site_url(''); ?>">Batal</a>
						</div>
					</div>
					
				</form>
			</div>
			<div class="col-md-5 order-md-2 mb-4">
				<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">Review</span>
				</h4>
				<ul class="list-group mb-3">
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0" id="rev-jenisAlat">Dari <?php echo $jenisalat; ?></h6>
							<small class="text-muted">Jenis Alat Keterangan</small>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0" id="rev-jenisAlat"><?php $date = strftime( "%A, %d %B %Y",strtotime($tglreg)); echo $date; ?></h6>
							<small class="text-muted">Tanggal Registrasi</small>
						</div>
					</li>
				</ul>
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