<?phprequire_once $_SERVER['DOCUMENT_ROOT'] .'/Source/serviciotecnico/utilidades/xajax/xajax.inc.php';require_once $_SERVER['DOCUMENT_ROOT'] . '/Source/eventos/consultasHome.php';$xajax = new xajax();$xajax->registerFunction("mostrarCompras");$xajax->registerFunction("mostrarVentas");$xajax->processRequests();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">    <head>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        <title>Sistema EDUGER</title>        <?        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");        ?>        <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />        <style type="text/css">            <!--            .style8 {	font-family: Verdana, Arial, Helvetica, sans-serif;                font-size: 10px;                color: #FFFFFF;            }            -->        </style>    </head>    <body>        <table width="100%" border="0" cellspacing="0" cellpadding="0">            <tr>                <td width="51%"><div align="left"><img src="imagenes/logoEduGer.png" width="175" height="92" alt="logo" /></div></td>                <td width="49%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">                        <tr>                            <td><div align="right">Fecha:<?= date("d").'/'.date("m").'/'.date("Y")?></div></td>                            <td>&nbsp;</td>                        </tr>                        <tr>                            <td><div align="right">Usuario: contador</div></td>                            <td>&nbsp;</td>                        </tr>                </table></td>            </tr>            <tr>                <td>&nbsp;</td>                <td>&nbsp;</td>            </tr>            <tr>                <td colspan="2" bgcolor="#EEEEEE"><div align="center">                        <ul id="MenuBar1" class="MenuBarHorizontal">                            <li><a class="MenuBarItemSubmenu" href="#">Libro de Diario</a>                                <ul>                                    <li><a href="consultaLibroDiario.php" title="Consulta del libro diario por fecha">Consultar</a></li>                                    <li><a href="nuevoAsientoDiario.php" title="Registro de un nuevo asiento contable">Nuevo asiento</a></li>                                </ul>                            </li>                            <li><a href="#" title="Operaciones del libro de mayor" class="MenuBarItemSubmenu">Libro de Mayor</a>                                <ul>                                    <li><a href="#" title="consulta del libro de mayor para una fecha">Consultar</a></li>                                    <li><a href="#" title="abrir una nueva cuenta &quot;t&quot;">Nueva cuenta</a></li>                                </ul>                            </li>                            <li><a href="#" title="consultar estado de resultados">E Resultados</a> </li>                            <li><a href="#" title="consulta del balance general">Balance</a></li>                            <li><a href="#" title="consulta de la ficha de inventario">Inventario</a></li>                        </ul>                </div></td>            </tr>            <tr>                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">                        <tr>                            <td>&nbsp;</td>                        </tr>                        <tr>                            <td><div align="center">Ultimas Compras realizadas</div></td>                        </tr>                        <tr>                          <td>&nbsp;</td>                        </tr>                        <tr>                            <td><div id="compras" align="center">                              <script language="javaScript"> xajax_mostrarCompras()</script></div></td>                        </tr>                    </table>                  <p>&nbsp;</p>                    <p>&nbsp;</p>                    <p>&nbsp;</p>                    <p>&nbsp;</p>                    <p>&nbsp;</p>                <p>&nbsp;</p></td>                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">                        <tr>                            <td>&nbsp;</td>                        </tr>                        <tr>                            <td><div align="center">Ultimas Ventas realizadas</div></td>                        </tr>                        <tr>                          <td>&nbsp;</td>                        </tr>                        <tr>                            <td><div id="ventas" align="center">                            <script language="javaScript"> xajax_mostrarVentas()</script></div></td>                        </tr>              </table></td>            </tr>            <tr>                <td colspan="2" bgcolor="#000000"><div align="center"><span class="style8">Sistema de Contabilidad EDUGER, Todos los derechos reservados</span></div></td>            </tr>        </table>        <script type="text/javascript">            <!--            var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});            //-->        </script>    </body></html>