// Seleccionando todos los elementos requeridos
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");

// Si se hace clic en el botón Iniciar prueba
start_btn.onclick = () => {
    info_box.classList.add("activeInfo"); // Mostrar cuadro de información
}

// Si se hace clic en el botón Salir del cuestionario
exit_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); // Ocultar cuadro de información
}

// Si se hace clic en el botón Continuar prueba
continue_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); // Ocultar cuadro de información
    quiz_box.classList.add("activeQuiz"); // Mostrar cuadro del cuestionario
    showQuestions(0); // Llamar a la función showQuestions
    queCounter(1); // Pasar 1 parámetro a queCounter
    startTimer(20); // Llamar a la función startTimer
    startTimerLine(0); // Llamar a la función startTimerLine
}

let timeValue = 20;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// Si se hace clic en el botón Reiniciar cuestionario
restart_quiz.onclick = () => {
    quiz_box.classList.add("activeQuiz"); // Mostrar cuadro del cuestionario
    result_box.classList.remove("activeResult"); // Ocultar cuadro de resultados
    timeValue = 20; 
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuestions(que_count); // Llamar a la función showQuestions
    queCounter(que_numb); // Pasar valor que_numb a queCounter
    clearInterval(counter); // Limpiar contador
    clearInterval(counterLine); // Limpiar contador de línea
    startTimer(timeValue); // Llamar a la función startTimer
    startTimerLine(widthValue); // Llamar a la función startTimerLine
    timeText.textContent = "Tiempo Restante"; // Cambiar el texto de timeText a Tiempo Restante
    next_btn.classList.remove("show"); // Ocultar el botón siguiente
}

// Si se hace clic en el botón Salir del cuestionario
quit_quiz.onclick = () => {
    window.location.reload(); // Recargar la ventana actual
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// Si se hace clic en el botón Next Que
next_btn.onclick = () => {
    if (que_count < questions.length - 1) { // Si el recuento de preguntas es menor que la longitud total de preguntas
        que_count++; // Incrementar el valor de que_count
        que_numb++; // Incrementar el valor de que_numb
        showQuestions(que_count); // Llamar a la función showQuestions
        queCounter(que_numb); // Pasar valor que_numb a queCounter
        clearInterval(counter); // Limpiar contador
        clearInterval(counterLine); // Limpiar contador de línea
        startTimer(timeValue); // Llamar a la función startTimer
        startTimerLine(widthValue); // Llamar a la función startTimerLine
        timeText.textContent = "Tiempo Restante"; // Cambiar el texto de timeText a Tiempo Restante
        next_btn.classList.remove("show"); // Ocultar el botón siguiente
    } else {
        clearInterval(counter); // Limpiar contador
        clearInterval(counterLine); // Limpiar contador de línea
        showResult(); // Llamar a la función showResult
    }
}

// Obtener preguntas y opciones de la matriz
function showQuestions(index) {
    const que_text = document.querySelector(".que_text");

    // Crear una nueva etiqueta span y div para pregunta y opción y pasar el valor usando el índice del array
    let que_tag = '<span>' + questions[index].numb + ". " + questions[index].question + '</span>';
    let option_tag = '<div class="option"><span>' + questions[index].options[0] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[1] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[2] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[3] + '</span></div>';
    que_text.innerHTML = que_tag; // Agregar nueva etiqueta span dentro de que_tag
    option_list.innerHTML = option_tag; // Agregar nueva etiqueta div dentro de option_tag

    const option = option_list.querySelectorAll(".option");

    // Establecer el atributo onclick para todas las opciones disponibles
    option.forEach(opt => {
        opt.setAttribute("onclick", "optionSelected(this)");
    });
}

// Crear nuevas etiquetas div para iconos
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

// Si el usuario hace clic en una opción
function optionSelected(answer) {
    clearInterval(counter); // Limpiar contador
    clearInterval(counterLine); // Limpiar contador de línea

    let userAns = answer.textContent; // Obtener opción seleccionada por el usuario
    let correcAns = questions[que_count].answer; // Obtener respuesta correcta del array
    const allOptions = option_list.children.length; // Obtener todos los elementos de option_list

    for (let i = 0; i < allOptions; i++) {
        option_list.children[i].classList.remove("selected"); // Eliminar clase seleccionada de todas las opciones
    }
    answer.classList.add("selected"); // Agregar clase seleccionada a la opción seleccionada

    next_btn.classList.add("show"); // Mostrar el botón siguiente si el usuario seleccionó alguna opción
}

function showResult() {
    info_box.classList.remove("activeInfo"); // Ocultar cuadro de información
    quiz_box.classList.remove("activeQuiz"); // Ocultar cuadro del cuestionario
    result_box.classList.add("activeResult"); // Mostrar cuadro de resultados
    const scoreText = result_box.querySelector(".score_text");
    let message = "Felicitaciones!, has completado el test. "; // Mensaje base

    // Suponiendo que tenemos un array de respuestas del usuario
    // Este array debe ser llenado con las respuestas del usuario en el mismo orden que las preguntas
    let userAnswers = [];

    // Calcular el puntaje total
    let totalScore = 0;
    userAnswers.forEach((answer, index) => {
        if (answer === questions[index].options[0]) {
            totalScore++;
        }
    });

    // Asignar un mensaje de resultado basado en el puntaje total
    if (totalScore <= 3) {
        message += "Recuerda que pedir ayuda es un signo de fortaleza, no de debilidad. Si necesitas apoyo, no dudes en buscarlo.";
    } else if (totalScore <= 6) {
        message += "Recuerda que pedir ayuda es un signo de fortaleza, no de debilidad. Si necesitas apoyo, no dudes en buscarlo.";
    } else {
        message += "Recuerda que pedir ayuda es un signo de fortaleza, no de debilidad. Si necesitas apoyo, no dudes en buscarlo.";
    }

    // Agregando el mensaje completo al elemento scoreText
    scoreText.innerHTML = message;
}

let userAnswers = []; // Array para almacenar las respuestas del usuario

function selectAnswer(questionIndex, answerIndex) {
    // Asegurarse de que la pregunta y la respuesta seleccionadas son válidas
    if (questionIndex >= 0 && questionIndex < questions.length &&
        answerIndex >= 0 && answerIndex < questions[questionIndex].options.length) {
        
        // Agregar la respuesta seleccionada al array de respuestas del usuario
        userAnswers[questionIndex] = answerIndex;

        // Aquí puedes continuar con la lógica para mostrar la siguiente pregunta
        // o calcular el resultado final si es la última pregunta
    } else {
        console.error("Índice de pregunta o respuesta inválido.");
    }
}

// Ejemplo de cómo podrías configurar los botones de respuesta
questions.forEach((question, questionIndex) => {
    question.options.forEach((option, optionIndex) => {
        const button = document.createElement('button');
        button.textContent = option;
        button.addEventListener('click', () => selectAnswer(questionIndex, optionIndex));
        // Aquí agregarías el botón al DOM, por ejemplo, a un contenedor de opciones
    });
});

function startTimer(time) {
    counter = setInterval(timer, 1000);
    function timer() {
        timeCount.textContent = time; // Cambiar el valor de timeCount con el valor de time
        time--; // Disminuir el valor de time
        if (time < 9) { // Si el tiempo es menor a 9
            let addZero = timeCount.textContent; 
            timeCount.textContent = "0" + addZero; // Agregar un 0 antes del valor de timeCount
        }
        if (time < 0) { // Si el tiempo es menor a 0
            clearInterval(counter); // Detener el contador
            timeText.textContent = "Se acabó el tiempo"; // Cambiar el texto de timeText a "Se acabó el tiempo"
            const allOptions = option_list.children.length; // Obtener todos los elementos de option_list
            let correcAns = questions[que_count].answer; // Obtener la respuesta correcta del array
            for (let i = 0; i < allOptions; i++) {
                if (option_list.children[i].textContent == correcAns) { // Si hay una opción que coincide con la respuesta correcta del array
                    option_list.children[i].setAttribute("class", "option correct"); // Agregar el color verde a la opción correcta
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); // Agregar el icono de correcto a la opción correcta
                    console.log("Time Off: Auto selected correct answer.");
                }
            }
            for (let i = 0; i < allOptions; i++) {
                option_list.children[i].classList.remove("disabled");
                if (option_list.children[i].classList.contains("selected")) {
                    option_list.children[i].classList.remove("selected");
                }
            }
            next_btn.classList.add("show"); // Mostrar el botón de siguiente si el usuario seleccionó alguna opción
        }
    }
}

function startTimerLine(time) {
    counterLine = setInterval(timer, 39);
    function timer() {
        time += 1; // Aumentar el valor de time con 1
        time_line.style.width = time + "px"; // Aumentar el ancho de time_line con px por el valor de time
        if (time > 549) { // Si el valor de time es mayor a 549
            clearInterval(counterLine); // Detener el contador de time_line
        }
    }
}

function queCounter(index) {
    // Crear una nueva etiqueta span y pasarle el número de pregunta y el número total de preguntas
    let totalQueCounTag = '<span><p>' + index + '</p> de <p>' + questions.length + '</p> Preguntas</span>';
    bottom_ques_counter.innerHTML = totalQueCounTag;  // Agregar la nueva etiqueta span dentro de bottom_ques_counter
}