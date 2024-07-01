<?php

namespace App\Helpers;

class MinHeap
{
    private $heap;

    public function __construct()
    {
        $this->heap = [];
    }

    public function insert($value)
    {
        $this->heap[] = $value;
        $this->heapifyUp();
    }

    public function getSortedData()
    {
        $sorted = [];
        while (count($this->heap) > 0) {
            $sorted[] = $this->extractMin();
        }
        return $sorted;
    }

    private function heapifyUp()
    {
        $index = count($this->heap) - 1;
        while ($index > 0) {
            $parentIndex = (int)(($index - 1) / 2);
            if ($this->heap[$index]->precio >= $this->heap[$parentIndex]->precio) {
                break;
            }
            $this->swap($index, $parentIndex);
            $index = $parentIndex;
        }
    }

    private function extractMin()
    {
        if (count($this->heap) === 0) {
            return null;
        }
        $min = $this->heap[0];
        $this->heap[0] = $this->heap[count($this->heap) - 1];
        array_pop($this->heap);
        $this->heapifyDown(0);
        return $min;
    }

    private function heapifyDown($index)
    {
        $leftChildIndex = 2 * $index + 1;
        $rightChildIndex = 2 * $index + 2;
        $smallest = $index;

        if ($leftChildIndex < count($this->heap) && $this->heap[$leftChildIndex]->precio < $this->heap[$smallest]->precio) {
            $smallest = $leftChildIndex;
        }

        if ($rightChildIndex < count($this->heap) && $this->heap[$rightChildIndex]->precio < $this->heap[$smallest]->precio) {
            $smallest = $rightChildIndex;
        }

        if ($smallest != $index) {
            $this->swap($index, $smallest);
            $this->heapifyDown($smallest);
        }
    }

    private function swap($index1, $index2)
    {
        $temp = $this->heap[$index1];
        $this->heap[$index1] = $this->heap[$index2];
        $this->heap[$index2] = $temp;
    }
}
