<?phprequire_once $_SERVER['DOCUMENT_ROOT'] .'/Source/serviciotecnico/utilidades/xajax/xajax.inc.php';require_once $_SERVER['DOCUMENT_ROOT'] . '/Source/eventos/registroCuenta.php';$xajax = new xajax();$xajax->registerFunction("nuevaCuenta");$xajax->processRequests();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Sistema EDUGER</title><?        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");        ?><style type="text/css">            <!--            .style8 {	font-family: Verdana, Arial, Helvetica, sans-serif;                font-size: 10px;                color: #FFFFFF;            }            -->        </style><script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script><link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" /><link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" /></head><body><form id="form1" name="form1">  <table width="100%" border="0" cellspacing="0" cellpadding="0">    <tr>      <td width="51%"><div align="left"><img src="imagenes/logoEduGer.png" width="175" height="92" alt="logo" /></div></td>      <td width="49%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">          <tr>            <td><div align="right">Fecha:                  <?= date("d").'/'.date("m").'/'.date("Y")?>            </div></td>            <td>&nbsp;</td>          </tr>          <tr>            <td><div align="right">Usuario: contador</div></td>            <td>&nbsp;</td>          </tr>      </table></td>    </tr>    <tr>      <td>&nbsp;</td>      <td>&nbsp;</td>    </tr>    <tr>      <td colspan="2" bgcolor="#EEEEEE"><div align="center">          <ul id="MenuBar1" class="MenuBarHorizontal">            <li><a class="MenuBarItemSubmenu" href="#">Libro de Diario</a>                <ul>                  <li><a href="consultaLibroDiario.php" title="Consulta del libro diario por fecha">Consultar</a></li>                  <li><a href="nuevoAsientoDiario.php" title="Registro de un nuevo asiento contable">Nuevo asiento</a></li>                </ul>            </li>            <li><a href="#" title="Operaciones del libro de mayor" class="MenuBarItemSubmenu">Libro de Mayor</a>                <ul>                  <li><a href="#" title="consulta del libro de mayor para una fecha">Consultar</a></li>                  <li><a href="nuevaCuenta.php" title="abrir una nueva cuenta &quot;t&quot;">Nueva cuenta</a></li>                </ul>            </li>            <li><a href="#" title="consultar estado de resultados">E Resultados</a> </li>            <li><a href="#" title="consulta del balance general">Balance</a></li>            <li><a href="#" title="consulta de la ficha de inventario">Inventario</a></li>          </ul>      </div></td>    </tr>    <tr>      <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">          <tr>            <td colspan="3">&nbsp;</td>          </tr>          <tr>            <td colspan="3"><div align="left">Nueva Cuenta del libro Mayor</div></td>          </tr>          <tr>            <td colspan="3">&nbsp;</td>          </tr>          <tr>            <td width="8%">Tipo:</td>            <td width="23%"><select name="select" id="select">                <option value="A" selected="selected">Activo</option>                <option value="P">Pasivo</option>                <option value="I">Ingreso</option>                <option value="E">Egreso</option>              </select>            </td>            <td width="69%">&nbsp;</td>          </tr>          <tr>            <td colspan="3">&nbsp;</td>          </tr>          <tr>            <td>Nombre:</td>            <td><input type="text" name="nombre" id="nombre" /></td>            <td>&nbsp;</td>          </tr>          <tr>            <td colspan="3">&nbsp;</td>          </tr>          <tr>            <td colspan="3">Descripcion:              <input type="text" name="des" id="des" /></td>          </tr>          <tr>            <td colspan="3">&nbsp;</td>          </tr>          <tr>              <td colspan="3"><input type="button" name="button" id="button" value="Registrar" onclick="xajax_nuevaCuenta(xajax.getFormValues('form1'))" /></td>          </tr>          <tr>            <td colspan="3"></td>          </tr>        </table>          <table width="100%" border="0" cellspacing="0" cellpadding="0">            <tr> </tr>        </table></td>    </tr>    <tr>      <td colspan="2" bgcolor="#000000"><div align="center"><span class="style8">Sistema de Contabilidad EDUGER, Todos los derechos reservados</span></div></td>    </tr></table>  <script type="text/javascript">            <!--            var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});            //-->        </script>  <table width="100%" border="0" cellspacing="0" cellpadding="0">  </table></form><script type="text/javascript"><!--var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});//--></script></body></html>