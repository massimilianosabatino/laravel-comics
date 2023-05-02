<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'comics' => config('comics'),
        'cards' => [
            [
                'name' => 'digital comics',
                'url' => asset('resources/img/buy-comics-digital-comics.png'),
                'target' => '#'
            ],
            [
                'name' => 'dc merchandise',
                'url' => asset('resources/img/buy-comics-merchandise.png'),
                'target' => '#'
            ],
            [
                'name' => 'subscription',
                'url' => asset('resources/img/buy-comics-subscriptions.png'),
                'target' => '#'
            ],
            [
                'name' => 'comic shop locator',
                'url' => asset('resources/img/buy-comics-shop-locator.png'),
                'target' => '#'
            ],
            [
                'name' => 'dc power visa',
                'url' => asset('resources/img/buy-dc-power-visa.svg'),
                'target' => '#'
            ],
        ],
        'menu' => [
                [
                    'section'=> 'DC COMICS',
                    'link'=> '#',
                    'target'=> '_self',
                    'linkList'=> [
                        [
                            'name'=> 'Characters',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Comics',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Movies',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'TV',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Games',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Videos',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'News',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                    ]
                ],
                [
                    'section'=> 'SHOP',
                    'link'=> '#',
                    'target'=> '_self',
                    'linkList'=> [
                        [
                            'name'=> 'Shop DC',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Shop DC Collectibles',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                    ]
                ],
                [
                    'section'=> 'DC',
                    'link'=> '#',
                    'target'=> '_self',
                    'linkList'=> [
                        [
                            'name'=> 'Terms Of Use',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Privacy policy (New)',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Ad Choices',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Advertising',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Jobs',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Subscriptions',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Talent Workshops',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'CPSC Certificates',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Ratings',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Shop Help',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'Contact Us',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                    ]
                ],
                [
                    'section'=> 'SITES',
                    'link'=> '#',
                    'target'=> '_self',
                    'linkList'=> [
                        [
                            'name'=> 'DC',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'MAD Magazine',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'DC Kids',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'DC Universe',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                        [
                            'name'=> 'DC Power Visa',
                            'link'=> '#',
                            'target'=> '_self'
                        ],
                    ]
                ],
            ]
    ];
    
    return view('home', $data);
})->name('home');
