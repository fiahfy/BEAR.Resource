<?php
/**
 * This file is part of the BEAR.Resource package
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace BEAR\Resource;

interface OptionProviderInterface
{
    /**
     * @param ResourceObject $ro resource object
     *
     * @return ResourceObject
     */
    public function get(ResourceObject $ro);
}
