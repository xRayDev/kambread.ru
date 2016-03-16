<?php
use yii\helpers\Html;
?>
<div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
        <?php
        foreach($result_general as $row):
        ?>
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="bg-img" style="background-image: url('<?=\frontend\components\Common::getImageAdvert($row)[0] ?>')")"></div>
            <h2><a href="<?=\frontend\components\Common::getUrlAdvert($row) ?>"><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h2>
            <blockquote>
                <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?=$row['address'] ?></p>
                <p><?=\frontend\components\Common::substr($row['description']) ?></p>
                <cite>$ <?=$row['price'] ?></cite>
            </blockquote>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</div>
<!-- /sl-slider -->
<nav id="nav-dots" class="nav-dots">
    <?php
    if($count_general >= 1):
        ?>
        <span class="nav-dot-current"></span>
        <?php
    endif;
    ?>
    <?php
    if($count_general > 1):
        foreach(range(2,$count_general) as $line):
            ?>
            <span></span>
            <?php
        endforeach;
    endif;
    ?>
</nav>

<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Поиск по каталогу продукции</h3>
        <div class="searchbar">
            <div class="row">
                <?=Html::beginForm(\yii\helpers\Url::to('main/main/find/'),'get') ?>
                <div class="col-lg-6 col-sm-6">
                    <?=Html::textInput('propert', '', ['class' => 'form-control']) ?>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <?=Html::dropDownList('price', '',[
                                '0-150' => '$0 - $150',
                                '150-300' => '$150 - $300',
                                '300-450' => '$300 - $450',
                                '450' =>'$450 - above',
                            ],['class' => 'form-control', 'prompt' => 'Price']) ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <?=Html::dropDownList('apartment', '',[
                                'Хлеб',
                                'Батон',
                                'Булка',
                            ],['class' => 'form-control', 'prompt' => 'Property']) ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <?=Html::submitButton('Найти', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                    <?=Html::endForm() ?>
                </div>
                <?php
                if(Yii::$app->user->isGuest):
                    ?>
                    <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                        <p>Присоединяйтесь</p>
                        <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Войти</button>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
        <!-- banner -->
    </div>
</div>
<div class="container">
    <div class="properties-listing spacer">
        <a href="/main/main/find"  class="pull-right viewall">Посмотреть все</a>
        <h2>Новинки</h2>
        <div id="owl-example" class="owl-carousel">
            <?php
            foreach($featured as $row):
                ?>
                <div class="properties">
                    <div class="image-holder">
                        <img src="<?=\frontend\components\Common::getImageAdvert($row)[0] ?>"  class="img-responsive" alt="properties"/>
                        <div class="status <?=($row['sold']) ? 'sold' : 'new' ?>">
                            <?=\frontend\components\Common::getType($row) ?>
                        </div>
                    </div>
                    <h4>
                        <a href="<?=\frontend\components\Common::getUrlAdvert($row) ?>" >
                            <?=\frontend\components\Common::getTitleAdvert($row) ?>
                        </a>
                    </h4>
                    <p class="price">Цена: $<?=$row['price'] ?></p>
                    <div class="listing-detail">
                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$row['bedroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?=$row['livingroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$row['parking'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$row['kitchen'] ?></span>
                    </div>
                    <a class="btn btn-primary" href="<?=\frontend\components\Common::getUrlAdvert($row) ?>">Подробнее</a>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>О компании</h3>
                <p>Камышинский хлебокомбинат - ведущий производитель хлеба и хлебобулочных изделий в Камышинском районе.<br>
                    Предприятие выпускает 10 видов хлеба и более 65 видов хлебобулочных изделий (булочные, бараночные, кондитерские, сухарные изделия), постоянно осуществляет усовершенствование технологии производства, качества продукции, улучшение ее внешнего вида.<br>
                    Предприятие состоит из трех производственных подразделений:<br>
                    - основное производство<br>
                    - бараночный участок<br>
                    - булочно-кондитерский участок<br>
                    <a href="about.html" >Подробнее</a>
                </p>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
				<h3>Рекомендуем</h3>
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <?php
                        if($recommend_count >= 1):
                            ?>
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?php
                        endif;
                        ?>
                        <?php
                        if($recommend_count > 1):
                            foreach(range(1,$recommend_count-1) as $count):
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?=$count ?>"></li>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        foreach($recommend as $rec):
                            ?>
                            <div class="item <?=($i == 0) ? 'active' : '' ?>">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="<?=\frontend\components\Common::getImageAdvert($rec)[0] ?>"  class="img-responsive" alt="properties"/>
                                    </div>
                                    <div class="col-lg-8">
                                        <h5>
                                            <a href="<?=\frontend\components\Common::getUrlAdvert($rec) ?>" ><?=\frontend\components\Common::getTitleAdvert($rec) ?></a>
                                        </h5>
                                        <p class="price">$<?=$rec['price'] ?></p>
                                        <a href="<?=\frontend\components\Common::getUrlAdvert($rec) ?>"  class="more">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
