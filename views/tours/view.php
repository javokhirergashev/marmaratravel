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

<section class="blogs" id="blogs" ">

    <div class="heading">
        <span><?=Yii::t("app","blogs")?></span>
        <h1><?=Yii::t("app","blogs")?></h1>
    </div>

    <div class="box-container">
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model): ?>
                <?php
                $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
                if (is_file($image)){
                    $image = "images/no_photo.png";
                }
                ?>
                <div class="box" data-aos="fade-up" data-aos-delay="150">
                    <div class="image">
                        <img src="<?=$image?>" alt="">
                    </div>
                    <div class="content">
                        <a href="<?=\yii\helpers\Url::to(['toursview/view','id'=>$model->id])?>" class="link"><?=$model['title_'.Yii::$app->language];?></a>
                        <p><?=$model['description_'.Yii::$app->language];?></p>
                        <div class="icon">
                            <a href="<?=\yii\helpers\Url::to(['toursview/view','id'=>$model->id])?>"><i class="fas fa-clock"></i> <?=$model->period?></a>
                            <a href="<?=\yii\helpers\Url::to(['toursview/view','id'=>$model->id])?>"><i class="fas fa-money"></i> <?=$model->price?> UZS</a>
                        </div>
                        <a href="<?=\yii\helpers\Url::to(['toursview/view','id'=>$model->id])?>" class="btn"><?=Yii::t("app","read")?></a>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>

</section>