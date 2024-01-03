const quizData = [
    {
        question: "What is the capital of France?",
        options: ["Berlin", "Madrid", "Paris", "Rome"],
        correctAnswer: "Paris"
    },
    {
        question: "Which planet is known as the Red Planet?",
        options: ["Mars", "Jupiter", "Venus", "Saturn"],
        correctAnswer: "Mars"
    },
    
    // Add more questions as needed
];

const questionElement = document.getElementById("question");
const optionsContainer = document.getElementById("options-container");
const nextButton = document.getElementById("next-button");
let currentQuestionIndex = 0;
let score = 0;


function loadQuestion() {
    const currentQuestion = quizData[currentQuestionIndex];
    questionElement.textContent = currentQuestion.question;

    optionsContainer.innerHTML = "";
    currentQuestion.options.forEach((option) => {
        const button = document.createElement("button");
        button.textContent = option;
        button.addEventListener("click", () => checkAnswer(option));
        optionsContainer.appendChild(button);
    });
}

function checkAnswer(selectedOption) {
    const correctAnswer = quizData[currentQuestionIndex].correctAnswer;

    if (selectedOption === correctAnswer) {
        score++;
    }

    currentQuestionIndex++;

    if (currentQuestionIndex < quizData.length) {
        loadQuestion();
    } else {
        showResults();
    }
}

function showResults() {
    questionElement.textContent = `Your Score: ${score} out of ${quizData.length}`;
    optionsContainer.innerHTML = "";
    nextButton.style.display = "none";

    const userName = prompt("Enter your name:");
    const formData = new FormData();
    formData.append("username", userName);
    formData.append("score", score);
    

    fetch("submit_score.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));
}



 

nextButton.addEventListener("click", loadQuestion);

// Initial load
loadQuestion();
