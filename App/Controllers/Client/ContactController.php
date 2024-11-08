<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Pages\Contact\Contacts;
use App\Views\Client\Layouts\Header;

class ContactController
{
    // hiển thị trang Contact
    public static function contact()
    {
        Header::render();
        Contacts::render();
        Footer::render();
    }
}
