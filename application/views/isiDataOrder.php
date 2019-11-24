
<section class="uk-section uk-section-default">
			
	<div class="uk-container uk-container-xsmall uk-text-center uk-section uk-padding-remove-top">
		<h2 class="uk-margin-remove uk-h1">ISI DATA ORDER</h2>
	</div>
	<div class="uk-container">
		<script><?php echo $this->session->flashdata('successOrder'); ?></script>
		<form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo base_url('Welcome/isiDataPembeliAction'); ?>">
		    <div class="uk-margin">
		        <label class="uk-form-label" for="form-horizontal-text">Nama</label>
		        <div class="uk-form-controls">
		            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Nama" name="nama">
		            <div class="uk-text-danger uk-text-small"><?php echo form_error('nama'); ?></div>
		        </div>
		    </div>
		    <div class="uk-margin">
		        <label class="uk-form-label" for="form-horizontal-select">Ukuran</label>
		        <div class="uk-form-controls">
		            <select class="uk-select" id="form-horizontal-select" name="size">
		            	<option value="">---Pilih Ukuran---</option>
		                <option value="S">S</option>
		                <option value="M">M</option>
		                <option value="L">L</option>
		                <option value="XL">XL</option>
		            </select>
		            <div class="uk-text-danger uk-text-small"><?php echo form_error('size'); ?></div>
		        </div>
		    </div>
		    <div class="uk-margin">
		        <div class="uk-form-label">Jenis Kelamin</div>
		        <div class="uk-form-controls uk-form-controls-text">
		            <label><input class="uk-radio" type="radio" name="jenisKelamin" value="laki-laki" >Laki-Laki</label><br>
		            <label><input class="uk-radio" type="radio" name="jenisKelamin" value="perempuan" >Perempuan</label>
		            <div class="uk-text-danger uk-text-small"><?php echo form_error('jenisKelamin'); ?></div>
		        </div>
		    </div>
		    <div class="uk-margin">
		        <label class="uk-form-label" for="form-horizontal-text">ID Line</label>
		        <div class="uk-form-controls">
		            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="ID Line" name="idLine">
		            <div class="uk-text-danger uk-text-small"><?php echo form_error('idLine'); ?></div>
		        </div>
		    </div>
		    <div class="uk-margin">
		        <label class="uk-form-label" for="form-horizontal-text">No.Telephone/ Whatsapp</label>
		        <div class="uk-form-controls">
		            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="No.Telephone/ Whatsapp" name="Hp">
		            <div class="uk-text-danger uk-text-small"><?php echo form_error('Hp'); ?></div>
		        </div>
		    </div>
		    <p uk-margin>
			    <button name="submit" type="submit" class="uk-button uk-button-primary">Order</button>
			    <button type="reset" class="uk-button uk-button-danger">Reset</button>
			</p>
		</form>
	</div>
</section>
<!-- FOOTER -->
<footer class="uk-section uk-section-secondary uk-padding-remove-bottom">
	
	<div class="uk-text-center uk-padding uk-padding-remove-horizontal">
		<span class="uk-text-small uk-text-muted">© 2019 Marketing Layout - <a href="https://github.com/zzseba78/Kick-Off">Created by KickOff</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a></span>
	</div>
</footer>
<!-- /FOOTER -->