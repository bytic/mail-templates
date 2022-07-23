<?php

namespace Bytic\MailTemplates\Configuration;

class Configuration implements \ArrayAccess
{
    use Traits\HasData;
    use Traits\HasLogo;

    /**
     * Create a new configuration repository.
     *
     * @param array $array
     */
    public function __construct(array $array = [])
    {

    }

}