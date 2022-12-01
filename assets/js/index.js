import sakila from './components/sakila.js';

const sakilaObject = sakila();

sakilaObject.getActorRecords('');
sakilaObject.eventListener();