var firstInputField = document.getElementById('firstInputField');
var operandField = document.getElementById('operandField');
var secondInputField = document.getElementById('secondInputField');
var firstArray = [];
var secondArray = [];
var firstField;
var secondField;
var operandClicked = false;
var equalClicked = false;
var operand;
var solution;
var test = document.getElementsByTagName('button');



var listenerTest = function(event) {
	// Inputs appropriate value into field.

	if (operandClicked == false && event.target.hasAttribute('data-number')){
		number = event.target.getAttribute('data-number');
		firstArray.push(number);
		firstField = parseInt(firstArray.join(''));
		// console.log(firstField);
		firstInputField.value = firstField;
	}


	if (operandClicked == true && event.target.hasAttribute('data-number')) {
		number = event.target.getAttribute('data-number');
		secondArray.push(number);
		secondField = parseInt(secondArray.join(''));
		secondInputField.value = secondField;
		// console.log(secondField);
	}


	if (firstField != undefined && event.target.hasAttribute('data-operand')) {
		operand = event.target.getAttribute('data-operand');
		firstArray = [];
		operandClicked = true;
		operandField.value = operand;
		// console.log(operand);
	}

	if (secondField != undefined && equalClicked == false && event.target.hasAttribute('data-equals')) {
		secondArray = [];

		if (operand == '+') {
			solution = firstField + secondField;
			// console.log(solution);
		}

		if (operand == '-') {
			solution = firstField - secondField;
			// console.log(solution);
		}

		if (operand == '*') {
			solution = firstField * secondField;
			// console.log(solution);
		}

		if (operand == '/') {
			solution = firstField / secondField;
			// console.log(solution);
		}

		operandField.value = ' ';
		secondInputField.value = ' ';
		firstField = solution;
		firstInputField.value = firstField;
		secondField = undefined;
		equalClicked = false;
		operandClicked = false;
		// console.log(firstField);
	}

	if (event.target.hasAttribute('data-clear')) {

		firstInputField.value = ' ';
		operandField.value = ' ';
		secondInputField.value = ' ';
		firstArray = [];
		secondArray = [];
		firstField = undefined;
		secondField = undefined;
		operandClicked = false;
		equalClicked = false;
		operand = undefined;
		solution = undefined;

	}
};



// Have all events trigger the same function.
for(i = 0; i < test.length; i++) {
	test[i].addEventListener('click', listenerTest);
}

		