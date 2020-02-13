var name =prompt("enter the number to check");
var nameInReverse = name.split('').reverse().join('');
name.toUpperCase() === nameInReverse.toUpperCase() ?document.write("YES") :document.write("NO");
