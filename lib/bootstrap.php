<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

const SITE_ROOT = __DIR__ . '/..';
const SITE_VERSION = '1';

mb_internal_encoding('UTF-8');
setlocale(LC_ALL, 'uk_UA.UTF-8', 'uk_UA', 'C.UTF-8');

/** Адреси мовних версій сайту. */
const LANG_URLS = ['uk' => '/', 'en' => '/en/'];

require_once __DIR__ . '/Models.php';
require_once __DIR__ . '/helpers.php';
