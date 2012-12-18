<?php
class FormModel extends Model{
	protected  $_validate = array(
		array('title','require','标题不能为空'),	
		);
	protected  $_auto = array(
		array('create_time','time',1,'function'),
		);
}