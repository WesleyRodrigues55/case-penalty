document.getElementById('open-menu').addEventListener('click', (e) => {
    const sidemenu = document.getElementById('sidebar-content')

    if (sidemenu.classList.contains("show-sidebar")) {
        sidemenu.classList.remove('show-sidebar')
        sidemenu.classList.add('hidden-sidebar')
    } else {
        sidemenu.classList.remove('hidden-sidebar')
        sidemenu.classList.add('show-sidebar')
    }
})


document.addEventListener('DOMContentLoaded', function() {
    if (window.location.pathname === '/customers') {
        const pessoaFisicaRadio = document.getElementById('tipo-pessoa-fisica');
        const pessoaJuridicaRadio = document.getElementById('tipo-pessoa-juridica');
        const divPessoaFisica = document.getElementById('content-pessoa-fisica');
        const divPessoaJuridica = document.getElementById('content-pessoa-juridica');

        function updateDivs() {
            if (pessoaFisicaRadio.checked) {
                divPessoaFisica.style.display = 'block';
                divPessoaJuridica.style.display = 'none';
            } else if (pessoaJuridicaRadio.checked) {
                divPessoaFisica.style.display = 'none';
                divPessoaJuridica.style.display = 'block';
            }
        }

        pessoaFisicaRadio.addEventListener('change', updateDivs);
        pessoaJuridicaRadio.addEventListener('change', updateDivs);

        updateDivs();


        var updateModal = document.getElementById('updateModal');
        updateModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');

            var inputId = updateModal.querySelector('#representative-id');
            inputId.value = id;

            var form = updateModal.querySelector('#updateForm');
            form.action = form.action.replace('id', id);
        });
    }


    if (window.location.pathname === '/representatives') {
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');

            var inputId = deleteModal.querySelector('#representative-id');
            inputId.value = id;

            var form = deleteModal.querySelector('#deleteForm');
            form.action = form.action.replace('id', id);
        });
    }

});