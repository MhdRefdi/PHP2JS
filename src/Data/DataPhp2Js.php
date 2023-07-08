<?php

namespace Rmunate\Php2Js\Data;

use Rmunate\Php2Js\Data\UrlPhp2Js;
use Rmunate\Php2Js\Data\UserPhp2Js;
use Rmunate\Php2Js\Data\AgentPhp2Js;
use Rmunate\Php2Js\Data\TokenPhp2Js;
use Rmunate\Php2Js\Data\ServerPhp2Js;
use Rmunate\Php2Js\Data\LaravelPhp2Js;

class DataPhp2Js
{
    /**
     * Version Library.
     */
    const VERSION = '3.7.0';

    /**
     * Return Data agent.
     *
     * @return array
     */
    public static function getDataAgent(): array
    {
        $data = new AgentPhp2Js();

        return [
            'agent' => [
                'identifier'  => $data->getAgent(),
                'remote_ip'   => $data->getIpAddress(),
                'remote_port' => $data->getRemotePort(),
                'browser'     => $data->getDataBrowser(),
                'isMobile'    => $data->isMobileDevice(),
                'OS'          => $data->getDataClienteSO(),
            ],
        ];
    }

    /**
     * Return Array with Data Url In Use.
     *
     * @return array
     */
    public static function getDataUrl(): array
    {
        $data = new UrlPhp2Js();

        return [
            'url' => [
                'baseUrl'    => $data->getBaseUrl(),
                'fullUrl'    => $data->getFullUrl(),
                'uri'        => $data->getUri(),
                'parameters' => [
                    'route' => $data->getParametersRoute(),
                    'get'   => $data->getParametersGet(),
                    'post'  => $data->getParametersPost(),
                ],
                'scheme' => $data->getSchema(),
            ],
        ];
    }

    /**
     * Return Token CSRF Laravel.
     *
     * @return array
     */
    public static function getDataCSRF(): array
    {
        $data = new TokenPhp2Js();

        return [
            'token' => $data->csrfToken(),
        ];
    }

    /**
     * Return Data Laravel.
     *
     * @return array
     */
    public static function getDataLaravel(): array
    {
        $data = new LaravelPhp2Js();

        return [
            'framework' => [
                'version'     => $data->getLaravelVersion(),
                'environment' => [
                    'name'  => $data->getEnvName(),
                    'debug' => $data->getEnvDebug() == true,
                ],
            ],
        ];
    }

    /**
     * Return Data PHP.
     *
     * @return array
     */
    public static function getDataPHP(): array
    {
        $data = new ServerPhp2Js();

        return [
            'php' => [
                'id'      => $data->getPhpVersionId(),
                'version' => $data->getPhpVersion(),
                'release' => $data->getPhpReleaseVersion(),
            ],
        ];
    }

    /**
     * Return User Data.
     *
     * @return mixed
     */
    public static function getDataUser()
    {
        $data = new UserPhp2Js();

        return [
            'user' => $data->getDataUser(),
        ];
    }
}
