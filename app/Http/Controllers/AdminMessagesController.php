<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMessagesController extends CBController {


    public function cbInit()
    {
        $this->setTable("messages");
        $this->setPermalink("messages");
        $this->setPageTitle("Messages");

        $this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->required(false)->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addText("Contact","contact")->required(false)->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addText("Subject","subject")->required(false)->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addTextArea("Message","message")->required(false)->showAdd(false)->showEdit(false)->strLimit(150);
		

    }
}
