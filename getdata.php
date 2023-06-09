<?php

// 设置响应头，指定返回的数据格式为 JSON
header('Content-Type: application/json');

// 获取请求参数
$id = $_GET['id'];


$data = [
    "cardId"=> $id,
    "name"=> "张三",
    "title"=> "总经理",
    "company"=> "杭州XX有限公司",
    "mobile"=> "13322334232",
    "address"=> "杭州网商路188号A楼18层1802室",
    "weixin"=> "wx3322",
    "head"=> "head.png",
    "background"=> "background.png",
    "newsList" =>
    [
        [
            "newsId"=> 1,
            "newsTitle"=> "新闻1",
            "newsPicture"=> "news1.png"
        ],
        [
            "newsId"=> 2,
            "newsTitle"=> "新闻2",
            "newsPicture"=> "news2.png"
        ],
        [
            "newsId"=> 3,
            "newsTitle"=> "新闻3",
            "newsPicture"=> "news3.png"
        ]
    ]
];

// 将数据转换为 JSON 格式并返回
echo json_encode($data);
?>
