import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-main-info',
  templateUrl: './main-info.component.html',
  styleUrls: ['./main-info.component.css']
})
export class MainInfoComponent implements OnInit {
  @Input() fullName!: string;
  @Input() mobilePhone!: string;
  @Input() city!: string;
  constructor() { }

  ngOnInit(): void {
  }

}

