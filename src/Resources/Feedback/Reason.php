<?php

/**
 * Class Reason
 *
 * @author Diego Wagner <diegowagner4@gmail.com>
 * http://www.discoverytecnologia.com.br
 */

namespace Dsc\MercadoLivre\Resources\Feedback;

final class Reason
{
    const OUT_OF_STOCK = 'OUT_OF_STOCK';
    const BUYER_NOT_ENOUGH_MONEY = 'BUYER_NOT_ENOUGH_MONEY';
    const BUYER_REGRETS = 'BUYER_REGRETS';
    const SELLER_REGRETS = 'SELLER_REGRETS';
    const BUYER_DID_NOT_ANSWER = 'BUYER_DID_NOT_ANSWER';
    const THEY_NOT_HONORING_POLICIES = 'THEY_NOT_HONORING_POLICIES';
    const OTHER_MY_RESPONSIBILITY = 'OTHER_MY_RESPONSIBILITY';
    const OTHER_THEIR_RESPONSIBILITY = 'OTHER_THEIR_RESPONSIBILITY';
    const DUBIOUS_BUYER = 'DUBIOUS_BUYER';
    const HIGH_ML_COMISSION = 'HIGH_ML_COMISSION';
    const HIGH_TAXES = 'HIGH_TAXES';
    const SELLER_HOLIDAY = 'SELLER_HOLIDAY';
    const UNFRIENDLY_SHIPMENT_POLICY = 'UNFRIENDLY_SHIPMENT_POLICY';
    const UNAVAILABLE_PRODUCT = 'UNAVAILABLE_PRODUCT';
    const SELLER_ADDRESS_WITHDRAWAL = 'SELLER_ADDRESS_WITHDRAWAL';
    const WRONG_RECEIVER_ADDRESS = 'WRONG_RECEIVER_ADDRESS';
    const HIGH_SHIPMENT_COST = 'HIGH_SHIPMENT_COST';
    const WRONG_SHIPMENT_COST = 'WRONG_SHIPMENT_COST';
    const UNPRINTED_LABEL = 'UNPRINTED_LABEL';
    const UNWITHDRAWN_PRODUCT_BY_DELIVER_COMPANY = 'UNWITHDRAWN_PRODUCT_BY_DELIVER_COMPANY';
    const DENIED_PACKAGE = 'DENIED_PACKAGE';
    const UNABLE_TO_READ_LABEL = 'UNABLE_TO_READ_LABEL';
    const MANUFACTURING_PRODUCT_NOT_FINISHED = 'MANUFACTURING_PRODUCT_NOT_FINISHED';
    const SHIPMENT_PROBLEM_OTHER = 'SHIPMENT_PROBLEM_OTHER';
    const DELIVERY_COMPANY_PROBLEM_OTHER = 'DELIVERY_COMPANY_PROBLEM_OTHER';

    private static $reasons = [
        self::OUT_OF_STOCK => 'OUT_OF_STOCK',
        self::BUYER_NOT_ENOUGH_MONEY => 'BUYER_NOT_ENOUGH_MONEY',
        self::BUYER_REGRETS => 'BUYER_REGRETS',
        self::SELLER_REGRETS => 'SELLER_REGRETS',
        self::BUYER_DID_NOT_ANSWER => 'BUYER_DID_NOT_ANSWER',
        self::THEY_NOT_HONORING_POLICIES => 'THEY_NOT_HONORING_POLICIES',
        self::OTHER_MY_RESPONSIBILITY => 'OTHER_MY_RESPONSIBILITY',
        self::OTHER_THEIR_RESPONSIBILITY => 'OTHER_THEIR_RESPONSIBILITY',
        self::DUBIOUS_BUYER => 'DUBIOUS_BUYER',
        self::HIGH_ML_COMISSION => 'HIGH_ML_COMISSION',
        self::HIGH_TAXES => 'HIGH_TAXES',
        self::SELLER_HOLIDAY => 'SELLER_HOLIDAY',
        self::UNFRIENDLY_SHIPMENT_POLICY => 'UNFRIENDLY_SHIPMENT_POLICY',
        self::UNAVAILABLE_PRODUCT => 'UNAVAILABLE_PRODUCT',
        self::SELLER_ADDRESS_WITHDRAWAL => 'SELLER_ADDRESS_WITHDRAWAL',
        self::WRONG_RECEIVER_ADDRESS => 'WRONG_RECEIVER_ADDRESS',
        self::HIGH_SHIPMENT_COST => 'HIGH_SHIPMENT_COST',
        self::WRONG_SHIPMENT_COST => 'WRONG_SHIPMENT_COST',
        self::UNPRINTED_LABEL => 'UNPRINTED_LABEL',
        self::UNWITHDRAWN_PRODUCT_BY_DELIVER_COMPANY => 'UNWITHDRAWN_PRODUCT_BY_DELIVER_COMPANY',
        self::DENIED_PACKAGE => 'DENIED_PACKAGE',
        self::UNABLE_TO_READ_LABEL => 'UNABLE_TO_READ_LABEL',
        self::MANUFACTURING_PRODUCT_NOT_FINISHED => 'MANUFACTURING_PRODUCT_NOT_FINISHED',
        self::SHIPMENT_PROBLEM_OTHER => 'SHIPMENT_PROBLEM_OTHER',
        self::DELIVERY_COMPANY_PROBLEM_OTHER => 'DELIVERY_COMPANY_PROBLEM_OTHER'
    ];

    /**
     * @param $value
     * @return bool
     */
    public static function isValid($value)
    {
        return in_array($value, static::$reasons);
    }
}