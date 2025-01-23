import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private apiUrl = environment.apiUrl;

  constructor(private http: HttpClient) {}

  submitBooking(bookingData: any) {
    return this.http.post(`${this.apiUrl}/bookings`, bookingData);
  }

  submitContact(contactData: any) {
    return this.http.post(`${this.apiUrl}/contact`, contactData);
  }

  getMenu() {
    return this.http.get(`${this.apiUrl}/menu`);
  }
} 