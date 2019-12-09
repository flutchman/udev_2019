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
        $this->leafDesign = $leafDesign;
        $this->trunkDesign = $trunkDesign;
        $this->size = $size;
    }

    /**
     * Draw leaf then trunk
     * Create here the public function that can be called
     */
    public function drawTree(): void
    {
        $this->drawLeaf();
        $this->drawTrunk();
    }

    /**
     * Create here the part that draw the leaf
     */
    private function drawLeaf(): void
    {
        for ($i = 1; $i < $this->size; $i++) {
            echo str_repeat(" ", $this->size - $i);
            for ($j = 0; $j < $i; $j++) {
                echo $this->leafDesign;
            }
            echo str_repeat($this->leafDesign, $i - 1);
            echo "\n";
        }
    }

    /**
     * Create here the part that draw the trunk
     */
    private function drawTrunk(): void
    {
        $trunk = $this->size / 3;
        for ($i = 0; $i < 3; $i++) {
            echo str_repeat(" ", ($this->size - $trunk));
            echo str_repeat($this->trunkDesign, $this->size - $trunk);
            echo "\n";
        }
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

$line = readline("How much this tree has to be ? ");
$tree = new ChristmasTree($line);

/*************************************/
/* Display here the Tree !           */
/*************************************/

echo "\n";
$tree->drawTree();
echo "\n";
