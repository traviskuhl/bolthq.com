<?php

namespace bolthq;
use \b;

class site extends \bolt\browser\controller\request {

    public static $routes = [
        ['route' => '/']
    ];

    public function get() {
        return $this->view(__DIR__."/page.hbr");
    }

}


// b::route('install', function(){
//     b::location("https://raw.github.com/traviskuhl/bolt/3.0/build/install");
// });

// b::route('download', function(){
//     b::location('https://github.com/traviskuhl/bolt/raw/3.0/build/latest/bolt-latest.tar.gz');
// });

// b::route('download/phar', function(){
//     b::location('https://github.com/traviskuhl/bolt/raw/3.0/build/latest/bolt.phar');
// });

// b::route('github', function(){
//     b::location("https://github.com/traviskuhl/bolt/");
// });

// b::route('docs', function(){
//     b::location("https://github.com/traviskuhl/bolt/wiki");
// });