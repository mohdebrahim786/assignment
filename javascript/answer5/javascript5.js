function Employee(name,age,salary,DOB){
    this.Name=name;
    this.Age=age;
    this.Salary=salary;
    this.dob=DOB;
}
var employee1=new Employee("Priyanshu",22,500000,"04/06/1996");
var employee2=new Employee("Abhinesh",18,500,"05/02/1999");
var employee3=new Employee("Ramu",21,400,"03/06/2016");
var employee4=new Employee("Krishna",70,2000,"09/08/1994");
var employee5=new Employee("Ram",29,76766,"02/11/1997");

var question1 =[];

var obj=new Array();

obj.push(employee1);
obj.push(employee2);
obj.push(employee3);
obj.push(employee4);
obj.push(employee5);

for (var j = 0; j < obj.length; j++){
    if (obj[j].Salary>=5000){
        question1.push(obj[j].Name);
    }

}

for (var key in obj){
    console.log(key.Salary);
    if (key.Salary>=5000){
        question1.push(key.Name);

    }
}

console.log(question1);
document.write("Person with salary greater than 5000 " +"<br/>",question1 );
document.write("<br/>");

var below30=[];
var above30=[];

for (var j = 0; j < obj.length; j++){
    if (obj[j].Age<=30){
        below30.push(obj[j].Name);
    }
}

for (var j = 0; j < obj.length; j++){
    if(obj[j].Age>30){
        above30.push(obj[j].Name);
    }
}
console.log("people with age below 30 are :\n");
document.write("persons with age below 30 are :"+"<br/>",below30);
document.write("<br/>");
console.log(below30);
console.log("\n");
console.log("people with age above 30 are :\n");
document.write("persons with age above 30 are :\n"+"<br/>", above30);
document.write("<br/>");
console.log(above30);

var question3=[];

for (var j = 0; j < obj.length; j++){
    if (obj[j].Salary<1000 && obj[j].Age>20){
        obj[j].Salary=(obj[j].Salary)*5;

    }
}
for (var j = 0; j < obj.length; j++)
{   
    console.log(obj[j].Salary+"\n")
    document.write("salary after increment of "+(j+1)+" employee"+"<br/>",obj[j].Salary +"<br/>");
  
}
