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
        $context = $this->context;
        $request = $this->request;

        // travels_service_default_list
        if (0 === strpos($pathinfo, '/ajax/airport') && preg_match('#^/ajax/airport/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_travels_service_default_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'travels_service_default_list')), array (  '_controller' => 'Travels\\ServiceBundle\\Controller\\DefaultController::listAction',));
        }
        not_travels_service_default_list:

        // travels_main_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'travels_main_default_index');
            }

            return array (  '_controller' => 'Travels\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'travels_main_default_index',);
        }

        // travels_main_default_departure
        if ($pathinfo === '/departure') {
            return array (  '_controller' => 'Travels\\MainBundle\\Controller\\DefaultController::departureAction',  '_route' => 'travels_main_default_departure',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
