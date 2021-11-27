<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the finish action of the frontend web.
 */

?>

<html>
<h1 id='finish'>操作成功</h1>
<div class="row" style="display: flex; justify-content:center;">
    <span id='time'></span>
</div>

</html>

<script>
    $(document).ready(function() {
        document.querySelector('#finish').scrollIntoView();
    })

    var t = 5; //设定跳转的时间 
    setInterval("refer()", 1000); //启动1秒定时 
    function refer() {
        if (t == 0) {
            location = window.location.href.split('?')[0]; //跳转的地址
        }
        document.getElementById('time').innerHTML = "" + t + "秒后跳转到主页"; // 显示倒计时 
        t--; // 计数器递减 
    }
</script>