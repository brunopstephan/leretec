@extends('layouts.main')

@section('container')
    <div class="container card-container newlinkcont">
        <div class="back">
            <a href="/admin" class="btn-back btn-all btn-sm"><i class="uil uil-corner-up-left-alt"></i>Voltar</a>
        </div>
        <div class="newlink-form">
            <h1>Alterar links:</h1>
            <form class="newlink" id="preventDoubleSubmit" method="GET">
                <?php 
                    $config = json_decode(file_get_contents('.felps'), true);
                    echo "<label for='newlink'>Link do Formulário</label>";
                    echo "<input class='form-control' type='text' name='newlink' value=".$config['link'].">";
                    echo "<label for='instagram'>Instagram</label>";
                    echo "<input class='form-control' type='text' name='instagram' value=".$config['instagram'].">";
                    echo "<label for='facebook'>Facebook</label>";
                    echo "<input class='form-control' type='text' name='facebook' value=".$config['facebook'].">";
                    echo "<label for='twitter'>Twitter</label>";
                    echo "<input class='form-control' type='text' name='twitter' value=".$config['twitter'].">";
                    echo "<label for='contact'>Contato</label>";
                    echo "<input class='form-control' type='text' name='contact' value=".$config['contact'].">";
                ?>
                <button id="btnAll" class="btn-all alt-form" type="submit">Alterar</button>
            </form>
        </div>
    </div>

    <?php 
    if(isset($_GET["newlink"]))
    {
        $arr = array('link' => $_GET['newlink'], 'instagram' => $_GET['instagram'], 'facebook' => $_GET['facebook'], 'twitter' => $_GET['twitter'], 'contact' => $_GET['contact']);
        file_put_contents(".felps", json_encode($arr));
        echo '<script>location.href = "/admin"</script>';
    }
    ?>
@endsection