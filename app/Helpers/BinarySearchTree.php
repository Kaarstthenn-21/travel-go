<?php

namespace App\Helpers;

class BinarySearchTree
{
    public $root = null;
    private $compareFunction;

    public function __construct($compareFunction)
    {
        $this->compareFunction = $compareFunction;
    }

    public function insert($value)
    {
        $this->root = $this->insertRec($this->root, $value);
    }

    private function insertRec($root, $value)
    {
        if ($root === null) {
            $root = new TreeNode($value);
            return $root;
        }

        if (call_user_func($this->compareFunction, $value, $root->value) < 0) {
            $root->left = $this->insertRec($root->left, $value);
        } else {
            $root->right = $this->insertRec($root->right, $value);
        }

        return $root;
    }

    public function getSortedData()
    {
        $result = [];
        $this->inOrderRec($this->root, $result);
        return $result;
    }

    private function inOrderRec($root, &$result)
    {
        if ($root !== null) {
            $this->inOrderRec($root->left, $result);
            $result[] = $root->value;
            $this->inOrderRec($root->right, $result);
        }
    }
}

class TreeNode
{
    public $value;
    public $left;
    public $right;

    public function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}
