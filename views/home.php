<div class="container is-max-widescreen">
    <div class="notification">
         <?php
              //  [author] => admin [tags] => easy [title] => test 1 [rating] => 34
              foreach ($data as $test){
                   echo "<div class='box'>
                                 <div class='title is-1'><strong>{$test['title']}</strong></div>
                                 
                                         <div class='tags has-addons'>
                                            <span class='tag is-dark is-rounded'>{$test['rating']}</span>
                                            <span class='tag is-dark is-success'>{$test['tags']}</span>
                                         </div>
                                         <div class='subtitle is-6'>created by <b>{$test['author']}</b></div>
                                        <a class='button is-success' href='quiz?id={$test['id']}'>Start the quiz</a>
                         </div>";
              }
              ?>
    </div>
</div>