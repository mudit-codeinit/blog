import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
import {Observable , of} from 'rxjs'
import {Router } from '@angular/router'

export interface PostDetails  {
  id: number
  title: string
  description: string

}

@Injectable({
  providedIn: 'root'
})

export class PostService {
  private token: string

  constructor(private http: HttpClient, private router: Router) { }

  private getToken(): string{
    if(!this.token){
       this.token = localStorage.getItem('usertoken')
      }
      return this.token
    }
    
 public posts(): Observable<any>  {
  return this.http.get('/api/posts' ,   {
    headers: {Authorization : `Bearer ${this.getToken()}`}
  })
}

}
