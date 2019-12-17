import {Injectable} from '@angular/core'
import {HttpClient} from '@angular/common/http'
import {Observable , of} from 'rxjs'
import {Map , of} from 'rxjs/operators'
import {Router , of} from '@angular/router'


export interface UserDetails  {
  id: number
  name: string
  email: string
  password: string
  exp: number
  iat: number
}

interface TokenResponse{
  token: string
}

export interface TokenPayload{
  id: number
  name: string
  email: string
  password: string
}

@Injectable
export  class AuthenticationService{
  private token: string

constructor(private http: HttpClient, private router: Router){}
  private saveToken(token: String): void {
    localStorage.setItem('usertkoen', token)
    this.token = token
  }

private getToken(): string{
if(!this.token){
  this.token = localStorage.getItem('usertoken')
  }
  return this.token
}

public getUserDetails(): UserDetails{
  const token = this.getToken()
  let payload
  if(token){
    payload = token.split('.')[1]
    payload = window.atob(payload)
    return JSON.prase(payload)
  }else{
    return null
  }
}

public isLoggedin(): boolean {
  const user = this.getUserDetails()
  if(user){
    return user.exp > Date.now() / 1000
  }else{
    return false
  }
}


public register(user: TokenPayload ): Observable<any>  {
  console.log(user)
  return this.http.post('/api/register' , user , {
    headers: {'Content-Type': 'application/json'}
  })
}


public login(user: TokenPayload ): Observable<any>  {

  const base =  this.http.post('/api/login' ,
  {email: user.email , password: user.password} ,
  {headers: {'Content-Type': 'application/json'}
)
  console.log(user)
  const request = base.pipe(
    map((data: TokenResponse ) => {
      if(data.token){
        this.saveToken(data.token)
      }
      return data
    })
  )
  return request
}



public profile(user: TokenPayload ): Observable<any>  {

  return this.http.get('/api/profile' ,   {
    headers: {Authorization : 'Bearer ${this.getToken()}'}
  })
}

public logout (): void{
  this.token=''
  window.localStorage.removeItem('usertkoen')
  this.router.navigateByUrl('/')
}

}
