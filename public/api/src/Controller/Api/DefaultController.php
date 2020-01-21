<?php

namespace App\Controller\Api;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Swagger\Annotations as SWG;

/**
 * @Rest\Route("/hello-world")
 */
class DefaultController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/")
     *
     * @SWG\Response(
     *     response=200,
     *     description="Returns `hello world` message",
     *     @SWG\Schema(
     *         type="object",
     *         @SWG\Property(property="message", type="string")
     *     )
     * )
     *
     * @return View
     */
    public function getAction(): View
    {
        return View::create(['message' => 'Hello World'], Response::HTTP_OK);
    }
}