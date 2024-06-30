<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{   
    use AuthorizesRequests;

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'trip_id' => 'required|exists:trips,id',
        ]);

        Comment::create([
            'content' => $request->input('content'),
            'trip_id' => $request->input('trip_id'),
            'user_id' => Auth::id(),
        ]);


        return back()->with('success', 'Comentario enviado para aprobación.');
    }
    //Metodos para los likes y dislikes asi como para la respuestas
    public function like(Comment $comment)
{
    $comment->increment('likes');
    return response()->json(['likes' => $comment->likes]);
}

public function dislike(Comment $comment)
{
    $comment->increment('dislikes');
    return response()->json(['dislikes' => $comment->dislikes]);
}

    public function reply(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'parent_id' => 'required|exists:comments,id',
            'trip_id' => 'required|exists:trips,id'
        ]);

        $reply = Comment::create([
            'content' => $request->input('content'),
            'trip_id' => $request->input('trip_id'),
            'user_id' => auth()->id(),
            'parent_id' => $request->input('parent_id'),
        ]);

        if ($request->ajax()) {
            return response()->json($reply->load('user'));
        }

        return back()->with('success', 'Respuesta enviada para aprobación.');
    }
    public function destroy(Comment $comment)
{
    $this->authorize('delete', $comment); // Verifica el permiso antes de ejecutar la acción

    $comment->delete();
    return response()->json(['message' => 'Comentario eliminado']);
}

public function update(Request $request, Comment $comment)
{
    $this->authorize('update', $comment);
    $request->validate(['content' => 'required']);
    $comment->update(['content' => $request->content]);

    return response()->json($comment);
}
    
}