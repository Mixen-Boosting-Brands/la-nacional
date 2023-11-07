const modal = document.getElementById('modal')
if (modal) {
    modal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const titulo = button.getAttribute('data-bs-titulo')
        const thumbnailUrl = button.getAttribute('data-bs-thumbnail-url')
        const gramajesData = button.getAttribute('data-bs-gramaje')
        const ingredientes = button.getAttribute('data-bs-ingredientes')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitulo = modal.querySelector('.modal-title')
        const modalThumbnail = modal.querySelector('.thumbnail')
        const modalGramaje = modal.querySelector('.gramaje')
        const modalIngredientes = modal.querySelector('.ingredientes')

        modalTitulo.textContent = `${titulo}`
        modalThumbnail.src = `${thumbnailUrl}`;

        if (gramajesData) {
            // Extract the content from the span tags
            var spanContents = gramajesData.match(/<span>(.*?)<\/span>/g);
        
            // Parse the JSON content for each span
            var gramajesArray = spanContents.map(function (spanContent) {
                return JSON.parse('"' + spanContent.replace(/<\/?span>/g, '') + '"');
            });
            
            // Accumulate the values in an array
            var gramajesTextArray = gramajesArray.map(function (gramaje) {
                // Process each gramaje as needed
                console.log(gramaje);
                return gramaje;
            });

            // Join the accumulated values into a single string
            var gramajesText = gramajesTextArray.join(' ');

            // Set the joined values
            modalGramaje.textContent = gramajesText;
        }

        modalIngredientes.textContent = `${ingredientes}`
    })
}