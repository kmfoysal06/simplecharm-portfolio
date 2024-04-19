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
        $social_links_array = [];
        foreach ($social_links as $link) {
            // If the current element of $social_links is an array with "name" and "url" keys
            if (isset($link['name']) && isset($link['url'])) {
                $name = $link['name'];
                $url  = $link['url'];
                // Now you can use $name and $url as needed
                array_push($social_links_array,[  'name' => $name
                                                , 'url' => $url ]);
            } else {
                foreach ($link as $l) {
                    if (is_array($l) && array_key_exists('name', $l)) {
                        $name = $l['name'];
                        // Now you can use $name and $url as needed
                    } elseif (array_key_exists('url', $l)) {
                        $url = $l['url'];
                    }
                    if (empty($url) || empty($name)) {
                        continue;
                    }

                array_push($social_links_array,[  'name' => $name
                                                , 'url' => $url ]);
                }

            }
            // echo var_dump($link);
        }
    }

    return $social_links_array;
}
