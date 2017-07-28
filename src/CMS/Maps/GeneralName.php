<?php

/**
 * GeneralName
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
 * GeneralName
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class GeneralName
{
    const MAP = [
        'type'     => Identifier::CHOICE,
        'children' => [
            'otherName'                 => [
                                             'constant' => 0,
                                             'optional' => true,
                                             'implicit' => true
                                           ] + AnotherName::MAP,
            'rfc822Name'                => [
                                             'type' => Identifier::IA5_STRING,
                                             'constant' => 1,
                                             'optional' => true,
                                             'implicit' => true
                                           ],
            'dNSName'                   => [
                                             'type' => Identifier::IA5_STRING,
                                             'constant' => 2,
                                             'optional' => true,
                                             'implicit' => true
                                           ],
            'x400Address'               => [
                                             'constant' => 3,
                                             'optional' => true,
                                             'implicit' => true
                                           ] + ORAddress::MAP,
            'directoryName'             => [
                                             'constant' => 4,
                                             'optional' => true,
                                             'explicit' => true
                                           ] + Name::MAP,
            'ediPartyName'              => [
                                             'constant' => 5,
                                             'optional' => true,
                                             'implicit' => true
                                           ] + EDIPartyName::MAP,
            'uniformResourceIdentifier' => [
                                             'type' => Identifier::IA5_STRING,
                                             'constant' => 6,
                                             'optional' => true,
                                             'implicit' => true
                                           ],
            'iPAddress'                 => [
                                             'type' => Identifier::OCTETSTRING,
                                             'constant' => 7,
                                             'optional' => true,
                                             'implicit' => true
                                           ],
            'registeredID'              => [
                                             'type' => Identifier::OBJECT_IDENTIFIER,
                                             'constant' => 8,
                                             'optional' => true,
                                             'implicit' => true
                                           ]
        ]
    ];
}
