// • Напишите код, выполнив задание из каждого пункта отдельной строкой:
//     • Создайте пустой объект user.
// • Добавьте свойство name со значением John.
// • Добавьте свойство surname со значением Smith.
// • Измените значение свойства name на Pete.

// const user = {
//     name : 'John',
//     surname : 'Smith',
// }
//
// console.log(user)
// console.log(user.name)
// console.log(user.surname)
// user.name = 'Vanya'
// console.log(user.name)

// Напишите функцию isEmpty(obj), которая возвращает true, если у объекта нет свойств, иначе false

// const obj = {
//    // name : 'dima'
// };
//
// function isEmpty(object){
//     if (Object.keys(object).length == 0) {
//         console.log('true');
//     }
//     else console.log('false')
// }
//
// console.log(isEmpty(obj))

// • У нас есть объект, в котором хранятся зарплаты нашей команды “let salaries = {Ivan: 1000, Dmitriy:
//         1600, Anton: 1300}”. Напишите код для суммирования всех зарплат и сохраните результат в
// переменной sum. Если объект salaries пуст, то результат должен быть 0.

// let salaries = {
//     Ivan : 1000,
//     Dmitriy : 1600,
//     Anton : 1300
// };
//
// allsuma = 0;
// function suma(obj) {
//     if (Object.keys(obj).length == 0) {
//         allsuma = 0
//     } else {
//         for (item in obj) {
//             allsuma += obj[item];
//         }
//     }
//     return allsuma;
// }
//
// console.log(suma(salaries))

// • Создайте функцию multiplyNumeric(obj), которая умножает все числовые свойства объекта obj на 2.
// Обратите внимание, что multiplyNumeric не нужно ничего возвращать. Следует напрямую изменять
// объект. Используйте typeof для проверки, что значение свойства числовое

// let object = {
//     name : 'dima',
//     age : 32,
//     number : 21
// }
//
// function multiplyNumeric(obj){
//     for(item in obj ){
//         if(typeof obj[item] == 'number'){
//             obj[item] = obj[item] * 2 ;
//         }
//     }
// }
// multiplyNumeric(object);
// console.log(object)


// • Создайте класс transport и дочерние - car, motorbike, и bicycle.
//     Придумайте и опишите по несколько свойств и методов, включая
// одинаковый для всех классов метод ride() и свойство maxSpeed,
//     ограничьте максимальную скорость для объектов классов car,
//     motorbike.
// class transport  {
//     maxSpeed = 100
//     ride (minutes){
//         let minrost = this.maxSpeed/60
//         return minrost * minutes
//     }
// }
// class motorbike extends transport{
//     maxSpeed = 60
//     price = 1000
//     constructor (color,brand) {
//         super();
//         this.color = color;
//         this.brand = brand;
//     }
//     cost (){
//         if(this.color === 'grin'){
//             this.price =1200;
//         }
//         return this.price
//     }
// }
// class car extends transport {
//     maxSpeed = 90
// }
// class bicycle extends transport {
// }
// let test = new motorbike('grin', 'bmw')
// var rost = test.ride(10)
// console.log(test.cost())
//

// • Создайте массив из 6 объектов классов car, motorbike, bicycle и
// отсортируйте его от самого быстрого к самому медленному.
// var arrayOfOjects = [new car(), new car(), new motorbike('green', 'bmw'), new motorbike('black','suzuki'), new bicycle(), new bicycle()];
// arrayOfOjects.sort(function (a, b) {
//     if (a.maxSpeed < b.maxSpeed) {
//         return 1;
//     }
//     if (a.maxSpeed > b.maxSpeed) {
//         return -1;
//     }
//     // a должно быть равным b
//     return 0;
// });
// console.log(arrayOfOjects)
// // • Используя прототип добавьте метод классу transport.
//
// var d = new motorbike('red','lada')
// d.ride = function (){
//     console.log('qwwe')
// }
// d.ride()
