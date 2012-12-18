<?php
class FormAction extends Action{
	public function Insert(){
		$Form = D('Form');
		if($Form->create()){
			$result = $Form->add();//如果你的主键是自增类型的话，add方法的返回值就是该主键的值。不是自增主键的话，返回值表示插入数据的个数。
			if ($result) {
				$this->success('操作成功');
			}else {
				$this->error('写入错误');
			}
		}else{
			$this->error($Form->getError());
		}
	}
}