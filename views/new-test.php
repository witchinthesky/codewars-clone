<div class="container is-max-widescreen">
    <div class="notification">
        <!-- dynamic form for test creation -->
        <form action="new-test" method="post" >
            <h3 class="title is-3">Create a new test</h3>
            <!-- create test title  -->
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label for="" class="label">Test title</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <input type="email" class="input" required>
                    </div>
                </div>
            </div>
            <div class="column is-6">
                <!-- test question -->
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Test title</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <input type="email" class="input" required>
                        </div>
                    </div>
                </div>
                <!-- add new question -->
                <div class="field">
                    <button class="button is-success" onclick=addNewQuestion()>
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- submit -->
                <div class="field">
                    <button type="submit" class="button is-success">
                        Save Test
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function addNewQuestion(){

    }
</script>