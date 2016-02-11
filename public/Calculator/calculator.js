var firstInputField = document.getElementById('firstInputField');
var operandField = document.getElementById('operandField');
var secondInputField = document.getElementById('secondInputField');
var firstArray = [];
var secondArray = [];
var firstField;
var secondField;
var operandClicked = false;
var equalClicked = false;
var signClicked = false;
var decimalCount1 = 0;
var decimalCount2 = 0;
var operand;
var solution;
var test = document.getElementsByTagName('button');



var listenerTest = function(event) {
	

		// This is the if condition for input in the first field. 
		// It includes nested if conditions for decimals, sign change, and starting zero's.


		if (operandClicked == false && event.target.hasAttribute('data-number')){
			number = event.target.getAttribute('data-number');
			firstArray.push(number);
			console.log(firstArray);
		
			if (event.target.hasAttribute('data-decimal') && decimalCount1 != 0) {
				firstArray.pop(number);
			} else if (event.target.hasAttribute('data-decimal') && decimalCount1 == 0) {
				decimalCount1++;
			}

			
			if (event.target.hasAttribute('data-sign') && signClicked == false && firstArray[1] != undefined) {
				firstArray.pop(number);
				firstArray.unshift('-');
				// console.log(firstArray);
				signClicked = true;
			} else if (event.target.hasAttribute('data-sign') && signClicked == true && firstArray[1] != undefined) {
				firstArray.pop(number);
				firstArray.shift();
				// console.log(firstArray);
				signClicked = false;
			}


			if (isNaN(parseFloat(firstArray.join(''))) && firstArray[0] != '.' && firstArray[0] != '0') {
				firstArray = [];
			} else if (firstArray[0] == '0') {
				firstArray.shift();
			} else {
				firstField = parseFloat(firstArray.join(''));
				firstInputField.value = firstArray.join('');
			}

		
		}


	


// This is the if condition for input in the second field. 
// It includes nested if conditions for decimals, sign change, and starting zero's.


	if (operandClicked == true && event.target.hasAttribute('data-number')) {
		number = event.target.getAttribute('data-number');
		secondArray.push(number);
		
		
		if (event.target.hasAttribute('data-decimal') && decimalCount2 != 0) {
			secondArray.pop(number);
		} else if (event.target.hasAttribute('data-decimal') && decimalCount2 == 0) {
			decimalCount2++;
		}

		
		if (event.target.hasAttribute('data-sign') && signClicked == false && secondArray[1] != undefined) {
			secondArray.pop(number);
			secondArray.unshift('-');
			signClicked = true;
		} else if (event.target.hasAttribute('data-sign') && signClicked == true && secondArray[1] != undefined) {
			secondArray.pop(number);
			secondArray.shift();
			signClicked = false;
		}


		if (isNaN(parseFloat(secondArray.join(''))) == true && secondArray[0] != '.') {
			secondArray = [];
		} else if (secondArray[0] == '0') {
			secondArray.shift();
		} else {
			secondField = parseFloat(secondArray.join(''));
			secondInputField.value = secondField;
		}
		// console.log(secondField);
	}


	




// This is the if condition for input for the operator field. 
// Resets the first array and "signClicked", sets "operandClicked" to true, and assigns
// "operand" the string of the operation that was input. This will be used to trigger the appropriate condition later.


	if (firstField != undefined && event.target.hasAttribute('data-operand')) {
		operand = event.target.getAttribute('data-operand');
		firstArray = [];
		operandClicked = true;
		signClicked = false;
		operandField.value = operand;
		// console.log(operand);
	}

	



// This is the if condition for the "equals" sign. It can only be triggered if the second field has some value, 
// and if "equals" hasn't been clicked yet. Resets the value of the second and operation fields, 
// displays the solution in the first field, resets "equalClicked", "operandClicked", and both "decimalCount"'s.


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

		decimalCount1 = 0;
		decimalCount2 = 0;

		// console.log(firstField);
	}

	



// This is the if condition for the "clear" button. Resets all relevant variables and arrays.


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
		decimalCount1 = 0;
		decimalCount2 = 0;
		operand = undefined;
		solution = undefined;

	}








	if (event.target.hasAttribute('data-percent')) {
		
		if (operandClicked == false && firstField != undefined) {
			var tempPercent = parseFloat(firstArray.join(''));
			tempPercent /= 100;
			firstArray = tempPercent.toString().split('');
			firstInputField.value = parseFloat(firstArray.join(''));
		}

		if (operandClicked == true && secondField != undefined) {
			var tempPercent = parseFloat(secondArray.join(''));
			tempPercent /= 100;
			secondArray = tempPercent.toString().split('');
			secondInputField.value = parseFloat(secondArray.join(''));
		}
	}
};



// Add event listeners to all buttons.
for(i = 0; i < test.length; i++) {
	test[i].addEventListener('click', listenerTest);
}

		