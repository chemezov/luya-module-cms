<?php

return [
    'tb_composition' => 'Idioma',
    'tb_properties' => 'Propriedades',
    'tb_seo' => 'Otimização de mecanismo de pesquisa',
    'tb_seo_title' => 'Título',
    'tb_seo_description' => 'Descrição',
    'tb_seo_description_notfound' => 'Nenhuma descrição foi adicionada a esta página ainda!',
    'tb_seo_link' => 'Link da URL',
    'tb_seo_keywords' => 'Palavras-chaves',
    'tb_seo_keywords_notfound' => 'Nenhuma palavra-chave encontrada! Você deve adicionar palavras-chaves para analisar seu conteúdo.',
    'tb_seo_warning' => 'Algumas de suas palavras-chaves não foram encontradas em seu conteúdo. Para corrigir isto, você deve alterar suas palavras-chaves ou adicionar algum conteúdo para as palavras-chaves definidas',
    'tb_edit_alt' => 'Edite esta tabela na interface do CMS',
    'tb_visible_not_alt' => 'Esta página NÃO está visível para o visitante',
    'tb_visible_alt' => 'Esta página é visível para o seu visitante',
    'block_html_html_label' => 'Código HTML',
    'block_html_no_content' => 'Nenhum código HTML foi adicionado ainda.',
    'block_module_name' => 'Módulo',
    'block_module_modulename_label' => 'Nome do módulo',
    'block_module_modulecontroller_label' => 'Nome do controller (sem o sufixo controller)',
    'block_module_moduleaction_label' => 'Nome da Action (sem o prefixo action)',
    'block_module_moduleactionargs_label' => 'Argumentos do Action (json: {"var":"value"})',
    'block_module_no_module' => 'Nenhum módulo foi fornecido ainda.',
    'block_module_integration' => 'Integração do módulo',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Somente as configurações dos módulos de frontend registrados estão disponíveis.',
    'block_group_dev_elements' => 'Desenvolvimento',
    'block_group_layout_elements' => 'Layout',
    'block_group_basic_elements' => 'Noções básicas',
    'block_group_project_elements' => 'Projeto',
    'block_group_text_elements' => 'Textos',
    'block_group_media_group' => 'Mídia',
    
    // 1.0.0
    'block_module_strictrender' => 'Renderização Restrita',
    'block_module_strictrender_help' => 'Quando a renderização restrita é ativada, o módulo só executará a rota fornecida (módulo, controlador, ação, parâmetros) sem ouvir ações e rotas do controlador.',
    'block_html_cfg_raw_label' => 'Renderizar HTML no Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
