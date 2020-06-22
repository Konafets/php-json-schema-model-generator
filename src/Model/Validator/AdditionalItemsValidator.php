<?php

declare(strict_types = 1);

namespace PHPModelGenerator\Model\Validator;

use PHPModelGenerator\Exception\Arrays\InvalidAdditionalItemsException;
use PHPModelGenerator\Exception\SchemaException;
use PHPModelGenerator\Model\Schema;
use PHPModelGenerator\SchemaProcessor\SchemaProcessor;

/**
 * Class AdditionalItemsValidator
 *
 * @package PHPModelGenerator\Model\Validator
 */
class AdditionalItemsValidator extends AdditionalPropertiesValidator
{
    protected const PROPERTY_NAME = 'additional item';

    protected const PROPERTIES_KEY = 'items';
    protected const ADDITIONAL_PROPERTIES_KEY = 'additionalItems';

    protected const EXCEPTION_CLASS = InvalidAdditionalItemsException::class;

    /**
     * AdditionalItemsValidator constructor.
     *
     * @param SchemaProcessor $schemaProcessor
     * @param Schema          $schema
     * @param array           $propertiesStructure
     * @param string          $propertyName
     *
     * @throws SchemaException
     */
    public function __construct(
        SchemaProcessor $schemaProcessor,
        Schema $schema,
        array $propertiesStructure,
        string $propertyName
    ) {
        parent::__construct($schemaProcessor, $schema, $propertiesStructure, $propertyName);
    }
}
