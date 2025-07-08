
/**
 * Override woocommerce_catalog_orderby
 */
add_filter('woocommerce_catalog_orderby', 'elessi_wc_catalog_orderby');
if (!function_exists('elessi_wc_catalog_orderby')) :
    function elessi_wc_catalog_orderby($catalogs) {
        return array(
            'menu_order' => __('Default sorting', 'elessi-theme'),
            'popularity' => __('Popularity', 'elessi-theme'),
            'rating'     => __('Average rating', 'elessi-theme'),
            'date'       => __('Latest', 'elessi-theme'),
            'price'      => __('Price: Ascending', 'elessi-theme'),
            'price-desc' => __('Price: Descending', 'elessi-theme'),
        );
    }
endif;
