import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
import {Observable , of} from 'rxjs'
import {Router } from '@angular/router'

export interface PostDetails  {
  id: number
  title: string
  description: string

}
export interface PostPayload{
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
 public add_post(post: PostPayload ): Observable<any>  {
   console.log(post)
  return this.http.post('/api/add_post' ,  post, {
    headers: {Authorization : `Bearer ${this.getToken()}`}
  })
}
public delete_post(post: id ): Observable<any>  {
   console.log(post)
  return this.http.post('/api/delete_post/'+post ,  post, {
    headers: {Authorization : `Bearer ${this.getToken()}`}
  })
}

}
