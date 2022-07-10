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

<section class="blogs" id="blogs">

    <div class="heading">
        <span><?=Yii::t("app","blogs")?></span>
        <h1><?=Yii::t("app","blogs")?></h1>
    </div>

    <div class="box-container">
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model): ?>
                <?php
                $image = \app\models\StaticFunctions::getImage('hotel',$model->id,$model->images);
                if (is_file($image)){
                    $image = "images/no_photo.png";
                }
                ?>
                <div class="box" data-aos="fade-up" data-aos-delay="150">
                    <div class="image">
                        <img src="<?=$image?>" alt="">
                    </div>
                    <div class="content">
                        <a href="" class="link"><?=$model->country?></a>
                        <p><?=$model->name?></p>
<!--                        <div class="icon">-->
<!--                            <a href="#"><i class="fas fa-clock"></i> --><?//=$model->country?><!--</a>-->
<!--                            <a href="#"><i class="fas fa-money"></i> --><?//=$model->country?><!-- UZS</a>-->
<!--                        </div>-->
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>

</section>