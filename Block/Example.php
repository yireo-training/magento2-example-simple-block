<?php
namespace Yireo\ExampleSimpleBlock\Block;

use Magento\Framework\View\Element\Template;

class Example extends Template
{
    /**
     * @return string
     */
    public function getMessage() : string
    {
        return 'Output of '.get_class($this).'::getMessage()';
    }
}
