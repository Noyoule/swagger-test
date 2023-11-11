<?php

namespace App\Http\Controllers\Api;
use OpenApi\Annotations\Info as OA;
     /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Test swagger",
     *      description="Documentation de l'API du projet Test swagger",
     *      @OA\Contact(
     *          email="victoirenoyouliwa@gmail.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Serveur local de développement qui héberge l'API de Test swagger"
     * )

     *
     * @OA\Tag(
     *     name="Projects",
     *     description="API Endpoints of Projects"
     * )
     */

class ApiController extends \App\Http\Controllers\Controller{
}

?>