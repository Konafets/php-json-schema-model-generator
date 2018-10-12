<?php

declare(strict_types = 1);

namespace PHPModelGenerator\PropertyProcessor\Property;

use PHPModelGenerator\Model\Property;
use PHPModelGenerator\PropertyProcessor\Decorator\IntToFloatCastDecorator;

/**
 * Class NumberProcessor
 *
 * @package PHPModelGenerator\PropertyProcessor\Property
 */
class NumberProcessor extends AbstractNumericProcessor
{
    protected const TYPE = 'float';

    /**
     * @inheritdoc
     */
    public function process(string $propertyName, array $propertyData): Property
    {
        return parent::process($propertyName, $propertyData)->addDecorator(new IntToFloatCastDecorator());
    }
}
