<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
             <?
             foreach ($category_array as $key => $value) 
             { 
             	?>
             	<li class="promo__item promo__item--boards"><a class="promo__link" href="pages/all-lots.html"><?=$value ?></a></li>
             <?	
             }
            ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
        	<?
        	foreach ($lots_array as $nomer => $stroka) { ?>
        		<li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$stroka["url"]?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">            	
                    <span class="lot__category"><?=$stroka["category"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=$stroka["name"] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=ceilprice($stroka["price"],true) ?></span>
                        </div>
                        <div class="lot__timer timer">
                            <?=date("H:i", $ny_date)?>
                        </div>
                    </div>
                </div>

            </li>
            <?
        	}?>
        </ul>
    </section>