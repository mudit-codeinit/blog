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
 
  constructor(private http: HttpClient, private router: Router) { }

 public posts(): Observable<any>  {
  return this.http.get('/api/posts' ,   {
    //headers: {Authorization : `Bearer ${this.getToken()}`}
  })
}

}
