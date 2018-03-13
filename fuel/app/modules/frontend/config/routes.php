<?php
return array(
    '_root_' => 'frontend/index',
    'index' => 'frontend/index',

    'gioi-thieu' => 'frontend/introduction/gioithieu',
    'tu-van-moi-truong' => 'frontend/introduction/tuvanmoitruong',
    'van-chuyen-thu-gom' => 'frontend/introduction/vanchuyenthugom',

    'news' => 'frontend/news/index',
    'news/(:num)' => 'frontend/news/detail/$1',
);