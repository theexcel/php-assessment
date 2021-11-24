<?php
class Computer
{
    public static function computerPrices(array $prices)
    {
        $sum = array_sum($prices);
        return $sum;
    }
    public static function computerNames(array $computers, string $name)
    {
        foreach ($computers as $x => $x_value) {
            if ($x == $name) {
                return $x_value;
            }
        }
    }
    public static function computerBrands(array $brands)
    {
        // Check for eveness first in the length of $brands to ensure they are in pairs
        $total = array_reduce(
            array_chunk($brands, 2),
            function ($total, $pair) {
                return $total + ($pair[0] - $pair[1]);
            },
        );
        return $total;
    }
    public static function highestPrices(array $prices)
    {
        $highest_price = max(array_values($prices));
        return $highest_price;
    }
}
#Integration
$this->computers = array(
    "Apple" => "1000000",
    "Hp" => "500000",
    "Dell" => "600000"
);
computer::computerPrices($this->computers);
computer::computerNames($this->computers, "Dell");
computer::computerBrands($this->computers);
computer::HighestPrices($this->computers);
