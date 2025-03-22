<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostApiFilter;
use App\Http\Resources\Api\V1\Collections\PostCollection;
use App\Http\Resources\Api\V1\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(Request $request)
    {

        $filter = new PostApiFilter();

        $queryItems = $filter->transform($request);

        // Recorremos las condiciones para detectar si hay filtro por user_id
        $userId = null;
        foreach ($queryItems as $condition) {
            if (isset($condition[0]) && $condition[0] === 'user_id') {
                $userId = $condition[2]; // Tomamos el valor de la condición
                break;
            }
        }

        if ($userId) {
            $user = User::find($userId);
            if ($user) {
                $user->increment('profile_views');
            }
        }

        //Consultamos los post paginados
        $posts = Post::where($queryItems)->paginate(10);


        $postResource = new PostCollection($posts);

        if ($posts->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron resultados'
            ], 404);
        }
        return response()->json($postResource, 200);
    }


    public function show(Post $post)
    {
        try {
            // Cargar el post con la relación del usuario (autor)
            $post = Post::with('user')->findOrFail($post->id);

            // Acceder al autor del post
            $author = $post->user;

            if ($author) {
                // Incrementar las vistas del perfil del autor
                $author->increment('profile_views');
            }

            // Retornar el recurso del post
            $postResource = new PostResource($post);
            return response()->json($postResource, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'No se encontraron resultados'
            ], 404);
        }
    }
}
