<?php
use yii\helpers\Html;
?>
<?php
$this->title = 'Каталог продукции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-listing spacer">
    <div class="row">
        <div class="col-lg-3 col-sm-4 ">
            <?= Html::beginForm(\yii\helpers\Url::to('/main/main/find/'),'get') ?>
            <div class="search-form">
                <h4><span class="glyphicon glyphicon-search"></span> Параметры поиска</h4>
                <?=Html::textInput('propert', $request->get('propert'), ['class' => 'form-control', 'placeholder' => 'Что искать?']) ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?=Html::dropDownList('Цена', $request->get('price'),[
                            '0-10' => '₽0 - ₽10',
                            '10-15' => '₽10 - ₽15',
                            '300-450' => '$300 - $450',
                            '450' =>'$450 - above',
                        ],['class' => 'form-control', 'prompt' => 'Price']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?=Html::dropDownList('Вид', $request->get('apartment'),[
                            'Хлеб',
                            'Батон',
                            'Булка',
                        ],['class' => 'form-control', 'prompt' => 'Property']) ?>
                    </div>
                </div>
                <button class="btn btn-primary">Найти</button>
                <?= Html::endForm() ?>
            </div>
            <div class="hot-properties hidden-xs">
                <?php echo \frontend\widgets\HotWidget::widget() ?>
            </div>
        </div>
        <div class="col-lg-9 col-sm-8">
            <div class="row">
                <?php
                foreach($model as $row):
                    $url = \frontend\components\Common::getUrlproduct($row);
                    ?>
                    <!-- properties -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="properties">
                            <div class="image-holder">
                                <img src="<?=\frontend\components\Common::getImageproduct($row)[0] ?>"  class="img-responsive" alt="properties">
                                <div class="status <?=($row['sold']) ? 'sold' : 'new' ?>"><?=\frontend\components\Common::getType($row) ?>
                                </div>
                            </div>
                            <h4><a href="<?=$url ?>" ><?=\frontend\components\Common::getTitleproduct($row) ?></a></h4>
                            <a class="btn btn-primary" href="<?=$url ?>" >Детальнее</a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
                <!-- properties -->
                <div class="clearfix"></div>
                <!-- properties -->
                <div class="center">
                    <?php echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
