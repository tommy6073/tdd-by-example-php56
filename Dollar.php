<?php

require_once('Money.php');

class Dollar extends Money
{
    /**
     * Dollar constructor.
     * @param int $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }
}
