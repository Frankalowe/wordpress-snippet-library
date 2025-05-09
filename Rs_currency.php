
// Change LKR symbol to Rs
add_filter('woocommerce_currency_symbol', 'custom_lkr_currency_symbol', 10, 2);
function custom_lkr_currency_symbol($currency_symbol, $currency) {
    if ($currency === 'LKR') {
        $currency_symbol = 'Rs.';
    }
    return $currency_symbol;
}
