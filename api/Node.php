<?php

class Node
{
    private int $id;
    private String $name;
    private String $description;
    private String $color;
    private Array $childrenNodes;

    /**
     * @param int $id
     * @param String $name
     * @param String $description
     * @param String $color
     * @param array $childrenNodes
     */
    public function __construct(int $id, string $name, string $description, string $color, array $childrenNodes)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->color = $color;
        $this->childrenNodes = $childrenNodes;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return String
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param String $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return array
     */
    public function getChildrenNodes(): array
    {
        return $this->childrenNodes;
    }

    /**
     * @param array $childrenNodes
     */
    public function setChildrenNodes(array $childrenNodes): void
    {
        $this->childrenNodes = $childrenNodes;
    }

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


}