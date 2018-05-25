<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        Place.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\Pickup;
use DHL\Datatype\Base;

/**
 * Place Request model for DHL API
 */
class Place extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'LocationType' => array(
            'type' => 'LocationType',
            'required' => true,
            'subobject' => false,
            'comment' => 'Identifies if a location is a business, residence,
				or both (B:Business, R:Residence, C:Business Residence)',
            'length' => '1',
            'enumeration' => 'B,R,C',
        ), 
        'CompanyName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ),
        'Address1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line 1',
            'maxLength' => '35',
        ),
        'Address2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line 1',
            'maxLength' => '35',
        ),
        'PackageLocation' => array(
            'type' => 'PackageLocation',
            'required' => true,
            'subobject' => false,
            'comment' => 'PackageLocation',
            'maxLength' => '40',
        ),
        'City' => array(
            'type' => 'City',
            'required' => true,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ),
        'StateCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Two letter state code required if location is within the US',
        ),
        'DivisionName' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
        ),
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'Two letter ISO country codes',
            'length' => '2',
        ),
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ),
        'RouteCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Place route code, first 2 Uppercase charaters and follow by 2 digits',
        ),
    );
}
