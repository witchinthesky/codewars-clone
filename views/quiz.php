<div class="container is-max-widescreen">
    <div class="notification">
        <?php
            for($i = 0; $i < $data['total']; $i++){
                echo"
                    <div class='box' id='$i'>
                        <p class='title is-5'>{$data['tests'][$i]['question']}</p>
                        <div class='control'>";

                        for($j = 0; $j < count($data['tests'][$i]['answers']); $j++){
                            echo "<label class='radio'>
                                    <input type='radio' name='$i' value='$j'>
                                    {$data['tests'][$i]['answers'][$j]}</label>
                                    <br>";
                        }

                echo"</div><br>";
                        echo"<div class='buttons has-addons'>
                                <button class='button is-rounded is-success is-outlined' onclick='openPrevious($i)'";
                            echo $i == 0 ? "disabled " : " ";
                        echo">
                                    Previous 
                                </button>
                                <button class='button is-rounded is-outlined' onclick='skipQuestion($i)'>
                                    Skip
                                </button>
                                <button class='button is-rounded is-success is-outlined'";
                        echo $i == $data['total'] - 1 ? "disabled " : " ";
                        echo "onclick='openNext($i)'>
                                    Next 
                                </button>
                        </div>";

                echo "</select>
                    </div>
                ";
            }
        ?>
    </div>
</div>

<script>

    var tabcontent = document.getElementsByClassName("box");
    for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById(0).style.display = "block";

    function skipQuestion(q_index){
        var tabcontent = document.getElementsByClassName("box");
        for (var i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        document.getElementById(q_index + 1).style.display = "block";
    }

    function openNext(q_index) {

        var tabcontent = document.getElementsByClassName("box");
        for (var i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        document.getElementById(q_index + 1).style.display = "block";
    }
    function openPrevious(q_index) {

        var tabcontent = document.getElementsByClassName("box");
        for (var i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        document.getElementById(q_index - 1).style.display = "block";
    }
</script>