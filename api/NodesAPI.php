<?php
    require_once 'Database.php';
    include("database_config.php");
    function get_node($id){
        $conn = Database::getInstance()->getConnection();
        $stmt = $conn->prepare("select id, name, description, color_hex from tree where id=$id");
        $stmt->execute();
        $obj = $stmt->fetchObject();
        $obj->children_nodes = [];
        $children_nodes = children_nodes($id);
        if(is_array($children_nodes))
            foreach ($children_nodes as $node){
                $obj->children_nodes[] = get_node($node['id']);
            }
        return $obj;
    }
    function root_element(){
        $conn = Database::getInstance()->getConnection();
        $stmt = $conn->prepare("select * from tree where parent_id is null");
        $stmt->execute();
        return $stmt->fetchObject();
    }
    function children_nodes($id){
        $conn = Database::getInstance()->getConnection();
        $stmt = $conn->prepare("select * from tree where parent_id=$id");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function fetch_tree():String{
        $allTree = get_node(root_element()->id);
        return json_encode($allTree, JSON_PRETTY_PRINT);
    }

