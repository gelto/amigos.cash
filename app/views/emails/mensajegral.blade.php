@extends('layouts.layoutemail')
@section('content')

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
    <tr>
        <td align="center" valign="top">
            <!-- inicia contenido principal del mensaje -->
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                <!-- INICIA CABECERA -->
                <!--tr>
                    <td width="600" height="40" style="line-height:0px;font-size:0px;">
                        &nbsp;
                    </td>
                </tr-->
                <!--tr>
                    <td width="600" style="line-height:0px;font-size:0px;">
                        <inicia cabecera del mensaje>
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                            <tr>
                                <td width="125" height="150" style="line-height:0px;font-size:0px;">
                                    &nbsp;
                                </td>
                                <td width="150" style="line-height:0px;font-size:0px;">
                                    <a title="Sitio Lottery Popcorn" href="{{ URL::to('/'); }}" target="_blank"><img alt="Foto Factura" src="http://fotofactura.com/public/statics/images/Web-App-Icon.png" width="220" height="220" border="0" /></a>
                                </td>
                                <td width="125" height="150" style="line-height:0px;font-size:0px;">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                        <termina cabecera del mensaje>
                    </td>
                </tr-->
                <!--tr>
                    <td width="600" height="20" style="line-height:0px;font-size:0px;">
                        &nbsp;
                    </td>
                </tr--><!-- TERMINA CABECERA -->
            </table><!-- termina contenido principal del mensaje -->
        </td>
    </tr>


    <tr><!-- INICIAN CONTENIDO PRINCIPAL -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                <tr>
                    <td width="600" style="line-height:0px;font-size:0px;">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                            <tr>
                                <td width="39" style="line-height:0px;font-size:0px;">
                                    &nbsp;
                                </td>
                                <td width="528" style="line-height:0px;font-size:0px;">
                                    <table width="528" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="528" height="40" align="left" style="font-family:Helvetica,Arial,Sans-serif;font-size:16px;line-height:18px;color:#0dbff2;"><strong>Amigos.Cash - La red social del pr&eacute;stamo entre amigos.</strong></td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="10" style="line-height:0px;font-size:0px;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="40" style="font-family:Helvetica,Arial,Sans-serif;font-size:12px;line-height:16px;color:#000000;text-align:justify;">{{$mensaje}}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td width="528" height="45" style="line-height:0px;font-size:0px;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="33" style="line-height:0px;font-size:0px;">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- TERMINAN CONTENIDO PRINCIPAL -->


    <tr><!-- INICIA MENU INFERIOR-->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#242424">
                <tr>
                    <td width="1" style="line-height:0px;font-size:0px;">
                        &nbsp;
                    </td>
                    <td width="70" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="Amigos.Cash" href="{{ URL::to('/'); }}" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">INICIO</a></td>
                    <td width="100" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="Amigos.Cash" href="https://www.youtube.com/watch?v=Euc9gzMTv0c" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">COMO FUNCIONA</a></td>
                    <td width="150" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="Amigos.Cash" href="https://www.youtube.com/watch?v=lUKwQoxXI1U" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">CUENTAS ABIERTAS</a></td>
                    <td width="180" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="piggo.mx" href="http://bit.ly/1vf1nfV" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">Ahorra y gana $100</a></td>
                    <td width="150" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="Amigos.Cash" href="https://www.youtube.com/watch?v=gRzEoRG51V4" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">POR QUE ES GRATIS</a></td>
                    <td width="1" style="line-height:0px;font-size:0px;">
                        &nbsp;
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- TERMINA MENU INFERIOR -->


    <tr><!-- INICIAN LEGALES -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                <tr>
                    <td width="600" height="15" style="line-height:0px;font-size:0px;">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="600" height="18" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:9px;font-weight:bold;line-height:12px;color:#666666;">Este mensaje fue enviado a {{ $email }} por Amigos.Cash.</td>
                </tr>
                <tr>
                    <td width="600" height="18" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:9px;line-height:12px;color:#666666;">Agrega esta direcci&oacute;n a tu lista de contactos para evitar que nuestros correos sean guardados en la bandeja de correo no deseado.</td>
                </tr>
                <tr><!-- INICIA AVISO DE PRIVACIDAD -->
                    <td width="600" style="line-height:0px;font-size:0px;">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                            <tr>
                                <td width="39" style="line-height:0px;font-size:0px;">
                                    &nbsp;
                                </td>
                                <td width="528" style="line-height:0px;font-size:0px;">
                                    <table width="528" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="528" height="10" style="line-height:0px;font-size:0px;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="30" align="left" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;">Aviso de privacidad</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="35" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Amigos.Cash <b></b> le informa que es el responsable de sus datos personales los cuales pudieron haber sido obtenidos en su car&aacute;cter de <b>(i)</b> usuario o <b>(ii)</b> usuario potencial.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="25" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">De no manifestar su oposici&oacute;n se entender&aacute; que autoriza a Amigos.Cash al tratamiento de sus datos personales para las siguientes finalidades:</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="55" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;"><strong>USUARIOS.</strong> (i) Proveerle de un bien o servicio, (ii) informarle de futuros productos y servicios, (iii) realizar actividades de mercadeo, (iv) ofrecerle productos e informaci&oacute;n, (v) realizar an&aacute;lisis estad&iacute;sticos y de mercado, (vi) invitarle a eventos, (vii) informarle de promociones y lanzamientos, (viii) mantener actualizados nuestros registros; todo ello en relaci&oacute;n a los productos o servicios de Amigos.Cash y sus socios de negocios</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="40" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Las finalidades primordiales para las cuales se usar&aacute; su informaci&oacute;n y las cuales dan origen a nuestra relaci&oacute;n son las mencionadas en los puntos (i)(ii)(iii)(iv), siendo que la (v)(vi)(vii)(viii) no son necesarias para mantener nuestra relaci&oacute;n jur&iacute;dica.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="45" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;"><strong>USUARIOS POTENCIALES.</strong> (i) Realizar actividades de mercadeo y prospecci&oacute;n, (ii) ofrecerle productos e informaci&oacute;n, (iii) realizar an&aacute;lisis estad&iacute;sticos y de mercado, (iv) invitarle a eventos, (v) informarle de promociones, (vi) mantener actualizados nuestros registros; todo ello en relaci&oacute;n a los productos o servicios  de Amigos.Cash y sus socios de negocios.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="30" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Las finalidades para las cuales se usar&aacute; su informaci&oacute;n en car&aacute;cter de usuario potencial, son la mercadotecnia, publicidad y prospecci&oacute;n de las formas en el p&aacute;rrafo que antecede.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="65" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Como usuario, usted podr&aacute; manifestar su negativa al uso de su informaci&oacute;n para los puntos <b>(v)(vi)(vii)(viii)</b> del apartado de <b>USUARIOS</b>; por otra parte, como usuario potencial, usted podr&aacute; manifestar su negativa al uso de su informaci&oacute;n para los puntos <b>(i)(ii)(iii)(iv)(v)(vi)</b> del apartado de <b>USUARIO POTENCIAL</b>. Ya sea como usuario o usuario potencial deber&aacute; enviar un correo electr&oacute;nico dirigido a <a href="mailto:protecciondatos@amigos.cash" target="_blank">protecciondatos@amigs.cash</a>  manifestando su negativa y conforme a lo se&ntilde;alado en el aviso de privacidad integral ubicado en la p&aacute;gina <a href="http://www.amigos.cash" target="_blank">www.amigos.cash/legales</a>.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="25" style="line-height:0px;font-size:0px;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="33" style="line-height:0px;font-size:0px;">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- TERMINA AVISO DE PRIVACIDAD -->
            </table>
        </td>
    </tr><!-- TERMINAN LEGALES -->


    <tr><!-- INICIA FOOTER -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0000000">
                <tr>
                    <td width="600" height="25" style="line-height:0px;font-size:0px;">
                        &nbsp;
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- TERMINA FOOTER -->
</table>

@stop