// Inicializa datepicker para los campos de fecha
flatpickr("#start_date", {
    dateFormat: "Y-m-d",
    altInput: true,
    altFormat: "F j, Y",
    defaultDate: "today",
    theme: "light",
});

flatpickr("#end_date", {
    dateFormat: "Y-m-d",
    altInput: true,
    altFormat: "F j, Y",
    defaultDate: "today",
    theme: "light",
});

// Funcionalidades para comentarios
// Incluimos el Token CSRF Correctamente en las Solicitudes AJAX
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function toggleReplyForm(commentId) {
    var replyForm = document.getElementById('reply-form-' + commentId);
    if (replyForm.style.display === "none") {
        replyForm.style.display = "block";
    } else {
        replyForm.style.display = "none";
    }
}

// Conteo de likes y dislikes en tiempo real
$(document).on('click', '.like-button, .dislike-button', function() {
    let commentId = $(this).data('id');
    let isLike = $(this).hasClass('like-button');
    let url = isLike ? `/comments/${commentId}/like` : `/comments/${commentId}/dislike`;

    $.post(url, function(response) {
        let countElement = $(`.comment[data-id="${commentId}"] .${isLike ? 'likes' : 'dislikes'}-count`);
        countElement.text(response[isLike ? 'likes' : 'dislikes']);
    }).fail(function(xhr, status, error) {
        console.error('Error al enviar la solicitud:', error);
    });

        // Actualizar el conteo total de likes - dislikes
        let likesCount = parseInt($(`.comment[data-id="${commentId}"] .likes-count`).text());
        let dislikesCount = parseInt($(`.comment[data-id="${commentId}"] .dislikes-count`).text());
        $(`.comment[data-id="${commentId}"]`).attr('data-popularity', likesCount - dislikesCount);
    });
// Filtrado y ordenamiento de comentarios
function sortComments(filter) {
    let commentsList = $('#comments-list');
    let comments = commentsList.children('.comment').get();

    comments.sort(function(a, b) {
        if (filter === 'popular') {
            return $(b).attr('data-popularity') - $(a).attr('data-popularity');
        } else { // recent
            return new Date($(b).data('created-at')) - new Date($(a).data('created-at'));
        }
    });

    $.each(comments, function(index, comment) {
        commentsList.append(comment);
    });
}

$('#filter').change(function() {
    sortComments($(this).val());
});

$(document).ready(function() {
    // Manejar likes y dislikes
    $(document).on('click', '.like-button, .dislike-button', function() {
        let commentId = $(this).data('id');
        let isLike = $(this).hasClass('like-button');
        let url = isLike ? `/comments/${commentId}/like` : `/comments/${commentId}/dislike`;

        $.post(url, { _token: '{{ csrf_token() }}' }, function(response) {
            let countElement = $(`.comment[data-id="${commentId}"] .${isLike ? 'likes' : 'dislikes'}-count`);
            countElement.text(response[isLike ? 'likes' : 'dislikes']);

            // Actualizar el atributo de popularidad
            let likesCount = parseInt($(`.comment[data-id="${commentId}"] .likes-count`).text());
        let dislikesCount = parseInt($(`.comment[data-id="${commentId}"] .dislikes-count`).text());
        $(`.comment[data-id="${commentId}"]`).attr('data-popularity', likesCount - dislikesCount);
    }).fail(function(xhr, status, error) {
        console.error('Error al enviar la solicitud:', error);
    });
    });

    // Mostrar/ocultar formulario de respuesta
    $(document).on('click', '.reply-button', function() {
        let commentId = $(this).data('id');
        $(`#reply-form-${commentId}`).toggle();
    });

    // Manejar envío de respuestas
    $(document).on('submit', '.reply-form-inner', function(e) {
        e.preventDefault();
        let form = $(this);
        $.post(form.attr('action'), form.serialize(), function(response) {
            // Agregar la nueva respuesta al DOM
            let newReply = createReplyHtml(response);
            form.closest('.comment').find('.comment-replies').append(newReply);
            form[0].reset();
            form.closest('.reply-form').hide();
        }).fail(function(xhr, status, error) {
            console.error('Error al enviar la solicitud:', error);
        });
    });
   // Función para crear el HTML de una nueva respuesta
function createReplyHtml(reply) {
    const avatarUrl = reply.user.profile_picture 
        ? storageUrl + reply.user.profile_picture 
        : defaultAvatarUrl;

    return `
        <div class="comment reply" data-id="${reply.id}">
            <div class="comment-header">
                <img src="${avatarUrl}" alt="${reply.user.name}" class="comment-avatar">
                <div class="comment-info">
                    <p><strong>${reply.user.name}</strong> - <span class="comment-date">${new Date(reply.created_at).toLocaleDateString('es-ES', { day: 'numeric', month: 'short', year: 'numeric' })}</span></p>
                </div>
            </div>
            <p class="comment-content">${reply.content}</p>
        </div>
    `;
}
});
// Manejar eliminación de comentarios
$(document).on('click', '.delete-button', function() {
    let commentId = $(this).data('id');
    $.ajax({
        url: `/comments/${commentId}`,
        type: 'DELETE',
        success: function(response) {
            $(`.comment[data-id="${commentId}"]`).remove();
        },
        error: function(xhr) {
            console.error('Error al eliminar el comentario:', xhr.responseText);
        }
    });
});

// Manejar actualización de comentarios
$(document).on('click', '.edit-button', function() {
    let commentId = $(this).data('id');
    let contentElement = $(`.comment[data-id="${commentId}"] .comment-content`);
    let originalContent = contentElement.text();
    let newContent = prompt("Edita tu comentario:", originalContent);

    if (newContent && newContent !== originalContent) {
        $.ajax({
            url: `/comments/${commentId}`,
            type: 'PUT',
            data: {
                content: newContent,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                contentElement.text(response.content);
            },
            error: function(xhr) {
                console.error('Error al actualizar el comentario:', xhr.responseText);
            }
        });
    }
});
// Manejar actualización de comentarios
$(document).on('click', '.edit-button', function() {
    let commentId = $(this).data('id');
    let contentElement = $(`.comment[data-id="${commentId}"] .comment-content`);
    let originalContent = contentElement.text();
    let newContent = prompt("Edita tu comentario:", originalContent);

    if (newContent && newContent !== originalContent) {
        $.ajax({
            url: `/comments/${commentId}`,
            type: 'PUT',
            data: {
                content: newContent,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                contentElement.text(response.content);
            },
            error: function(xhr) {
                console.error('Error al actualizar el comentario:', xhr.responseText);
            }
        });
    }
});