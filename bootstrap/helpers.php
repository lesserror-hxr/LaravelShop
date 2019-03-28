<?php

/*不同的页面使用不同的css样式*/
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}



function ngrok_url($routeName, $parameters = [])
{
    // 开发环境，并且配置了 NGROK_URL
    if(app()->environment('local') && $url = config('app.ngrok_url')) {
        // route() 函数第三个参数代表是否绝对路径
        return $url.route($routeName, $parameters, false);
    }

    return route($routeName, $parameters);
}

//金额计算函数   默认的精度为小数点后两位
function big_number($number, $scale = 2)
{
    return new \Moontoast\Math\BigNumber($number, $scale);
}

//随机返回图片地址
function get_rand_imgurl()
{
    $avatars = [
        'https://lccdn.phphub.org/uploads/avatars/1_1530614766.png?imageView2/1/w/200/h/200',
        'https://lccdn.phphub.org/uploads/avatars/5350_1481857380.jpg?imageView2/1/w/100/h/100',
        'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1531883452426&di=881f70c78b93bd91906bb224fe12b067&imgtype=0&src=http%3A%2F%2Fpic.hanhande.com%2Ffiles%2F140917%2F1285740_102303_5420.gif',
        'https://lccdn.phphub.org/uploads/avatars/20269_1512030996.jpeg?imageView2/1/w/200/h/200',
        'https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1468890659,201072083&fm=27&gp=0.jpg',
        'https://lccdn.phphub.org/uploads/avatars/19867_1515925556.png?imageView2/1/w/200/h/200'
    ];

    return $avatars[rand(0, count($avatars)-1)];
}

