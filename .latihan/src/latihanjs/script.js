var shoppingList = [
    ['Chocolate Bar', 16],
    ['Silver Quinn', 15],
    ['Citato', 17],
];

var storeData = shoppingList.unshift('Judah');
console.log(shoppingList);

shoppingList.shift();
shoppingList.unshift(['Judah', 18]);

// shift / unshift for change first data of the array
// push / pop for change last data of the array
