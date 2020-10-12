<?php

return [
    'tb_composition' => 'Dil',
    'tb_properties' => 'Özellikler',
    'tb_seo' => 'Arama motoru optimizasyonu',
    'tb_seo_title' => 'Başlık',
    'tb_seo_description' => 'Açıklama',
    'tb_seo_description_notfound' => 'Bu sayfa için henüz açıklama eklenmemiş.',
    'tb_seo_link' => 'URL Bağlantı',
    'tb_seo_keywords' => 'Anahtar kelimeler',
    'tb_seo_keywords_notfound' => 'Anahtar kelime bulunamadı. İçeriğinizi analiz etmek için anahtar kelimeler eklemelisiniz.',
    'tb_seo_warning' => 'Anahtar kelimelerinizden bazıları içeriğinizde bulunamadı, bunu anahtar kelimelerinizi değiştirerek veya eksik anahtar kelimeleri içeriğe ekleyerek düzeltmeniz gerekir.',
    'tb_edit_alt' => 'Bu sayfayı CMS yönetiminde düzenle',
    'tb_visible_not_alt' => 'Bu sayfa ziyaretçiler için görünür değil',
    'tb_visible_alt' => 'Bu sayfa ziyaretçiler için görülebilir',
    'block_html_html_label' => 'HTML kodu',
    'block_html_no_content' => 'Henüz HTML kodu eklenmedi.',
    'block_module_name' => 'Modül',
    'block_module_modulename_label' => 'Modül adı',
    'block_module_modulecontroller_label' => 'Kontrolör Adı (kontrolör eki olmadan)',
    'block_module_moduleaction_label' => 'Eylem Adı (eylem ön eki olmadan)',
    'block_module_moduleactionargs_label' => 'Eylem Argümanları (json: {"var":"value"})',
    'block_module_no_module' => 'Henüz bir modül belirtilmemiş.',
    'block_module_integration' => 'Modül entegrasyonu',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Sadece yapılandırma dosyasında kayıtlı ön modüller listelenir.',
    'block_group_dev_elements' => 'Geliştirme',
    'block_group_layout_elements' => 'Düzen',
    'block_group_basic_elements' => 'Temeller',
    'block_group_project_elements' => 'Proje',
    'block_group_text_elements' => 'Metinler',
    'block_group_media_group' => 'Medya',
    
    // 1.0.0
    'block_module_strictrender' => 'Sıkı Çıktı',
    'block_module_strictrender_help' => 'Sıkı çıktı etkinleştirildiğinde, modül eylem ve denetleyici rotalarını dinlemeden sadece verilen rotayı çalıştıracaktır (modül, kontrolör, eylem, argümanlar).',
    'block_html_cfg_raw_label' => 'HTML\'i Yönetimde işle',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
