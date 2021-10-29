// Mobile hamburger menu

document.addEventListener('DOMContentLoaded', function (event) {
  const btn = document.querySelector('.mobile-menu-button');
  const menu = document.querySelector('.mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
});

// Calculating and displaying quiz result when submitted

document.getElementById('submit-btn').addEventListener('click', () => {
  const questions = [
    document.getElementsByClassName('question-1'),
    document.getElementsByClassName('question-2'),
    document.getElementsByClassName('question-3'),
    document.getElementsByClassName('question-4'),
    document.getElementsByClassName('question-5'),
  ];

  let correct = 0;

  questions.forEach((question) => {
    for (let i = 0; i < question.length; i++) {
      const answer = question[i];

      if (answer.checked && answer.dataset.correct == 'true') {
        correct++;
      }
    }
  });

  document.getElementById('correct-result').innerHTML =
    'You got ' + correct + '/' + questions.length + ' correct.';
});
