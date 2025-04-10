<?php echo $this -> extend('plantillas/layout'); ?>

<?php echo $this -> section('contenido');?>

<div class="d-flex justify-content-center align-items-center vh-50">
    <div class="card row">
        <div class="card-header text-center">
            CERTIFICADOS I SEMINARIO INTERNACIONAL
        </div>
        <div class="card-body">
            <div class="text-center mb-3">
                <img src="<?= base_url('public/img/logoEvento.png')?>" style="width:50%;height:auto;" class="img-fluid" alt="banner">
            </div>
            <form action="<?= base_url('/generarcertificado')?>" method="get">
                <input name="evento" type="hidden" value="2">
                <div class="form-floating mb-3 align-items-center">
                    <input name="alumno" type="number" class="form-control" id="floatingInput" placeholder="0000000000" required>
                    <label for="floatingInput">No de documento *</label>

                    <?php if (session()->has('error')):?>
                        <p style="font-size:small; color:red;"><?= session('error') ?> </p>
                    <?php endif ?>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">
                        Generar certificado
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $this -> endSection();?>