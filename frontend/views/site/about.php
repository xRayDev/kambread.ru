<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    p {
        text-indent: 40px; /* Отступ первой строки в пикселах */
    }
</style>

<div class="container">
    <div class="row">
        <h3 class="text-justify"><small>Дата основания предприятия - декабрь 1956 г.</small></h3>
        <div class="pull-right bg-default" style="width: 20em; padding: 20px;">
            <img src="images/about/director.png" alt="Кутепов Ю. Н." class="img-rounded center-block img-responsive">
            <h4 class="text-center">Генеральный директор Кутепов Ю. Н.</h4>
        </div>
        <p>
            В 1993 году хлебокомбинат вышел из подчинения Министерства хлебопекарной промышленности и стал структурой муниципалитета.
            В августе 2006 года было создано ОАО «Камышинский хлебокомбинат» путем преобразования муниципального унитарного предприятия «Камышинский хлебокомбинат».
            Учредителем ОАО «Камышинский хлебокомбинат» является комитет по управлению имуществом Администрации городского округа – город Камышин.
        </p>
        <p>
            На предприятии проводится проверка поступающего сырья, контроль всех этапов технологического производства.
            Контроль качества готовой продукции проводятся силами собственной лаборатории.
        </p>
        <p>
            ОАО «Камышинский хлебокомбинат» уже более 50 лет является ведущим производителем хлеба и хлебобулочных изделий на местном рынке.
            Cпециализируется как на их выпечке, так и на реализации, выпускает широкий ассортимент изделий из натурального сырья.
            Вся продукция предприятия сертифицирована и производится согласно существующей нормативно-технической документации.
        </p>
        <b>Виды продукции:</b>
        <ul>
            <li>хлеб пшеничный, ржано-пшеничный;</li>
            <li>хлеб диетический, с пряностями, булочки простые и сдобные, бублики, баранки, сушки (все в евроупаковке);</li>
            <li>булочки простые, сдобные, слоеные, с начинкой, батоны, рулеты, кексы, коржи;</li>
            <li>батончики, сдобы, сухарики.</li>
        </ul>
    </div>
    <div class="row">
        <div class="pull-left bg-default" style="width: 20em; padding: 20px;">
            <img src="images/about/watermelon.jpg" alt="Фестиваль" class="img-circle center-block img-responsive">
            <h3 class="text-center"><small>Арбузный фестиваль</small></h3>
        </div>
        <p>
            Компания за счет собственных средств оказывает благотворительную помощь общественным,
            государственным и муниципальным организациям, участникам ВОВ, людям, оказавшимся в эпицентре боевых действий, техногенных ситуаций.
            Перечисляет денежные средства на строительство памятников и памятных знаков в г.Камышине.
        </p>
        <p>
            На предприятии обеспечиваются все социальные гарантии, соблюдаются нормы трудового, административного, пенсионного, налогового законодательства.
            Работникам предприятия гарантированы дополнительные социальные выплаты и льготы, сверх законодательно установленных норм согласно коллективного договора.
        </p>
        <p>
            Кроме того работники предприятия застрахованы по программе «Комплексное  медицинское обслуживание» с дополнительным условием «Санаторно-курортное и
            реабилитационное восстановительное лечение». В летний период детям работников предприятия предоставляются путевки в детские оздоровительные лагеря.
            Представители коллектива ОАО "Камышинский хлебокомбинат" были неоднократными участниками и победителями ежегодного Камышинского арбузного фестиваля:
        </p>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <h3 class="text-center"><small>Достижения и результаты деятельности предприятия</small></h3>
            <dl class="text-left dl-horizontal">
                <dt>2002</dt>
                <dd>Диплом Агропромышленной выставки – ярмарки «Волгоград АГРО-2002» за широкий ассортимент представляемой продукции;</dd>
                <dt>2004</dt>
                <dd>Диплом победителя конкурса народного признания и качества «ЕвроКласс-2004»;</dd>
                <dt>2007</dt>
                <dd>Диплом I  степени в номинации «Предприятия производители продовольственных  товаров»;</dd>
                <dt>2009</dt>
                <dd>Предприятие включено в национальный реестр ведущих организаций  потребительского рынка;</dd>
                <dt>2011</dt>
                <dd>Почетный диплом (Москва, Манеж) за участие в Национальной программе продвижения лучших российских товаров и услуг для детей «Лучшее - детям»;</dd>
                <dt>2014</dt>
                <dd>Почетный диплом  Правительства Волгоградской области - победители Всероссийской   программы - конкурса «100 лучших товаров России» на региональном этапе;</dd>
                <dt>2014</dt>
                <dd>Лауреат Всероссийского конкурса программы «100 лучших товаров России», золотая медаль на продукцию:</dd>
                <dd>Хлеб из смеси ржаной и пшеничной муки формовой «Пеклеванный новый» и подовый «Ельшанский», коржи молочные из пшеничной муки высшего сорта;</dd>
                <dt>2014</dt>
                <dd>Дипломант Всероссийского конкурса программы «100 лучших товаров России, серебряная медаль на продукцию:</dd>
                <dd>хлеб белый, батон с пшеничными отрубями, батон нарезной, круассаны с начинкой из пшеничной муки первого и высшего сорта.</dd>
            </dl>
        </div>
        <div class="col-md-4 hidden-sm hidden-xs">
            <!-- Slider Starts -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%; height:450px">
                <!-- Indicators -->
                <ol class="carousel-indicators hidden-xs">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="4" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Item 1 -->
                    <div class="item active"><img src="/images/about/awards/award_01.png" class="img-responsive center-block" alt="" /></div>
                    <div class="item"><img src="/images/about/awards/award_02.png" class="img-responsive center-block" alt="" /></div>
                    <div class="item"><img src="/images/about/awards/award_03.png" class="img-responsive center-block" alt="" /></div>
                    <div class="item"><img src="/images/about/awards/award_04.jpg" class="img-responsive center-block" alt="" /></div>
                    <div class="item"><img src="/images/about/awards/award_05.jpg" class="img-responsive center-block" alt="" /></div>
                </div>
            </div>
            <!-- #Slider Ends -->
        </div>
    </div>
</div>
<div class="spacer"></div>
<!-- Our Clients -->
<div class="section">
    <div class="container">
        <div class="section-title">
            <h3>С нами сотрудничают</h3>
        </div>
        <div class="clients-logo-wrapper text-center row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="http://magnit-info.ru/" target="_blank"><img src="images/logos/logo-1.png" class="img-responsive center-block" width="270px" alt="Магнит"></a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="http://pokupochka.ru/" target="_blank"><img src="images/logos/logo-2.png" class="img-responsive center-block" width="270px" alt="Покупочка"></a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="http://tkman.ru/" target="_blank"><img src="images/logos/logo-3.png" class="img-responsive center-block" width="270px" alt="МАН"></a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="http://www.radezh.ru/" target="_blank"><img src="images/logos/logo-4.png" class="img-responsive center-block" width="270px" alt="Радеж"></a></div>
        </div>
    </div>
</div>
<!-- End Our Clients -->

