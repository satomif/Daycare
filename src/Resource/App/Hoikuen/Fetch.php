<?php
namespace Satomi\Hoikuen\Resource\App\Hoikuen;
use BEAR\Resource\ResourceObject;

/**
 * Created by PhpStorm.
 * User: satomi
 * Date: 2019/06/19
 * Time: 13:35
 */

class Fetch extends ResourceObject
{
    public function onGet() : ResourceObject
    {
        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }
}