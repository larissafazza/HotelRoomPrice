function confirmDelete(roomId, event) {
    if (confirm("Are you sure you want to delete this room type?")) {
        document.getElementById('delete-room-form-' + roomId).submit();
    } else {
        event.preventDefault();
    }
}