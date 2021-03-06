<?php
/**
 * Token authentication using JWT (Json Web Tokens), with configuration of public routes and routes that require authentication.
 *
 * @author Enzo Nagata <enzo.nagata@gmail.com>
 * @link      https://fb.com/enzomassaharunagata
 * @version     0.0.1
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App;

use Illuminate\Contracts\Support\Responsable;
use Slim\Http\Request;
use Slim\Http\Response;

class AppController
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

}
