<?php

// 设置响应头，指定返回的数据格式为 JSON
header('Content-Type: application/json');

// 获取请求参数
$id = $_GET['id'];

// 根据请求参数获取相应数据，这里假设数据是一个关联数组
$data = array(
    'id' => $id,
    'name' => 'John Doe',
    'email' => 'johndoe@example.com'
);

// 将数据转换为 JSON 格式并返回
echo json_encode($data);
