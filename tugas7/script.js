// Latihan 1: Menyertakan JavaScript ke dalam HTML
// Mengubah teks dari elemen <h1> menjadi "Latihan JavaScript Selesai"
document.querySelector('h1').textContent = "Latihan JavaScript Selesai";

// Latihan 2: Variabel dan Tipe Data
// Poin 1 dan 2
let name = "John";
const age = 30;
document.getElementById("output").innerHTML = "Nama saya adalah " + name + ", umur saya " + age + " tahun.";

// Poin 3
let fruits = ["Apple", "Banana", "Mango"];
// Tangkap element <div>
let fruitList = document.getElementById('output_array');
for (let i = 0; i < fruits.length; i++) {
  let p = document.createElement('p'); // membuat element p
  p.textContent = fruits[i]; // mengisi element p
  fruitList.appendChild(p); // menambahkan element p ke dalam <div>
}

// Poin 4
let person = {
  firstName: "John",
  lastName: "Doe",
  age: 30
}
document.getElementById('output_objek').innerHTML = `<p>First Name: ${person.firstName}</p><p>Last Name: ${person.lastName}</p><p>Age: ${person.age}</p>`;

// Latihan 3: Pengendalian Alur (Control Flow)
// Poin 1 dan 2
function checkValue() {
// Membaca nilai inputan user
let userInput = document.getElementById('userInput').value;
let number = Number(userInput);

let output_nilai1 = document.getElementById('output_nilai1');

if (number > 10) {
  output_nilai1.textContent = "Nilai lebih besar dari 10"
} else if (number == 10) {
  output_nilai1.textContent = "Nilai sama dengan 10"
} else {
  output_nilai1.textContent = "Nilai kurang dari 10"
}
}

// Poin 3
function displayNumbers() {
  let userInput = document.getElementById('userInput').value;
  let number = Number(userInput);

  let output_nilai2 = document.getElementById('output_nilai2');

  if (isNaN(number) || number <= 0) {
    output_nilai2.textContent = "Masukkan angka yang valid lebih besar dari 0.";
    return;
}
  
  let output = ""
  for (let i = 1; i <= number; i++) {
    output += i + ' ';
  }
  
  output_nilai2.textContent = output;
}

// Latihan 4: Fungsi dalam JavaScript
// Poin 1 dan 2
function greet(name) {
  return "Hello, " + name;
}
let nama = greet("Muhammad Surya");

document.getElementById("pesan").innerHTML = nama;

// Poin 3
function calculateSquare(number) {
  return number * number;
}
let angka = calculateSquare(3)

document.getElementById("kuadrat").innerHTML = "Kuadrat: " + angka;

// Poin 4
const addNumbers = (a, b) => a + b;

let sum = addNumbers(5, 7);

document.getElementById("tambah").innerHTML = "Jumlah: " + sum;

// Latihan 5: Manipulasi Array dan Objek
// Poin 1 dan 2
let students = ["Alice", "Bob", "Charlie"];

students.push("Surya");

let output_student = "";

students.forEach(function(student) {
    output_student += student + "<br>";
});

document.getElementById("student").innerHTML = output_student;

// Poin 3 dan 4
let car = {
  brand: "Toyota",
  model: "Corolla",
  year: 2020
};

let carOutput = "Car Details:<br>";

for (let key in car) {
  carOutput += key + ": " + car[key] + "<br>";
}

document.getElementById("mobil1").innerHTML = carOutput;

// Poin 5
let cars = [
  {brand: "Toyota", model: "Corolla", year: 2020},
  {brand: "Honda", model: "Civic", year: 2019},
  {brand: "Ford", model: "Mustang", year: 2021},
  {brand: "Tesla", model: "Model S", year: 2022}
];

let carsOutput = "Cars List:<br>";

cars.forEach(function(car) {
  carsOutput += "Brand: " + car.brand + ", Model: " + car.model + ", Year: " + car.year + "<br>";
});

document.getElementById("mobil2").innerHTML += carsOutput;