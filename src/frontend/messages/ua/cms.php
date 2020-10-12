<?php

return [
    'tb_composition' => 'Мова',
    'tb_properties' => 'Властивості',
    'tb_seo' => 'Оптимізація для пошукових двигунів',
    'tb_seo_title' => 'Заголовок',
    'tb_seo_description' => 'Опис',
    'tb_seo_description_notfound' => 'На цю сторінку ще недодано жодного опису',
    'tb_seo_link' => 'URL посилання',
    'tb_seo_keywords' => 'Ключові слова',
    'tb_seo_keywords_notfound' => 'Ключові слова не знайдені! Ви повинні додати ключові слова для того, щоб проаналізувати контент.',
    'tb_seo_warning' => 'Деякі з ваших ключових слів не знайдені в змісті, ви повинні виправити це шляхом зміни ключових слів або додайте контент для певних ключових слів',
    'tb_edit_alt' => 'Відредагуйте цю сторінку в CMS интерфейсі',
    'tb_visible_not_alt' => 'Ця сторінка не відображаеться для відвідувачів',
    'tb_visible_alt' => 'Ця сторінка відображаеться для відвідувачів',
    'block_html_html_label' => 'HTML код',
    'block_html_no_content' => 'HTML код поки що не добавлений.',
    'block_module_name' => 'Модуль',
    'block_module_modulename_label' => 'Назва модуля',
    'block_module_modulecontroller_label' => 'Назва контролера (без суфікса контролера)',
    'block_module_moduleaction_label' => 'Назва дії(екшена) (без префікса дії)',
    'block_module_moduleactionargs_label' => 'Аргументи дії (json: {"var":"value"})',
    'block_module_no_module' => 'Жодний модуль ще не доданий.',
    'block_module_integration' => 'Інтеграція модуля',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Тільки в конфігурації доступні зареєстровані модулі зовнішнього інтерфейсу.',
    'block_group_dev_elements' => 'Розробка',
    'block_group_layout_elements' => 'Шаблон',
    'block_group_basic_elements' => 'Основи',
    'block_group_project_elements' => 'Проект',
    'block_group_text_elements' => 'Тексти',
    'block_group_media_group' => 'Медіа',
    
    // 1.0.0
    'block_module_strictrender' => 'Суворе відтворення',
    'block_module_strictrender_help' => 'Коли активовано суворе відтворення, модуль запускатиме лише передбачений маршрут (модуль, контролер, дія, параметри) без прослуховування дій та маршрутів контролера.',
    'block_html_cfg_raw_label' => 'Відтворення HTML в Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
