<?php

namespace bolthq;
use \b;

class site extends \bolt\browser\controller\request {

    public static $routes = [
        ['route' => '/']
    ];

    public function get() {
        return $this->view("page.hbr");
    }

}


// b::route('*', function(){
//     return b::render(array(
//         'file' => __DIR__.'/layout.template.php'
//     ));
// });

// b::route('install', function(){
//     b::location("https://raw.github.com/traviskuhl/bolt/3.0/build/install");
// });

// b::route('download', function(){
//     b::location('https://github.com/traviskuhl/bolt/raw/3.0/build/bolt-latest.tar.gz');
// });