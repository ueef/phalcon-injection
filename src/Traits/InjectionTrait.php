<?php

namespace Ueef\Phalcon\Injection\Traits {

    use Phalcon\Di;

    trait InjectionTrait
    {
        protected static function inject(string $service)
        {
            return Di::getDefault()->get($service);
        }
    }
}