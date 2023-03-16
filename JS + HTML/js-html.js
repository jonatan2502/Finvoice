// 1. Imprimir números impares mayores a 100 y menores a 150
// EJM. 101,103,105,107, n...

const printNumbers = function () {
	for (let i = 100; i < 150; i++) {
		if (i % 2) console.log(i);
	}
};

printNumbers();

// 2. Crea una función que permita sumar, restar, multiplicar y dividir. Los valores para calcular deben ser enviados mediante inputs que solo permitan números enteros,
// el evento se iniciará a la pulsación de un botón llamado "calcular", Imprimir resultados por pantalla.

const calculator = function (operation, num1, num2) {
	if (operation === 'add') return num1 + num2;
	else if (operation === 'subtract') return num1 - num2;
	else if (operation === 'multiply') return num1 * num2;
	else if (operation === 'divide') {
		if (num2 === 0) return 'No se puede dividir entre 0';
		return num1 / num2;
	}
};

const handleChange = function name() {
	let input1 = document.getElementById('firstNumber');
	let input2 = document.getElementById('secondNumber');
	input1.value = Math.round(parseInt(input1.value));
	input2.value = Math.round(parseInt(input2.value));
};

const handleClick = function () {
	let num1 = parseInt(document.getElementById('firstNumber').value);
	let num2 = parseInt(document.getElementById('secondNumber').value);
	let operation = document.getElementById('operations').value;
	let result = calculator(operation, num1, num2);
	document.getElementById('result').innerHTML = result;
};

const button = document.getElementById('calculate');
const inputNum1 = document.getElementById('firstNumber');
const inputNum2 = document.getElementById('secondNumber');

button.addEventListener('click', handleClick);
inputNum1.addEventListener('change', handleChange);
inputNum2.addEventListener('change', handleChange);



// 4. A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul.

let vehiculo = [
	{ color: 'rojo', marca: 'bmw', capacidad: 11 },
	{ color: 'azul', marca: 'fiat', capacidad: 2 },
	{ color: 'negro', marca: 'hyundai', capacidad: 6 },
	{ color: 'amarillo', marca: 'jeep', capacidad: 15 },
	{ color: 'azul', marca: 'citroen', capacidad: 20 },
	{ color: 'azul', marca: 'renault', capacidad: 12 },
	{ color: 'rojo', marca: 'ford', capacidad: 4 },
	{ color: 'gris', marca: 'toyota', capacidad: 8 },
];

const filterCars = function(vehicles) {
    return vehicles.filter((car) => car.capacidad > 10 && car.color === 'azul')
}

console.log(filterCars(vehiculo))


