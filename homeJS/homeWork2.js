// Перепишите функцию, используя оператор '?' или '||'
// let age  = 20;
//
// function checkAge(age){
//   return  age >= 18 ? true:'parents will scold'
// }
// console.log(checkAge(age));

// Напишите функцию min(a,b), которая возвращает меньшее из чисел a и b
// function min(a,b){
//     return a <= b ? a:b;
// }
// console.log(min(7,13));

// Напишите функцию pow(x,n), которая возвращает x в степени n. Иначе говоря, умножает x на себя n раз и возвращает результат.
// function min(a,b){
//     return (b == 1) ? a : a * min(a,b - 1)
// }
//
// console.log(min(3,4));

// • Сделайте функцию inArray, которая определяет, есть в массиве элемент с заданным текстом или нет. Функция первым параметром
// должна принимать текст элемента, а вторым - массив, в котором делается поиск. Функция должна возвращать true или false

// let arr = ['sss','qqq','rrr'];
// function inArray (a, b){
//     var flug = false;
//     a.forEach(function (item, index){
//         if (item.indexOf(b) !== -1){
//
//             flug= true
//         }
//     })
//     return flug;
// }
// console.log(inArray(arr, 'qqq'));


// • Дана строка. Сделайте заглавным первый символ каждого слова этой строки. Для этого сделайте вспомогательную функцию ucfirst,
//     которая будет получать строку, делать первый символ этой строки заглавным и возвращать обратно строку с заглавной первой
// буквой.

// let string = 'this is new string';
//
// function ucfirst(string){
//     let arr = string.split(" ");
//     var UcFirstString = ' ';
//    arr.forEach(function (text,index,array)
//     {
//       UcFirstString += text[0].toUpperCase() + text.slice(1) + " ";
//     })
//     return UcFirstString;
// }
// console.log(ucfirst(string));


// • Сделайте функцию each, которая первым параметром принимает массив, а вторым - функцию, которая применится к каждому
// элементу массива. Функция each должна вернуть измененный массив
// let array = [2,3,4,5];
//
// function each(arr,changes){
//     let newArray = changes(array)
//     return newArray;
// }
// function change(arr){
//     newArr = [];
//     arr.forEach(function (num,index,array){
//         newArr +=[num + 1];
//     })
//     let result = newArr.split("");
//     return result;
// }
// console.log(change(array));
// console.log(each(array,change))
// console.log(array);










































































