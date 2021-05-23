<?php

namespace kalanis\kw_address_handler\Sources;


use kalanis\kw_input\Interfaces\IEntry;
use kalanis\kw_input\Interfaces\IInputs;


/**
 * Class Inputs
 * @package kalanis\kw_address_handler\Sources
 * Construct object is inputs datasource which provides the address
 * @codeCoverageIgnore access external variable
 */
class Inputs extends Sources
{
    public function __construct(IInputs $inputs, string $entry = 'REQUEST_URI')
    {
        $server = $inputs->intoKeyObjectArray($inputs->getIn($entry, [IEntry::SOURCE_SERVER]));
        if (isset($server[$entry])) {
            $this->setAddress($server[$entry]);
        }
    }
}
