<?php

return [
    'sylvainjule.matomo.url'    => 'http://tongji.vv3c.com',
    'sylvainjule.matomo.id'     => '6',
    'sylvainjule.matomo.token'  => 'aff87bbca6fdff04f9684195dc724dba',
    'd4l' => [
        'static_site_generator' => [
            'endpoint' => 'gss', # 设置为任何字符串，如 'generate-static-site'，以使用内置端点(使用蓝图字段时必需)
            'output_folder' => './html', # 您可以指定绝对路径或相对路径
            'preserve' => [], # 保留输出文件夹根级别的单个文件/文件夹(始终保留以"."开头的任何内容)
            'base_url' => '/', # 如果静态站点未安装到域名的根文件夹，请在此处进行相应更改
            'skip_media' => false, # 设为真，以跳过复制媒体文件，例如当他们已经在CDN上; 可以与'preserve' => ['media']结合使用
            'skip_templates' => [] # 忽略给定模板的页面(总是呈现主页)
        ]
    ],
    'debug' => true,
    'languages' => true,
    'panel' => [
        'language' => 'zh_CN'
    ]
];