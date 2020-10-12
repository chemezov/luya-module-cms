<?php

return [
    'tb_composition' => 'Langue',
    'tb_properties' => 'Propriétés',
    'tb_seo' => 'Optimisation pour les moteurs de recherche (SEO)',
    'tb_seo_title' => 'Titre',
    'tb_seo_description' => 'Description',
    'tb_seo_description_notfound' => 'Aucune description n\'a été ajoutée à cette page !',
    'tb_seo_link' => 'Lien de l\'URL',
    'tb_seo_keywords' => 'Mots-clés',
    'tb_seo_keywords_notfound' => 'Aucun mot-clé trouvé ! Vous devez ajouter des mots-clés pour l\'analyse de votre contenu',
    'tb_seo_warning' => 'Certains des mots-clés sont introuvables dans le contenu, veuillez résoudre ce problème en changeant les mots-clés ou en ajoutant les mots-clés manquants au contenu',
    'tb_edit_alt' => 'Modifier cette page dans l\'interface du CMS',
    'tb_visible_not_alt' => 'Cette page n\'est PAS visible pour les visiteurs',
    'tb_visible_alt' => 'Cette page est visible pour les visiteurs',
    'block_html_html_label' => 'Code HTML',
    'block_html_no_content' => 'Aucun code HTML n\'a été ajouté',
    'block_module_name' => 'Module',
    'block_module_modulename_label' => 'Nom du module',
    'block_module_modulecontroller_label' => 'Nom du contrôleur (sans le suffixe)',
    'block_module_moduleaction_label' => 'Nom de l\'action (sans préfixe)',
    'block_module_moduleactionargs_label' => 'Paramètre(s) de l\'action (json: {"var": "value"})',
    'block_module_no_module' => 'Aucun module n\'a encore été spécifié',
    'block_module_integration' => 'Intégration du module',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Seuls les modules frontend enregistrés dans le fichier de configuration sont disponibles',
    'block_group_dev_elements' => 'Développement',
    'block_group_layout_elements' => 'Disposition',
    'block_group_basic_elements' => 'Bases',
    'block_group_project_elements' => 'Projet',
    'block_group_text_elements' => 'Textes',
    'block_group_media_group' => 'Médias',
    
    // 1.0.0
    'block_module_strictrender' => 'Rendu strict',
    'block_module_strictrender_help' => 'Lorsque le rendu strict est activé, le module exécutera uniquement les routes fournies (module, contrôleur, action, params) sans tenir compte des actions ni de l\'url des contrôleurs',
    'block_html_cfg_raw_label' => 'Afficher le HTML dans l\'admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
