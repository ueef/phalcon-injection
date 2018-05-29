<?php

namespace Ueef\Phalcon\Injection\Traits {

    use Phalcon\Di;

    trait InjectionTrait
    {
        protected function inject(string $service, ...$args)
        {
            return Di::getDefault()->get($service, $args);
        }
    }
}