// script.js

const apiKey = 'YOUR_API_KEY'; // Replace with your API key
const apiUrls = {
  'Africa': 'https://api.exchangerate-api.com/v4/latest/NGN', // Replace with the correct API URL for each continent
  'Europe': 'https://api.exchangerate-api.com/v4/latest/EUR',
  'North America': 'https://api.exchangerate-api.com/v4/latest/USD',
  'South America': 'https://api.exchangerate-api.com/v4/latest/BRL',
  'Asia': 'https://api.exchangerate-api.com/v4/latest/JPY',
  'Oceania': 'https://api.exchangerate-api.com/v4/latest/AUD'
};

// List of popular currencies by continent
const popularCurrencies = {
  'Africa': ['NGN', 'ZAR', 'KES', 'EGP', 'GHS', 'TZS', 'DZD'],
  'Europe': ['EUR', 'GBP', 'CHF', 'SEK', 'NOK', 'DKK', 'HUF'],
  'North America': ['USD', 'CAD', 'MXN', 'BMD', 'JMD', 'HTG', 'AWG'],
  'South America': ['BRL', 'ARS', 'CLP', 'COP', 'PEN', 'UYU', 'VES'],
  'Asia': ['JPY', 'CNY', 'INR', 'SGD', 'KRW', 'THB', 'AED'],
  'Oceania': ['AUD', 'NZD', 'FJD', 'PNG', 'VUV', 'WST', 'KIN']
};

const container = document.getElementById('exchange-rates-container');

// Function to fetch exchange rates for a given continent
async function fetchExchangeRates(continent) {
  try {
    const response = await fetch(apiUrls[continent]);
    const data = await response.json();
    displayExchangeRates(data, popularCurrencies[continent]);
  } catch (error) {
    console.error('Error fetching exchange rates:', error);
  }
}

// Function to display exchange rates
function displayExchangeRates(data, currencies) {
  const rates = data.rates;

  container.innerHTML = ''; // Clear existing content

  currencies.forEach(code => {
    if (rates[code]) {
      // Assuming flags are available at countryflags.io or a similar service
      const flagUrl = `https://www.countryflags.io/${code.substring(0, 2).toUpperCase()}/flat/32.png`; // Adjust flag URL

      const exchangeRateDiv = document.createElement('div');
      exchangeRateDiv.className = 'exchange-rate';

      exchangeRateDiv.innerHTML = `
        <img src="${flagUrl}" alt="${code} Flag" class="currency-flag">
        <div class="currency-info">
          <p class="currency-name">${code}</p>
          <p class="currency-rate">₦ ${rates[code].toFixed(2)}</p>
        </div>
      `;

      container.appendChild(exchangeRateDiv);
    }
  });

  // Duplicate content for seamless scrolling
  const containerWidth = container.offsetWidth;
  container.innerHTML += container.innerHTML; // Duplicate the content
  container.style.width = `${containerWidth * 2}px`; // Adjust width for scrolling
}

// Initialize with a specific continent, e.g., 'Africa'
fetchExchangeRates('Africa');
