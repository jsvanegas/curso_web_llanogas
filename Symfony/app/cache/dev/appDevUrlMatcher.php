<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
