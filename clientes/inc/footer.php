<hr>	
	</main> <!-- /container -->


<footer class="container">
    <?php $data = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));?>
    <p>&copy; 2024 a <?php echo $data->format("Y"); ?> - Gustavo e Thiago</p>
    <style>
        p{
            color: white;
        }
    </style>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script>window.jQuery || document.write('<script src="<?php $data->format("Y"); ?>js/jquery-1.11.2.min.js"><\/script>')</script>

<script src="<?php echo BASEURL; ?>js/jquery-3.7.1.min.js"></script>
<script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>
<script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>
</html> 