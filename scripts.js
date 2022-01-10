// document.write('Home Work_7')
console.log('Home Work_7');


let user = {
	name: 'Alex',
	age: 25,
	phone: 1234567,
	hello : function(){
		alert('Привет! Меня зовут '+ user.name)
	}
};

console.log(user);
console.log(user.age);
console.log(user.name);
console.log(user.phone);
console.log(user.hello);
// user.hello();

user.bey = function(){
	alert('До скорых встреч!')
}
// user.bey();

console.log(user);

user.setName = function (name) {
	user.name = name
}
console.log(user);

user.setName('Mike');

console.log(user);
// user.hello();

user.setName = function (name) {
	this.name = name
}
user.setName('Bob');
// user.hello();

let array = [];

for (let i = 0; i <= 10; i++){
	array.push(i);
}
//	console.log(array);

for (let j = array.length-1; j >= 0; j--) {
//	console.log(array[j]);
}

function revArray (array) {
	let array_2 = [];
	for (let j = array.length - 1; j >= 0; j--) {
		array_2.push(array[j])
	}
	return array_2
}
//	console.log(revArray([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
	
//---------------------------------------------------

let User = function () {
	this.name = 'NoName',
	this.age = 0,
	this.canwalk = false;
};

let userBob = new User();
let userMike = new User();
let userJohn = new User();

console.log(userBob, typeof userBob);

userBob.name = 'Bob';
userMike.name = 'Mike';
userJohn.name = 'John';

console.log(userBob);
console.log(userMike);
console.log(userJohn);

userMike.age = 21;
userBob.age = 55;
userJohn.age = 11;
console.log(userBob);
console.log(userMike);
console.log(userJohn);

let Animal = function (name, walk){
	this.name = name;
	this.canwalk = walk;
};

let dog = new Animal('собака', true);
	cat = new Animal('кот', true);

	console.log(dog);
	console.log(cat);

dog.canTalk = 'May';
	console.log(dog);

//-----------------------------------------------

let Calc = function () {
	this.on_off = function () {
	
		this.include = prompt('Для дальнейшей работы необходимо включить колькулятор. Включите колькулятор', 'on/off');
		
		switch (this.include == 'on') {
			case true:
				alert('Колькулятор готов к работе');
			calc.get();
			break;
			
			case false:
				alert('Для включения колькулятора введите < on >');
			break;
				default: alert('В default нет необходимости');
		}
	};

	this.get = function () {
		this.a = +prompt('Укажите число <а> ');
		this.b = +prompt('Укажите число <b> ');
		this.operator = prompt('Введите операцию: +, -, *, /');
		this.operation();
	};

	this.operation = function () {
		switch(this.operator) {
			case '+': 
				this.result =  this.a + this.b; 
			break;
			case '-': 
				this.result =  this.a - this.b;
			break;
			case '*': 
				this.result =  this.a * this.b;
			break;
			case '/': 
				this.result =  this.a / this.b;
			break;
				default: this.result = 0;
		}
		this.show();
	};

	this.show = function () {

		alert(this.a + ' ' + this.operator + ' ' + this.b + ' = ' + this.result);
	};
};
 let calc = new Calc;
//	console.log(calc);
 calc.on_off();