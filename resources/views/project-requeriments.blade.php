@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    <div>
        <h1 class="mb-4">Requisitos do projeto</h1>

        <p>O projeto consiste em "Implementar, utilizando o framework Laravel (<b><a href="https://laravel.com/" target="_blank">https://laravel.com/</a></b>), um ambiente 
            administrativo para cadastro de representantes comerciais e clientes."</p>

        <div class="py-4">
            <p><b>Requisitos:</b></p>
            <ul>
                <li>Ao digitar o CEP, consumir a API (<a href="https://viacep.com.br/" target="_blank">https://viacep.com.br/</a>) para preencher automaticamente as informações de logradouro, bairro, cidade e UF do formulário;</li>
                <li>A listagem de representantes deverá conter filtros por nome e e-mail;</li>
                <li>Implementar a função de deletar representante;</li>
                <li>Permitir alterar o representante do cliente;</li>
                <li>Utilizar autenticação de usuário para o ambiente administrativo;</li>
                <li>Se cliente for CPF, somente permitir o cadastro para maiores de 18 anos;</li>
                <li>No front-end, utilizar Bootstrap (<a href="https://getbootstrap.com/" target="_blank">https://getbootstrap.com/</a>), será analisado a usabilidade e o responsivo (desktop, tablet e mobile);</li>
                <li>Utilizar pelo menos duas boas práticas de segurança da informação em formulários;</li>
                <li>Disponibilizar o código fonte em um repositório git.</li>
              </ul>
        </div>

        <div class="py-4">
            <p><b>Tabelas do banco de dados e seu campos.</b></p>

            <ul>
                <li>Cadastro de representante:
                  <ul>
                    <li>Nome</li>
                    <li>E-mail</li>
                    <li>CEP</li>
                    <li>Logradouro</li>
                    <li>Número</li>
                    <li>Bairro</li>
                    <li>Cidade</li>
                    <li>UF</li>
                  </ul>
                </li>
                <li>Cadastro de cliente:
                  <ul>
                    <li>Nome</li>
                    <li>E-mail</li>
                    <li>CNPJ ou CPF</li>
                    <li>Telefone(s)</li>
                    <li>Data de Fundação do CNPJ ou data de nascimento do CPF</li>
                    <li>Representante</li>
                  </ul>
                </li>
                <li>Listar representantes cadastrados e listar clientes cadastrados por representante</li>
              </ul>
              
        </div>

    </div>



@endsection
