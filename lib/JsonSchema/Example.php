<?php

namespace NielsHoppe\Goodies\JsonSchema;

class Example implements \JsonSerializable {

    use \NielsHoppe\Goodies\JsonSchema\JsonSerializable;

    protected static $properties = array(
        'foo' => array(
            'property' => 'foo',
            'type' => 'string'
        ),
        'bar' => array(
            'method' => 'getBar',
            'type' => 'number'
        )
    );

    protected $foo;
    protected $bar;

    public function __construct ($foo) {

        $this->foo = $foo;
    }

    public function getBar () {

        return 42;
    }
}
