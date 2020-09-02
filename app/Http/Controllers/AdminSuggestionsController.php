<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminSuggestionsController extends CBController {


    public function cbInit()
    {
        $this->setTable("suggestions");
        $this->setPermalink("suggestions");
        $this->setPageTitle("Suggestions");

        $this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Category","categories_id",["table"=>"categories","value_option"=>"id","display_option"=>"title","sql_condition"=>""]);
		$this->addText("Title","title")->required(false)->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Body","body")->required(false)->strLimit(200);
		

    }
}
