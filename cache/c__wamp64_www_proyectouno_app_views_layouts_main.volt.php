<div class="container">
<div class="content">
    <div id="menuzord" class="menuzord orange">
        <a href="javascript:void(0)" class="menuzord-brand"><img src="public/img/favicon-96x96.png"></a>
        <ul class="menuzord-menu">
            <li class="active"><a href="/proyectoUno/login">Login</a></li>
            <li><a href="javascript:void(0)">Administracion</a>
                <ul class="dropdown">
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Pedidos</a></li>
                    <li><a href="#">Vendedores</a></li>
                    <li><a href="#">Rutas</a></li>
                    <li><a href="#">Utilitarios</a>
                        <ul class="dropdown">
                            <li><a href="./habilita.php">Autorizar Usuario</a></li>
                            <li><a href="./creaUsuario.php">Crear Usuario WC</a></li>
                            <li><a href="./cleanLogs.php">Limpiar Logs</a></li>
                            <li><a href="#">Modificar Fechas de Sincronizacion</a></li>
                            <li><a href="./creaQWC.php">Crear Aplicacion WC</a></li>
                            <li><a href="./Coqueiros_Ventas/index.html">Instrucciones</a></li>
                            <li><a href="./creaApp.php">Carrillos Team Option</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li><a href="javascript:void(0)">Facturacion Electronica</a>
                <ul class="dropdown">
                    <li><a href="#">Facturas</a></li>
                    <li><a href="#">Guias</a></li>
                    <li><a href="#">Notas CR</a></li>
                    <li><a href="#">Notas DB</a></li>
                    <li><a href="#">Servicios</a>
                        <ul class="dropdown">
                            <li><a href="#">Autorizar</a></li>
                            <li><a href="#">Firmar</a></li>
                            <li><a href="#">Autorizados</a></li>
                            <li><a href="#">No autorizados</a></li>
                            <li><a href="#">Revisar SRI</a></li>
                            <li><a href="#">Contingencia</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="active"><a href="logout.php">Salir</a></li>
        </ul>
    </div>
</div>
<?= $this->getContent() ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="public/js/menuzord.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function ($) {
    jQuery("#menuzord").menuzord({
        align: "right",
        effect: "slide",
        animation: "flip"
    });
});
</script>
</div>
