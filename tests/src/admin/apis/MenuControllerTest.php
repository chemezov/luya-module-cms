<?php

namespace cmstests\src\admin\apis;

use cmstests\WebModelTestCase;
use luya\admin\models\User;
use luya\cms\admin\apis\MenuController;
use luya\cms\models\Nav;
use luya\testsuite\traits\CmsDatabaseTableTrait;

class MenuControllerTest extends WebModelTestCase
{
    use CmsDatabaseTableTrait;
    
    public function afterSetup()
    {
        parent::afterSetup();
    
        $this->createAdminLangFixture([
            1 => [
                'id' => 1,
                'short_code' => 'en',
                'is_default' => 1,
                'is_deleted' => 0,
            ]
        ]);
        $this->createCmsWebsiteFixture([
            1 => [
                'id' => 1,
                'name' => 'default',
                'host' => '',
                'aliases' => '',
                'is_default' => 1,
                'is_active' => 1,
                'is_deleted' => 0,
            ]
        ]);
        $this->createCmsNavContainerFixture([
            'container1' => [
                'id' => 99,
                'name' => 'container',
                'alias' => 'container',
                'website_id' => 1,
                'is_deleted' => 0,
            ],
        ]);
        $this->createCmsNavFixture([
            'nav1' => [
                'id' => 1,
                'nav_container_id' => 99,
                'parent_nav_id' => 0,
                'is_deleted' => 0,
                'is_draft' => 0,
            ],
            'nav2' => [
                'id' => 2,
                'nav_container_id' => 99,
                'parent_nav_id' => 0,
                'is_deleted' => 0,
                'is_draft' => 1,
            ]
        ]);
        $this->createCmsNavItemFixture([
            'item1' => [
                'id' => 1,
                'nav_id' => 1,
                'lang_id' => 1,
                'alias' => 'foobar',
            ],
            'item2' => [
                'id' => 2,
                'nav_id' => 2,
                'lang_id' => 1,
                'alias' => 'nav is draft',
                'title' => 'nav is draft',
            ]
        ]);
        $this->createAdminAuthTable();
        $this->createAdminUserLoginFixture();
        $this->createAdminUserFixture([
            1  => [
                'id' => 1,
                'firstname' => 'Foo',
                'lastname' => 'Bar',
                'email' => 'foo@example.com',
                'is_deleted' => false,
                'is_api_user' => false,
            ]
        ]);
    
        $this->createAdminGroupFixture(1);
        $this->createAdminUserGroupTable();
        $this->createAdminGroupAuthTable();
    }
    
    public function testActionDataMenu()
    {
        $ctrl = new MenuController('id', $this->app);
        
        \Yii::$app->adminuser->identity = User::findOne(1);
        $menu = $ctrl->actionDataMenu();
    
        $this->assertCount(1, $menu['items']);
        $this->assertEquals(1, $menu['items'][0]['id']);
    
        $this->assertCount(1, $menu['drafts']);
        $this->assertEquals('nav is draft', $menu['drafts'][0]['title']);
    
        $this->assertCount(1, $menu['containers']);
        $this->assertEquals('container', $menu['containers'][99]['name']);
    
        $this->assertCount(1, $menu['websites']);
        $this->assertEquals('default', $menu['websites'][0]['name']);
    
        $this->assertCount(0, $menu['hiddenCats']);
    }
}