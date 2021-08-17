<?php
// 単純なスカラー値
const CONSTANT = 'Hello World';

echo CONSTANT;

// スカラー式
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // 出力は "cat"

// 配列の定数
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // 出力は "cat"
