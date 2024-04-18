<?php
/**
 * Custom template tags for this theme.
 * Eventually, some of the functionality here could be replaced by core features.
 * @package SimpleCharm Portfolio
 * @since 1.0
 */

function simplecharm_portfolio_load_social($social_links)
{
    if (isset($social_links) && is_array($social_links) && !empty($social_links)) {
        foreach ($social_links as $single_link) {
            $urls  = $single_link['url'];
            $names = $single_link['name'];
            foreach ($names as $name) {
                foreach ($urls as $url) {
                    $single_url = $url;
                }
                if (!empty($single_url) && !empty($name)) {
                    if (filter_var($single_url, FILTER_VALIDATE_URL)) {
                        return '<a href="' . esc_url($single_url) . '" target="_blank">' . esc_html($name) . '</a>';
                    } else {
                        echo var_dump($single_url);
                    }
                }
            }

        }
    }
}
