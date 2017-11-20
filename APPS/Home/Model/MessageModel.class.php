<?php
	namespace Home\Model;
	use Think\Model;
	use Think\Model\RelationModel;
	class messageModel extends RelationModel{
		protected $_link=array(
			'user'=>array(
				'mapping_type'=>self::BELONGS_TO,
				'class_name'=>'user',
				'foreign_key'=>'uid',
				'mapping_name'=>'user',
				'mapping_fields'=>'username',//关联查找的只是表中的username字段
				'as_fields'=>'username',//直接将username映射为同一字段
			),

		);
	}

?>