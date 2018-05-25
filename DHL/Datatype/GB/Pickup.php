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
 * File:        Pickup.php
 * Project:     DHL API
 *
 * @author      Respawn
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * Place Request model for DHL API
 */
class Pickup extends Base
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
        // Date of pickup
        'PickupDate' => array(
            'type' => 'date',
            'required' => true,
            'subobject' => false,
        ),
        // Time pickup must be ready by
        'ReadyByTime' => array(
            'type' => 'TimeHM',
            'required' => true,
            'subobject' => false,
        ),
        // Closing time of pickup location
        'CloseTime' => array(
            'type' => 'TimeHM',
            'required' => true,
            'subobject' => false,
        ),
        // If this is given, AfterHoursLocation also must be given
        'AfterHoursClosingTime' => array(
            'type' => 'TimeHM',
            'required' => false,
            'subobject' => false,
        ),
        // if this is given, AfterHoursClosingTime must also be given
        'AfterHoursLocation' => array(
            'type' => 'TimeHM',
            'required' => false,
            'subobject' => false,
        ),
        'Pieces' => array(
            'type' => 'positiveInteger',
            'required' => true,
            'subobject' => false,
        ),
        'weight' => array(
            'type' => 'WeightSeg',
            'required' => false,
            'subobject' => false,
        ),
        'specialInstructions' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),


    );
}
