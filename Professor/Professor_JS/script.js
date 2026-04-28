document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('formProfessor');

    form.addEventListener('submit', function (evento) {


        let valido = true;

        const campos = ['nome', 'area_formacao', 'data_nascimento', 'disciplina'];

        campos.forEach(function (id) {

            const campo = document.getElementById(id);
            const valor = campo.value.trim(); 

            if (valor === '' || valor === null) {

                campo.classList.add('erro');
                valido = false;
            } else {

                campo.classList.remove('erro');
            }
        });


        if (!valido) {
            evento.preventDefault(); 
            alert('⚠️ Por favor, preenche todos os campos antes de registar.');
        }

    });


    const todosOsCampos = document.querySelectorAll('input, select');

    todosOsCampos.forEach(function (campo) {

        campo.addEventListener('input', function () {
            this.classList.remove('erro'); 
        });

        campo.addEventListener('change', function () {
            this.classList.remove('erro');
        });

    });

});