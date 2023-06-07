<?php
    function get_node($conn, $id){
        $stmt = $conn->prepare("select id, name, description, color_hex from tree where id=$id");
        $stmt->execute();
        $obj = $stmt->fetchObject();
        $obj->children_nodes = [];
        $children_nodes = children_nodes($conn, $id);
        if(is_array($children_nodes))
            foreach (children_nodes($conn, $id) as $node){
                $obj->children_nodes[] = get_node($conn, $node['id']);
            }
        return $obj;
    }
    function root_element($conn){
        $stmt = $conn->prepare("select * from tree where parent_id is null");
        $stmt->execute();
        return $stmt->fetchObject();
    }
    function children_nodes($conn, $id){
        $stmt = $conn->prepare("select * from tree where parent_id=$id");
        $stmt->execute();
        return $stmt->fetchAll();
    }

