<style>
    /*AJAX-LOADER*/
    #loading {
        background: none no-repeat scroll 50% 50% rgba(0, 0, 0, 1);
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        text-align: center;
    }
    #loading #imagemLoader{
        margin-top: 5%;
    }
    /*AJAX-LOADER*/
</style>
<script>
    $( document ).ready(function() {
        $('#Sortear').click(function(){
                sorteados = $('#NumerosSorteados').html();
                min = $('#Min').val();
                max = $('#Max').val();
                $('#JaSorteados').slideDown('slow');
                

                $.ajax({
                url: "sorteio", 
                data: "s="+sorteados+"&min="+min+"&max="+max,
                method: "post",      
                success: function(retorno) {
                        if ( sorteados.trim() == '' ) {
                            sorteados = retorno;
                        } else {
                            sorteados += " - "+retorno;
                        }
                        $('#NumeroSorteado').html(retorno);
                        $('#NumerosSorteados').fadeOut();
                        $('#NumerosSorteados').fadeIn();
                        $('#NumerosSorteados').html(sorteados);
                },
                });
                return false;
        });
    });
</script>

<div id="preload" class="preload"></div>

<!-- AJAX-LOADER -->
<div id="loading" style="display: none;">
    <img id="imagemLoader" alt="Processando"  src="<?=BASE_URL?>/assets/img/imagens-e-gifs-de-loading-22.gif"  style="width: 400px; height: 400px;">
</div>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">UNISORTEIO</h1>

                            <h2 class="text-white-50 mx-auto mt-2 mb-5" style="font-size: 25px;">Preparados? Boa sorte!</h2>

                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5">
                                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                                        <h2 class="text-white mb-5" style="font-weight:bold; font-size:100px; ;">
                                            <div id="NumeroSorteado">?</div>
                                        </h2>
                                        <hr>
                                        <h2 class="text-white mb-5" id="JaSorteados" style="display:none;font-weight:bold; font-size:35px; text-align: center">
                                            Números da Sorte:<div id="NumerosSorteados"></div></h2>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="min" id="Min" value="1">
                            <input type="hidden" name="max" id="Max" value="<?=$_SESSION['partic']?>">

                            <button class="btn btn-success" id="Sortear" type="button" onclick="$('#loading').show().fadeOut(4000);">SORTEAR</button>
                            <button class="btn btn-warning" onclick="location.href='<?=BASE_URL?>'" type="button">ENCERRAR</button>

                    </div>
                </div>
            </div>
        </header>


        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; UNIMED SETE LAGOAS 2023</div></footer>

