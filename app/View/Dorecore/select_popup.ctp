<style>
/* common setting */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    background-color: #fff;
    overflow: hidden;
    z-index: 101;
}
.popup_inner {
    padding: 20px;
}
#overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: 0.7;
    z-index: 100;
}

/* individual setting */
#popup1 {
    width: 600px;
}
</style>

<script>
(function($){
$(function(){
    $(document)
        .on('click', '.popup_btn', function(){
            var $popup = $((this).attr('href'));

            // ポップアップの幅と高さからmarginを計算する
            var mT = ($popup.outerHeight() / 2) * (-1) + 'px';
            var mL = ($popup.outerWidth() / 2) * (-1) + 'px';

            // marginを設定して表示
            $('.popup').hide();
            $popup.css({
                'margin-top': mT,
                'margin-left': mL
            }).show();
            $('#overlay').show();

            return false;
        })
        .on('click', '.close_btn, #overlay', function(){
            $('.popup, #overlay').hide();
            return false;
        });
});
})(jQuery);
</script>

<div id="popup1" class="popup">
<div class="popup_inner">
<h4>タイトル</h4>
<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
<div>
<a href="#close_btn" class="close_btn">閉じる</a>
</div>
</div>
</div>
<div id="overlay"></div>