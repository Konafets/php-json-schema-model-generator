<?php

namespace PHPModelGenerator\PropertyProcessor\ComposedValue;

/**
 * Class AllOfProcessor
 *
 * @package PHPModelGenerator\PropertyProcessor\ComposedValue
 */
class AllOfProcessor extends AbstractComposedPropertiesProcessor
{
    /**
     * @inheritdoc
     */
    protected function getComposedValueValidation(int $composedElements): string
    {
        return "\$succeededCompositionElements === $composedElements";
    }
}
