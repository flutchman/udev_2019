<?php

/**
 * Class ChristmasTree
 */
Class ChristmasTree
{
    /** @var string */
    private $leafDesign;

    /** @var string */
    private $trunkDesign;

    /** @var int */
    private $size;

    /**
     * ChristmasTree constructor.
     * @param int $size
     * @param string $leafDesign
     * @param string $trunkDesign
     */
    public function __construct($size = 10, $leafDesign = "*", $trunkDesign = "*")
    {
    }

    /**
     * Draw leaf then trunk
     * Create here the public function that can be called
     */
    public function drawTree(): void
    {
    }

    /**
     * Create here the part that draw the leaf
     */
    private function drawLeaf(): void
    {
    }

    /**
     * Create here the part that draw the trunk
     */
    private function drawTrunk(): void
    {
    }

    /**
     * @return string
     */
    public function getLeafDesign(): string
    {
        return $this->leafDesign;
    }

    /**
     * @param string $leafDesign
     */
    public function setLeafDesign($leafDesign)
    {
        $this->leafDesign = $leafDesign;
    }

    /**
     * @return string
     */
    public function getTrunkDesign(): string
    {
        return $this->trunkDesign;
    }

    /**
     * @param string $trunkDesign
     */
    public function setTrunkDesign($trunkDesign)
    {
        $this->trunkDesign = $trunkDesign;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}

/*************************************/
/* Set here its size;                */
/*************************************/


/*************************************/
/* Display here the Tree !           */
/*************************************/

echo "\n";
