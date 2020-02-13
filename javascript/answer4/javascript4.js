var s =prompt("enter the size of object");
var a= [];
for(var i=0; i<s; i++) {
	
	a[i] = prompt('Enter Element ' + (i+1));
}
var c = JSON.parse(JSON.stringify(a));

console.log(c);
