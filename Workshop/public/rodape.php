      <!--Rodapé-->
      <div class="">
            <div class="rodape">
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="col-md-4 p-4">
                            <div>
                                <a style="color: #978B7A" href="https://www.instagram.com/xivworkshop/"><img src="img/instagram.png" class="img-rodape">&nbsp;&nbsp;Instagram</a>
                            </div>
                            <div>
                                <a style="color: #978B7A" href="https://www.facebook.com/XIV-Workshop-UEG-101095124610909/?modal=admin_todo_tour"><img src="img/facebook.png" class="img-rodape">&nbsp;&nbsp;Facebook</a>
                            </div>
                            <div>
                                <a style="color: #978B7A" ><img src="img/whatsapp.png" class="img-rodape">&nbsp;&nbsp;</a>
                            </div>
                            <div>
                                <a style="color: #978B7A" ><img src="img/email.png" class="img-rodape">&nbsp;&nbsp;xivworkshopueg@gmail.com</a>
                            </div>
                            <div>
                                <a style="color: #978B7A" href="https://github.com/LeonardoJRibeiro/Workshop"><img src="img/github.png" class="img-rodape">&nbsp;&nbsp;OpenSource Code</a>
                            </div>
                        </div>

                        <div class="col-md-6 p-3 m-1 d-block" id="map">
                            <!--maps-->
                            <script>
                                function initMap() {
                                    var uluru = {lat: -16.0177673, lng: -49.785552};
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 15,
                                        center: uluru
                                    });
                                    var marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map
                                    });
                                }
                            </script>
                            <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgSy1Dyh2pdDEfOCR1iXnAYg9LOWV87eI&callback=initMap">
                            </script> 
                            <!--maps-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Rodapé-->

            <!--Rodapé Down-->
            <div class="container-fluid pt-4 pb-4">
                <div class="row d-flex">
                    <div class="mx-auto p-2">
                        &COPY; 2019 Universidade Estadual de Goiás - Câmpus Itaberaí
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="mx-auto p-2">
                        Desenvolvido pelo 6º período de Sistemas de Informação
                    </div>
                </div>
            </div>
        </div>
        <!--Rodapé Down-->