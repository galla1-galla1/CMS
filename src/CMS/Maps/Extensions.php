<?php

/**
 * Extensions
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace Adapik\CMS\Maps;

use FG\ASN1\Identifier;

/**
 * Extensions
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class Extensions
{
    const MAP = [
        'type'     => Identifier::SEQUENCE,
        'min'      => 1,
        // technically, it's MAX, but we'll assume anything < 0 is MAX
        'max'      => -1,
        // if 'children' isn't an array then 'min' and 'max' must be defined
        'children' => Extension::MAP
    ];
}
