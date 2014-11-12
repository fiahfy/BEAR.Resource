<?php
/**
 * This file is part of the BEAR.Resource package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Resource\Adapter;

use BEAR\Resource\AbstractUri;
use BEAR\Resource\ResourceObject;

interface AdapterInterface
{
    /**
     * Return new resource object
     *
     * @param AbstractUri $uri
     *
     * @return ResourceObject
     */
    public function get(AbstractUri $uri);
}
