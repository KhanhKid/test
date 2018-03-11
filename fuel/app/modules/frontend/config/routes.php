<?php
return array(
    '_root_' => 'frontend/index',
    'index' => 'frontend/index',

    'news' => 'frontend/news/index',
    'news/(:num)' => 'frontend/news/detail/$1',
);