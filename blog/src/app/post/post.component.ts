import { Component } from '@angular/core';
import { PostService , PostDetails} from '../post.service'

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent  {
  posts: PostDetails

  constructor( private post: PostService){}

  ngOnInit() {

    this.post.posts().subscribe(
      (post_data : any) => {
        this.posts = post_data.posts
      },
      err => {
          console.error(err)
      }
    )
  }

}
