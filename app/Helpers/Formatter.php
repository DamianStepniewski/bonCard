<?php


namespace App\Helpers;


class Formatter
{
    /**
     * Rounds a float to 2 decimal digits, always displays 2 decimal digits, ads a currency string and optionally
     * replaces the decimal separator with a custom one
     *
     * @param float $value
     * @param string $currency
     * @param string $decimalSeparator
     * @return string
     */
    public static function formatCurrency(float $value, string $currency, string $decimalSeparator = '.') : string {
        $main = 0;
        $decimal = '00';

        $value = round($value, 2) + 0;

        if (!strpos($value, '.'))
            return $value . $decimalSeparator . $decimal . ' ' . $currency;

        $tempAr = explode('.', $value);
        $main = $tempAr[0];
        $decimal = $tempAr[1];

        if (strlen($decimal) == 1)
            $decimal .= '0';

        return $main . $decimalSeparator . $decimal . ' ' . $currency;
    }
}
