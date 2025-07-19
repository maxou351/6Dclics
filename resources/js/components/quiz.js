document.addEventListener('DOMContentLoaded', () => {
    const quizData = {};

    const steps = {
        1: document.getElementById('quiz-step-1'),
        2: document.getElementById('quiz-step-2'),
    };

    const buttons = document.querySelectorAll('.component-quiz__btn');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const step = button.parentElement.parentElement.dataset.step;
            const value = button.dataset.value;
            quizData[`question${step}`] = value;

            steps[step].classList.add('hidden');

            const nextStep = steps[parseInt(step) + 1];
            if (nextStep) {
                nextStep.classList.remove('hidden');
            } else {
                // fin du quiz
                scrollToRecommendations(quizData);
            }
        });
    });

    function scrollToRecommendations(data) {
        let sectionId = `${data.question1}-${data.question2}`;
        console.log(sectionId);

        let targetSection = document.getElementById(sectionId);
        console.log(targetSection.classList);

        targetSection.classList.remove('hidden');
        // targetSection.classList.remove('hidden');
        setTimeout(() => targetSection.classList.add('opacity-100'), 10);
        console.log(targetSection.classList);
    }

    const startQuizBtn = document.getElementById('start-quiz-btn');
    const firstStep = document.getElementById('questionnaire');

    startQuizBtn?.addEventListener('click', () => {
        firstStep.classList.remove('hidden');
        console.log("click")
        console.log(firstStep)
        console.log(firstStep.classList)
        firstStep.scrollIntoView({ behavior: 'smooth' });
    });
});
