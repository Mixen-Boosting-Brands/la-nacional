const modal = document.getElementById('modal')
if (modal) {
    modal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const titulo = button.getAttribute('data-bs-titulo')
        const thumbnailUrl = button.getAttribute('data-bs-thumbnail-url')
        const gramaje = button.getAttribute('data-bs-gramaje')
        const ingredientes = button.getAttribute('data-bs-ingredientes')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitulo = modal.querySelector('.modal-title')
        const modalThumbnail = modal.querySelector('thumbnail')
        const modalGramaje = modal.querySelector('.gramaje')
        const modalIngredientes = modal.querySelector('.ingredientes')

        modalTitulo.textContent = `${titulo}`
        modalThumbnail.src = `${thumbnailUrl}`
        modalGramaje.textContent = `${gramaje}`
        modalIngredientes.textContent = `${ingredientes}`
    })
}