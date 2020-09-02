<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminCategoriesController extends CBController {


    public function cbInit()
    {
        $this->setTable("categories");
        $this->setPermalink("categories");
        $this->setPageTitle("Categories");

        $this->addDatetime("Created At","created_at")->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Class","class_id",["table"=>"classes","value_option"=>"id","display_option"=>"title","sql_condition"=>""]);
		$this->addText("Title","title")->strLimit(150)->maxLength(255);
		$this->addText("Slug","slug")->strLimit(150)->maxLength(255);
		$this->addImage("Image","image")->required(false)->showIndex(false)->encrypt(true);
		$this->addNumber("Position","position");
		$this->addRadio("Active","active")->options([1=>'Enable',0=>'Disable']);
		$this->addTextArea("Subtitle","subtitle")->required(false);
		

    }
}
