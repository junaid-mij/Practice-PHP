function multiplicationTable(num) {
  let table = "";
  for (let i = 1; i <= 10; i++) {
    const product = num * i;
    table += `<tr><td>${num}</td><td>x</td><td>${i}</td><td>=</td><td>${product}</td></tr>`;
  }
  return table;
}

const btnGenerate = document.querySelector(".btn-generate");
const numberInput = document.getElementById("number");
const tableBody = document.getElementById("tableBody");

btnGenerate.addEventListener("click", function (e) {
  e.preventDefault();
  const num = parseInt(numberInput.value, 10);

  if (isNaN(num) || num < 0 || num > 100) {
    tableBody.innerHTML = `<tr><td colspan="5" class="text-center">Please enter a valid number between 0 and 100.</td></tr>`;
  } else {
    const table = multiplicationTable(num);
    tableBody.innerHTML = table;
  }
});
