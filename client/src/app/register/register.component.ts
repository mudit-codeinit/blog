import {Component} from '@angular/core'
import {Router} from '@angular/router'
import {AuthenticationService , TokenPayload} from '../authentication.service'


@Component({
  templateUrl: './register.component.html'
})


export class RegisterComponent {

  credentials: TokenPayload = {
      id: 0,
      name: "",
      email: "",
      password: ""
  }

constructor(private auth: AuthenticationService, private router: Router){}

register(){
        this.auth.register(this.credentials).subscribe(
          ()=> {
            this.router.navigateByUrl('/login')
          },
          err => {
            console.error(err)
          }
        )
  }
}
