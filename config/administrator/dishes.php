<?php
return array(
    'title' => 'Dishes',
    'single' => 'Dish',
    'model' => 'App\Dish',
    'columns' => array(
        'menu_index' => array(
            'title' => 'Order'
        ),
        'name' => array(
            'title' => 'Name'
        ),
        'min_price' => array(
            'title' => 'Min Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'max_price' => array(
            'title' => 'Max Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'isrange' => array(
            'title' => 'Price Range',
            'select' => "IF((:table).isrange, 'Yes', 'No')"
        ),
        'imgUrl' => array(
            'title' => 'Image',
            'output' => '<img src="/img/(:value)" height="100" />',
        ),
        'isspicy' => array(
            'title' => 'Spicy',
            'select' => "IF((:table).isspicy, 'Yes', 'No')"
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'textarea',
            'limit' => 100, //optional, defaults to no limit
        )
    ),
    'edit_fields' => array(
        'menu_index' => array(
            'title' => 'Order',
            'type' => 'number',
        ),
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'min_price' => array(
            'title' => 'Min Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'max_price' => array(
            'title' => 'Max Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'isrange' => array(
            'title' => 'Price Range',
            'type' => 'bool',
        ),
        'imgUrl' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'keep',
            'location' => public_path() . '/img/',
        ),
        'isspicy' => array(
            'title' => 'Spicy',
            'type' => 'bool',
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'textarea',
            'limit' => 100, //optional, defaults to no limit
        )
    ),
    'sort' => array(
        'field' => 'menu_index',
        'direction' => 'asc',
    ),
    'filters' => array(
//        'menu-index' => array(
//            'title' => 'Order',
//            'type' => 'number',
//        ),
        'name' => array(
            'title' => 'Name',
        ),
    ),
);