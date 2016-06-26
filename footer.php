<div id="bottomWrapper">
    <h3><i class="fa fa-check-square-o"></i>&nbsp;更新をチェックする！<a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fyasushikobayashi.info%2F'  target='blank'><img id='feedlyFollow' src='http://s3.feedly.com/img/follows/feedly-follow-rectangle-volume-medium_2x.png' alt='follow us in feedly' width='71' height='28'></a></h3>
    <?php if (wp_is_mobile()):?>
        <!-- Twitter -->
        <p><a href="https://twitter.com/jkhayate" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @jkhayate</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
        <!-- Facebook -->
        <p><div class="fb-page" data-href="https://www.facebook.com/yasushikobayashi.info" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/yasushikobayashi.info"><a href="https://www.facebook.com/yasushikobayashi.info">Kobayashi Blog</a></blockquote></div></div></p>
        <!-- Google検索 -->
        <p><style type="text/css">
        @import url(http://www.google.com/cse/api/branding.css);
        </style>
        <div class="cse-branding-bottom" style="background-color:#FFFFFF;color:#000000">
            <div class="cse-branding-form">
                <form action="http://www.google.co.jp/cse" id="cse-search-box" target="_blank">
                    <div>
                        <input type="hidden" name="cx" value="partner-pub-6112624668752806:3985640979" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="text" name="q" size="55" />
                        <input type="submit" name="sa" value="検索" />
                    </div>
                </form>
            </div>
            <div class="cse-branding-logo">
                <img src="http://www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
            </div>
            <div class="cse-branding-text">
                カスタム検索
            </div>
        </div>
    </p>
    <p><script src="https://apis.google.com/js/platform.js" async defer> //ぐぐたす
    {lang: 'ja'}
    </script>
    <div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/110607281455714744822" data-rel="publisher"></div></p>
    <!-- LINE -->
    <p><a href="http://line.me/ti/p/%40jgm1559a"><img height="36" border="0" alt="'stats.label.addfriend' (MISSING TRANSLATION)" src="<?php bloginfo('template_url'); ?>/images/line.png"></a></p>
<?php else:?>
    <div class="bottomLeft">
        <a class="twitter-timeline" href="https://twitter.com/jkhayate" data-widget-id="429228791827660800" height="500" >Tweets by @jkhayate</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div class="bottomRight">
        <div class="fb-page" data-href="https://www.facebook.com/yasushikobayashi.info" data-width="465px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/yasushikobayashi.info"><a href="https://www.facebook.com/yasushikobayashi.info">Kobayashi Blog</a></blockquote></div></div>
        <p><style type="text/css">
        @import url(http://www.google.com/cse/api/branding.css);
        </style>
        <div class="cse-branding-bottom" style="background-color:#FFFFFF;color:#000000">
            <div class="cse-branding-form">
                <form action="http://www.google.co.jp/cse" id="cse-search-box" target="_blank">
                    <div>
                        <input type="hidden" name="cx" value="partner-pub-6112624668752806:3985640979" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="text" name="q" size="55" />
                        <input type="submit" name="sa" value="検索" />
                    </div>
                </form>
            </div>
            <div class="cse-branding-logo">
                <img src="http://www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
            </div>
            <div class="cse-branding-text">
                カスタム検索
            </div>
        </div>
    </p>
    <p><script src="https://apis.google.com/js/platform.js" async defer> //ぐぐたす
    {lang: 'ja'}
    </script>
    <div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/110607281455714744822" data-rel="publisher"></div></p>
    <p><img width="152" height="152" border="0" alt="" src="<?php bloginfo('template_url'); ?>/images/lineqr.png" ></a></p>
</div>
<?php endif;?>
<div class="bottomLeft">
    <h3 id="pop_title">Popular Post</h3>
    <?php
    $wpp = array (
    'range' => 'weekly', /*集計期間の設定（daily,weekly,monthly）*/
    'limit' => 6, /*表示数はmax5記事*/
    'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
    'stats_comments' => '0', /*コメント数は非表示*/
    'stats_views' => '1', /*閲覧数を表示させる*/
    'thumbnail_width' => '140', /*画像のwidth（px）*/
    'thumbnail_height' => '140', /*画像のheight（px）*/
    'post_html' => '<li><span class="pop_thom">{thumb}</span><span class="pop_title">{title}</span><span class="pop_view">{views}PV</span></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
);?>
<?php wpp_get_mostpopular($wpp); ?>
</div>
<div class="bottomRight">
    <?php wp_related_posts()//init.phpの332行目にspanを追加?>
</div>
</div>
<div id="footad">
    <?php if (wp_is_mobile() && has_tag(array(96,102,103))): //禁止タグではスマホは忍者一つ?>
        <script src="http://adm.shinobi.jp/s/036b18e03686c910acd4c4eec36d89bb"></script>
    <?php elseif (wp_is_mobile()): //通常モバイル?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- smartfoot -->
        <ins class="adsbygoogle"
        style="display:inline-block;width:300px;height:250px"
        data-ad-client="ca-pub-6112624668752806"
        data-ad-slot="4654949376"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    <?php else:?>
        <div class="fotterad">
            <script src="http://adm.shinobi.jp/s/036b18e03686c910acd4c4eec36d89bb"></script>
        </div>
        <div class="fotterad">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- smartIN -->
            <ins class="adsbygoogle"
            style="display:inline-block;width:300px;height:250px"
            data-ad-client="ca-pub-6112624668752806"
            data-ad-slot="2851118970"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="fotterad">
            <script src="http://adm.shinobi.jp/s/036b18e03686c910acd4c4eec36d89bb"></script>
        </div>
    <?php endif;?>
</div>
<footer>
    <div id="footerinner">
        <p id="copy">Copyright&copy;
            <?php bloginfo('name').','.the_date('Y');?>
            All Rights Reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
