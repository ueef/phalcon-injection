<?php

namespace Ueef\Phalcon\Injection\Traits {

    trait AbstractInjectionTrait
    {
        abstract protected function inject(string $service);
    }
}
