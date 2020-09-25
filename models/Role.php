<?php
/**
 * Role Class
 */
class Role 
{
    private $id;
    private $name;
    private $status_id;
    
    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function getAll()
    {
        try {
            $strSql = $strSql = "SELECT r.*, s.name as status FROM roles r INNER JOIN  statuses s  ON s.id=r.statuses_id ORDER BY r.id ASC";
			$query = $this->pdo->select($strSql);;
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function newRole($data)
    {
        try {
            
            $this->pdo->insert('roles', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }
     public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM roles WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editRole($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('roles', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteRole($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('roles', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}
