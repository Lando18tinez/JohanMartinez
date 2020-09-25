<?php
/**
 * Category Class
 */
class Category 
{
    private $id;
    private $name;
    private $statuses_id;
    
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
            $strSql = "SELECT c.*, s.name as status FROM categories c INNER JOIN  statuses s ON s.id=c.statuses_id";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function newCategory($data)
    {
        try {
            
            $this->pdo->insert('categories', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }
     public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM categories WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editCategory($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('categories', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteCategory($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('categories', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}
