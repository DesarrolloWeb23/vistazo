<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostApiFilter;
use App\Http\Resources\Api\V1\Collections\PostCollection;
use App\Http\Resources\Api\V1\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(Request $request)
    {

        $filter = new PostApiFilter();

        $queryItems = $filter->transform($request);

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
            $post = Post::findOrFail($post->id);

            $postResource = new PostResource($post);
            return response()->json($postResource, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'No se encontraron resultados'
            ], 404);
        }
    }
}
