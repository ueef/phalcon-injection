<?php

namespace Ueef\Phalcon\Injection\Traits {

    trait AbstractInjectionTrait
    {
        abstract protected static function inject(string $service);
    }
}
