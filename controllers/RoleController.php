<?php

/**
 * Class RoleController
 */

require 'models/Role.php';
require 'models/Status.php';

class RoleController
{
    private $roleModel;

    private $status;

    public function __construct()
    {
        $this->roleModel = new Role;
        $this->status = new Status;
    }

    public function index()
    {
    	$roles = $this->roleModel->getAll();
    	require 'views/layout.php';
    	require 'views/role/list.php';
    }

    public function add()
    {
        $statuses = $this->status->getAll();
        require 'views/layout.php';
        require 'views/role/new.php';
    }

    public function save()
    {
        $this->roleModel->newRole($_REQUEST);
        header('Location: ?controller=role');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $role = $this->roleModel->getById($id);

            $statuses = $this->status->getAll();
            require 'views/layout.php';
            require 'views/role/edit.php';
        } else {
            echo 'Error, Se requiere el id del Rol';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->roleModel->editRole($_POST);
            header('Location: ?controller=role');
        } else {
            echo 'Error intentando actualizar un role';            
        }
    }

    public function delete()
    {
        $this->roleModel->deleteRole($_REQUEST);
        header('Location: ?controller=role');
    }
}