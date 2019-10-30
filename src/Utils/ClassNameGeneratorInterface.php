<?php

declare(strict_types = 1);

namespace PHPModelGenerator\Utils;

/**
 * Interface ClassNameGeneratorInterface
 *
 * @package PHPModelGenerator\PropertyProcessor\Decorator\ClassName
 */
interface ClassNameGeneratorInterface
{
    /**
     * Hook into the class name generation. Returns the name of a class.
     *
     * @param string $propertyName     If a json file is handled, contains the name of the file.
     *                                 Otherwise the name of the property which contains the nested object
     * @param array  $schema           The structure of the schema which is represented by the generated class
     * @param bool   $isMergeClass     Is it a merge class? example: allOf schema composition
     * @param string $currentClassName The class name of the parent class if a class for a nested object is generated
     *
     * @return string
     */
    public function getClassName(
        string $propertyName,
        array $schema,
        bool $isMergeClass,
        string $currentClassName = ''
    ): string;
}
