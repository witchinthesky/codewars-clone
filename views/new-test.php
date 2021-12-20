<div class="container is-max-widescreen">
    <div class="notification">
        <!-- form for test creation -->

            <h3 class="title is-3">Create a new test</h3>
            <div class="columns">
                <div class="column">
                    <!-- text upload instruction -->
                        <p class="subtitle is-5">
                            Please upload <b>json</b> file formatted like example below
                        </p>
                            <pre class="hero is-dark">{
    "tests":[
        {
            "question": "Question 1?",
            "answers":[
                "answer 1",
                "answer 2",
                "answer 3",
                "answer 4"
            ],
            "index": index of right answer
        },
    ],
    "total": questions count
}
</pre>
                </div>

                <div class="column is-left">
                    <div class="box">
                        <form action="new-test" method="post" enctype="multipart/form-data">
                        <!-- create test title  -->
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Title: </label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input type="text" class="input" name="title" required>
                                </div>
                            </div>
                        </div>
                        <!-- create test rating  -->
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Rating: </label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input type="number" class="input" name="rating" required>
                                </div>
                            </div>
                        </div>
                        <!-- create test difficulty  -->
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Difficulty: </label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="select is-primary">
                                        <select name="level">
                                            <option value="training">Training</option>
                                            <option value="easy">Easy</option>
                                            <option value="moderate">Moderate</option>
                                            <option value="hard">Hard</option>
                                            <option value="insane">Insane</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- test question -->
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Question: </label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="file is-success is-boxed">
                                        <label class="file-label">
                                            <input class="file-input" type="file" accept=" application/json" name="question" required>
                                            <span class="file-cta">
                                                <span class="file-icon">
                                                    <i class="fas fa-file-upload fa-lg"></i>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- submit -->
                        <div class="field has-addons has-addons-right">
                            <button type="submit" class="button is-success" name="submit">
                                Save Test
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</body></html>