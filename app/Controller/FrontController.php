<?php
class FrontController extends AppController
{
	var $name = 'Front';
    public $components = array('Cookie', 'Session', 'Email', 'Paginator');
    public $helpers = array('Html', 'Form', 'Session', 'Time');

    public function home(){
    	//echo "home page";exit;

    	$this->loadmodel('News');
        $this->loadmodel('NewsCategory');

    	$latest_news_gallery_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1)), 'limit' => 3, 'order' => array('id' => 'desc')));
        foreach ($latest_news_gallery_data as $latest_news_key => $latest_news_data)
        {
            $latest_news_cats = explode(',', $latest_news_data['News']['categories']);
            $latest_news_cat = $latest_news_cats[0];
            $latest_newscate_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>$latest_news_cat)));
            $latest_news_gallery_data[$latest_news_key]['News']['cat_id'] = $latest_newscate_data['NewsCategory']['id'];
            $latest_news_gallery_data[$latest_news_key]['News']['cat_name'] = $latest_newscate_data['NewsCategory']['name'];
            $latest_news_gallery_data[$latest_news_key]['News']['cat_slug'] = $latest_newscate_data['NewsCategory']['slug'];
        }
    	$this->set('latest_news_gallery_data', $latest_news_gallery_data);

    	$latest_news_4th_data = $this->News->find('first', array('conditions' => array('status IN'=> array(1)), 'limit' => 1, 'page' => 4,  'order' => array('id' => 'desc')));
        $latest_news_4th_cats = explode(',', $latest_news_4th_data['News']['categories']);
        $latest_news_4th_cat = $latest_news_4th_cats[0];
        $latest_newscate_4th_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>$latest_news_4th_cat)));
        $latest_news_4th_data['News']['cat_id'] = $latest_newscate_4th_data['NewsCategory']['id'];
        $latest_news_4th_data['News']['cat_name'] = $latest_newscate_4th_data['NewsCategory']['name'];
        $latest_news_4th_data['News']['cat_slug'] = $latest_newscate_4th_data['NewsCategory']['slug'];
    	$this->set('latest_news_4th_data', $latest_news_4th_data);

    	$latest_news_5th_data = $this->News->find('first', array('conditions' => array('status IN'=> array(1)), 'limit' => 1, 'page' => 5,  'order' => array('id' => 'desc')));
        $latest_news_5th_cats = explode(',', $latest_news_5th_data['News']['categories']);
        $latest_news_5th_cat = $latest_news_5th_cats[0];
        $latest_newscate_5th_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>$latest_news_4th_cat)));
        $latest_news_5th_data['News']['cat_id'] = $latest_newscate_5th_data['NewsCategory']['id'];
        $latest_news_5th_data['News']['cat_name'] = $latest_newscate_5th_data['NewsCategory']['name'];
        $latest_news_5th_data['News']['cat_slug'] = $latest_newscate_5th_data['NewsCategory']['slug'];
    	$this->set('latest_news_5th_data', $latest_news_5th_data);

    	$latest_newzealand_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'1\',categories)'), 'limit' => 7, 'order' => array('id' => 'desc')));
        $latest_newscate_newzealand_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>1)));
        foreach ($latest_newzealand_homepage_data as $latest_newzealand_key => $latest_newzealand_data)
        {
            $latest_newzealand_homepage_data[$latest_newzealand_key]['News']['cat_id'] = $latest_newscate_newzealand_data['NewsCategory']['id'];
            $latest_newzealand_homepage_data[$latest_newzealand_key]['News']['cat_name'] = $latest_newscate_newzealand_data['NewsCategory']['name'];
            $latest_newzealand_homepage_data[$latest_newzealand_key]['News']['cat_slug'] = $latest_newscate_newzealand_data['NewsCategory']['slug'];
        }
    	$this->set('latest_newzealand_homepage_data', $latest_newzealand_homepage_data);

    	$latest_australlia_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'7\',categories)'), 'limit' => 10, 'order' => array('id' => 'desc')));
        $latest_newscate_australlia_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>7)));
        foreach ($latest_australlia_homepage_data as $latest_australlia_key => $latest_australlia_data)
        {
            $latest_australlia_homepage_data[$latest_australlia_key]['News']['cat_id'] = $latest_newscate_australlia_data['NewsCategory']['id'];
            $latest_australlia_homepage_data[$latest_australlia_key]['News']['cat_name'] = $latest_newscate_australlia_data['NewsCategory']['name'];
            $latest_australlia_homepage_data[$latest_australlia_key]['News']['cat_slug'] = $latest_newscate_australlia_data['NewsCategory']['slug'];
        }
    	$this->set('latest_australlia_homepage_data', $latest_australlia_homepage_data);

    	$latest_world_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'4\',categories)'), 'limit' => 6, 'order' => array('id' => 'desc')));
        $latest_newscate_world_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>4)));
        foreach ($latest_world_homepage_data as $latest_world_key => $latest_world_data)
        {
            $latest_world_homepage_data[$latest_world_key]['News']['cat_id'] = $latest_newscate_world_data['NewsCategory']['id'];
            $latest_world_homepage_data[$latest_world_key]['News']['cat_name'] = $latest_newscate_world_data['NewsCategory']['name'];
            $latest_world_homepage_data[$latest_world_key]['News']['cat_slug'] = $latest_newscate_world_data['NewsCategory']['slug'];
        }
    	$this->set('latest_world_homepage_data', $latest_world_homepage_data);

    	$latest_gujarat_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'3\',categories)'), 'limit' => 8, 'order' => array('id' => 'desc')));
        $latest_newscate_gujarat_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>3)));
        foreach ($latest_gujarat_homepage_data as $latest_gujarat_key => $latest_gujarat_data)
        {
            $latest_gujarat_homepage_data[$latest_gujarat_key]['News']['cat_id'] = $latest_newscate_gujarat_data['NewsCategory']['id'];
            $latest_gujarat_homepage_data[$latest_gujarat_key]['News']['cat_name'] = $latest_newscate_gujarat_data['NewsCategory']['name'];
            $latest_gujarat_homepage_data[$latest_gujarat_key]['News']['cat_slug'] = $latest_newscate_gujarat_data['NewsCategory']['slug'];
        }
    	$this->set('latest_gujarat_homepage_data', $latest_gujarat_homepage_data);


    	$latest_sports_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'5\',categories)'), 'limit' => 5, 'order' => array('id' => 'desc')));
        $latest_newscate_sports_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>5)));
        foreach ($latest_sports_homepage_data as $latest_sports_key => $latest_sports_data)
        {
            $latest_sports_homepage_data[$latest_sports_key]['News']['cat_id'] = $latest_newscate_sports_data['NewsCategory']['id'];
            $latest_sports_homepage_data[$latest_sports_key]['News']['cat_name'] = $latest_newscate_sports_data['NewsCategory']['name'];
            $latest_sports_homepage_data[$latest_sports_key]['News']['cat_slug'] = $latest_newscate_sports_data['NewsCategory']['slug'];
        }
    	$this->set('latest_sports_homepage_data', $latest_sports_homepage_data);

    	$latest_bollywood_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'6\',categories)'), 'limit' => 4, 'order' => array('id' => 'desc')));
        $latest_newscate_bollywood_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>6)));
        foreach ($latest_bollywood_homepage_data as $latest_bollywood_key => $latest_bollywood_data)
        {
            $latest_bollywood_homepage_data[$latest_bollywood_key]['News']['cat_id'] = $latest_newscate_bollywood_data['NewsCategory']['id'];
            $latest_bollywood_homepage_data[$latest_bollywood_key]['News']['cat_name'] = $latest_newscate_bollywood_data['NewsCategory']['name'];
            $latest_bollywood_homepage_data[$latest_bollywood_key]['News']['cat_slug'] = $latest_newscate_bollywood_data['NewsCategory']['slug'];
        }
    	$this->set('latest_bollywood_homepage_data', $latest_bollywood_homepage_data);

    	$latest_columns_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'8\',categories)'), 'limit' => 3, 'order' => array('id' => 'desc')));
    	$latest_newscate_columns_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>8)));
        foreach ($latest_columns_homepage_data as $latest_columns_key => $latest_columns_data)
        {
            $latest_columns_homepage_data[$latest_columns_key]['News']['cat_id'] = $latest_newscate_columns_data['NewsCategory']['id'];
            $latest_columns_homepage_data[$latest_columns_key]['News']['cat_name'] = $latest_newscate_columns_data['NewsCategory']['name'];
            $latest_columns_homepage_data[$latest_columns_key]['News']['cat_slug'] = $latest_newscate_columns_data['NewsCategory']['slug'];
        }
        $this->set('latest_columns_homepage_data', $latest_columns_homepage_data);

    	$latest_india_homepage_data = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'2\',categories)'), 'limit' => 7, 'order' => array('id' => 'desc')));
    	$latest_newscate_india_data = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>2)));
        foreach ($latest_india_homepage_data as $latest_india_key => $latest_india_data)
        {
            $latest_india_homepage_data[$latest_india_key]['News']['cat_id'] = $latest_newscate_india_data['NewsCategory']['id'];
            $latest_india_homepage_data[$latest_india_key]['News']['cat_name'] = $latest_newscate_india_data['NewsCategory']['name'];
            $latest_india_homepage_data[$latest_india_key]['News']['cat_slug'] = $latest_newscate_india_data['NewsCategory']['slug'];
        }
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

    public function news_detail($categoryslug, $slug)
    {
        //$this->loadmodel('Page');
        $get_news_data_by_slug = $this->News->find('first', array('conditions' => array('status IN'=> array(1), 'slug'=>$slug)));

        if(!empty($get_news_data_by_slug['News']['content']))
        {
            $news_page_id = $get_news_data_by_slug['News']['id'];
            $news_page_content = $get_news_data_by_slug['News']['content'];
            $news_page_title = $get_news_data_by_slug['News']['title'];
            $news_page_images = $get_news_data_by_slug['News']['images'];
            $news_page_videos = $get_news_data_by_slug['News']['videos'];
            $news_page_modified = $get_news_data_by_slug['News']['modified'];
        } else {
            $news_page_id = '';
            $news_page_content = '';
            $news_page_title = '';
            $news_page_images = '';
            $news_page_videos = '';
            $news_page_modified = '';
        }

        $this->loadmodel('NewsCategory');
        $get_newscat_data_by_slug = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'slug'=>$categoryslug)));

        if(!empty($get_newscat_data_by_slug['NewsCategory']['name']))
        {
            $category_title = $get_newscat_data_by_slug['NewsCategory']['name'];
            $category_id = $get_newscat_data_by_slug['NewsCategory']['id'];
        } else {
            $category_title = '';
            $category_id = '';
        }

        if(!empty($category_id)){
            $get_morenews_data_by_category = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'id NOT IN'=>array($news_page_id), 'FIND_IN_SET(\''.$category_id.'\',categories)'), 'limit' => 20, 'order' => array('id' => 'desc')));
            //$this->pre($get_morenews_data_by_category);exit;
            $morenews_catdata = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>$category_id)));
            foreach ($get_morenews_data_by_category as $morenews_key => $morenews_data)
            {
                $get_morenews_data_by_category[$morenews_key]['News']['cat_id'] = $morenews_catdata['NewsCategory']['id'];
                $get_morenews_data_by_category[$morenews_key]['News']['cat_name'] = $morenews_catdata['NewsCategory']['name'];
                $get_morenews_data_by_category[$morenews_key]['News']['cat_slug'] = $morenews_catdata['NewsCategory']['slug'];
            }

            $get_sidebarupr_data_by_category = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'3\',categories)'), 'limit' => 7, 'order' => array('id' => 'desc')));
            //$this->pre($get_morenews_data_by_category);exit;
            $sidebarupr_catdata = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>3)));
            foreach ($get_sidebarupr_data_by_category as $sidebarupr_key => $sidebarupr_data)
            {
                $get_sidebarupr_data_by_category[$sidebarupr_key]['News']['cat_id'] = $sidebarupr_catdata['NewsCategory']['id'];
                $get_sidebarupr_data_by_category[$sidebarupr_key]['News']['cat_name'] = $sidebarupr_catdata['NewsCategory']['name'];
                $get_sidebarupr_data_by_category[$sidebarupr_key]['News']['cat_slug'] = $sidebarupr_catdata['NewsCategory']['slug'];
            }

            $get_sidebardown_data_by_category = $this->News->find('all', array('conditions' => array('status IN'=> array(1), 'FIND_IN_SET(\'2\',categories)'), 'limit' => 7, 'order' => array('id' => 'desc')));
            //$this->pre($get_morenews_data_by_category);exit;
            $sidebardown_catdata = $this->NewsCategory->find('first', array('conditions' => array('status IN'=> array(1), 'id'=>2)));
            foreach ($get_sidebardown_data_by_category as $sidebardown_key => $sidebardown_data)
            {
                $get_sidebardown_data_by_category[$sidebardown_key]['News']['cat_id'] = $sidebardown_catdata['NewsCategory']['id'];
                $get_sidebardown_data_by_category[$sidebardown_key]['News']['cat_name'] = $sidebardown_catdata['NewsCategory']['name'];
                $get_sidebardown_data_by_category[$sidebardown_key]['News']['cat_slug'] = $sidebardown_catdata['NewsCategory']['slug'];
            }

        } else {
            $get_morenews_data_by_category = array();
            $get_sidebarupr_data_by_category = array();
            $get_sidebardown_data_by_category = array();
        }

        $this->set('category_title', $category_title);
        $this->set('news_page_title', $news_page_title);
        $this->set('news_page_images', $news_page_images);
        $this->set('news_page_videos', $news_page_videos);
        $this->set('news_page_content', $news_page_content);
        $this->set('news_page_modified', $news_page_modified);
        $this->set('news_page_morenews', $get_morenews_data_by_category);
        $this->set('news_page_sidebarupr', $get_sidebarupr_data_by_category);
        $this->set('news_page_sidebardown', $get_sidebardown_data_by_category);
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