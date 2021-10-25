<?php

// require __DIR__ . '/classes/class-fetch.php';

// $db = new fetch;
// $questionArray = $db->getQuestion(1);
// $answerArray = $db->getAnswer(1);

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';


$db = new fetch;
$questionArray = $db->getQuestion($number);

$db = new fetch;
$answerArray = $db->getAnswer($number);


?>

<!-- <button id="button">Click</button>

<div id="answers">

</div> -->

<!-- <script>
    let correct;

    function fetchAnswers() {
        fetch("quiz-fetch.php")
            .then(response => response.json())
            .then(answers => {
                answers.forEach(answer => {
                    console.log(answer.answers);
                    let radiobox = document.createElement("input");
                    radiobox.type = 'radio';
                    radiobox.id = answer.id;
                    radiobox.name = answer.question_id;
                    radiobox.value = answer.id;
                    let label = document.createElement("label");
                    label.htmlFor = answer.id;
                    label.innerText = answer.answers;
                    let div = document.createElement("div");
                    div.appendChild(radiobox);
                    div.appendChild(label);
                    document.getElementById("answers").appendChild(div);
                    if (answer.correct == 1) {
                        correct = answer.id;
                    };
                });
            });
    }

    window.addEventListener("load", () => {
        fetchAnswers();
    });

    document.getElementsByName("1").addEventListener("click", (x) => {
        console.log(this);
    });
</script> -->


<form action="result.php" method="post" id="quiz">

    <ol>

        <li>

            <h3>WordPress is a...</h3>

            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                <label for="question-1-answers-A">A) Software </label>
            </div>

            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B">B) Web App</label>
            </div>

            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-C">C) CMS</label>
            </div>

            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                <label for="question-1-answers-D">D) Other</label>
            </div>

        </li>

        <li>

            <h3>SEO is Part Of...</h3>

            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                <label for="question-2-answers-A">A) Video Editing</label>
            </div>

            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                <label for="question-2-answers-B">B) Graphic Designing</label>
            </div>

            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                <label for="question-2-answers-C">C) Web Designing</label>
            </div>

            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                <label for="question-2-answers-D">D) Digital Marketing</label>
            </div>

        </li>

        <li>

            <h3>PHP is a....</h3>

            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                <label for="question-3-answers-A">A) Server Side Script</label>
            </div>

            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                <label for="question-3-answers-B">B) Programming Language</label>
            </div>

            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                <label for="question-3-answers-C">C) Markup Language</label>
            </div>

            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                <label for="question-3-answers-D">D) None Of Above These</label>
            </div>

        </li>

        <li>

            <h3>Localhost IP is..</h3>

            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                <label for="question-4-answers-A">A) 192.168.0.1</label>
            </div>

            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                <label for="question-4-answers-B">B) 127.0.0.0</label>
            </div>

            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                <label for="question-4-answers-C">C) 1080:80</label>
            </div>

            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                <label for="question-4-answers-D">D) Any Other</label>
            </div>

        </li>

        <li>

            <h3>Webdevtrick Is For</h3>

            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                <label for="question-5-answers-A">A) Web Designer</label>
            </div>

            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                <label for="question-5-answers-B">B) Web Developer</label>
            </div>

            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                <label for="question-5-answers-C">C) Graphic Designer</label>
            </div>

            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                <label for="question-5-answers-D">D) All Above These</label>
            </div>

        </li>

    </ol>

    <input type="submit" value="Submit" class="submitbtn" />

</form>
