import { Component } from '@angular/core';
import { PostService , PostDetails , PostPayload} from '../post.service'

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent  {

  posts: PostDetails

  post_payload: PostPayload = {
      id: 0,
      title: "",
      description: ""

  }
  constructor( private post: PostService){}

  ngOnInit() {
    this.get_posts()

  }

  get_posts(){
    this.post.posts().subscribe(
      (post_data : any) => {
        this.posts = post_data.posts
      },
      err => {
          console.error(err)
      }
    )
  }


	add_post(){
          this.post.add_post(this.post_payload).subscribe(
            (post_data : any) => {
              this.posts = post_data.posts
            },
            err => {
              console.error(err)
            }
          )
    }
	
	delete_post(id){
          this.post.delete_post(id).subscribe(
            (post_data : any) => {
              this.posts = post_data.posts
            },
            err => {
              console.error(err)
            }
          )
    } 
	get_post(id){
          this.post.get_post(id).subscribe(
            (post_data : any) => {
              this.post_payload = post_data.posts
            },
            err => {
              console.error(err)
            }
          )
    }
}
