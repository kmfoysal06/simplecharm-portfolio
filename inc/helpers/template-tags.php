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
        }
    }

    return simplecharm_portfolio_iterate_social($social_links_array);
}

function simplecharm_portfolio_iterate_social($social_links_arr){
    foreach ($social_links_arr as &$value) {
        foreach ($value as &$single) {
            if (is_array($single)) {
                $single = implode('', $single);
            }
        }
    }
    return $social_links_arr;
}
function simplecharm_portfolio_link_social($social_links){
    foreach($social_links as $social_link){
        echo '<a href="'.esc_attr($social_link['url']).'">'.esc_html($social_link['name']).'</a> ';
    }
}
function simplecharm_portfolio_link_social_frontend($social_links){
    $allowed_icons = array(
    'twitter',
    'facebook',
    'instagram',
    'youtube',
    'linkedin',
    'pinterest',
    'google',
    'tumblr',
    'vimeo',
    'flickr',
    'reddit',
    'wordpress',
    'blogger',
    'delicious',
    'digg',
    'lastfm',
    'stumbleupon',
    'twitter',
    'rss',
    'vkontakte',
    'odnoklassniki',
    'pocket',
    'skype',
    'telegram',
    'wechat',
    'whatsapp',
    'xing',
    'yelp',
    'vk',
    'wikipedia',
    'twitch',
    'github',
);
    $social_links = simplecharm_portfolio_iterate_social($social_links);
    foreach($social_links as $social_link){
        $icon = strtolower($social_link['name']);
        if(in_array($icon, $allowed_icons)){
            // dashicons
            echo '<a href="'.esc_attr($social_link['url']).'"><span class="dashicons dashicons-'.$icon.'"></span></a> ';
        }else{
            //show link icon from dashicon
            echo '<a href="'.esc_attr($social_link['url']).'"><span class="dashicons dashicons-admin-links"></span></a> ';
        }
    }
}