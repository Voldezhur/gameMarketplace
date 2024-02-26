<?php

/**
 * Функция __autoload для автоматического подключения классов
 */
function __autoload($class_name)  // Было __autoload() Выдавало ошибку __autoload() is no longer supported
{
    // Массив папок, в которых могут находиться необходимые классы
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
        //подключаются все компоненты из папки моделс и тд
    );

    // Проходим по массиву папок
    foreach ($array_paths as $path) {

        // Формируем имя и путь к файлу с классом
        $path = ROOT . $path . $class_name . '.php';

        // Если такой файл существует, подключаем его
        if (is_file($path)) {
            include_once $path;
        }
    }
}
