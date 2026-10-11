document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    
    Swal.fire({
        title: 'Enviando mensaje...',
        text: 'Por favor, espera un momento.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    
    setTimeout(() => {
        
        Swal.fire({
            title: '¡Enviado con éxito!',
            text: 'Tu mensaje ha sido enviado correctamente.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
        
        
        document.getElementById('contact-form').reset();
    }, 2000); 
});