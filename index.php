<?php include "header.php"; ?>
<div>
    <nav class="uk-navbar-container" id="header" uk-navbar>

        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#my-id" class="uk-navbar-toggle" uk-toggle>
                        <div id="m_nav_menu" class="m_nav menu">
                            <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
        <div class="uk-navbar-center">
            <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo1.png" alt=""></a>
        </div>
        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">
                        <div class="uk-cover-container uk-border-circle box11">
                            <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-1/p50x50/58551712_558791001311032_4407660791101128704_n.jpg?_nc_cat=101&_nc_oc=AQkAgoShI9Ogxh988U6FOz8BptadG-L9NflOXpU50nokMgUtviclFLUVB_1iY1MN1EQ&_nc_ht=scontent.fhan3-3.fna&oh=85961291b5986b127feb93ef87e5defc&oe=5D308A60" alt="" uk-cover>
                            <canvas width="30" height="30"></canvas>
                        </div>
                    </a>
                    <div class="uk-navbar-dropdown uk-padding-remove box8" uk-dropdown="pos: bottom-right">
                        <div class="user_acc">
                            <ul class="uk-list">
                                <li>Email: <b>hai.lemanh.1310@gmail.com</b></li>
                                <li>ID: <b>203</b></li>
                                <li>Số dư: <span>2,301,011</span> <img class="coin" src="imgs/coin.png" alt=""></li>
                            </ul>
                        </div>
                        <ul class="uk-nav uk-navbar-dropdown-nav uk-text-center user_menu">
                            <li><a href="#">Tài khoản</a></li>
                            <li><a href="#">Nạp coin</a></li>
                            <li><a href="#">Chuyển coin</a></li>
                            <li><a href="#">Đăng xuất</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>

    </nav>
    <div id="box1" class="uk-grid-collapse uk-grid" uk-grid="">
        <div class="uk-width-expand uk-first-column">
            <div class="uk-grid-collapse box5 uk-height-1-1 uk-grid" uk-grid="">
                <div class="uk-width-auto uk-first-column">
                    <div class="box6 uk-height-1-1"><img src="imgs/mu.png" alt=""></div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-padding-small box1">
                        <h5 class="uk-margin-remove title_db uk-text-truncate">Manchester United</h5>
                        <span class="uk-text-truncate uk-display-block">43‘ Lukaku, 67’ Raford</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-auto">
            <div class="uk-text-center uk-height-1-1 box3">
                <span class="tyso uk-text-bold">2 - 2</span>
                <div class="live1"><i class="fa fa-circle uk-text-middle" aria-hidden="true"></i> Phút 49</div>
            </div>
        </div>
        <div class="uk-width-expand">
            <div class="uk-grid-collapse box5 uk-height-1-1 uk-grid" uk-grid="">
                <div class="uk-width-auto">
                    <div class="box6 uk-height-1-1"><img src="imgs/barca.png" alt=""></div>
                </div>
                <div class="uk-width-expand uk-flex-first uk-first-column">
                    <div class="uk-padding-small box1 uk-text-right">
                        <h5 class="uk-margin-remove title_db uk-text-truncate">Barcenona</h5>
                        <span class="uk-text-truncate uk-display-block">43‘ Lukaku, 67’ Raford</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="my-video" uk-sticky>
        <div style="position:relative; padding-bottom:56.25%; overflow:hidden;"><iframe src="https://cdn.jwplayer.com/players/az6jjFJU-6M37AJhp.html" width="100%" height="100%" frameborder="0" scrolling="auto" allowfullscreen style="position:absolute;"></iframe></div>
    </div>
    <div class="box2 uk-grid-collapse" uk-grid>
        <div class="uk-width-auto">
            <div class="box7">
                <div class="uk-button-group btn2">
                    <button class="uk-button uk-button-secondary">FHD</button>
                    <button class="uk-button uk-button-default" uk-toggle="target: .box4">Đổi link <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="uk-width-expand uk-overflow-auto">
            <div class="box4">
                <?php
                $data = array
                (
                    'Nạp coin',
                    'Tặng coin',
                    'Đặt cược',
                );
                foreach ($data as $k1 => $v1) { ?>
                    <a href="#" class="uk-button btn1 uk-button-secondary"><?= $v1; ?></a>
                <?php } ?>
                <a href="#" class="uk-button btn1 uk-button-secondary"><span uk-icon="forward"></span> Chia sẻ</a>
            </div>
            <div class="box4" hidden>
                <?php
                $data = array
                (
                    'SD (Free)',
                    'HD (Free)',
                    'FHD (100 coin)',
                    'Nhà đài (Free)',
                );
                foreach ($data as $k1 => $v1) { ?>
                    <a href="#" class="uk-button btn1 uk-button-secondary"><?= $v1; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="chat">
    <ul id="toggle-usage" class="tab1 uk-child-width-expand uk-margin-remove-top uk-margin-remove-bottom uk-tab" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false;">
        <li><a class="uk-text-truncate" href="#">Trò chuyện</a></li>
        <li><a class="uk-text-truncate" href="#" uk-toggle="target: #toggle-usage">Thông số trận</a></li>
        <li><a class="uk-text-truncate" href="#" uk-toggle="target: #toggle-usage">Trận đấu khác</a></li>
    </ul>
    <ul class="uk-switcher uk-height-1-1">
        <li><iframe class="boxchat1" src="http://themes.cathtmlcss.net/2019/05/chatbot/chat_mobile.php" width="100%"></iframe></li>
        <li>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-width-auto">
                    <div class="info_tab">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <ul class="tab1 tabcon uk-child-width-expand uk-margin-remove-top uk-margin-remove-bottom uk-tab" uk-tab="connect: #my-id1">
                        <li><a class="uk-text-truncate" href="#">Diễn biến</a></li>
                        <li><a class="uk-text-truncate" href="#">Đội hình</a></li>
                        <li><a class="uk-text-truncate" href="#">Thông số</a></li>
                    </ul>
                </div>
                <div class="uk-width-auto">
                    <a href="#" class="back-tab" uk-switcher-item="previous" uk-toggle="target: #toggle-usage"><span uk-icon="arrow-left"></span></a>
                </div>
            </div>
            <ul class="uk-switcher" id="my-id1">
                <li>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-striped uk-table-middle table1 uk-text-center">
                            <thead class="uk-visible-toggle">
                            <tr>
                                <th>Chelsea 2</th>
                                <th><b>FT</b></th>
                                <th class="uk-text-truncate">West Ham United 0</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td><b>90’</b></td>
                                <td>
                                    <div class="uk-flex uk-flex-middle">
                                        <img src="imgs/thevang.jpg" alt="">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-left">Andrew Robertson</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>87’</b></td>
                                <td>
                                    <div class="uk-flex uk-flex-middle">
                                        <img src="imgs/vaosan.png" alt="">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-left vaosan">Adam Lallana</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle">
                                        <img src="imgs/rasan.png" alt="">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-left rasan">James Milner</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>84’</b></td>
                                <td>
                                    <div class="uk-grid-small uk-flex-middle sutvao uk-grid" uk-grid="">
                                        <div class="uk-width-auto uk-first-column">
                                            <img src="imgs/sutvao.png" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-truncate">Sadio Mané(1-3)</div>
                                            <small class="uk-text-truncate uk-display-block">assist by Mohamed Salah</small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-right">Andrew Robertson</span>
                                        <img src="imgs/thevang.jpg" alt="">
                                    </div>
                                </td>
                                <td><b>83’</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-right vaosan">Adam Lallana</span>
                                        <img src="imgs/vaosan.png" alt="">
                                    </div>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-right rasan">James Milner</span>
                                        <img src="imgs/rasan.png" alt="">
                                    </div>
                                </td>
                                <td><b>79’</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>72’</b></td>
                                <td>
                                    <div class="uk-flex uk-flex-middle">
                                        <img src="imgs/thevang.jpg" alt="">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-left">Andrew Robertson</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>69’</b></td>
                                <td>
                                    <div class="uk-flex uk-flex-middle">
                                        <img src="imgs/vaosan.png" alt="">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-left vaosan">Adam Lallana</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle">
                                        <img src="imgs/rasan.png" alt="">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-left rasan">James Milner</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>65’</b></td>
                                <td>
                                    <div class="uk-grid-small uk-flex-middle sutvao uk-grid" uk-grid="">
                                        <div class="uk-width-auto uk-first-column">
                                            <img src="imgs/sutvao.png" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-truncate">Sadio Mané(1-3)</div>
                                            <small class="uk-text-truncate uk-display-block">assist by Mohamed Salah</small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-right">Andrew Robertson</span>
                                        <img src="imgs/thevang.jpg" alt="">
                                    </div>
                                </td>
                                <td><b>26’</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-right vaosan">Adam Lallana</span>
                                        <img src="imgs/vaosan.png" alt="">
                                    </div>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <span class="uk-text-middle uk-text-truncate uk-margin-small-right rasan">James Milner</span>
                                        <img src="imgs/rasan.png" alt="">
                                    </div>
                                </td>
                                <td><b>13’</b></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>2</li>
                <li>3</li>
            </ul>
        </li>
        <li>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-width-auto">
                    <div class="info_tab">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <ul class="tab1 tabcon uk-child-width-expand uk-margin-remove-top uk-margin-remove-bottom uk-tab" uk-tab="connect: #my-id2">
                        <li><a class="uk-text-truncate" href="#">Đang diễn ra</a></li>
                        <li><a class="uk-text-truncate" href="#">Đã diễn ra</a></li>
                    </ul>
                </div>
                <div class="uk-width-auto">
                    <a href="#" class="back-tab" uk-switcher-item="0" uk-toggle="target: #toggle-usage"><span uk-icon="arrow-left"></span></a>
                </div>
            </div>
            <ul class="uk-switcher" id="my-id2">
                <li>
                    <table class="uk-table table3 uk-margin-remove uk-table-middle uk-text-center uk-margin-remove uk-table-hover">
                        <tbody>
                        <?php
                        $cars = array
                        (
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'live' => '89',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'live' => '12',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'live' => '89',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'live' => '12',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'live' => '89',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'live' => '12',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'live' => '89',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'live' => '12',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'live' => '89',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'live' => '12',
                            ),
                        );
                        foreach ($cars as $k => $v) { ?>
                            <tr>
                                <td><a href="#"><img src="<?= $v['giaidau'] ?>" alt=""></a></td>
                                <td><a href="#"><img src="<?= $v['doi1'] ?>" alt=""></a></td>
                                <td>
                                    <div class="uk-position-relative">
                                        <div class="tyso1">
                                            <?= $v['tyso'] ?>
                                        </div>
                                        <div class="live1"><i class="fa fa-circle uk-text-middle" aria-hidden="true"></i> Phút <?= $v['live'] ?></div>
                                        <div class="uk-invisible uk-position-center box10">
                                            <a href="#" class="uk-button uk-button-primary">XEM</a>
                                            <a href="#" class="uk-button uk-button-default">Cá cược</a>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#"><img src="<?= $v['doi2'] ?>" alt=""></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </li>
                <li>
                    <table class="uk-table table3 uk-table-middle uk-text-center uk-margin-remove uk-table-hover">
                        <tbody>
                        <?php
                        $cars = array
                        (
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/champions.png',
                                'doi1' => 'imgs/doibong/db-arsenal.png',
                                'doi2' => 'imgs/doibong/db-chelsea.png',
                                'tyso' => '2 - 0',
                                'time' => '20:00 19-05',
                            ),
                            array(
                                'giaidau' => 'imgs/giaidau/laliga.png',
                                'doi1' => 'imgs/doibong/db-barcelona.png',
                                'doi2' => 'imgs/doibong/db-slavia.png',
                                'tyso' => '0 - 1',
                                'time' => '20:00 19-05',
                            ),
                        );
                        foreach ($cars as $k => $v) { ?>
                            <tr>
                                <td><a href="#"><img src="<?= $v['giaidau'] ?>" alt=""></a></td>
                                <td><a href="#"><img src="<?= $v['doi1'] ?>" alt=""></a></td>
                                <td>
                                    <div class="uk-position-relative">
                                        <div class="tyso1">
                                            <?= $v['tyso'] ?>
                                        </div>
                                        <div class="live1"><?= $v['time'] ?></div>
                                        <div class="uk-invisible uk-position-center box10">
                                            <a href="#" class="uk-button uk-button-primary">Highlight</a>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#"><img src="<?= $v['doi2'] ?>" alt=""></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </li>
            </ul>
        </li>
    </ul>
    <script>
        $(window).on('load', function() {
            var h1 = $('.chat').height() - $('.tab1').height();
            $(".boxchat1").height(h1);
        });

        $(window).on('resize', function(){
            var h2 = $('.chat').height() - $('.tab1').height();
            $(".boxchat1").height(h2);
        });
    </script>
</div>
<?php include "footer.php"; ?>