<?php 
/**
 * 系统信息
 * 进销存系统汇总或者操作信息提示等功能
 * @author 管理员
 * @version 1.0
 * @date 2012-11-27
 *
 */
class IndexAction extends CommonAction {
	public function __construct(){
		$this->db_name='demo';
		parent::__construct();
	}

	public function _before_index(){
		//$this->db_name='数据表名';
	}
	public function _before_add(){
		//$this->db_name='数据表名';
	}
	public function _before_edit(){
		//$this->db_name='数据表名';
	}
	public function _before_show(){
		//$this->db_name='数据表名';
	}
	public function _before_explort(){
		//$this->db_name='数据表名';
	}
	public function _before_delete(){
		//$this->db_name='数据表名';
	}
	/**
	 * 导入数据
	 * 对数据表进行批量导入
	 * @author 管理员
	 * @date  2012-11-30
	 */
    public function _man_import($info){
    	return $info;
    }
}