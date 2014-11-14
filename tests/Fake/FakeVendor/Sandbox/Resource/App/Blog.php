<?php
namespace FakeVendor\Sandbox\Resource\App;

use BEAR\Resource\ResourceObject;
use BEAR\Resource\Annotation\Link;

class Blog extends ResourceObject
{
    private $repo = array(
        11 => ['id'=> 11, 'name' => "Athos blog"],
        12 => ['id'=> 12, 'name' => "Aramis blog"],
        99 => ['id'=> 19, 'name' => "BEAR blog"],
    );

    /**
     * @Link(rel="post", href="app://self/marshal/post?blog_id={id}", crawl="tree")
     */
    public function onGet($id)
    {
        $this->body = $this->repo[$id];

        return $this;
    }
}