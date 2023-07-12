<?php

namespace App\Breadcrumbs;

use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;

Breadcrumbs::for('frontend.home', fn (Trail $trail) =>
    $trail->push('Home', route('frontend.home'))
);

Breadcrumbs::for('frontend.contact', fn (Trail $trail) =>
    $trail->parent('frontend.home')->push('Contact Us', route('frontend.contact'))
);

Breadcrumbs::for('frontend.about', fn (Trail $trail) =>
    $trail->parent('frontend.home')->push('About Us', route('frontend.about'))
);

Breadcrumbs::for('frontend.requestdemo', fn (Trail $trail) =>
    $trail->parent('frontend.home')->push('Request A Demo', route('frontend.requestdemo'))
);
