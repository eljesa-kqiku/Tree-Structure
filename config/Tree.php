<?php

class Tree
{
    private int $id;
    private string $name;
    private string $description;
    private string $bg_color;
    private string $text_color;
    private string $parent_id;
    private string $left_sibling_id;
    private string $right_sibling_id;
    private Array $children_nodes;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getBgColor(): string
    {
        return $this->bg_color;
    }

    /**
     * @param string $bg_color
     */
    public function setBgColor(string $bg_color): void
    {
        $this->bg_color = $bg_color;
    }

    /**
     * @return string
     */
    public function getTextColor(): string
    {
        return $this->text_color;
    }

    /**
     * @param string $text_color
     */
    public function setTextColor(string $text_color): void
    {
        $this->text_color = $text_color;
    }

    /**
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     */
    public function setParentId(string $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return string
     */
    public function getLeftSiblingId(): string
    {
        return $this->left_sibling_id;
    }

    /**
     * @param string $left_sibling_id
     */
    public function setLeftSiblingId(string $left_sibling_id): void
    {
        $this->left_sibling_id = $left_sibling_id;
    }

    /**
     * @return string
     */
    public function getRightSiblingId(): string
    {
        return $this->right_sibling_id;
    }

    /**
     * @param string $right_sibling_id
     */
    public function setRightSiblingId(string $right_sibling_id): void
    {
        $this->right_sibling_id = $right_sibling_id;
    }
}