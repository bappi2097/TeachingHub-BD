<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBooksController extends CBController {


    public function cbInit()
    {
        $this->setTable("books");
        $this->setPermalink("books");
        $this->setPageTitle("Books");

        $this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Category","categories_id",["table"=>"categories","value_option"=>"id","display_option"=>"title","sql_condition"=>""]);
		$this->addText("Title","title")->strLimit(150)->maxLength(255);
		$this->addText("Url","url")->strLimit(150)->maxLength(255);
		$this->addNumber("Position","position");
		$this->addRadio("Active","active")->options([1=>'Enable',0=>'Disable']);
		

    }
}
