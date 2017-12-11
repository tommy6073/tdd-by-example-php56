<?php

abstract class Money
{
    protected $amount;

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract function times($multiplier);

    abstract function currency();

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money)
    {
        return ($this->amount == $money->amount) && (get_class($this) === get_class($money));
    }

    /**
     * @param int $amount
     * @return Money
     */
    static function dollar($amount)
    {
        return new Dollar($amount);
    }

    /**
     * @param int $amount
     * @return Money
     */
    static function franc($amount)
    {
        return new Franc($amount);
    }
}