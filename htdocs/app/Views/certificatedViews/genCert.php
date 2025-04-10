<?php echo $this -> extend('plantillas/layout'); ?>

<?php echo $this -> section('contenido');?>

<div class="d-flex justify-content-center align-items-center vh-50">
    <div class="card row">
        <div class="card-header text-center">
            CERTIFICADOS SEMINARIO DE LA PALMA
        </div>
        <div class="card-body">
            <div class="text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7gmmOlX90h6KV3ebOvPvBta-deEG2VronXA&s" class="img-fluid" alt="banner">
            </div>
            <form action="<?= base_url('/generarcertificado')?>" method="get">
                <!-- Enviamos el id del estudiante para procesarlo -->
                <input name="evento" type="hidden" value="1">
                <div class="form-floating mb-3 align-items-center">
                    
                    <input name="alumno" type="number" class="form-control" id="floatingInput" placeholder="0000000000" required>
                    <label for="floatingInput">No de documento *</label>

                    <!-- Mensaje de error si el estudiante no existe -->
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