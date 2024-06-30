<script>
    var defaultAvatarUrl = "{{ asset('default-avatar.png') }}";
    var storageUrl = "{{ asset('storage') }}/";
</script>

@props(['trip', 'comments'])

<div class="comment-section p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Comentarios</h2>

    <!-- Filtro de Comentarios -->
    <div class="comment-filter mb-4 flex items-center space-x-4">
        <label for="filter" class="text-gray-700 font-semibold">Filtrar por:</label>
        <select name="filter" id="filter" class="px-12 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-500">
            <option value="recent">Más Recientes</option>
            <option value="popular">Más Populares</option>
        </select>
    </div>

    <!-- Formulario para agregar comentario -->
    @auth
    <div class="comment-form mb-4">
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <textarea name="content" rows="3" placeholder="Escribe tu comentario aquí..." required class="w-full p-2 border-gray-300 rounded-md mb-2"></textarea>
            <input type="hidden" name="trip_id" value="{{ $trip->id }}">
            <button class="bg-red-600 text-white px-4 py-2 rounded" type="submit">Comentar</button>
        </form>
    </div>
    @endauth

    <!-- Lista de comentarios -->
    <div id="comments-list" class="comments-list space-y-6">
        @foreach ($comments as $comment)
        <div class="comment p-4 border rounded-md" data-id="{{ $comment->id }}" data-popularity="{{ $comment->likes - $comment->dislikes }}" data-created-at="{{ $comment->created_at->toISOString() }}">
            <div class="comment-header flex items-center mb-2">
                <img src="{{ $comment->user->profile_picture ? asset('storage/' . $comment->user->profile_picture) : asset('default-avatar.png') }}" alt="{{ $comment->user->name }}" class="comment-avatar w-10 h-10 rounded-full mr-3">
                <div class="comment-info">
                    <p><strong>{{ $comment->user->name }}</strong> - <span class="comment-date text-gray-500">{{ $comment->created_at->format('d M Y') }}</span></p>
                </div>
            </div>
            <p class="comment-content mb-2">{{ $comment->content }}</p>
            <div class="comment-actions space-x-4">
                <button class="like-button" data-id="{{ $comment->id }}">
                    👍 <span class="likes-count">{{ $comment->likes }}</span>
                </button>
                <button class="dislike-button" data-id="{{ $comment->id }}">
                    👎 <span class="dislikes-count">{{ $comment->dislikes }}</span>
                </button>
                <button class="reply-button" data-id="{{ $comment->id }}">Responder</button>
                @can('update', $comment)
                <button class="edit-button" data-id="{{ $comment->id }}">✏️</button>
                @endcan
                @can('delete', $comment)
                <button class="delete-button" data-id="{{ $comment->id }}">🗑️</button>
                @endcan
            </div>

            <!-- Formulario de respuesta -->
            <div id="reply-form-{{ $comment->id }}" class="reply-form mt-4" style="display: none;">
                @auth
                <form class="reply-form-inner" action="{{ route('comments.reply') }}" method="POST">
                    @csrf
                    <textarea name="content" rows="2" placeholder="Escribe tu respuesta aquí..." required class="w-full p-2 border rounded-md mb-2"></textarea>
                    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                    <button type="submit">Responder</button>
                </form>
                @endauth
            </div>

            <!-- Respuestas -->
            @if ($comment->replies->count() > 0)
            <div class="comment-replies mt-4 space-y-4">
                @foreach ($comment->replies as $reply)
                <div class="comment reply p-4 border rounded-md">
                    <div class="comment-header flex items-center mb-2">
                        <img src="{{ $reply->user->profile_picture ? asset('storage/' . $reply->user->profile_picture) : asset('default-avatar.png') }}" alt="{{ $reply->user->name }}" class="comment-avatar w-10 h-10 rounded-full mr-3">
                        <div class="comment-info">
                            <p><strong>{{ $reply->user->name }}</strong> - <span class="comment-date text-gray-500">{{ $reply->created_at->format('d M Y') }}</span></p>
                        </div>
                    </div>
                    <p class="comment-content">{{ $reply->content }}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
