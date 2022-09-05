<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/cajero')) {
            // autorizardenominaciones
            if ('/cajero/autorizardenominaciones' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CierreController::autorizarAction',  '_route' => 'autorizardenominaciones',);
            }

            if (0 === strpos($pathinfo, '/cajero/c')) {
                // consultadecajas
                if ('/cajero/consultadecajas' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CierreController::modificarAction',  '_route' => 'consultadecajas',);
                }

                // consultacaja
                if ('/cajero/consultacaja' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CierreController::consultarAction',  '_route' => 'consultacaja',);
                }

                // cierrescondiferencias
                if ('/cajero/cierrescondiferencias' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CierreController::cierresconDiferenciaAction',  '_route' => 'cierrescondiferencias',);
                }

                // cierreparcialdecaja
                if ('/cajero/cierreparcialdecaja' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CierreController::addAction',  '_route' => 'cierreparcialdecaja',);
                }

            }

            // tirilla
            if (0 === strpos($pathinfo, '/cajero/tirilla') && preg_match('#^/cajero/tirilla/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'tirilla']), array (  '_controller' => 'AppBundle\\Controller\\CierreController::printAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/reporte')) {
            if (0 === strpos($pathinfo, '/reporte/formreporte')) {
                // frmreporte
                if ('/reporte/formreporte' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::frmReporteAction',  '_route' => 'frmreporte',);
                }

                // frmreporte-noefectivas
                if ('/reporte/formreportenoefectivas' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::frmReporteFPNoEfectivasAction',  '_route' => 'frmreporte-noefectivas',);
                }

                // formreportesubsidioenespecie
                if ('/reporte/formreportesubsidioenespecie' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::frmReporteSubsidioEnEspecieAction',  '_route' => 'formreportesubsidioenespecie',);
                }

            }

            // frm-cafeteriacentro
            if ('/reporte/frmcafeteriacentro' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::ReporteCafeteriaCentro',  '_route' => 'frm-cafeteriacentro',);
            }

            // formreporte-reservas
            if ('/reporte/reportereservas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::frmReporteReservasAction',  '_route' => 'formreporte-reservas',);
            }

            // formreporte-micomfamiliar
            if ('/reporte/reportemicomfamiliar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::frmReporteMicomfamiliarAction',  '_route' => 'formreporte-micomfamiliar',);
            }

            // reporte-efectivo
            if (0 === strpos($pathinfo, '/reporte/efectivo') && preg_match('#^/reporte/efectivo/(?P<fecha>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'reporte-efectivo']), array (  '_controller' => 'AppBundle\\Controller\\ReporteController::reporteEfectivoDetalladoAction',));
            }

            // reporte-noefectivas
            if (0 === strpos($pathinfo, '/reporte/noefectivas') && preg_match('#^/reporte/noefectivas/(?P<fecha>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'reporte-noefectivas']), array (  '_controller' => 'AppBundle\\Controller\\ReporteController::ReporteNoEfectivas',));
            }

            // productosvendidosconsolidado
            if ('/reporte/productosvendidosconsolidado' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReporteController::ReporteProductosVendidosConsolidado',  '_route' => 'productosvendidosconsolidado',);
            }

            // reporte-cafeteriacentro
            if (0 === strpos($pathinfo, '/reporte/cafeteriacentro') && preg_match('#^/reporte/cafeteriacentro/(?P<fecha>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'reporte-cafeteriacentro']), array (  '_controller' => 'AppBundle\\Controller\\ReporteController::reporteCafeteriaCentroAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/venta')) {
            // productosvendidos
            if ('/venta/productosvendidos' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::ReporteProductosVendidos',  '_route' => 'productosvendidos',);
            }

            // consultacuentas
            if ('/venta/consultacuentas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::consultarAction',  '_route' => 'consultacuentas',);
            }

            // consultadevouchers
            if ('/venta/consultadevouchers' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::consultarVoucherAction',  '_route' => 'consultadevouchers',);
            }

            // modificarcuentas
            if ('/venta/modificarcuentas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::modificarAction',  '_route' => 'modificarcuentas',);
            }

            // reembolsos
            if ('/venta/reembolsos' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::reembolsosAction',  '_route' => 'reembolsos',);
            }

            // interfaceinventario
            if ('/venta/interfaceinventario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::generarInterfaceInventarioAction',  '_route' => 'interfaceinventario',);
            }

            // interfaceproductos
            if ('/venta/interfaceproductos' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VentaController::generarInterfaceProductosAction',  '_route' => 'interfaceproductos',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return ['_route' => 'login_check'];
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return ['_route' => 'logout'];
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/c')) {
                // cuadres-api
                if ('/api/cuadres' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::cgetAction',  '_format' => 'json',  '_route' => 'cuadres-api',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_cuadresapi;
                    }

                    return $ret;
                }
                not_cuadresapi:

                // cuadrecajero-api
                if ('/api/cuadrecajero' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::cuadreAction',  '_format' => 'json',  '_route' => 'cuadrecajero-api',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_cuadrecajeroapi;
                    }

                    return $ret;
                }
                not_cuadrecajeroapi:

                // consultacuentas-api
                if (0 === strpos($pathinfo, '/api/consultacuentas') && preg_match('#^/api/consultacuentas/(?P<fecha>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'consultacuentas-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::consultaCuentasAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_consultacuentasapi;
                    }

                    return $ret;
                }
                not_consultacuentasapi:

                // cierrescondiferencias-api
                if (0 === strpos($pathinfo, '/api/cierrescondiferencias') && preg_match('#^/api/cierrescondiferencias/(?P<desde>[^/]++)/(?P<hasta>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cierrescondiferencias-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::cierresDiferenciasAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_cierrescondiferenciasapi;
                    }

                    return $ret;
                }
                not_cierrescondiferenciasapi:

            }

            elseif (0 === strpos($pathinfo, '/api/a')) {
                // autorizaciones-api
                if (0 === strpos($pathinfo, '/api/autorizaciones') && preg_match('#^/api/autorizaciones/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'autorizaciones-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::autorizarAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_autorizacionesapi;
                    }

                    return $ret;
                }
                not_autorizacionesapi:

                // actualizar-api
                if (0 === strpos($pathinfo, '/api/actualizaciones') && preg_match('#^/api/actualizaciones/(?P<fecha>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'actualizar-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::actualizarAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_actualizarapi;
                    }

                    return $ret;
                }
                not_actualizarapi:

                // actualizar-tblGndTndr
                if ('/api/actualizartblGndTndr' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::actualizarTblGndTndrAction',  '_format' => 'json',  '_route' => 'actualizar-tblGndTndr',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_actualizartblGndTndr;
                    }

                    return $ret;
                }
                not_actualizartblGndTndr:

            }

            elseif (0 === strpos($pathinfo, '/api/ediciones')) {
                // ediciones-api
                if (preg_match('#^/api/ediciones/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ediciones-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::editarAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_edicionesapi;
                    }

                    return $ret;
                }
                not_edicionesapi:

                // edicionesventas-api
                if ('/api/edicionesventas' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::editarVentaAction',  '_format' => 'json',  '_route' => 'edicionesventas-api',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_edicionesventasapi;
                    }

                    return $ret;
                }
                not_edicionesventasapi:

            }

            // entradas-reservas
            if ('/api/entradasreservas' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getEntradasReservasAction',  '_format' => 'json',  '_route' => 'entradas-reservas',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_entradasreservas;
                }

                return $ret;
            }
            not_entradasreservas:

            // inactivaciones-api
            if (0 === strpos($pathinfo, '/api/inactivaciones') && preg_match('#^/api/inactivaciones/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'inactivaciones-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::inactivarAction',  '_format' => 'json',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_inactivacionesapi;
                }

                return $ret;
            }
            not_inactivacionesapi:

            // inactivar-tbsubesp
            if ('/api/inactivartbsubesp' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::inactivarTbSubEspAction',  '_format' => 'json',  '_route' => 'inactivar-tbsubesp',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_inactivartbsubesp;
                }

                return $ret;
            }
            not_inactivartbsubesp:

            if (0 === strpos($pathinfo, '/api/p')) {
                // punto-api
                if (0 === strpos($pathinfo, '/api/punto') && preg_match('#^/api/punto/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'punto-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::puntosAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_puntoapi;
                    }

                    return $ret;
                }
                not_puntoapi:

                if (0 === strpos($pathinfo, '/api/productosvendidos')) {
                    // productosvendidos-api
                    if (preg_match('#^/api/productosvendidos/(?P<desde>[^/]++)/(?P<hasta>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'productosvendidos-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::productosVendidosAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_productosvendidosapi;
                        }

                        return $ret;
                    }
                    not_productosvendidosapi:

                    // productosvendidosconsolidado-api
                    if (0 === strpos($pathinfo, '/api/productosvendidosconsolidado') && preg_match('#^/api/productosvendidosconsolidado/(?P<desde>[^/]++)/(?P<hasta>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'productosvendidosconsolidado-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::productosVendidosConsolidadoAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_productosvendidosconsolidadoapi;
                        }

                        return $ret;
                    }
                    not_productosvendidosconsolidadoapi:

                }

                // parqueadero-reservas
                if ('/api/parqueaderoreservas' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getParqueaderoReservasAction',  '_format' => 'json',  '_route' => 'parqueadero-reservas',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_parqueaderoreservas;
                    }

                    return $ret;
                }
                not_parqueaderoreservas:

            }

            // formasdepago-api
            if (0 === strpos($pathinfo, '/api/formasdepago') && preg_match('#^/api/formasdepago/(?P<idSec>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'formasdepago-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::formasPagosByFechaAndCuentaAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_formasdepagoapi;
                }

                return $ret;
            }
            not_formasdepagoapi:

            if (0 === strpos($pathinfo, '/api/re')) {
                // reembolsos-api
                if (0 === strpos($pathinfo, '/api/reembolsos') && preg_match('#^/api/reembolsos/(?P<desde>[^/]++)/(?P<hasta>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reembolsos-api']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::refoundAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reembolsosapi;
                    }

                    return $ret;
                }
                not_reembolsosapi:

                // reporte-subsidioenespeciealoha
                if ('/api/reportesubsidiosenespeciealoha' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::reporteSubsidioEnEspecieAlohaAction',  '_format' => 'json',  '_route' => 'reporte-subsidioenespeciealoha',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reportesubsidioenespeciealoha;
                    }

                    return $ret;
                }
                not_reportesubsidioenespeciealoha:

                // restaurantes-reservas
                if ('/api/restaurantesreservas' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getRestaurantesReservasAction',  '_format' => 'json',  '_route' => 'restaurantes-reservas',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_restaurantesreservas;
                    }

                    return $ret;
                }
                not_restaurantesreservas:

            }

            elseif (0 === strpos($pathinfo, '/api/ge')) {
                if (0 === strpos($pathinfo, '/api/get')) {
                    // gethijos-api
                    if ('/api/gethijos' === $pathinfo) {
                        $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getHijosAction',  '_format' => 'json',  '_route' => 'gethijos-api',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_gethijosapi;
                        }

                        return $ret;
                    }
                    not_gethijosapi:

                    // voucher-tbsubesp
                    if ('/api/gettbsubesp' === $pathinfo) {
                        $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getTbsubespAction',  '_format' => 'json',  '_route' => 'voucher-tbsubesp',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_vouchertbsubesp;
                        }

                        return $ret;
                    }
                    not_vouchertbsubesp:

                    // cliente-tbsubesp
                    if ('/api/getclientetbsubesp' === $pathinfo) {
                        $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getClienteTbsubespAction',  '_format' => 'json',  '_route' => 'cliente-tbsubesp',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_clientetbsubesp;
                        }

                        return $ret;
                    }
                    not_clientetbsubesp:

                    // getcierrebyid
                    if ('/api/getcierrebyid' === $pathinfo) {
                        $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getCierreByIdAction',  '_format' => 'json',  '_route' => 'getcierrebyid',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_getcierrebyid;
                        }

                        return $ret;
                    }
                    not_getcierrebyid:

                }

                // voucher-api
                if ('/api/generarInformeTarjetasPdf' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::generarReporteFormasDePagoNoEfectivasPDFAction',  '_format' => 'json',  '_route' => 'voucher-api',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_voucherapi;
                    }

                    return $ret;
                }
                not_voucherapi:

                // efectivo-api
                if ('/api/generarInformeEfectivoPdf' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::generarReporteFormaDePagoEfectivoPDFAction',  '_format' => 'json',  '_route' => 'efectivo-api',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_efectivoapi;
                    }

                    return $ret;
                }
                not_efectivoapi:

            }

            // voucher-subsidioenespeciealoha
            if ('/api/listarsubsidiosenespeciealoha' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::voucherAction',  '_format' => 'json',  '_route' => 'voucher-subsidioenespeciealoha',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_vouchersubsidioenespeciealoha;
                }

                return $ret;
            }
            not_vouchersubsidioenespeciealoha:

            // voucher-subsidioenespeciebdmuf
            if ('/api/listarsubsidiosenespeciebdmuf' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::listarSubsidioEnEspecieTbSubEspAction',  '_format' => 'json',  '_route' => 'voucher-subsidioenespeciebdmuf',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_vouchersubsidioenespeciebdmuf;
                }

                return $ret;
            }
            not_vouchersubsidioenespeciebdmuf:

            if (0 === strpos($pathinfo, '/api/micomfamiliar')) {
                // micomfamiliar
                if ('/api/micomfamiliar' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMicomfamiliarAction',  '_format' => 'json',  '_route' => 'micomfamiliar',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_micomfamiliar;
                    }

                    return $ret;
                }
                not_micomfamiliar:

                // micomfamiliar-consecutivo
                if (preg_match('#^/api/micomfamiliar/(?P<consecutivo>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'micomfamiliar-consecutivo']), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMicomfamiliarConsecutivoAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_micomfamiliarconsecutivo;
                    }

                    return $ret;
                }
                not_micomfamiliarconsecutivo:

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
