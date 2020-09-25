<?php

require 'models/TypeStatus.php';

class TypeStatusController
{
    private $TypestatusModel;

    public function __construct()
    {
        $this ->TypestatusModel = new TypeStatus;
    }

    public function index()
    {
        require 'views/layout.php';
        $TypeStatuses= $this ->TypestatusModel -> getAll();
        require 'views/TypeStatus/list.php';
    }


   public function add()
    {
        require 'views/layout.php';
        require 'views/TypeStatus/new.php';
    }

    public function save()
    {
        $this->TypestatusModel->newTypeStatus($_REQUEST);
        header('Location: ?controller=TypeStatus');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $TypeStatus = $this->TypestatusModel->getById($id);
            require 'views/layout.php';
            require 'views/Typestatus/edit.php';
        } else {
            echo 'Error, Se requiere el id del tipo de Estado';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->TypestatusModel->editTypeStatus($_POST);
            header('Location: ?controller=Typestatus');
        } else {
            echo 'Error intentando actualizar un tipo de Estado';            
        }
    }

    public function delete()
    {
        $this->TypestatusModel->deleteTypeStatus($_REQUEST);
        header('Location: ?controller=TypeStatus');
    }
}