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
                array_push($social_links_array, ['name' => $name
                    , 'url' => $url]);
            } else {
                 $currentPair = [];

                foreach ($link as $item) {
                    if (!empty($item["name"])) {
                        $currentPair["name"] = $item["name"];
                    } elseif (!empty($item["url"])) {
                        $currentPair["url"] = $item["url"];
                    }
                    
                    if (count($currentPair) === 2) {
                        $social_links_array[] = $currentPair;
                        $currentPair = [];
                    }
                }
            }

            }
        }
    return $social_links_array;
}

// function simplecharm_portfolio_iterate_social($social_links_arr)
// {
//     $html = '';
//     foreach($social_links_arr as $data){
//         $html .= '<a href="' . esc_attr($data['url']) . '">' . esc_html($data['name']) . '</a> ';
//     }
//     // return $social_links_arr;
//     return $html;
// }
function simplecharm_portfolio_link_social($social_links)
{
    foreach ($social_links as $social_link) {
        echo '<a href="' . esc_attr(is_array($social_link['url']) ? implode('', $social_link['url']) : $social_link['url']) . '">' .  esc_attr(is_array($social_link['name']) ? implode('', $social_link['name']) : $social_link['name']) . '</a> ';
    }
}
function simplecharm_portfolio_link_social_frontend($social_links)
{
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
    foreach ($social_links as $social_link) {
        $icon = strtolower(is_array($social_link['name']) ? implode('', $social_link['name']) : $social_link['name']);
        if (in_array($icon, $allowed_icons)) {
            // dashicons
            echo '<a href="' .  esc_attr(is_array($social_link['url']) ? implode('', $social_link['url']) : $social_link['url']) . '"><span class="dashicons dashicons-' . $icon . '"></span></a> ';
        } else {
            //show link icon from dashicon
            echo '<a href="' .  esc_attr(is_array($social_link['url']) ? implode('', $social_link['url']) : $social_link['url']) . '"><span class="dashicons dashicons-admin-links"></span></a> ';
        }
    }
}

function simplecharm_portfolio_load_skills($all_skills)
{
    $skillsArray = [];
    if (is_array($all_skills) && !empty($all_skills)){
        foreach ($all_skills as $skills) {
            if(is_array($skills) && !empty($skills)){
                    foreach ($skills as $skill_data) {
                    $skill_data = implode('', $skill_data);
                    if (empty($skill_data)) {continue;}
                    array_push($skillsArray, $skill_data);
                }
            }
        }
    }
    return $skillsArray;
}

function simplecharm_portfolio_load_experience($experiences){
    $sanitized_experiences = [];
    foreach ($experiences as $experience) {
        $temp_experience = [];
        foreach($experience as $experience_data){
            if(is_array($experience_data)){
                $temp_experience[] = $experience_data;
            }
        }
        $sanitized_experiences[] = $temp_experience;
    }
    return $sanitized_experiences;
}
function simplecharm_portfolio_flatter_array($arr){
    return array_merge(...$arr);
}

function simplecharm_portfolio_experience_admin($experiences){
    $experience_institutions = [];
    foreach($experiences as $experience){
        $flatter_experience = simplecharm_portfolio_flatter_array($experience);
        if(!is_array($flatter_experience) || empty($flatter_experience)) continue;
        if(!array_key_exists('institution', $flatter_experience)) continue;
        $experience_institutions[] = $flatter_experience['institution'];
    }
    return $experience_institutions;
}
function simplecharm_portfolio_experience_responsibility_list($responsibilities){
    if(!strpos($responsibilities, '---')){
        $html = $responsibilities;
    }else{
                $responsibility_array = explode('---', $responsibilities);
                $html = '';
                $html .= '<ul class="list-disc">';
                foreach($responsibility_array as $responsibility){
                    if(empty($responsibility)) continue;
                    $html .= '<li>'.$responsibility.'</li>';
                }
                $html .= '</ul>';
    }
    return $html;
}