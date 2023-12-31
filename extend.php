<?php

/*
 * This file is part of deteh/online-guests.
 *
 * Copyright (c) deteh.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace deteh\OnlineGuests;

use Flarum\Api\Serializer\ForumSerializer;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),

    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\ApiSerializer(ForumSerializer::class))
        ->attributes(GuestUserCount::class),

    (new Extend\Settings())
        ->default('deteh-online-guests.online-duration', 5)
        ->default('deteh-online-guests.cache-duration', 60)
];
