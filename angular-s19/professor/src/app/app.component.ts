import { Component } from '@angular/core';
import { Order } from './order';

import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Contact Us';
  randomcolor=this.getRandomColor();
  public getRandomColor(){
     var letters = '0123456789ABCDEF'.split('');
     var color = '#';
     for (var i = 0; i < 6; i++){
        color += letters[Math.floor(Math.random() * 16)];
      }
   return color;
}
//function to set a new random color
setColor(){
   this.randomcolor=this.getRandomColor();
}


  // let's create a property to store a response from the back end
  // and try binding it back to the view


  drinks = ['Website', 'Professor', 'Rating','Other'];
  orderModel = new Order('', '','','',false);
  responsedata = new Order('', '','','', false);

 
  constructor(private http: HttpClient) { }

  senddata(data) {
     console.log(data);

     let params = JSON.stringify(data);

     //this.http.get('http://localhost/cs4640s19/ngphp-get.php?str='+encodeURIComponent(params))
     this.http.post<Order>('http://localhost/WebPL/ngphp-post.php',data)
     //this.http.post('http://localhost/cs4640s19/ngphp-post.php', data)
     .subscribe((data) => {
        console.log('Got data from backend', data);
        this.responsedata = data;
     }, (error) => {
        console.log('Error', error);
     })
  }
}
