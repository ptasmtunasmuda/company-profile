<?php

namespace App\Enums;

enum SettingType: string
{
    case TEXT = 'text';
    case TEXTAREA = 'textarea';
    case EMAIL = 'email';
    case URL = 'url';
    case IMAGE = 'image';
    case NUMBER = 'number';
    case BOOLEAN = 'boolean';
    case JSON = 'json';
    case PASSWORD = 'password';
    case COLOR = 'color';
    case DATE = 'date';
    case TIME = 'time';
    case DATETIME = 'datetime';
}
