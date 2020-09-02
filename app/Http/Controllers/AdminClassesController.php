<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminClassesController extends CBController {


    public function cbInit()
    {
        $this->setTable("classes");
        $this->setPermalink("classes");
        $this->setPageTitle("Classes");

        $this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addText("Title","title")->strLimit(150)->maxLength(255);
		$this->addText("Filter","filter")->strLimit(150)->maxLength(255);
		$this->addNumber("Position","position");
		

    }
}
