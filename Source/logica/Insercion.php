<?php
    //require_once $_SERVER['DOCUMENT_ROOT']. '/com.contabilidad.prj/serviciotecnico/utilidades/TransaccionBD.class.php';
    //chamo, tengo serios problemas con esta línea de arriba en todos los ficheros, no consigue la clase


    require_once("../serviciotecnico/utilidades/TransaccionBD.class.php");

    class Insercion {

        private $idProducto;
        private $rif;
        private $fecha;
        private $costoUnitario;
        private $cantidad;

        function __construct() {
            
        }

        function realizarCompra($idProducto, $rifProveedor, $fecha, $costoUnitario, $cantidad) {
            $query = "insert into compra (PRODUCTO_id, PROVEEDOR_rif, fecha, costo_unitario, cantidad)
                    values ($idProducto, '$rifProveedor', '$fecha', $costoUnitario, $cantidad)";

            $compra = new TransaccionBDclass();

            $compra->realizarTransaccion($query);
        }

        function realizarVenta($rifCliente, $idProducto, $fecha, $costoUnitario, $cantidad) {
            $query = "insert into venta (CLIENTE_rif, PRODUCTO_id, fecha, costo_unitario, cantidad)
                         values ('$rifCliente', $idProducto, '$fecha', $costoUnitario, $cantidad)";

            $venta = new TransaccionBDclass();

            return $venta->realizarTransaccionInsertId($query);
        }
    }
?>