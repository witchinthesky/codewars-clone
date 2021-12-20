<div class="container is-max-widescreen">
    <div class="notification">
        <div class="media">
            <div class="column is-2">
                <p class="title is-1">
                    <?php echo UserController::user()?>
                </p>
                <img src="https://agile.yakubovsky.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                     height="240" width="240">
            </div>

            <div class="media-content right">
                <div class="column is-4">
                    <p class="title is-6"> Success submit test: <span class="tag is-success"><?=$data['success']?></span></p>
                    <progress class="progress is-success" value="<?=$data['success']?>" max="<?=$data['tests_max']?>">60%</progress>
                    <p class="title is-6">Created Test: <span class="tag is-dark"><?=$data['created']?></span></p>
                    <progress class="progress is-dark" value="<?=$data['created']?>" max="<?=$data['created_max']?>">30%</progress>
                    <p class="title is-6">Wrong Test: <span class="tag is-danger"><?=$data['wrong']?></span></p>
                    <progress class="progress is-danger" value="<?=$data['wrong']?>" max="<?=$data['tests_max']?>">90%</progress>
                </div>
            </div>
        </div>


    </div>
</div>

</body></html>