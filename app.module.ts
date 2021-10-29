import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { MainInfoComponent } from './main-info/main-info.component';

@NgModule({
  declarations: [
    AppComponent,
    MainInfoComponent
  ],
  imports: [
    BrowserModule,
    // MatIconModule,
    // MatToolbarModule,

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
