"use strict"

let balance = document.querySelector(".balance");

function cookCoffee(price, name) {
  if (balance.value >= price) {
    balance.value -= price;
    balance.style.backgroundColor = ""; //Вернуть белый фон
    changeDisplayText("Ваш " + name + " готовится");
    startCooking();
  } else {
    changeDisplayText("Недостаточно средств");
    balance.style.backgroundColor = "rgb(255, 50, 50)";
  }
}

function startCooking() {
  changeProgress(100);
  setTimeout(function() {
    changeDisplayText("Ваш кофе готов!");
  },5000);
}
//Планирование
/*let timeout = setTimeout(function() {
 changeDisplayText("Передумали заказывать?");
}, 3000); //Отрабатывается только один раз
let interval = setInterval(function() {
  changeDisplayText("Кофе: " + Date.now());
}, 4000);//отрабатывает пока не отключить(каждый определеный промежуток времени)

setTimeout(function() {
  clearTimeout(timeout);//очищаем таймаут (больше не отрабатывает)
  clearInterval(interval);//очищаем интервал (больше не оотработает)
  console.log("Time and interval cleared")
}, 1000);*/

function changeProgress(percent) {
 let progress = document.querySelector(".progress-bar");
 progress.style.width = percent + "%";
 progress.style.transition = "width 5s";
}

function changeDisplayText(text) {
  let displayText = document.querySelector(".display-text");
  if (text.length > 25) {
   displayText.innerHTML = text.slice(0, 25) + "...";
  } else {
    displayText.innerHTML = text;
  }
}













