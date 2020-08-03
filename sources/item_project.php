<?php 
    if (!empty($data))
    {
    foreach ($data as $value){
        ?>
            <div class="col-md-3">
                <div class="item-project img-shine-4">
                    <a style="color: #000" href="" title="">
                        <div class="img_project img-shine-3">
                            <img src="<?=URLPATH?>img_data/b4838409525722.jpg" alt="">
                        </div>
                        <div class="content_project">
                            <h3 class="title">Luxury Apartment In Chelsea</h3>
                            <p class="price">$ 450,000 $777 m<sup>2</sup></p>
                            <hr style="margin: 5px">
                            <div class="extends">
                                <li>3 phòng ngủ</li>
                                <li>2 wc</li>
                                <li>5 chỗ để xe</li>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php
    }
    }else{
        include ('data_empty.php');
    }
?>