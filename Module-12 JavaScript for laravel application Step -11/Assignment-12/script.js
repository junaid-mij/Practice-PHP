const weightInput = document.getElementById("weightInput");
const heightInput = document.getElementById("heightInput");
const calculateBtn = document.getElementById("calculateBtn");
const resultDiv = document.getElementById("resultDiv");

calculateBtn.addEventListener("click", (event) => {
  event.preventDefault();

  const weight = parseFloat(weightInput.value);
  let heightFeet = 0;
  let heightInches = 0;

  if (heightInput.value.includes(".")) {
    [heightFeet, heightInches] = heightInput.value.split(".");
    heightFeet = parseFloat(heightFeet);
    heightInches = parseFloat(heightInches);
  } else {
    heightFeet = parseFloat(heightInput.value);
  }

  const heightInchesTotal = heightFeet * 12 + heightInches;
  const heightMeters = heightInchesTotal * 0.0254;
  const bmi = weight / (heightMeters * heightMeters);

  resultDiv.innerText = `Your BMI is: ${bmi.toFixed(2)}`;
});
