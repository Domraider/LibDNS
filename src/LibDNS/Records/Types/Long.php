<?php
/**
 * Represents a 32-bit unsigned integer
 *
 * PHP version 5.4
 *
 * @category   LibDNS
 * @package    Types
 * @author     Chris Wright <https://github.com/DaveRandom>
 * @copyright  Copyright (c) Chris Wright <https://github.com/DaveRandom>
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    2.0.0
 */
namespace LibDNS\Records\Types;

/**
 * Represents a 32-bit unsigned integer
 *
 * @category   LibDNS
 * @package    Types
 * @author     Chris Wright <https://github.com/DaveRandom>
 */
class Long extends Type
{
    /**
     * @var int
     */
    protected $value = 0;

    /**
     * @var int Types enum value that relates to this type
     */
    protected $typeIndex = Types::LONG;

    /**
     * Set the internal value
     *
     * @param int $value The new value
     *
     * @throws \UnderflowException When the supplied value is less than 0
     * @throws \OverflowException When the supplied value is greater than 4294967296
     */
    public function setValue($value)
    {
        $value = (int) $value;
        if ($value < 0) {
            throw new \UnderflowException('Long integer value must be in the range 0 - 4294967296');
        } else if ($value > 4294967296) {
            throw new \OverflowException('Long integer value must be in the range 0 - 4294967296');
        }

        $this->value = $value;
    }
}
