<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\BestOfferArrayType $BestOfferArray
 * @property \DTS\eBaySDK\Trading\Types\ItemType $Item
 * @property \DTS\eBaySDK\Trading\Types\ItemBestOffersArrayType $ItemBestOffersArray
 * @property integer $PageNumber
 * @property \DTS\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 */
class GetBestOffersResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BestOfferArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferArray'
        ],
        'Item' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'ItemBestOffersArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemBestOffersArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemBestOffersArray'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'PaginationResult' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
