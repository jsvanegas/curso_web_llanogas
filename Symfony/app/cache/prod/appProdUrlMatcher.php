<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/frontend')) {
            // frontend_ejemplo_blanco
            if ($pathinfo === '/frontend/ejemplo_blanco') {
                return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::ejemploBlancoAction',  '_route' => 'frontend_ejemplo_blanco',);
            }

            // frontend_homepage
            if ($pathinfo === '/frontend/index') {
                return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontend_homepage',);
            }

            // frontend_filltable
            if ($pathinfo === '/frontend/filltable') {
                return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::filltableAction',  '_route' => 'frontend_filltable',);
            }

            // frontend_apptable
            if ($pathinfo === '/frontend/apptable') {
                return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::apptableAction',  '_route' => 'frontend_apptable',);
            }

        }

        if (0 === strpos($pathinfo, '/sesiones')) {
            // sesiones_homepage
            if ($pathinfo === '/sesiones/hello') {
                return array (  '_controller' => 'SesionesBundle\\Controller\\sesionesController::indexAction',  '_route' => 'sesiones_homepage',);
            }

            if (0 === strpos($pathinfo, '/sesiones/ajax')) {
                // sesiones_ajax
                if ($pathinfo === '/sesiones/ajax') {
                    return array (  '_controller' => 'SesionesBundle\\Controller\\ajaxController::indexAction',  '_route' => 'sesiones_ajax',);
                }

                // sesiones_ajax_peticion
                if ($pathinfo === '/sesiones/ajax/peticion') {
                    return array (  '_controller' => 'SesionesBundle\\Controller\\AjaxController::peticionAjaxAction',  '_route' => 'sesiones_ajax_peticion',);
                }

            }

        }

        // ejercicios_homepage
        if (0 === strpos($pathinfo, '/ejercicios/hello') && preg_match('#^/ejercicios/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ejercicios_homepage')), array (  '_controller' => 'EjerciciosBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/achagua')) {
            // achagua_homepage
            if ($pathinfo === '/achagua/index') {
                return array (  '_controller' => 'AchaguaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'achagua_homepage',);
            }

            // eliminar_homepage
            if ($pathinfo === '/achagua/eliminar') {
                return array (  '_controller' => 'AchaguaBundle\\Controller\\DefaultController::eliminarAction',  '_route' => 'eliminar_homepage',);
            }

            // modificar_homepage
            if ($pathinfo === '/achagua/modificar') {
                return array (  '_controller' => 'AchaguaBundle\\Controller\\DefaultController::modificarAction',  '_route' => 'modificar_homepage',);
            }

            // consultar_homepage
            if ($pathinfo === '/achagua/consultar') {
                return array (  '_controller' => 'AchaguaBundle\\Controller\\DefaultController::consultarAction',  '_route' => 'consultar_homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
