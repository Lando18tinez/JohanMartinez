<?php

require 'models/Status.php';
require 'models/TypeStatus.php';
class StatusController
{
    private $StatusModel;
    private $TypeStatus;

    public function __construct()
    {
        $this ->StatusModel = new Status;
        $this ->TypeStatus = new TypeStatus;
    }

    public function index()
    {
    	require 'views/layout.php';
        $Statuses= $this ->StatusModel -> getAll();
        require 'views/Status/list.php';
    }


   public function add()
    {
        $TypeStatuses = $this->TypeStatus->getAll();
        require 'views/layout.php';
        require 'views/Status/new.php';
    }

    public function save()
    {
        $this->StatusModel->newStatus($_REQUEST);
        header('Location: ?controller=Status');
    }
    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $status = $this->StatusModel->getById($id);
            
            $TypeStatuses = $this->TypeStatus->getAll();

            require 'views/layout.php';
            require 'views/Status/edit.php';
        } else {
            echo 'Error, Se requiere el id del Estado';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->StatusModel->editStatus($_POST);
            header('Location: ?controller=Status');
        } else {
            echo 'Error intentando actualizar un Estado';            
        }
    }

    public function delete()
    {
        $this->StatusModel->deleteStatus($_REQUEST);
        header('Location: ?controller=status');
    }
}