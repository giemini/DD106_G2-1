<template>
    <div class="contain">
        <aside class="left">
            <div class="head_portrait">
                <div class="head_img_box">
                    <img src="../assets/navbar_account_img.svg" alt="">
                </div>
                <ul>
                    <li>設定頭像</li>
                    <li class="nick">暱稱</li>
                    <li class="fans">身分別:果粉</li>
                </ul>
            </div>

            <div class="info">
                <ul>
                    <li><a href="#">個人資料修改</a></li>
                    <li><a href="#">訂單管理</a></li>
                    <li><a href="#">追蹤名單管理</a></li>
                </ul>
            </div>
            <div class="farm_button">
                <div class="farm">
                    <p>切換為果農</p>
                </div>
            </div>
        </aside>
        <router-view />
        <Information />
    </div>
</template>
<script>
import Information from "../views/Order";

export default {
    
    components: {

        Information,
    }
}
</script>
