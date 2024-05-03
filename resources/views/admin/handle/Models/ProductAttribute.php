<?php

class ProductAttribute
{
    private int $id;
    private int $attributeId;
    private int $productId;
    private int $percent;
    private int $quantity;

    /**
     * @param int $id
     * @param int $attributeId
     * @param int $productId
     * @param int $percent
     * @param int $quantity
     */
    public function __construct(int $id, int $attributeId, int $productId, int $percent, int $quantity)
    {
        $this -> id = $id;
        $this -> attributeId = $attributeId;
        $this -> productId = $productId;
        $this -> percent = $percent;
        $this -> quantity = $quantity;
    }

    public function getId(): int
    {
        return $this -> id;
    }

    public function setId(int $id): void
    {
        $this -> id = $id;
    }

    public function getAttributeId(): int
    {
        return $this -> attributeId;
    }

    public function setAttributeId(int $attributeId): void
    {
        $this -> attributeId = $attributeId;
    }

    public function getProductId(): int
    {
        return $this -> productId;
    }

    public function setProductId(int $productId): void
    {
        $this -> productId = $productId;
    }

    public function getPercent(): int
    {
        return $this -> percent;
    }

    public function setPercent(int $percent): void
    {
        $this -> percent = $percent;
    }

    public function getQuantity(): int
    {
        return $this -> quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this -> quantity = $quantity;
    }


}

?>