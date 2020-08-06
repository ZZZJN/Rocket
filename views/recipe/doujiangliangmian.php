<?php

/* @var $this yii\web\View */
/*        $model           */
/* $this->params['breadcrumbs'][] = ;   面包屑导航  */
?>
<style>
    .box {
        height: 1200px;
        width: 1200px;
        margin: 0 auto;
    }

    .center {
        float: left;
        width: 100%;
        height: 100%;
        background: whitesmoke;
    }

    #center_main {
        margin: 0px 400px 0px 0px;
    }

    .right {
        float: left;
        width: 400px;
        height: 100%;
        background: #eddcd2;
        margin-left: -400px;
    }
</style>

<script type="text/javascript">
    var times = 0;

    function change(btn) {
        btn.style.background = times % 2 == 0 ? '#DABEC0' : 'white';
        times++;
    }
</script>

<div>
    <span style="color:black;display:block;text-align:center;font-size:35px;">豆浆凉面</span>
    <button type="button" class="btn btn-default btn-sm" style="float: right;" onclick="change(this)">
        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>收藏
    </button>
</div><!--标题和收藏按钮 --!>

<br>
<hr>
<br>

<div align="center" ;>
    <img src="/菜谱详情页/豆浆冷面.jpg" alt="豆浆冷面">
</div><!--头图 --!>
<br>

<div class="media" style="margin-bottom: 25px;">
    <div class="media-left media-middle">
        <a href="#">
            <img class="media-object img-circle" src="/用户头像/粉蒸肉.JPG" alt="爱生活的多妈" width="100px">
        </a>
    </div>
    <div class="media-body">
        <h4 style="margin-left: 20px;color: #011936;">
            <br>
            <br>
            "雪白的一碗豆浆冷面端出，散发着习习凉气，带着悠远的味道，赋予你夏日的平静，适合思念，又适合夏天。"
        </h4>
    </div>
</div>

<body>
<div class="box">
    <div class="box">
        <div class="center">
            <div id="center_main">
                <h3 style="color:#a03a07;margin-left: 10px;">你需要准备这些原料：</h3>
                <div class="table-responsive" style="margin: 10px 40% 0px 5%;font-size:16px;" >
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>  黄豆</td>
                            <td>适量</td>
                        </tr>
                        <tr>
                            <td>  小麦冷面</td>
                            <td>1袋</td>
                        </tr>
                        <tr>
                            <td>  黄瓜</td>
                            <td>1/4根</td>
                        </tr>
                        <tr>
                            <td>  番茄</td>
                            <td>1个</td>
                        </tr>
                        <tr>
                            <td>  鸡蛋</td>
                            <td>1个</td>
                        </tr>
                        <tr>
                            <td>  糖</td>
                            <td>1勺</td>
                        </tr>
                        <tr>
                            <td>  盐</td>
                            <td>半勺</td>
                        </tr>
                        <tr>
                            <td>  白芝麻</td>
                            <td>少许</td>
                        </tr>
                        <tr>
                            <td>  冰块</td>
                            <td>适量</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <h3 style="color:#a03a07;margin-left: 10px;">跟着我做吧！</h3>
                <p style="font-size: 16px;">
                    <span style="color:#a03a07;font-size:35px;margin-left: 2%">1 </span>
                    黄豆提前一夜泡水，磨成浓豆浆后过滤出汁水，倒入锅中煮沸后，转小火再煮5-8分钟（想要更丝滑口感可以煮完后再过滤一遍）。
                    <br>
                    <span style="margin-left: 5%">重点是好吃的腌料：15g蚝油+15g生抽+10g料酒+10g腐乳汁+10g甜面酱+适量细砂糖。</span>
                </p>

                <p style="font-size: 16px;">
                    <span style="color:#a03a07;font-size:35px;margin-left: 2%">2 </span>
                    小麦冷面泡凉水5～10分钟，直到可以搓开的状态。
                </p>
                <p style="font-size: 16px;">
                    <span style="color:#a03a07;font-size:35px;margin-left: 2%">3 </span>
                    1/4根黄瓜切丝，番茄切块，取1个鸡蛋煮熟后对半切开，备用；
                    <br>
                    <span style="margin-left: 5%">碗中加入半勺盐、1勺糖（糖量可自定，放一点能提升口感层次），倒入豆浆搅拌均匀，放入冰箱冷藏。</span>
                </p>
                <p style="font-size: 16px;">
                    <span style="color:#a03a07;font-size:35px;margin-left: 2%">4 </span>
                    煮沸一锅水，放入小麦面，煮1～2分钟至没有硬芯的状态，捞出过凉水，放入碗中，依次摆上黄瓜丝、番茄块和鸡蛋后加入冰块，撒上熟白芝麻。
                </p>
                <br>
                <h3 style="color:#a03a07;margin-left: 10px;">作者提醒你</h3>
                <ol style="font-size: 16px;">
                    <li>小麦面煮后过凉水是为了让面的口感更加筋道。</li>
                    <li>豆浆一定要冷藏过哦，热的就失去灵魂了。</li>
                </ol>
            </div>
        </div>
        <div class="right">
            <h3 style="color:#202c39;margin-left: 10px;">作者还创建了其他食谱哦</h3>
            <div style="margin:5% 0px 5% 5%;">
                <a href="#"><img src="/用户头像/粉蒸肉.JPG" alt="爱生活的多妈" width="150px" align="bottom"></a>
                <span style="font-size: 17px;margin-left: 20px;">爱生活的多妈</span>
            </div>
            <div class="list-group" style="margin-left: 15px;margin-right:15px;">
                <a href="#" class="list-group-item" style="background-color: #DABEC0;">
                    <h4 class="list-group-item-heading">泰式柠檬虾 酸酸甜甜就是我</h4>
                    <p class="list-group-item-text">&emsp; 夏天就想吃点酸辣开胃不油腻的简单菜。譬如这款清新范的泰式柠檬虾，一直喜欢酸酸甜甜的口感。小朋友也特别喜欢，徒手自己剥着吃了好几个。</p>
                </a>
                <a href="#" class="list-group-item" style="background-color: #DABEC0;">
                    <h4 class="list-group-item-heading">五香酱牛肉</h4>
                    <p class="list-group-item-text">&emsp; 今天这个五香酱牛肉，还是老妈在世的时候教的。她在清真饭馆工作，耳濡目染，所以经常给我们做牛羊肉的菜。老妈在世的时候常给我们做这道菜——酱香浓郁、口感绝佳。</p>
                </a>
                <a href="#" class="list-group-item" style="background-color: #DABEC0;">
                    <h4 class="list-group-item-heading">比棉花还柔软的中种北海道吐司 </h4>
                    <p class="list-group-item-text">
                        &emsp; 在烘焙界中，“北海道”是一个很有逼格的名词，就如同包包中的爱马仕一样闪闪发光。现在做个吐司、戚风或者杯子蛋糕，如果不带个“北海道”，感觉档次都上不去。
                        制作这款北海道牛奶吐司采用了牛奶、淡奶油、奶粉、黄油这4种乳制品，它们都是由生牛奶加工而成的食材，在最大程度上加强了吐司的牛奶风味。
                        通过反复练习，掌握好面团筋度和发酵程度的判断，制作吐司这件事也会变得手到摛到。
                    </p>
                </a>
                <a href="#" class="list-group-item" style="background-color: #DABEC0;">
                    <h4 class="list-group-item-heading">白灼芥蓝</h4>
                    <p class="list-group-item-text">&emsp; 白灼，是粤菜最典型的烹煮技法。以沸滚的水或汤，将生的食物烫熟，力求保持食材的鲜美。对于青菜的烹调，我最推崇的就是白灼，既保持蔬菜的鲜嫩爽口，又保证营养不流失。</p>
                </a>
                <a href="#" class="list-group-item" style="background-color: #DABEC0;">
                    <h4 class="list-group-item-heading">柠檬鸭</h4>
                    <p class="list-group-item-text">&emsp; 广西，其实是个隐藏的吃鸭大省。除了烧鸭、白切鸭等常见做法，颇具地方特色的还有桂林啤酒鸭、全州醋血鸭和南宁柠檬鸭。近来高温不断，人易犯困没胃口，这时不妨试试酸香多汁的柠檬鸭，吃胖了也开心鸭。</p>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
