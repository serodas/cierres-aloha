<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/css/index.css')) {
                // _assetic_4235305
                if ('/css/index.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4235305',);
                }

                // _assetic_0654c4e
                if ('/css/index.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0654c4e',);
                }

            }

            elseif (0 === strpos($pathinfo, '/css/index_')) {
                if (0 === strpos($pathinfo, '/css/index_b')) {
                    if (0 === strpos($pathinfo, '/css/index_bootstrap.min_1.css')) {
                        // _assetic_4235305_0
                        if ('/css/index_bootstrap.min_1.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4235305_0',);
                        }

                        // _assetic_0654c4e_0
                        if ('/css/index_bootstrap.min_1.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0654c4e_0',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/css/index_bootstrap-datepicker.min_6.css')) {
                        // _assetic_4235305_5
                        if ('/css/index_bootstrap-datepicker.min_6.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_4235305_5',);
                        }

                        // _assetic_0654c4e_5
                        if ('/css/index_bootstrap-datepicker.min_6.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_0654c4e_5',);
                        }

                    }

                    // _assetic_4235305_8
                    if ('/css/index_buttons.dataTables.min_9.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_4235305_8',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_font-awesome.min_2.css')) {
                    // _assetic_4235305_1
                    if ('/css/index_font-awesome.min_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4235305_1',);
                    }

                    // _assetic_0654c4e_1
                    if ('/css/index_font-awesome.min_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0654c4e_1',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_ionicons.min_3.css')) {
                    // _assetic_4235305_2
                    if ('/css/index_ionicons.min_3.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4235305_2',);
                    }

                    // _assetic_0654c4e_2
                    if ('/css/index_ionicons.min_3.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_0654c4e_2',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_AdminLTE.min_4.css')) {
                    // _assetic_4235305_3
                    if ('/css/index_AdminLTE.min_4.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_4235305_3',);
                    }

                    // _assetic_0654c4e_3
                    if ('/css/index_AdminLTE.min_4.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_0654c4e_3',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_skin-blue.min_5.css')) {
                    // _assetic_4235305_4
                    if ('/css/index_skin-blue.min_5.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_4235305_4',);
                    }

                    // _assetic_0654c4e_4
                    if ('/css/index_skin-blue.min_5.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_0654c4e_4',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_dataTables.bootstrap.min_7.css')) {
                    // _assetic_4235305_6
                    if ('/css/index_dataTables.bootstrap.min_7.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_4235305_6',);
                    }

                    // _assetic_0654c4e_6
                    if ('/css/index_dataTables.bootstrap.min_7.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_0654c4e_6',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_responsive.dataTables.min_8.css')) {
                    // _assetic_4235305_7
                    if ('/css/index_responsive.dataTables.min_8.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_4235305_7',);
                    }

                    // _assetic_0654c4e_7
                    if ('/css/index_responsive.dataTables.min_8.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_0654c4e_7',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/index_part_')) {
                    // _assetic_4235305_9
                    if ('/css/index_part_10_index_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_4235305_9',);
                    }

                    // _assetic_4235305_10
                    if ('/css/index_part_10_tirilla_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 4235305,  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_4235305_10',);
                    }

                    // _assetic_0654c4e_8
                    if ('/css/index_part_9_index_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_0654c4e_8',);
                    }

                    // _assetic_0654c4e_9
                    if ('/css/index_part_9_tirilla_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0654c4e',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_0654c4e_9',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/cajero')) {
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

        }

        elseif (0 === strpos($pathinfo, '/js/index.js')) {
            // _assetic_52b52aa
            if ('/js/index.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_52b52aa',);
            }

            // _assetic_3f2c354
            if ('/js/index.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3f2c354',);
            }

        }

        elseif (0 === strpos($pathinfo, '/js/index_')) {
            if (0 === strpos($pathinfo, '/js/index_j')) {
                if (0 === strpos($pathinfo, '/js/index_jquery.min_1.js')) {
                    // _assetic_52b52aa_0
                    if ('/js/index_jquery.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_52b52aa_0',);
                    }

                    // _assetic_3f2c354_0
                    if ('/js/index_jquery.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3f2c354_0',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/js/index_jquery.dataTables.min_6.js')) {
                    // _assetic_52b52aa_5
                    if ('/js/index_jquery.dataTables.min_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_52b52aa_5',);
                    }

                    // _assetic_3f2c354_5
                    if ('/js/index_jquery.dataTables.min_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_3f2c354_5',);
                    }

                }

                // _assetic_52b52aa_10
                if ('/js/index_jszip.min_11.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_52b52aa_10',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/index_bootstrap')) {
                if (0 === strpos($pathinfo, '/js/index_bootstrap.min_2.js')) {
                    // _assetic_52b52aa_1
                    if ('/js/index_bootstrap.min_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_52b52aa_1',);
                    }

                    // _assetic_3f2c354_1
                    if ('/js/index_bootstrap.min_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3f2c354_1',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/js/index_bootstrap-datepicker.min_4.js')) {
                    // _assetic_52b52aa_3
                    if ('/js/index_bootstrap-datepicker.min_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_52b52aa_3',);
                    }

                    // _assetic_3f2c354_3
                    if ('/js/index_bootstrap-datepicker.min_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_3f2c354_3',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/js/index_bootstrap-datepicker.es.min_5.js')) {
                    // _assetic_52b52aa_4
                    if ('/js/index_bootstrap-datepicker.es.min_5.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_52b52aa_4',);
                    }

                    // _assetic_3f2c354_4
                    if ('/js/index_bootstrap-datepicker.es.min_5.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_3f2c354_4',);
                    }

                }

            }

            // _assetic_52b52aa_9
            if ('/js/index_buttons.html5.min_10.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_52b52aa_9',);
            }

            if (0 === strpos($pathinfo, '/js/index_adminlte.min_3.js')) {
                // _assetic_52b52aa_2
                if ('/js/index_adminlte.min_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_52b52aa_2',);
                }

                // _assetic_3f2c354_2
                if ('/js/index_adminlte.min_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3f2c354_2',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/index_dataTables.')) {
                if (0 === strpos($pathinfo, '/js/index_dataTables.bootstrap.min_7.js')) {
                    // _assetic_52b52aa_6
                    if ('/js/index_dataTables.bootstrap.min_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_52b52aa_6',);
                    }

                    // _assetic_3f2c354_6
                    if ('/js/index_dataTables.bootstrap.min_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_3f2c354_6',);
                    }

                }

                // _assetic_52b52aa_8
                if ('/js/index_dataTables.buttons.min_9.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_52b52aa_8',);
                }

                if (0 === strpos($pathinfo, '/js/index_dataTables.responsive.min_8.js')) {
                    // _assetic_52b52aa_7
                    if ('/js/index_dataTables.responsive.min_8.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_52b52aa_7',);
                    }

                    // _assetic_3f2c354_7
                    if ('/js/index_dataTables.responsive.min_8.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_3f2c354_7',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/js/index_part_12_')) {
                // _assetic_52b52aa_11
                if ('/js/index_part_12_Chart_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_52b52aa_11',);
                }

                // _assetic_52b52aa_12
                if ('/js/index_part_12_common_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_52b52aa_12',);
                }

                if (0 === strpos($pathinfo, '/js/index_part_12_datatable-')) {
                    if (0 === strpos($pathinfo, '/js/index_part_12_datatable-c')) {
                        // _assetic_52b52aa_13
                        if ('/js/index_part_12_datatable-cajeros_3.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_52b52aa_13',);
                        }

                        // _assetic_52b52aa_14
                        if ('/js/index_part_12_datatable-cierrescondiferencia_4.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_52b52aa_14',);
                        }

                        // _assetic_52b52aa_15
                        if ('/js/index_part_12_datatable-consultadevouchers_5.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_52b52aa_15',);
                        }

                        // _assetic_52b52aa_16
                        if ('/js/index_part_12_datatable-cuentas_6.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_52b52aa_16',);
                        }

                    }

                    // _assetic_52b52aa_17
                    if ('/js/index_part_12_datatable-fiscales_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_52b52aa_17',);
                    }

                    // _assetic_52b52aa_18
                    if ('/js/index_part_12_datatable-modificarcuentas_8.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_52b52aa_18',);
                    }

                    // _assetic_52b52aa_19
                    if ('/js/index_part_12_datatable-productosvendidos_9.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_52b52aa_19',);
                    }

                    // _assetic_52b52aa_20
                    if ('/js/index_part_12_datatable-reembolsos_10.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_52b52aa_20',);
                    }

                    // _assetic_52b52aa_21
                    if ('/js/index_part_12_datatable-subsidioespecie_11.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_52b52aa_21',);
                    }

                }

                // _assetic_52b52aa_22
                if ('/js/index_part_12_fecha_12.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_52b52aa_22',);
                }

                // _assetic_52b52aa_23
                if ('/js/index_part_12_fontawesome-all.min_13.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_52b52aa_23',);
                }

                // _assetic_52b52aa_24
                if ('/js/index_part_12_micomfamiliar_14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_52b52aa_24',);
                }

                // _assetic_52b52aa_25
                if ('/js/index_part_12_reporteconsolidado_15.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_52b52aa_25',);
                }

                // _assetic_52b52aa_26
                if ('/js/index_part_12_reservas_16.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '52b52aa',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_52b52aa_26',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/index_part_9_')) {
                // _assetic_3f2c354_8
                if ('/js/index_part_9_Chart_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_3f2c354_8',);
                }

                // _assetic_3f2c354_9
                if ('/js/index_part_9_common_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_3f2c354_9',);
                }

                if (0 === strpos($pathinfo, '/js/index_part_9_datatable-')) {
                    if (0 === strpos($pathinfo, '/js/index_part_9_datatable-c')) {
                        // _assetic_3f2c354_10
                        if ('/js/index_part_9_datatable-cajeros_3.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_3f2c354_10',);
                        }

                        // _assetic_3f2c354_11
                        if ('/js/index_part_9_datatable-cierrescondiferencia_4.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_3f2c354_11',);
                        }

                        // _assetic_3f2c354_12
                        if ('/js/index_part_9_datatable-consultadevouchers_5.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_3f2c354_12',);
                        }

                        // _assetic_3f2c354_13
                        if ('/js/index_part_9_datatable-cuentas_6.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_3f2c354_13',);
                        }

                    }

                    // _assetic_3f2c354_14
                    if ('/js/index_part_9_datatable-fiscales_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_3f2c354_14',);
                    }

                    // _assetic_3f2c354_15
                    if ('/js/index_part_9_datatable-modificarcuentas_8.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_3f2c354_15',);
                    }

                    // _assetic_3f2c354_16
                    if ('/js/index_part_9_datatable-productosvendidos_9.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_3f2c354_16',);
                    }

                    // _assetic_3f2c354_17
                    if ('/js/index_part_9_datatable-reembolsos_10.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_3f2c354_17',);
                    }

                    // _assetic_3f2c354_18
                    if ('/js/index_part_9_datatable-subsidioespecie_11.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_3f2c354_18',);
                    }

                }

                // _assetic_3f2c354_19
                if ('/js/index_part_9_fecha_12.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_3f2c354_19',);
                }

                // _assetic_3f2c354_20
                if ('/js/index_part_9_fontawesome-all.min_13.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_3f2c354_20',);
                }

                // _assetic_3f2c354_21
                if ('/js/index_part_9_micomfamiliar_14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_3f2c354_21',);
                }

                // _assetic_3f2c354_22
                if ('/js/index_part_9_reporteconsolidado_15.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_3f2c354_22',);
                }

                // _assetic_3f2c354_23
                if ('/js/index_part_9_reservas_16.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f2c354',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_3f2c354_23',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
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
