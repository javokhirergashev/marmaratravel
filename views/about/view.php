<style>
    .container-fluid{
        width: 100%;
        /*min-height: 70vh;*/
        /* margin-top: 5rem; */
        background-color: #111;

    }
    .contactrow .col{
        margin-top: 30px;
        text-align: center;
    }

    .contactrow .col #message{
        font-size: 1rem;
        color: aqua;
    }

    .contactrow .col h3{
        color: white;
        margin-bottom: 20px;
        font-size: 50px;
    }

    .contactrow .col p{
        color: #aaa;
        font-size: 17px;
    }
    .contactrow .contact_links,
    .contactrow .network_links{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .contactrow .contact_links p{
        margin-left: 30px;
    }


    .contactrow .network_links i{
        color: white;
        font-size: 30px;
        margin-left: 25px;
    }

    .partner{
        width: 100%;
        background-color: rgb(27, 27, 27);
        min-height: 30vh;
    }

    .partner h3{
        margin-top: 20px;
        color: white;
        font-size: 30px;
        text-align: center;
    }

    .partner img{
        width: 150px;
        margin-top: 40px;
    }

    .partner .partners{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
    }
</style>
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
<div class="container-fluid">
    <div class="row contactrow">
        <div class="col">
            <h3>Contact Us</h3>

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <div class="contact_links">

                        <p><i class="fa fa-phone"></i> <?=$model->first_phone?></p>
                        <p><i class="fa fa-envelope"></i> <?=$model->email?> </p>
                        <p><i class="fa fa-address-book"></i> <?=$model->addres?></p>
                    </div>
                <?php endforeach; ?>

                    <div class="network_links">
                        <a href=""><i class="uil uil-telegram-alt"></i></a>
                        <a href=""><i class="uil uil-instagram"></i></a>
                        <a href=""><i class="uil uil-facebook"></i></a>
                        <a href=""><i class="uil uil-twitter"></i></a>
                    </div>
            <?php endif; ?>
        </div>
    </div>

</div>


<div class="container-fluid partner" style="margin-top: 30px; margin-bottom: 30px; ">
    <div class="row" style="text-align: center; ">
        <h3>Sponsors</h3>
        <?php if (!empty($sponsors)):?>
            <?php foreach ($sponsors as $sponsor):?>
                <?php
                    $image = \app\models\StaticFunctions::getImage('sponsors',$sponsor->id,$sponsor->images);
                ?>


                    <img src="<?=$image?>" alt="" style="margin-bottom: 20px; margin-right: 40px;">


            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>