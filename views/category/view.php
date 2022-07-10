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
<section class="destination" id="destination">

    <div class="heading">
        <span>our destination</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model): ?>
                <?php
                    $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
                    if (is_file($image)){
                        $image = "assets/images/no_photo.png";
                    }
                ?>
                <div class="box" data-aos="fade-up" data-aos-delay="150">
                    <div class="image">
                        <img src="<?=$image?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?=$model['title_'.Yii::$app->language];?></h3>
                        <p><?=$model->period?></p>
                        <a href="<?=\yii\helpers\Url::to(['toursview/view', 'id'=>$model->id])?>">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            <?php endforeach;?>
       <?php endif;?>

    </div>

</section>