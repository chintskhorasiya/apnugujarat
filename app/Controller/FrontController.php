<?php
class FrontController extends AppController
{
	var $name = 'Front';
    public $components = array('Cookie', 'Session', 'Email', 'Paginator');
    public $helpers = array('Html', 'Form', 'Session', 'Time');

    public function home(){
    	//echo "home page";exit;

    	$this->loadmodel('News');

    	$latest_news_gallery_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1)), 'limit' => 3, 'order' => array('id' => 'desc')));
    	//$this->pre($latest_news_gallery_data);exit;
    	$this->set('latest_news_gallery_data', $latest_news_gallery_data);

    	$latest_news_4th_data = $this->News->find('first', array('conditions' => array('status IN'=> array(1)), 'limit' => 1, 'page' => 4,  'order' => array('id' => 'desc')));
    	$this->set('latest_news_4th_data', $latest_news_4th_data);

    	$latest_news_5th_data = $this->News->find('first', array('conditions' => array('status IN'=> array(1)), 'limit' => 1, 'page' => 5,  'order' => array('id' => 'desc')));
    	$this->set('latest_news_5th_data', $latest_news_5th_data);

    	$latest_newzealand_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'1\',categories)'), 'limit' => 7, 'order' => array('id' => 'desc')));
    	$this->set('latest_newzealand_homepage_data', $latest_newzealand_homepage_data);

    	$latest_australlia_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'7\',categories)'), 'limit' => 10, 'order' => array('id' => 'desc')));
    	$this->set('latest_australlia_homepage_data', $latest_australlia_homepage_data);

    	$latest_world_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'4\',categories)'), 'limit' => 6, 'order' => array('id' => 'desc')));
    	$this->set('latest_world_homepage_data', $latest_world_homepage_data);

    	$latest_gujarat_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'3\',categories)'), 'limit' => 8, 'order' => array('id' => 'desc')));
    	$this->set('latest_gujarat_homepage_data', $latest_gujarat_homepage_data);


    	$latest_sports_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'5\',categories)'), 'limit' => 5, 'order' => array('id' => 'desc')));
    	$this->set('latest_sports_homepage_data', $latest_sports_homepage_data);

    	$latest_bollywood_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'6\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_bollywood_homepage_data', $latest_bollywood_homepage_data);

    	$latest_columns_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'8\',categories)'), 'limit' => 3, 'order' => array('id' => 'desc')));
    	$this->set('latest_columns_homepage_data', $latest_columns_homepage_data);

    	$latest_india_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'2\',categories)'), 'limit' => 7, 'order' => array('id' => 'desc')));
    	$this->set('latest_india_homepage_data', $latest_india_homepage_data);

    	// footer queries

    	/*$latest_newzealand_footer_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'1\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_newzealand_footer_data', $latest_newzealand_footer_data);

    	$latest_sports_footer_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'5\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_sports_footer_data', $latest_sports_footer_data);

    	$latest_world_footer_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'4\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_world_footer_data', $latest_world_footer_data);

    	$latest_gujarat_footer_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'3\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_gujarat_footer_data', $latest_gujarat_footer_data);

    	$latest_bollywood_footer_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'6\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_bollywood_footer_data', $latest_bollywood_footer_data);

    	$latest_india_footer_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'2\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
    	$this->set('latest_india_footer_data', $latest_india_footer_data);*/

    }

    public function news_detail($category, $slug)
    {

    }

    public function page_display($slug)
    {
        $this->loadmodel('Page');
        $get_page_data_by_slug = $this->Page->find('first', array('conditions' => array('status IN'=> array(1), 'slug'=>$slug)));

        if(!empty($get_page_data_by_slug['Page']['content']))
        {
            $cms_page_content = $get_page_data_by_slug['Page']['content'];
            $cms_page_title = $get_page_data_by_slug['Page']['title'];
        } else {
            $cms_page_content = '';
            $cms_page_title = '';
        }

        $this->set('cms_page_title', $cms_page_title);
        $this->set('cms_page_content', $cms_page_content);
    }

}