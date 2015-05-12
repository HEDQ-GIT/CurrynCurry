<?php
return array(
    'title' => 'Promotions',
    'single' => 'Promotion',
    'model' => 'App\Promotion',
    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'title' => array(
            'title' => 'Title'
        ),
        'description' => array(
            'title' => 'Description'
        ),
        'expiredate' => array(
            'title' => 'Expire'
        ),
        'discount' => array(
            'title' => 'Discount'
        ),
        'imgUrl' => array(
            'title' => 'Image',
            'output' => '<img src="/img/upload/(:value)" height="100" />',
        ),
//        'link' => array(
//            'title' => 'Link',
//            'output' => '<a href="(:value)" target="_blank">(:value)</a>',
//        ),
//        'product_name' => array(
//            'title' => 'Product',
//            'relationship' => 'product',
//            'select' => '(:table).name',
//        )
    ),
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'textarea'
        ),
        'expiredate' => array(
            'title' => 'Expire',
            'type' => 'date',
            'date_format' => 'yy-mm-dd',
        ),
        'discount' => array(
            'title' => 'Discount',
            'type' => 'number',
//            'decimals' => 2, //optional, defaults to 0
        ),
        'imgUrl' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() . '/img/upload/',
//            'size_limit' => 2,
//            'sizes' => array(
//                array(1200, 1314, 'crop', 'public/uploads/products/resize/', 100),
//                array(452, 495, 'landscape', 'public/uploads/products/detail/', 100),
//            )
        )
    ),
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),
    'filters' => array(
        'id',
        'title' => array(
            'title' => 'Title',
        ),
        'description' => array(
            'title' => 'Description',
        ),
        'expiredate' => array(
            'title' => 'Expire',
            'type' => 'date',
        ),
        'discount' => array(
            'title' => 'Discount'
        ),
    ),
);