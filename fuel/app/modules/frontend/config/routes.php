<?php
return array(
    '_root_' => 'frontend/index',
    'index' => 'frontend/index',
    'contact_form' => 'frontend/index/contact_form',

    'gioi-thieu' => 'frontend/introduction/gioithieu',
    'tu-van-moi-truong' => 'frontend/introduction/tuvanmoitruong',
    'van-chuyen-thu-gom' => 'frontend/introduction/vanchuyenthugom',
    'thu-mua-phe-lieu' => 'frontend/introduction/thumuaphelieu',

    'giay-phep' => 'frontend/introduction/giayphep',
    'ho-so-nang-luc' => 'frontend/introduction/hosonangluc',
    'van-ban-phap-quy' => 'frontend/introduction/vanbanphapquy',
    'tin-moi-truong' => 'frontend/introduction/tinmoitruong',
    'thieu-huy-hang-hoa' => 'frontend/introduction/thieuhuyhanghoa',

    'article/(:num)' => 'frontend/introduction/detail/$1',


    'news' => 'frontend/news/index',
    'sitemap' => 'frontend/index/sitemap',
    'robots' => 'frontend/index/robot',
    'news/(:num)/(:any)' => 'frontend/news/detail/$1',
);