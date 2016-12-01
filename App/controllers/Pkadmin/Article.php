<?php

/**
 * ==========================================
 * Created by Pocket Knife Technology.
 * Author: ZhiHua_W <zhihua_wei@foxmail.com>
 * Date: 2016/12/1 00226
 * Time: 下午 2:21
 * Project: Pkadmin后台管理系统
 * Version: 1.0.0
 * Power: 后台文章管理控制器
 * ==========================================
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Pkadmin_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> library('pagination');
		$this -> load -> model('article_model', 'ac');
	}

	/**
	 * 文章管理首页
	 */
	public function index() {
		$data = $this -> data;
		$this -> load -> view('article.html', $data);
	}

}