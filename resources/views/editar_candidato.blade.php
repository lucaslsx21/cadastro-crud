<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo Seletivo</title>
</head>
<body>

    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome</label>
        <input type="text" placeholder="Digite seu nome..." name="nome_candidato" value="{{ $candidato->nome }}">
        <br /> <br />
        <label for="">Telefone</label>
        <input type="text" placeholder="Digite seu telefone..." name="telefone_candidato" value="{{ $candidato->telefone }}">
        <br /> <br />
        <label for="">Email</label>
        <input type="text" placeholder="Digite seu email..." name="email_candidato" value="{{ $candidato->email }}">
        <br /> <br />
        <label for="">Endereco</label>
        <input type="text" placeholder="Digite seu endereco..." name="endereco_candidato" value="{{ $candidato->endereco }}">
        <br /> <br />
        <label for="">Bairro</label>
        <input type="text" placeholder="Digite seu bairro..." name="bairro_candidato" value="{{ $candidato->bairro }}">
        <br /> <br />
        <label for="">Cidade</label>
        <input type="text" placeholder="Digite sua cidade..." name="cidade_candidato" value="{{ $candidato->cidade }}">
        <br /> <br />
        <label for="">Uf</label>
        <input type="text" placeholder="Digite seu estado..." name="estado_candidato" value="{{ $candidato->estado }}">
        <br /> <br />
        <label for="">Limite de Credito</label>
        <input type="text" placeholder="Digite seu limite..." name="limite_candidato" value="{{ $candidato->limite_credito }}">
        <br /> <br />
        <label for="">Data Analise de Credito</label>
        <input type="text" id="data" name="data_candidato" value="{{ $candidato->data_analise_credito }}" readonly>
        <br /> <br />
        <button>Enviar Cadastro</button>
    </form>

    <script>
        // Obter a data atual
        var dataAtual = new Date();

        // Formatar a data no formato AAAA-MM-DD
        var dia = ("0" + dataAtual.getDate()).slice(-2);
        var mes = ("0" + (dataAtual.getMonth() + 1)).slice(-2);
        var ano = dataAtual.getFullYear();
        var dataFormatada = ano + "-" + mes + "-" + dia;

        // Preencher o campo de data com a data formatada
        document.getElementById("data").value = dataFormatada;
    </script>
</body>
</html>
