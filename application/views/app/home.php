<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="row">
			<div class="col-md-7 order-md-1">
				<h4 class="mb-3">Formulir</h4>
				<?php echo form_open('app/next', 'class="needs-validation"'); ?>
					<div class="mb-3">
						<label for="address">Jenis Alat Keterangan</label>
						<select class="custom-select d-block w-100" id="jenisAlat" name="jenisAlat" required>
							<option value=""> -- Pilih salah satu -- </option>
							<option value="KPP Sendiri">Dari KPP Sendiri</option>
							<option value="KPP Lain">Dari KPP Lain</option>
							<option value="KPKNL">Dari KPKNL</option>
							<option value="PPAT">Dari PPAT</option>
						</select>
						<div class="invalid-feedback">
							Pilih alat keterangan
						</div>
					</div>

					<div class="row">
						<div id="mode" class="col-md-6 mb-3">
							<label for="xmode">Dari</label>
							<select class="custom-select d-block w-100" id="xmode" name="xmode" disabled="disabled">
								<option value=""> -- Pilih salah satu -- </option>
								<option value="Fungsional">Fungsional</option>
								<option value="Kepala Seksi Pengawasan dan Konsultasi 2">Kepala Seksi Pengawasan dan Konsultasi 2</option>
								<option value="Kepala Seksi Pengawasan dan Konsultasi 3">Kepala Seksi Pengawasan dan Konsultasi 3</option>
								<option value="Kepala Seksi Pengawasan dan Konsultasi 4">Kepala Seksi Pengawasan dan Konsultasi 4</option>
								<option value="Kepala Kantor">Kepala Kantor</option>
							</select>
							<div class="invalid-feedback">
								Pilih salah satu
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="country">Tanggal Register</label>
							<input type="date" class="form-control" id="tglReg" name="tglReg" required>
							<div class="invalid-feedback">
								Masukkan tanggal sesuai format
							</div>
						</div>
					</div>
					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Lanjut</button>
				</form>
			</div>
			<div class="col-md-5 order-md-2 mb-4">
				<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">Review</span>
				</h4>
				<ul class="list-group mb-3">
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0" id="rev-jenisAlat">--</h6>
							<small class="text-muted">Jenis Alat Keterangan</small>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0" id="rev-dari">--</h6>
							<small class="text-muted">Dari</small>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0" id="rev-tglreg">--</h6>
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
	<script src="<?php echo base_url('assets/js/moment-with-locales.min.js') ?>"></script>
	<script>
		$(document).ready(function() {
			moment.locale('id');
			$("#jenisAlat").change(function() {
				var selectedText = $("#mySelect option:selected").html();
				var jenisAlat = $("#jenisAlat option:selected").html();
				$('#rev-jenisAlat').html(jenisAlat);
				if ($(this).val() == 'KPP Sendiri')
				{
					$("#xmode").removeAttr('disabled');
					$("#xmode").attr('required','required');
				}
				else
				{
					$("#xmode").attr('disabled','disabled');
					$("#xmode").removeAttr('required');
					$("#xmode").val('');
					$('#rev-dari').html('--');
				}
			});
			$("#mode").change(function() {
				var mode = $("#mode option:selected").html();
				$('#rev-dari').html(mode);
			});
			$("#tglReg").change(function() {

				var tglreg = moment($("#tglReg").val()).format('dddd, D MMMM YYYY');
				$('#rev-tglreg').html(tglreg);
			});
		});
	</script>
</body>
</html>