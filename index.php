﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="js/testmobile.js" type="text/javascript"></script>
    <script type="text/javascript">uaredirect("http://m.siemensgabor.com")</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>嘉宝橱柜官方网站</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="windows-Target" content="_top">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=8)">
    <meta name="author" content="嘉宝橱柜网络部 4535292@qq.com" />
    <meta name="Keywords" content="定制衣柜,定制家具,全屋家具定制,家具,橱柜,嘉宝橱柜" />
    <meta name="Description" content="定制衣柜品牌嘉宝橱柜官方全屋定制家具网上商城,定制衣柜及其配套定制家具直销网,为客户提供家具、衣柜、整体衣柜、榻榻米、书柜等全屋家具定制,及五大免费家具定制测量" />
    <link href="images/favicon.ico" rel="short icon"/>
    <link href="css/resetCss.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="IEcss/common.css" rel="stylesheet"/>
    <link href="IEcss/IEindex.css" rel="stylesheet"/>
    <script type="text/javascript" src="IEjs/IEcommon.js"></script>
    <script type="text/javascript" src="IEjs/IEindex.js"></script>
    <script type="text/javascript"  src="js/common.js"></script>
    <script type="text/javascript"  src="js/index.js"></script>
</head>
<body>
<div class="header-topT">
    <div class="common-inner">
        <div class="welcome">
            <p>
                Hi,　

<?php
session_start();
// 判断 session 是否存在 避免 Notice 提示框
@$_SESSION['phone'] = empty(!$_SESSION['phone']) ? $_SESSION['phone'] : false;

if( $_SESSION['phone'] ){
    echo "<span> 尊贵的嘉宝会员:　</span><a href=\"/\" target=\"_blank\"> $_SESSION[phone] </a><span class=\"closelog\" style=\"text-decoration: underline;cursor:pointer;\"> 退出 </span>";
}else{
    echo "欢迎来到 嘉宝橱柜 !<a href=\"htmls/sign.php\" target=\"_blank\"> [会员登录/注册] </a>";
}
?>
            </p>
        </div>
        <script>
            $(function(){
                $('.closelog').on('click', function(){

                    $.ajax({
                        url: 'htmls/php/closelog.php',
                        type: 'post',
                        success: function(data){
                            window.location.href ="http://localhost/Jiabao0519/index.php";
                        }
                    })
                })
            })
        </script>
        <div class="right">
            <a href="htmls/dingzhi.html" target="_blank">帮助中心</a>|
            <a class="shoucang">收藏嘉宝</a>|
            <a href="#" class="guanzhu">关注嘉宝</a>|
            <span>客服电话:</span>
            <i>400-0188-608</i>
            <span></span>
            <a class="kefuTop" href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">售前客服</a>
            <a class="kefuTop" href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">售后客服</a>
        </div>
        <div class="weibo">
            <span>关闭</span>
        </div>
    </div>
</div>
<div class="header-top">
    <div class="common-inner">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.png" title="嘉宝官网"/>
            </a>
        </div>
        <div class="index-search">
            <div>产品</div>
            <form>
                <input type="text"/>
                <input type="button" value="搜索"/>
            </form>
            <p>
                <a href="htmls/products/mumen.html" target="_blank">木门</a>
                <a href="htmls/products/mumen.html" target="_blank">实木</a>
                <a href="htmls/products/yigui.html" target="_blank">多层</a>
                <a href="htmls/products/chugui.html" target="_blank">进口</a>
                <a href="htmls/products/chugui.html" target="_blank">欧式</a>
            </p>
        </div>
        <div class="index-lianjie">
            <a class="iconTM" href="https://jiabaochugui.tmall.com" target="_blank">天猫旗舰店</a>
            <a class="iconJD" href="http://mall.jd.com/index-656949.html" target="_blank">京东旗舰店</a>
            <a class="iconJD" href="http://mall.jd.com/index-672672.html" target="_blank">全屋定制店</a>
            <a class="iconTB" href="https://shop105792262.taobao.com" target="_blank">淘宝直营店</a>
            <a class="iconWX">
                微信公众号
                <i></i>
                <span></span>
            </a>
        </div>
    </div>
</div>
<div id="header-nav">
    <div class="common-inner">
        <div>
            <a href="../index.php">首页</a>
        </div>
        <div>
            <a href="#" class="all-lei downmenu">全部分类</a>
            <div id="menubox">
                <dl class="lei">
                    <dd>整体橱柜</dd>
                    <dd>
                        <a href="htmls/products/chugui.html">卧室</a>
                        <a href="htmls/products/chugui.html">书房</a>
                        <a href="htmls/products/chugui.html">客厅</a>
                    </dd>
                </dl>
                <dl class="lei">
                    <dd>整体衣柜</dd>
                    <dd>
                        <a href="htmls/products/yigui.html">卧室</a>
                        <a href="htmls/products/yigui.html">书房</a>
                        <a href="htmls/products/yigui.html">客厅</a>
                    </dd>
                </dl>
                <dl class="lei">
                    <dd>定制木门</dd>
                    <dd>
                        <a href="htmls/products/mumen.html">卧室</a>
                        <a href="htmls/products/mumen.html">书房</a>
                        <a href="htmls/products/mumen.html">客厅</a>
                    </dd>
                </dl>
                <dl class="lei">
                    <dd>全屋定制</dd>
                    <dd>
                        <a href="htmls/products/quanwu.html">卧室</a>
                        <a href="htmls/products/quanwu.html">书房</a>
                        <a href="htmls/products/quanwu.html">客厅</a>
                        <a href="htmls/products/quanwu.html">卧室</a>
                    </dd>
                </dl>
            </div>
        </div>
        <div>
            <a href="htmls/products/chugui.html" class="  list-down">整体橱柜</a>
        </div>
        <div>
            <a href="htmls/products/yigui.html" class="  list-down">整体衣柜</a>
        </div>
        <div>
            <a href="htmls/products/mumen.html">嘉宝木门</a>
        </div>
        <div>
            <a href="htmls/products/quanwu.html">全屋定制</a>
        </div>
        <div>
            <a href="htmls/dingzhi.html" target="_blank">定制流程</a>
        </div>
        <div>
            <a href="htmls/join.html" target="_blank">加盟嘉宝</a>
        </div>
        <div>
            <a href="htmls/about.html" target="_blank">关于嘉宝</a>
        </div>
        <div>
            <a href="#" class="order">
                马上预约定制
                <i></i>
            </a>
        </div>
    </div>
</div>
<div class="banner">
    <div class="bannerImg">
        <a class="showA" href="htmls/zhuanti/zhuanti04.html" target="_blank" title="咨询嘉宝客服">
            <img src="htmls/zhuanti/images/0528zhuanti04_01.jpg"/>
        </a>
        <a href="htmls/zhuanti/zhuanti01.html" target="_blank" title="咨询嘉宝客服">
            <img src="htmls/zhuanti/images/zhuanti1B_02.jpg" style="margin-top:-80px;"/>
        </a>
        <a href="htmls/zhuanti/zhuanti02.html" target="_blank" title="咨询嘉宝客服">
            <img src="htmls/zhuanti/images/zhuanti02_01.jpg" style="margin-top:-80px;"/>
        </a>
        <a href="htmls/zhuanti/zhuanti03.html" target="_blank" title="咨询嘉宝客服">
            <img src="htmls/zhuanti/images/zhuanti3_01.jpg" style="margin-top:-190px;"/>
        </a>
	<a  href="htmls/join.html" target="_blank" title="咨询嘉宝客服">
            <img src="images/ban%20(1).jpg"/>
        </a>
        <a href="htmls/dingzhi.html" target="_blank" title="咨询嘉宝客服">
            <img src="images/ban%20(2).jpg"/>
        </a>
    </div>
    <ul class="bannerBtn">
        <li class="banSelLi">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
    </ul>
</div>

<div class="main2">
    <div class="m-title">
        <div class="dot"></div>
        <div class="titleName">专题·活动</div>
        <div class="title2nd">热门专题活动先看</div>
        <div class="more"><a href="#">查看更多 》</a></div>
        <div class="line0"></div>
    </div>
    <div class="main2Inner flimages">
        <ul>
            <li>
                <a class="images" href="htmls/zhuanti/zhuanti01.html" title="嘉宝橱柜定制" target="_blank">
                    <img src="images/zhuanti1.jpg"/>
                </a>
            </li>
            <li>
                <a class="images" href="htmls/zhuanti/zhuanti02.html" title="嘉宝橱柜定制" target="_blank">
                    <img src="images/banmain1.jpg"/>
                </a>
            </li>
            <li>
                <a class="images" href="htmls/zhuanti/zhuanti03.html" title="嘉宝橱柜定制" target="_blank">
                    <img src="images/zhuanti3.png"/>
                </a>
            </li>
            <li>
                <a class="images" href="htmls/zhuanti/zhuanti04.html" title="嘉宝橱柜定制" target="_blank">
                    <img src="images/0528zhuanti04index.jpg"/>
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="main1">
    <div class="common-inner">
        <div class="m-title">
            <div class="dot"></div>
            <div class="titleName">定制流程</div>
            <div class="title2nd">预交订金，即可享受豪礼大派送</div>
            <div class="more"><a href="htmls/dingzhi.html">开始定制 》</a></div>
            <div class="line0"></div>
        </div>
        <div class="mainInner main1Inner">
            <ul>
                <li>
                    <a href="htmls/dingzhi.html">
                        <p>预约量尺</p>
                        <div class="title3nd">Reservation scale</div>
                    </a>
                </li>
                <li>
                    <a href="htmls/dingzhi.html" class="main02">
                        <p>上门测量</p>
                        <div class="title3nd">Site measurement</div>
                    </a>
                </li>
                <li>
                    <a href="htmls/dingzhi.html" class="main03">
                        <p>专业设计</p>
                        <div class="title3nd">Professional design</div>
                    </a>
                </li>
                <li>
                    <a href="htmls/dingzhi.html" class="main04">
                        <p>配送安装</p>
                        <div class="title3nd">Distribution installation</div>
                    </a>
                </li>
                <li>
                    <a href="htmls/dingzhi.html" class="main05">
                        <p>终身维护</p>
                        <div class="title3nd">Lifelong maintenance</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="main" class="common-inner">
    <div class="main-line">
        <a class="dingzhiTo">
            <img src="images/mainline01_03.jpg" style="cursor:pointer">
        </a>
    </div>
    <div class="main2">
        <div class="m-title">
            <div class="dot"></div>
            <div class="titleName">整体衣柜</div>
            <div class="title2nd">个性定制，我的衣柜我做主</div>
            <div class="more"><a href="htmls/products/yigui.html">查看更多 》</a></div>
        </div>
        <div class="mainInner main2Inner ">
            <div class="mainbox-image ">
                <div class="mainbox-l flmain">
                    <a href="htmls/products/yigui.html">
                        <img src="images/indexyigui01_11.jpg"/>
                    </a>
                </div>
                <div class="mainbox-c flmain">
                    <a href="htmls/products/detail/yiguiDetail.html?ID=01">
                        <img src="images/main04_10.png"/>
                    </a>
                    <div class="noteName">阿尔卑斯</div>
                </div>
                <div class="mainbox-r">

                    <div class="mainbox-small flmain mainbox-small1">
                        <a href="htmls/products/detail/yiguiDetail.html?ID=05">
                            <img src="images/indexyigui02_15.jpg"/>
                        </a>
                        <div class="noteName">简爱布纹</div>
                    </div>
                    <div class="mainbox-small flmain">
                        <a href="htmls/products/detail/yiguiDetail.html?ID=02">
                            <img src="images/indexyigui02_13.jpg"/>
                        </a>
                        <div class="noteName">白金汉宫</div>
                    </div>
                    <div class="mainbox-small flmain mainbox-small3">
                        <a href="htmls/products/detail/yiguiDetail.html?ID=02">
                            <img src="images/indexyigui02_23.jpg"/>
                        </a>
                        <div class="noteName">天使白衣帽间</div>
                    </div>
                    <div class="mainbox-small flmain mainbox-small4">
                        <a href="htmls/products/detail/yiguiDetail.html?ID=02">
                            <img src="images/indexyigui02_24.jpg"/>
                        </a>
                        <div class="noteName">白色描金衣帽间</div>
                    </div>
                </div>
                <div class="clearfloat"></div>
            </div>
        </div>
    </div>
    <div class="main2">
        <div class="m-title">
            <div class="dot"></div>
            <div class="titleName">整体橱柜</div>
            <div class="title2nd"></div>
            <div class="more"><a href="htmls/products/chugui.html">查看更多 》</a></div>
        </div>
        <div class="mainInner main2Inner">
            <div class="mainbox-image ">
                <div class="mainbox-l flmain">
                    <a href="htmls/products/chugui.html">
                        <img src="images/main01_03.png"/>
                    </a>
                </div>
                <div class="mainbox-c flmain">
                    <a href="htmls/products/detail/chuguiDetail.html?ID=05">
                        <img src="images/main03_05.png"/>
                    </a>
                    <div class="noteName">东方巴黎</div>
                </div>
                <div class="mainbox-r">

                    <div class="mainbox-small flmain  mainbox-small1">
                        <a href="htmls/products/detail/chuguiDetail.html?ID=08">
                            <img src="images/main6_03.png"/>
                        </a>
                        <div class="noteName">华尔兹</div>
                    </div>
                    <div class="mainbox-small flmain">
                        <a href="htmls/products/detail/chuguiDetail.html?ID=14">
                            <img src="images/main6_05.png"/>
                        </a>
                        <div class="noteName">岩山浮雪</div>
                    </div>
                    <div class="mainbox-small flmain mainbox-small3">
                        <a href="htmls/products/detail/chuguiDetail.html?ID=12">
                            <img src="images/main6_10.png"/>
                        </a>
                        <div class="noteName">特里斯特</div>
                    </div>
                    <div class="mainbox-small flmain  mainbox-small4">
                        <a href="htmls/products/detail/chuguiDetail.html?ID=06">
                            <img src="images/main6_13.png"/>
                        </a>
                        <div class="noteName">枫丹白露</div>
                    </div>
                </div>
                <div class="clearfloat"></div>
            </div>
        </div>
    </div>
    <div class="main-line">
        <a class="dingzhiTo">
            <img src="images/mainline_14.png"  style="cursor:pointer"/>
        </a>
    </div>
    <div class="main2">
        <div class="m-title">
            <div class="dot"></div>
            <div class="titleName">全房定制</div>
            <div class="title2nd">个性自我，享受生活...</div>
            <div class="more"><a href="htmls/products/quanwu.html">查看更多 》</a></div>
        </div>
        <div class="mainInner main2Inner ">
            <div class="mainbox-image ">
                <div class="mainbox-l flmain">
                    <a href="htmls/products/quanwu.html">
                        <img src="images/main02_09.png"/>
                    </a>
                </div>
                <div class="mainbox-c flmain">
                    <a href="htmls/products/detail/quanwuDetail.html?ID=02">
                        <img src="images/indexquwu_03.jpg"/>
                    </a>
                    <div class="noteName">白金汉宫系列</div>
                </div>
                <div class="mainbox-r">
                    <div class="mainbox-small flmain  mainbox-small1">
                        <a href="htmls/products/detail/quanwuDetail.html?ID=02">
                            <img src="images/main6_14.png"/>
                        </a>
                        <div class="noteName">白金汉宫系列</div>
                    </div>
                    <div class="mainbox-small flmain">
                        <a href="htmls/products/detail/quanwuDetail.html?ID=02">
                            <img src="images/indexquwu01_06.jpg"/>
                        </a>
                        <div class="noteName">白金汉宫系列</div>
                    </div>
                    <div class="mainbox-small flmain  mainbox-small3">
                        <a href="htmls/products/detail/quanwuDetail.html?ID=02">
                            <img src="images/main6_17.png"/>
                        </a>
                        <div class="noteName">白金汉宫系列</div>
                    </div>
                    <div class="mainbox-small flmain  mainbox-small4">
                        <a href="htmls/products/detail/quanwuDetail.html?ID=02">
                            <img src="images/main6_18.png"/>
                        </a>
                        <div class="noteName">白金汉宫系列</div>
                    </div>
                </div>
                <div class="clearfloat"></div>
            </div>
        </div>
    </div>
    <div class="main-line">
        <a class="dingzhiTo">
            <img src="images/mainline01_06.jpg" style="cursor:pointer"/>
        </a>
    </div>
    <div class="main3">
        <div class="m-title">
            <div class="dot"></div>
            <div class="titleName">精美案例</div>
            <div class="title2nd">专业团队，成就专业品质</div>
            <div class="more"><a href="#">查看更多 》</a></div>
        </div>
        <div class="mainInner main2Inner ">
            <div class="wrap">
                <ul>
                    <li class="p1"><img src="images/exple%20(1).jpg" title="嘉宝橱柜"/></li>
                    <li class="p2"><img src="images/exple%20(2).jpg" title="嘉宝橱柜"/></li>
                    <li class="p3"><img src="images/exple%20(3).jpg" title="嘉宝橱柜"/></li>
                    <li class="p4"><img src="images/exple%20(4).jpg" title="嘉宝橱柜"/></li>
                    <li class="p5"><img src="images/exple%20(5).jpg" title="嘉宝橱柜"/></li>
                    <li class="p6"><img src="images/exple%20(6).jpg" title="嘉宝橱柜"/></li>
                    <li class="p7"><img src="images/exple%20(7).jpg" title="嘉宝橱柜"/></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="box1 common-inner">
        <div class="ft-box">
            <a>
                新手指南
                <i></i>
            </a>
            <a href="htmls/about.html">关于嘉宝<i></i></a>
            <a href="htmls/join.html">加盟嘉宝</a>
            <a href="htmls/dingzhi.html" class="dingzhiTo">现在定制</a>
        </div>
        <div class="ft-box">
            <a>帮助中心<i></i></a>
            <a href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">售前咨询</a>
            <a href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">售后客服</a>
        </div>
        <div class="ft-box">
            <a>购物指南<i></i></a>
            <a href="#" class="dingzhiTo">0 元设计</a>
            <a href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK">订单查询</a>
            <a href="#">专题活动</a>
        </div>
        <div class="ft-box">
            <p>客服热线：<span>400-0188-608</span></p>
            <p>值班时间：7 * 24 Hours</p>
	    <p>售后电话 : 0731 - 88334455</p>
            <p>嘉宝给您最好的服务</p>
        </div>
        <div class="ft-box">
            <div class="erweima"></div>
            <p>嘉宝·微信公众号</p>
        </div>
        <div class="ft-box">
            <div class="erweima erweima2"></div>
            <p>嘉宝·手机官方网</p>
        </div>

    </div>
    <div class="box2 common-inner">
        <div class="bottomlogo"></div>
        <div class="bottomnote">
            <p>@2017 嘉宝橱柜 版权所有</p>
            <p>24小时免费咨询热线：400-0188-608</p>
            <p> 湘ICP备 12008428号 </p>
        </div>
        <div class="zhanlue">
            <i>战略合作：</i>
            <a href="http://www.siemens-home.bsh-group.cn" target="_blank"></a>
            <a href="http://www.fotile.com" target="_blank"></a>
            <a href="http://www.robam.com" target="_blank"></a>
            <a href="http://www.vatti.com.cn" target="_blank"></a>
            <a href="http://www.oulin.net/" target="_blank"></a>
            <a href="http://www.franke.com/us/en/ks.html" target="_blank"></a>
            <a href="http://www.putian.com/" target="_blank"></a>
            <a href="http://www.gabalu.com.cn/" target="_blank"></a>
            <a href="http://www.rinnai.com.cn/" target="_blank" class="lasthezuo"></a>
        </div>
    </div>
    <div class="box1 common-inner">
        <div>友情链接：</div>
        <a href="http://www.shzh.net/">上海装修网</a>
        <a href="http://www.328f.cn/">红木家具</a>
        <a href="http://www.bstzcs.com/">农村房屋设计图</a>
        <a href="http://www.whjzw.net/">武汉装修</a>
        <a href="http://www.shandongwang.cn/">山东网</a>
        <a href="https://www.sc.cc/">实创室内装饰</a>
        <a href="http://www.meilele.com/jiancai/">建材城</a>
        <a href="http://www.chinamenwang.com/">木门</a>
        <a href="http://www.to8to.com/yezhu/">装修知识</a>
        <a href="http://www.jia400.com/">家居建材网</a>
        <a href="http://www.ngbbs.com/">宁国论坛</a>
        <a href="http://www.wy100.com/">家具网上商城</a>
        <a href="http://qd.leju.com/">青岛房产</a>
        <a href="http://www.021sofa.com/">沙发定做</a>
        <a href="http://news.focus.cn/puyang/">濮阳房产新闻</a>
        <a href="http://baixing.sz.js.cn/">苏州百姓网</a>
        <a href="http://www.10333.com/">建筑网</a>
        <a href="http://www.zsezt.com/">家居装修设计</a>
        <a href="http://www.leleju.com/">家具价格</a>
        <a href="http://www.opvip.com/">家具网上商城</a>
        <a href="http://sh.jiwu.com/">上海买房</a>
        <a href="http://m.suofeiya.com">社区O2O</a>
        <a href="http://pinpai.9998.tv/">名酒</a>
        <a href="http://www.chudian365.com/">集成灶</a>
        <a href="http://www.jcqm001.com/">集成墻面</a>
        <a href="http://suzhou.zxdyw.com/">苏州装修公司</a>
        <a href="http://jn.zxdyw.com/">济南装修公司</a>
        <a href="http://www.examw.com/jzs1/">一级建造师</a>
        <a href="http://www.ebieshu.com/">别墅图片大全</a>
        <a href="http://bbs.51gaifang.com/">自建房论坛</a>
        <a href="http://www.51gaifang.com/">房屋设计图</a>
        <a href="http://www.51tuzhi.com/">新农村住宅设计图</a>
        <a href="http://esf.gz.fang.com/">广州二手房</a>
        <a href="http://www.segahome.com/">家用中央空调价格</a>
        <a href="http://www.tianqi4.com/">天气在线</a>
        <a href="http://news.homekoo.com/">装修网</a>
        <a href="http://www.chinayigui.com/">整体衣柜</a>
        <a href="http://www.shangceng.com.cn/">北京别墅装修</a>
        <a href="http://hz.lianjia.com/">杭州二手房</a>
        <a href="http://www.qizuang.com/">装修公司</a>
    </div>

</div>
<div id="bottom">
    <div class="common-inner">
        <div class="jiabaologo"></div>
        <div>
            <span>*</span><input class="elm"  type="text" placeholder="姓名" maxlength="8"/>

            <span>*</span><input class="phNub" id="str4" type="text" placeholder="手机号" maxlength="11"/>
            <br/>
            <input class="location" type="text" placeholder="地址(所在县市)"/>

            <input class="xiaoqu" type="text" placeholder="小区名称"/>
        </div>
        <div id="confirm">提交</div>
    </div>
    <div id="bottomHide">隐藏</div>
    <div class="daiyan">
        <img src="images/lirui02.png"/>
    </div>
    <div class="bottomOp">
        <img src="images/lirui03.png"/>
    </div>

</div>
<div id="dingzhi">
    <div class="dingzhibox">
        <div class="offOn">关闭</div>
        <div class="photos">
            <img src="images/lirui01.png" />
            <div>预约私人设计师，为自己<span>个性定制</span></div>
        </div>
        <div class="baoming">
            <div class="title">

            </div>
            <div class="xingming">
                姓 名:
                <input type="text" class="elm" placeholder="请输入您的称呼" maxlength="8"/>
            </div>
            <div class="phoneNub">
                手机号码:
                <input type="text" class="phNub" placeholder="请输入您的联系号码" maxlength="11"/>
            </div>
            <div class="suozaidi">
                所在地(县市区):
                <input class="location" type="text" placeholder="所在地(例：冷水江)" maxlength="20"/>
            </div>
            <div class="shequ">
                小区名称:
                <input class="xiaoqu" type="text" placeholder="小区名称" maxlength="20"/>
            </div>
            <div class="shenqin">确认申请</div>
        </div>
    </div>
</div>
<div class="toTop">
    <a class="top1"  href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">咨询客服</a>
    <a class="top2 top0" href="htmls/zhuanti/zhuanti04.html" target="_blank">最新活动</a>
    <a class="top3 top0" href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">免费估价</a>
    <a class="top4 top0"  href="htmls/dingzhi.html" target="_blank">预约量房</a>
    <a class="top5 top0"  href="http://www2.53kf.com/webCompany.php?arg=10133101&style=2&kflist=off&kf=19680502&zdkf_type=3&language=cn&charset=GBK" target="_blank">参观工地</a>
    <a class="top6 top0">返回页顶</a>
</div>

</body>
<!--53kf 客服系统模块 -->
<script>(function() {var _53code = document.createElement("script");_53code.src = "//tb.53kf.com/code/code/10133101/2";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
<!--百度400电话 -->
<div style="height:0;display:none;overflow:hidden;">
    <script src="http://s22.cnzz.com/stat.php?id=5873751&web_id=5873751"></script>
    <script>
        document.write(unescape("%3Cscript src='" + "https:" +"hm.baidu.com/h.js%3F16b1a369d1392d8f7e8978b592e0139f' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>
</html>
