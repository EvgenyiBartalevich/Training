    console.log('Dz16 Массивы');

// Задание 1

let arr = [1, 2, 3, 4, 5];
    console.log('Задание 1');
//    console.log(arr);
for(let i = 0; i < arr.length; i++) {
//    console.log(arr[i]);
    }

// Задание 2

let arr2 = [-2, -1, -3, 15, 0, -4, 2, -5, 9, -15, 0, 4, 5, -6, 10, 7];
    console.log('Задание 2'); 
//    console.log(arr2);
//    console.log(arr2.length);
    arr2.sort();
//    console.log(arr2);

//    console.log(arr2[9]);
//    console.log(arr2[5]);
//    console.log(arr2[7]);
//    console.log(arr2[13]);

// Задание 3
//-------- for ------//

let arr3 = [];
let result = 0;
    console.log('Задание 3');
    for(let i = 23; i <= 57; i++){
        arr3[i] = i;
        for(let j = 23; j <= arr3.length; j++) {
            result += arr3[i];
        }
    }
//    console.log(arr3);
//    console.log(result);

//-------- while ------//

let arr33 = [];
let i = 23;
    while(i <= 57){
        arr33[i] = i;
        i++;
}
//    console.log(arr33);

// Задание 4

let arr4 = ['10', '20', '30', '50', '235', '3000'];
    console.log('Задание 4');
//    console.log(arr4);
//    console.log(arr4[0]);
//    console.log(arr4[1]);
//    console.log(arr4[4]);
//    сonsole.log(arr4[3]);

// Задание 5

let out = document.querySelector('.out');
let arrWeek = ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];
    console.log('Задание 5');
//    console.log(arrWeek);

    for(let i = 0; i < arrWeek.length; i++) { 
        if(i == 5 || i == 6) {
//            document.write(arrWeek[i].bold() + '<br/>');
//            console.log(arrWeek[i].bold()); continue;
        }   
//            console.log(arrWeek[i]); 
//            document.write(arrWeek[i] + '<br/>');
        }

// Задание 6
    console.log('Задание 6');
let shool = ['Парта', 'Доска', 5, , , , 'Учебник', 'Класс', 2, 'Тетрадь']; 
//    console.log(shool);
shool[shool.length] = 'Дневник';
//    console.log(shool);
//    console.log([shool.length-1]);

// Задание 7
console.log('Задание 7');

// Задание 8

console.log('Задание 8');

let arr8 = [12, false, 'Текст', 4, 2, -5, 0]
//        console.log(arr8);
//        console.log(arr8.length);
//    arr8.reverse();
//        console.log(arr8);

function reverseArray(arr8){
let g = 0;
let reverse = [];
    while(g < arr8.length) {
        reverse[g] = arr8[(arr8.length - 1) - g]
        g++;
    }
    return reverse
}
//        console.log(reverseArray(arr8));
