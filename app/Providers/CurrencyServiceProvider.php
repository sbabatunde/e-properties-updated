<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\CurrencyService;

class CurrencyServiceProvider extends ServiceProvider
{
    protected $currencyService;

    public function __construct()
    {
        $this->currencyService = new CurrencyService();
    }

    public function boot()
    {
        // Share the currency rates across all views
        View::composer('*', function ($view) {
            $rates = $this->currencyService->getExchangeRates();

            // Filter for specific currencies
            $currencies = ['USD', 'GBP', 'EUR', 'GHS', 'CAD', 'AUD', 'JPY'];
            $filteredRates = [];

            foreach ($currencies as $currency) {
                if (isset($rates['rates'][$currency])) {
                    // Get the rate and calculate the Naira equivalent for 1 unit
                    $filteredRates[$currency] = [
                        'rate' => $rates['rates'][$currency], // Exchange rate
                        'naira_equivalent' => round(1 / $rates['rates'][$currency], 2), // Naira equivalent for 1 unit
                    ];
                }
            }

            $view->with('filteredRates', $filteredRates);
        });
    }

    public function register()
    {
        //
    }
}
