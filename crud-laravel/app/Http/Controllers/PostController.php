<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $r){
        $new_post = [
            'title' => 'titulo de teste',
            'content' => 'conteudo qualquer',
            'author' => 'elquiane'
        ];

        // forma mais convencional de criar um registro no banco
        $post = new Post($new_post);
        $post->save();
        dd($post);


        //maneira mais 'nojenta'
        // $post = new Post();
        // $post->title = 'outro titulo';
        // $post->content = 'outro conteudo';
        // $post->author = 'outro autor';
        // $post->save();
        // dd($post);
    }

    public function read(Request $r){
        $post = new Post();

        //lendo posts especificos com find (ele sempre vai pegar pela chave primaria na tabela)
        $post = $post->find(2);

        return $post;
    }

    public function readAll(Request $r){
        $posts = Post::all();

        // lendo todos os posts
        // $posts = $post->all();
        return $posts;
    }

    public function update(Request $r){
        // $post = Post::find(1);
        // $post->title = 'Atualizando dados';
        // $post->save();

        //outra maneira de fazer, usando os comandos de where e update
        $post = Post::where('id', '>' ,0)->update([
            'author' => 'atualizando author de todo mundo'
        ]);

        return $post;

    }

    public function delete(Request $r){
        $post = Post::find(1);

        if($post){
            return $post->delete();
        }

        return 'Não existe post com esse id';
    }

    public function deleteAll(Request $r){
        $post = Post::where('id', '>', 0)->delete();
    }
}
