<?php

declare(strict_types=1);

require_once __DIR__ . '/Settings.php';

// Получаем единственный экземпляр настроек
$settings = Settings::getInstance();

// Сохраняем числовое, строковое и логическое значение
$settings->items_per_page = 20; // число
$settings->site_name = 'MySite'; // строка
$settings->debug_mode = true; // логическое

// Выводим сохранённые значения
echo 'items_per_page: ' . $settings->items_per_page . '<br>';
echo 'site_name: ' . $settings->site_name      . '<br>';
echo 'debug_mode: ' . ($settings->debug_mode ? 'true' : 'false') . '<br>';