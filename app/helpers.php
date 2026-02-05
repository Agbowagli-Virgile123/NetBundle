<?php

if (! function_exists('currencyFormat')) {
    function currencyFormat($amount, $locale = 'en_GH', $currency = 'GHS')
    {
        $fmt = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($amount ?? 0, $currency);
    }
}
