/**
 * Example of using ES6 Module in Javascript
 */
import Registration from './components/registration.js';

const reg = Registration();

/*reg.addUsers('John', 'Doe', 'Dew', 'john.dow@gmail.com');
reg.addUsers('Ryan', 'Mallorca', 'Pillerin', 'ryan.david.pillerin@gmail.com');
reg.addUsers('test', 'test', 'test', 'test.test@gmail.com');
console.log(reg.getUsers());*/

reg.eventListner();