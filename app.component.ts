import { Component } from '@angular/core';
 type Person = {
   fullName: string;
   mobilePhone: string;
   city: string;
 };
 @Component({
   selector: 'app-root',
   templateUrl: './app.component.html',
   styleUrls:['./app.component.css']
 })
 export class AppComponent {
   person: Person = {
     fullName: "fdsf fdasfdsa fds",
     mobilePhone: "45464646",
     city: "fjkdsjs",
   };
 }