const editDelete = document.getElementById(
    'editDelete'
);

const option = document.querySelector(
    '.option'
);

editDelete.addEventListener('click', () => {
    parent = $(this).parents('li');
    editDelete.classList.toggle('open');
    option.classList.toggle('open');
});

$('.edit-icon, .delete-icon').click(function() {
    // Get the post ID from the data attribute
    var postId = $(this).data('postid');

    // Show the respective Edit or Delete button for the clicked post
    $('#editButton_' + postId).toggle();
    $('#deleteButton_' + postId).toggle();
});