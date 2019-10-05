<?php
function getCategoryImageUrl($name){
    $cat_args = array(
        'hide_empty' => false,
        'name'  => $name
    );
    $product_cat = get_terms( 'product_cat', $cat_args );
    $id = $product_cat[0]->term_id;
    $img = wp_get_attachment_url(get_term_meta($id, 'thumbnail_id', true ));
    return $img;
}

function sideBar_menu(){
    $menu_items = wp_get_nav_menu_items('Каталог в сайдбаре');

    $menu_arr = [];

    foreach ($menu_items as $key => $menu_item){
        if($menu_item->menu_item_parent === '0'){
            $menu_arr[$menu_item->ID]['id'] = $menu_item->ID;
            $menu_arr[$menu_item->ID]['title'] = $menu_item->title;
            $menu_arr[$menu_item->ID]['url'] = $menu_item->url;
        }else{
            $parent = (int)$menu_item->menu_item_parent;
            if(isset($menu_arr[$parent])){
                $menu_arr[$parent]['sub'][$menu_item->ID]['id'] = $menu_item->ID;
                $menu_arr[$parent]['sub'][$menu_item->ID]['title'] = $menu_item->title;
                $menu_arr[$parent]['sub'][$menu_item->ID]['url'] = $menu_item->url;
            }else{
                foreach ($menu_arr as $subKey => $item){
                    if(isset($item['sub'][$parent])){
                        $menu_arr[$subKey]['sub'][$parent]['sub_2'][$menu_item->ID]['id'] = $menu_item->ID;
                        $menu_arr[$subKey]['sub'][$parent]['sub_2'][$menu_item->ID]['title'] = $menu_item->title;
                        $menu_arr[$subKey]['sub'][$parent]['sub_2'][$menu_item->ID]['url'] = $menu_item->url;
                    }
                }
            }
        }
    }

    $arrowUrl = get_template_directory_uri().'/img/icons/white-left-triangle.svg';
    echo '<ul class="sidebar_menu--list">';
    foreach ($menu_arr as $key => $menuItem){
        echo '<li>'.'<a href="'.$menuItem['url'].'">'.$menuItem['title'].'</a>';
        if(isset($menuItem['sub'])){
            echo '<img class="sub-catalog_arrow" src="'.$arrowUrl.'"/>';
            echo '<div class="sub-catalog">';
            echo '<ul>';
            foreach ($menuItem['sub'] as $menuSubItem){
                echo '<li>'.'<a href="'.$menuSubItem['url'].'">'.$menuSubItem['title'].'</a>'.'</li>';
                if(isset($menuSubItem['sub_2'])){
                    foreach ($menuSubItem['sub_2'] as $sub_2){
                        echo '<li class="sub_2">'.'<a href="'.$sub_2['url'].'">'.$sub_2['title'].'</a>'.'</li>';
                    }
                }
            }
            echo '</ul>';
            echo '<a href="'.$menuItem['url'].'" class="img_1" style="background-image: url('.getCategoryImageUrl($menuItem['title']).')">'.'</a>';
            echo '</div>';
        }
        echo '</li>';

    }
    echo '</ul>';
}
?>