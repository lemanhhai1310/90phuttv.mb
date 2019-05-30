</section>
<div id="modal-media-image" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <img src="http://www.gmodules.com/gadgets/proxy?container=ig&url=https://i.imgur.com/I61fJxt.gif" alt="">
    </div>
</div>
<script>
    setTimeout(function () {
        UIkit.modal("#modal-media-image").show();
    }, 3000);
</script>
<style>
    #modal-media-image img{
        max-width: 700px;
        width: 100%;
    }
</style>
</body>
</html>