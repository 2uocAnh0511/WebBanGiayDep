<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Pages\about\About;
use App\Views\Client\Layouts\Header;

class AboutController
{
    // hiển thị trang Contact
    public static function about()
    {
        Header::render();
        About::render();
        Footer::render();
    }
}
