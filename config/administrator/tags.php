<?php
return array(
    'title' => 'Tags',
    'single' => 'Tag',
    'model' => 'App\Tag',
    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'name' => array(
            'title' => 'Name'
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
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
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
        )
    ),
);