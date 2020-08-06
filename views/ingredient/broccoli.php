<?php
?>
<style>
.circle {
width: 200px;
height: 200px;
position: absolute;
border-radius: 50%;
background: #0cc;
}
.pie_left, .pie_right {
width: 200px;
height: 200px;
position: absolute;
top: 0;left: 0;
}
.left, .right {
display: block;
width:200px;
height:200px;
background:#00aacc;
border-radius: 50%;
position: absolute;
top: 0;
left: 0;
transform: rotate(30deg);
}
.pie_right, .right {
clip:rect(0,auto,auto,100px);
}
.pie_left, .left {
clip:rect(0,100px,auto,0);
}
.mask {
width: 150px;
height: 150px;
border-radius: 50%;
left: 25px;
top: 25px;
background: #FFF;
position: absolute;
text-align: center;
line-height: 150px;
font-size: 16px;
}
</style>

<div>
    <p style="color:black;display:block;text-align:center;font-size:40px;">西兰花</p>
</div><!--标题 --!>

<hr>
<br>

<div align="center";>
    <img src="/食材详情页/西兰花.jpg" alt="西兰花" >
</div><!--头图 --!>
<br>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title" style="font-size: 28px;color: #A03A07;">热量</h1>
    </div>
    <div class="panel-body">
        <div style="text-align: center">
            <span style="font-size:25px;color: #DB916B;"><strong>27</strong></span><span style="font-size: 20px">大卡</span>
            <p>每100g（可食用部分）</p>
                <div class="progress" style="width: 50%;margin-left: 25%">
                    <div class="progress-bar progress-bar-success" style="width:33%">
                        <span class="sr-only">35% Complete (success)</span>
                    </div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 33%">
                       相对一般
                    </div>
                    <div class="progress-bar progress-bar-danger" style="width: 34%">
                        <span class="sr-only">10% Complete (danger)</span>
                    </div>
                </div>
            <p style="font-size: 20px">热量低于<span>49%</span>的蔬菜</p>
        </div>
    </div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title" style="font-size: 28px;color: #A03A07">营养元素</h1>
    </div>
    <div class="panel-body">
        <p style="text-align: right">单位：每100g</p>
        <div  style="padding: 10px 20% 0px 20%">
            <table class="table table-hover" style="background-color: #FBF1DA;border-radius: 10px;">
                <thead>
                <tr>
                    <th>名称</th>
                    <th>重量</th>
                    <th>百分比</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>蛋白质</td>
                    <td>3.5g</td>
                    <td>40.9%</td>
                </tr>
                <tr>
                    <td>脂肪</td>
                    <td>0.6g</td>
                    <td>15.8%</td>
                </tr>
                <tr>
                    <td>碳水化合物</td>
                    <td>3.7g</td>
                    <td>43.3%</td>
                </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center">注：以上为三大营养素的功能比例，不是重量比例。其中，脂肪的供能效率比较高，是碳水化合物和蛋白质的两倍。</p>
    </div>
</div>

