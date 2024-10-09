<ul class="currency-ticker-wrapper">
    <div class="currency-ticker">
        @foreach ($filteredRates as $currency => $data)
            <li class="ticker-item">
                <!-- Add a flag based on the currency code -->
                <img src="{{ asset('assets/frontend/flags/' . strtolower($currency) . '.png') }}"
                    alt="{{ $currency }} Flag" class="currency-flag" />
                <span class="currency-value"><span class="text-white">{{ $currency }}</span> 1.00 </span>
                <img src="{{ asset('assets/frontend/flags/ngn.png') }}" alt="Nigeria Flag" class="currency-flag" />
                <span class="naira-value">
                    <span class="text-white">NGN</span>
                    {{ number_format($data['naira_equivalent'], 2) }}
                </span>
            </li>
        @endforeach
    </div>
</ul>

<style>
    /* Ensure the background fills the entire screen */
    .currency-ticker-wrapper {
        position: fixed;
        /* Fixed position to ensure it stays in place */
        width: 100%;
        height: 40px;
        /* Fills the entire width of the screen */
        background-color: black;
        /* Black background color */
        padding: 5px 0;
        /* Space around the ticker */
        top: 0;
        /* Position the ticker at the top of the screen */
        z-index: 1000;
        /* Ensure it's above other content */
    }

    /* Continuous scrolling effect */
    .currency-ticker {
        display: inline-flex;
        white-space: nowrap;
        animation: scroll-left 50s linear infinite;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .ticker-item {
        display: inline-flex;
        align-items: center;
        padding: 0 30px;
        /* Space between items */
        font-size: 1.2rem;
        font-weight: 500 bold;
    }

    .currency-value {
        color: rgb(250, 95, 95);
        /* Set exchange rate currency values to red */
        margin-right: 10px;
        font-weight: 600 bold;
    }

    .naira-value {
        color: rgb(50, 240, 50);
        /* Set the Naira value to green */
        font-weight: 600 bold;
        margin-left: 10px;
    }

    .currency-flag {
        width: 20px;
        height: 15px;
        margin-right: 10px;
    }
</style>
