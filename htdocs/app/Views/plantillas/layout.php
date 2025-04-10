<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $titulo ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <style>
            html, body {
            height: 100%;
            margin: 0;
            }
            .wrapper {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            .content {
                flex: 1;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <!-- header -->
            <header class="text-withe text-center">
                <?php echo $this -> include('plantillas/menu')?>
            </header>

            <!-- Contenido Principal -->
            <main class="content py-5">
                <div class="container">
                    <?php echo $this->renderSection("contenido")?>
                </div>
            </main>
            <!-- Footer -->
            <footer class="bg-secondary py-1 text-center" style="color:white;">
                <p>Universidad de Nariño - Facultad de Ciencias Agricolas <?php echo date('Y');?></p>  
            </footer>   
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <?php echo $this->renderSection("scripts");?>
    </body>
</html>
