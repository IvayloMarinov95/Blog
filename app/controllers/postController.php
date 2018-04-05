<?php
class PostController extends Controller{
    protected $post;
    protected $comment;

    public function __construct(){
        $this->post = $this->model('Post');
        $this->comment = $this->model('Comment');

    }
    public function index(){
        $posts = $this->post->all();
        $this->view('index', ['posts' => $posts]);
    }
    public function createPost()
    {
        $this->post->create([
            'author' => $_POST['author'],
            'title' => $_POST['title'],
            'text' => $_POST['text'],
        ]);
        header("Location: http://localhost/simpleblog/public/post/index/"); 

    }

    public function createComment(){
        $this->comment->create([
            'post_id' => $_POST['post_id'],
            'author' => $_POST['author'],
            'text' => $_POST['text']
        ]);
        header("Location: http://localhost/simpleblog/public/post/info?id=". $_POST['post_id'] . "");
    }
    public function add() 
    {
        $this->view('add-post');
    }

    public function info(){
        $comments = $this->comment->all();
        $post = $this->post->find($_GET['id']);
        $comment = $this->comment->find($_GET['id']);
        $this->view('single', ['post' => $post, 'comments' => $comments]);
    }
    
    public function edit(){
        $post = $this->post->find($_GET['id']);
        $this->view('edit-post', ['post' => $post]);
    }

    public function update(){
        $post = Post::find($_GET['id'])
                            ->update(['text' => $_POST['text']]);
        header("Location: http://localhost/simpleblog/public/post/index/");
    }

    public function delete(){
        $post = Post::find($_GET['id']);
        $post->delete();
       header("Location: http://localhost/simpleblog/public/post/index/");
    }
    public function deleteComment(){
        $comment = Comment::find($_GET['id']);
        $comment->delete();
       header("Location: http://localhost/simpleblog/public/post/info?id= ".$_GET['id'] ."");
    }
}