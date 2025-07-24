// TODO recharge de la page avec quiz lancé = affichage du quiz 
document.addEventListener('DOMContentLoaded', () => {
    const quizData = JSON.parse(localStorage.getItem('quizData')) || {};

    const steps = {};
    document.querySelectorAll('.component-quiz__step').forEach((stepDiv, index) => {
        steps[index + 1] = stepDiv;
    });

    const buttons = document.querySelectorAll('.component-quiz__btn');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const step = parseInt(button.dataset.question);
            const value = button.dataset.value;
            quizData[`question${step}`] = value;

            // Sauvegarde locale
            localStorage.setItem('quizData', JSON.stringify(quizData));

            steps[step].classList.add('hidden');

            const nextStep = steps[step + 1];

            if (nextStep) {
                const previousAnswerElement = document.getElementById(`previous-answer-${step + 1}`);
                if (previousAnswerElement) {
                    const readableText = getReadableAnswer(step, value);
                    previousAnswerElement.textContent = `Vous avez indiqué : "${readableText}"`;
                }

                nextStep.classList.remove('hidden');
                const onTransitionEnd = () => {
    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    targetSection.removeEventListener('transitionend', onTransitionEnd);
};

targetSection.addEventListener('transitionend', onTransitionEnd);
targetSection.classList.add('opacity-100');
                
                // nextStep.scrollIntoView({ behavior: 'smooth' });
            } else {
                setTimeout(() => {
                    scrollToRecommendations(quizData);
                }, 50);
            }
        });
    });

    // Boutons retour
    document.querySelectorAll('.component-quiz__btn-return').forEach(button => {
        button.addEventListener('click', () => {
            const currentStepDiv = button.closest('.component-quiz__step');
            const currentStep = parseInt(currentStepDiv.dataset.step);
            const prevStep = currentStep - 1;

            if (steps[prevStep]) {
                currentStepDiv.classList.add('hidden');
                steps[prevStep].classList.remove('hidden');
                steps[prevStep].scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    function scrollToRecommendations(data) {
        const sectionId = `${data.question1}-${data.question2}`;
        const targetSection = document.getElementById(sectionId);

        if (targetSection) {
            targetSection.classList.remove('hidden');
            setTimeout(() => targetSection.classList.add('opacity-100'), 10);
        }
    }

    function getReadableAnswer(step, value) {
        const labels = {
            1: {
                deb: "Débutant",
                int: "Intermédiaire",
                aut: "Avancé"
            },
            2: {
                depannage: "Dépannage",
                init: "Démarrage / Initialisation",
                formation: "Formation"
            }
        };
        return labels[step]?.[value] || value;
    }

    // Bouton de lancement du quiz
    const startQuizBtn = document.getElementById('start-quiz-btn');
    const startQuizBtn2 = document.getElementById('start-quiz-btn-2');
    const firstStep = document.getElementById('questionnaire');

    startQuizBtn?.addEventListener('click', () => {
        firstStep.classList.remove('hidden');
        firstStep.scrollIntoView({ behavior: 'smooth' });
    });

    startQuizBtn2?.addEventListener('click', () => {
        firstStep.classList.remove('hidden');
        firstStep.scrollIntoView({ behavior: 'smooth' });
    });
});

