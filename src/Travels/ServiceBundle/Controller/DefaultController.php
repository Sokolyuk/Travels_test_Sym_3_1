<?php

namespace Travels\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Travels\ServiceBundle\Classes\XHRequesterInterface;


class DefaultController extends Controller
{
	
	protected function _err_response_json($code, $message)
	{
		return new Response(empty($message) ? '' : json_encode(array('errormessage' => $message)), $code, array('Content-Type' => 'application/json'));
	}

	protected function nameToURL($name)
	{
		return 'http://www.opodo.de/travel/service/geo/autocomplete;searchWord='.$name.';departureOrArrival=DEPARTURE;addSearchByCountry=true;addSearchByRegion=true;product=FLIGHT';
	}

    /**
     * @Route("/ajax/airport/{name}"), name="airports_list"
	 * @Method({"POST", "GET"})
     */
    public function listAction($name)
    {
		try{
			if (preg_match("/[^a-zöäüß]/i", $name)) {
				return $this->_err_response_json(400, 'It must contain letters');
			}

			$xhrequester = $this->get('xhrequester');
			if (!$xhrequester instanceof XHRequesterInterface) {
				throw new \Exception("Service xhrequester not implemented XHRequesterInterface");
			}

			$result = $xhrequester->send($this->nameToURL($name));

			if (!$result) {
				return $this->_err_response_json(503, 'Service temporarily unavailable');
			}

			return new JsonResponse($result, 200, array(), true);
		}catch(\Exception $e){
			error_log($e->getMessage());
			return $this->_err_response_json(500, 'Service failure');
		}
    }
}
