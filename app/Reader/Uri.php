<?php
/**
 * Created by PhpStorm.
 * User: DrJones
 * Date: 15. 6. 7.
 * Time: 오후 12:36
 */

namespace App\Reader;

class Uri
{
    public function getHost($url)
    {
        $url = $this->attachSchemeIfNotExist($url);
        $uri = new \Wandu\Http\Uri($url);
        return $uri->getHost();
    }

    public function getScheme($url)
    {
        $uri = new \Wandu\Http\Uri($url);
        return $uri->getScheme($url);
    }

    public function getPath($url)
    {
        $uri = new \Wandu\Http\Uri($url);
        return $uri->getPath($url);
    }

    public function getQuery($url)
    {
        $uri = new \Wandu\Http\Uri($url);
        return $uri->getQuery($url);
    }

    public function attachSchemeIfNotExist($url)
    {
        $uri = new \Wandu\Http\Uri($url);
        $scheme = $uri->getScheme($url);
        if (empty($scheme)) {
            return 'http://'.$url;
        } else {
            return $url;
        }
    }
}