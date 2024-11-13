<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Abouts\About;
use App\Views\Client\Pages\Variants\Variant;

class VariantController
{
    // hiển thị danh sách
    public static function variant()
    {
        Header::render();
        Variant::render();
        Footer::render();
    }
}
