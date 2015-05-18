<?php
return array(
    'title' => 'Dishes',
    'single' => 'Dish',
    'model' => 'App\Dish',
    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'name' => array(
            'title' => 'Name'
        ),
        'price' => array(
            'title' => 'Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'imgUrl' => array(
            'title' => 'Image',
            'output' => '<img src="/img/(:value)" height="100" />',
        ),
//        'tags' => array(
//            'title' => 'Tags',
//            'type' => 'relationship',
//            'name_field' => 'name',
//
////            'relationship'=> 'tags',
////            'select' => "(:table).tags",
//        )
    ),
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'price' => array(
            'title' => 'Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'imgUrl' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'keep',
            'location' => public_path() . '/img/',
//            'size_limit' => 2,
//            'sizes' => array(
//                array(1200, 1314, 'crop', 'public/uploads/products/resize/', 100),
//                array(452, 495, 'landscape', 'public/uploads/products/detail/', 100),
//            )
        ),
        'tags' => array(
            'title' => 'Tags',
            'type' => 'relationship',
            'name_field' => 'name',
        )
    ),
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),
    'filters' => array(
        'id',
        'name' => array(
            'title' => 'Name',
        ),
        'price' => array(
            'title' => 'Price',
            'type' => 'number',
            'symbol' => 'S$', //optional, defaults to ''
            'decimals' => 2
        ),
        'tags' => array(
            'title' => 'Tags',
            'type' => 'relationship',
            'name_field' => 'name',
        )
    ),
);