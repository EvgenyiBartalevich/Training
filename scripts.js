// Задание 1
let firstName = prompt('Ваше имя?', 'Evgeniy');
    age = prompt('Ваш возрост?', 32);
    city = prompt('Город проживания?', 'Minsk');
    phone = prompt('Ваш телефон?', '+375291111111');
    email = prompt('Ваш почтовый ящик?', 'evgeniy_b@mail.ru');
    company = prompt('Ваше место работы?', '"OOO 123"');
console.log('Меня зовут' + ' ' + firstName);
console.log('Мне' + ' ' + age + ' ' + 'года');
console.log('Я проживаю в городе' + ' ' + city + ' ' + 'и работаю в' + ' ' + company);
console.log('Мои контактные данные:' + ' ' + phone,';'+' ' + email);

// Задание 2
let year = 1989;
    function Year(age){
        return 2021 - age;
    }
    console.log(2021 - age);
    console.log(firstName + ' ' + ' ' + 'родился в' + ' ' + year + ' ' + 'году.');

// Задание 3
let str = '1, 2, 3, 4, 5, 6';
if ([1 + 2 + 3] == [4 + 5 + 6]){
    alert('ДА!');
}
    else{
        alert('НЕТ!');
    }
console.log('НЕТ!');

// Задание 4
let a = 1;
    a1 = 0;
    a2 = -3;
    if(a > 0) {
        console.log('Верно!');
    } else {
        console.log('Неверно!');
    }
    if(a1 > 0) {
        console.log('Верно!');
    } else {
        console.log('Неверно!');
    }
    if(a2 > 0) {
        console.log('Верно!');
    } else {
        console.log('Неверно!');
    }

    // Задание 5
    let q = 10;
        b = 2;
        w = 45;
        function num_1(q, b){
            return q + b;
        }
        console.log(q + b);

        function num_2(q, b){
            return q - b;
        }
        console.log(q - b);

        function num_3(q, b){
            return q * b;
        }
        console.log(q * b);

        function num_4(q, b){
            return q / b;
        }
        console.log(q / b);

        function sum(w){
            return Math.pow(w, 2);
        }
        console.log(Math.pow(w, 2));
if(45 > 1){
    console.log('Сумма чисел возведина в квадрат');
} else {
    console.log('Неверное значение');
}

// Задание 6
if(2 < q < 11 || 6 <= b < 14 ){
    console.log('Верно');
    } else {
            console.log('Неверно');
    }

// Задание 7
let n = prompt('Введите число от 0 до 59');
    if(n >= 0 && n <= 14){
        console.log('Первая четверть');
        }
        if(n >= 15 && n <= 29){
            console.log('Вторая четверть');
            }
            if(n >= 30 && n <= 44){
                console.log('Третья четверть');
                }
                if(n >= 45 && n <= 59){
                    console.log('Четвертая четверть');
                    }

// Задание 8
let day = prompt('Число от 1 до 31');
    if(day >= 1 && day <= 10){
        console.log('Первая декада');
    }
    if(day >= 11 && day <= 20){
        console.log('Вторая декада');
    }
    if(day >= 21 && day <= 31){
        console.log('Третья декада');
    }

// Задание 9
day_1 = prompt('Введите количество дней');
    switch (true){
        case(day_1 >= 1 && day_1 < 7):
            hour = day * 60;
            minute = hour * 60;
            second = minute * 60;
console.log(' Меньше недели ' + ' ' + day_1 + ' дней ' + ' ' + hour + ' час., '+ minute + ' мин., ' + second + ' сек. ');
        break;
    }
// Задание 10
let mоnth = +prompt('Введите номер месяца от 1 до 12'); 
    mоnth = Number;
let seasоns = ['Зима', 'Весна', 'Лето', 'Осень']; // [ ] - массивы

switch (true){
    case 12:
    case 2:
    case 1:
        alert('Время года: Зима');
        console.log('Время года: Зима');
    break;
    case 3:
    case 4:
    case 5:
        console.log('Время года: Весна');
    break;
    case 6:
    case 7:
    case 8:
        console.log('Время года: Лето');
    break;
    case 9:
    case 10:
    case 11:
        console.log('Время года: Осень');
    break;
    default:
        console.log('Ошибка');
    break;}




