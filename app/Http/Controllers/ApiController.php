<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="localhost:85",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="0.0.12",
 *         title="ConfidenceSecret",
 *         @SWG\Contact(name="BTIT95", url="http://btit95.esy.es"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */
class ApiController extends Controller
{
    //
}
