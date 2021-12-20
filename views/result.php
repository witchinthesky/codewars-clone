<?php
    $color = $data['message'] == 'Fail' ? "is-danger" : "is-success";
    echo "<section class='hero $color'>";
?>
    <div class="hero-body">
        <div class="container is-max-widescreen">
            <h1 class="title is-3"><strong><?=$data['rcount']?></strong> right answers</h1>
            <h1 class="title is-3"><?=$data['message']?></h1>
        <?php

        $test = $data['test']['tests'];
        $n = $data['test']['total'];
        $answers = $data['answer'];

        for($i = 0; $i < $n; $i++){
            echo"
                    <div class='box' id='$i'>
                        <div class='title is-5' style='color: black'>{$test[$i]['question']}</div>
                        <div class='control'>";

            for($j = 0; $j < count($test[$i]['answers']); $j++){
                echo "";
                if (array_key_exists($i, $answers)) {
                    if ($j == $answers[$i]) {
                        $color = ($test[$i]['index'] == $answers[$i]) ? 'has-background-success' : 'has-background-danger';
                        echo "<label class='radio $color'>
                            <input type='radio' disabled>
                                {$test[$i]['answers'][$j]}
                        </label><br>";
                    }
                    else {
                        echo "<label class='radio'>
                            <input type='radio' disabled>
                            {$test[$i]['answers'][$j]}
                      </label><br>";
                    };
                }
                else {
                    echo "<label class='radio'>
                            <input type='radio' disabled>
                            {$test[$i]['answers'][$j]}
                      </label><br>";
                };
            }

            echo"</div>";
            echo "</select>
                    </div>
                ";
        }
        ?>
        </div>
    </div>
</section>
</body></html>