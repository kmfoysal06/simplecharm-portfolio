<?php
/**
 * Custom template tags for this theme.
 * @package SimpleCharm Portfolio
 * @since 1.0
 */

/**
 * Returns An Array Of Social Links In Easy To Iterate Format.
 * For Using The Complex Social Links Array That Stored In Database In A Complex Array Format.
 * @param array $social_links
 * @return array
 */
function simplecharm_portfolio_load_social($social_links)
{
        if (isset($social_links) && is_array($social_links) && !empty($social_links)) {
        $social_links_array = [];
        foreach ($social_links as $link) {
            if (isset($link['name']) && isset($link['url'])) {
                $name = $link['name'];
                $url  = $link['url'];
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

/**
 * Display social links as normal html link in portfolio menu page.
 * @param array $social_links
 * @return void
 */
function simplecharm_portfolio_link_social($social_links)
{
    foreach ($social_links as $social_link) {
        echo '<a href="' . esc_attr(is_array($social_link['url']) ? implode('', $social_link['url']) : $social_link['url']) . '">' .  esc_attr(is_array($social_link['name']) ? implode('', $social_link['name']) : $social_link['name']) . '</a> ';
    }
}

/**
 * Display Social Links Using Dasicons In Frontend If They Exists.
 * @param array $social_links
 * @return void
 */
function simplecharm_portfolio_link_social_frontend($social_links)
{
    $allowed_icons = array(
        'twitter',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        'pinterest',
        'podio',
        'google',
        'reddit',
        'wordpress',
        'twitter',
        'rss',
        'whatsapp',
        'xing',
        'twitch',
    );
    foreach ($social_links as $social_link) {
        $icon = strtolower(is_array($social_link['name']) ? implode('', $social_link['name']) : $social_link['name']);
        if (in_array($icon, $allowed_icons)) {
            echo '<a class="simplecharm-portfolio-button-hover" href="' .  esc_attr(is_array($social_link['url']) ? implode('', $social_link['url']) : $social_link['url']) . '"><span class="dashicons dashicons-' . $icon . '"></span></a> ';
        } else {
            echo '<a class="simplecharm-portfolio-button-hover" href="' .  esc_attr(is_array($social_link['url']) ? implode('', $social_link['url']) : $social_link['url']) . '"><span class="dashicons dashicons-admin-links"></span></a> ';
        }
    }
}

/**
 * Returns An Array Of Skills In Easy To Iterate Format.
 * For Using The Complex Skills Array That Stored In Database In A Complex Array Format.
 * @param array $all_skills
 * @return array
 */
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

/**
 * Returns An Array Of Experience In Easy To Iterate Format.
 * For Using The Complex Experience Array That Stored In Database In A Complex Array Format.
 * @param array $experiences
 * @return array
 */
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

/**
 * Flatterns An Array Using Array Merge.
 * @param array $arr
 * @return array
 */
function simplecharm_portfolio_flattern_array($arr){
    return array_merge(...$arr);
}

/**
 * Display Experiences Institution in Option Page.
 * @param array $experiences
 * @return array
 */
function simplecharm_portfolio_experience_admin($experiences){
    $experience_institutions = [];
    foreach($experiences as $experience){
        $flattern_experience = simplecharm_portfolio_flattern_array($experience);
        if(!is_array($flattern_experience) || empty($flattern_experience)) continue;
        if(!array_key_exists('institution', $flattern_experience)) continue;
        $experience_institutions[] = $flattern_experience['institution'];
    }
    return $experience_institutions;
}

/**
 * Load The Responsibility Field as List if Responisbilities are Separated with Three Hiphen (---).
 * @param string $responsibilities
 * @return string
 */
function simplecharm_portfolio_experience_responsibility_list($responsibilities){
    $html = '';
            $responsibility_array = explode('---', $responsibilities);
            $html .= '<ul class="list-disc">';
            foreach($responsibility_array as $responsibility){
                if(empty($responsibility)) continue;
                $html .= '<li>'.$responsibility.'</li>';
            }
            $html .= '</ul>';
    return $html;
}

/**
 * Splits Project Tags Separated by Comma and Returns As List.
 * @param string $tags
 * @return string
 */

function simplecharm_portfolio_split_tags($tags){
    $html = '';
            $tags_array = (!empty($tags) && strpos(", ", $tags) && explode(', ', $tags) !== null) ? explode(', ', $tags) : [] ;
            $html .= '<div class="work-tags grid lg:grid-cols-4  md:grid-cols-3 sm:grid-cols-2 gap-3">';
            foreach($tags_array as $single_tag){
                if(empty($single_tag)) continue;
                $html .= '<div class="w-full badge badge-neutral p-4" tabindex="0">'.$single_tag.'</div>';
            }
            $html .= '</div>';
    return $html;
}

/**
 * Returns An Array Of Project List In Easy To Iterate Format.
 * For Using The Complex Projects List Array That Stored In Database In A Complex Array Format.
 * @param array $works
 * @return array
 */
function simplecharm_portfolio_load_works($works){
    foreach($works as $work_index => &$work){
        foreach($work as $work_data_index => $work_data){
                if(!is_array($work_data) || empty($work_data)) continue;
            foreach($work_data as $key => $single_work_data){
                // echo var_dump($single_work_data);
                $work[$key] = $single_work_data;
            }
        if(is_array($work_data)) unset($work[$work_data_index]);
        }
    }
    return $works;
}

/**
 * Display All Project Title Institution in Option Page.
 * @param array $works
 * @return array
 */
function simplecharm_portfolio_works_admin($works){
    $works_array = [];
    foreach($works as $work){
        $works_array[] = $work['title'];
    }
    return $works_array;
}