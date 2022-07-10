<style>
    .target_img{
        background-image: url(/frontend-files/images/section-bg-19.jpg);
        width: 100%;
        height: 50vh;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .target_img h1{
        line-height: 50vh;
        color: white;
        font-size: 70px;
        margin-left: 4rem;
    }
</style>
<div class="target_img">
        <h1><?=$model["title_".Yii::$app->language];?></h1>

</div>

<div style="margin-top: 25px;>

    <div class="box aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
        <div class="image" style="margin-bottom: 25px;">
            <img src="<?=$image?>" alt="" style="display: block; margin: 0 auto; width: 45%; ">
        </div>
        <div class="content" style="width: 139rem; color: #fff8f8; margin: 0 auto;" >
            <h1 style="text-align: center; margin-bottom: 25px"><?=$model['title_'.Yii::$app->language];?></h1>
            <h1 style="text-align: center; margin-bottom: 25px"><?=$model->price?> UZS</h1>
            <p style="margin-bottom: 25px; font-size: 80px; color: #aaa"><?=$model['body_'.Yii::$app->language];?></p>
            <a href="https://payme.uz/fallback/merchant/?id=62a0a872aa40a686d47cf910" class="btn">online to'lov qilish <i class="fas fa-angle-right"></i></a>
        </div>
    </div>


</div>