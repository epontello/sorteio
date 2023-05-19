<div id="preload" class="preload"></div>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">UNISORTEIO</h1>
                        <form method="POST" action="<?=BASE_URL?>/home/sistsort" >
                            <h2 class="text-white-50 mx-auto mt-2 mb-5" style="font-size: 25px;">Informe o número de participantes: </h2>
                            <input type="text" name="partic" value=""
                                style="font-weight:bold; font-size:70px; text-align:center; width:150px; height:120px; "  required ><br><br>
                            <input class="btn btn-primary" type="submit" value="Prosseguir">
                        </form> 
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; UNIMED SETE LAGOAS 2023</div></footer>
