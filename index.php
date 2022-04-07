<html lang="es">
<head>
    <title>Proyecto de computo en la nube</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/jquery-3.6.0.js"> </script>
    <link rel="icon" href="./imagenes/Icono.png" type="image/icon type">
    <script src="./js/funciones.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
    <script>
        function Registro(){
            /*var op1 = '<?php echo $_POST["optradio"]; ?>';
            alert("Las opciones seleccionadas son "+op1);
            var op2 = document.getElementById("radio1").value;
            alert(op2)*/
            const respuesta1 = document.querySelector('input[name="optradio"]:checked').value;
            const respuesta2 = document.querySelector('input[name="optradio2"]:checked').value;
            const respuesta3 = document.querySelector('input[name="optradio3"]:checked').value;
            const respuesta4 = document.querySelector('input[name="optradio4"]:checked').value;
            const respuesta5 = document.querySelector('input[name="optradio5"]:checked').value;
            const respuesta6 = document.querySelector('input[name="optradio6"]:checked').value;
            let getTextArea = document.getElementById("txtArea");
            const respuesta7 = getTextArea.value;
            getTextArea = document.getElementById("txtArea2");
            const respuesta8 = getTextArea.value;
            alert("Respuestas enviadas:" + "\n" +
                "¿Sabes o has escuchado del termino Cloud Computing (Computo en la nube)? "+ respuesta1 + "\n" +
                "¿Cree usted que es importante que la FIME enseñe sobre Cloud Computing? " + respuesta2 + "\n" +
                "¿Conoce cuales son los servicios que se ofrecen Cloud Computing? "+ respuesta3 + "\n" +
                "¿Crees que la FIME se beneficia del Cloud Computing? "+respuesta4 + "\n" +
                "¿Cual de los siguientes proveedores de servicios de Cloud Computing prefiere? "+respuesta5 + "\n" +
                "¿Considera que el Cloud Computing es dificil de implementar? "+respuesta6 + "\n" +
                "¿Cual de los servicios de Cloud Computing que usted conoce, cree que puedan ofrecer o aplicar a la FIME? "+respuesta7 + "\n" +
                "¿Cuales serian los principales beneficios de Cloud Computing en la carrera? "+respuesta8)
        }
    </script>
</head>

<body>
<div class="tabs-to-dropdown">
    <div class="nav-wrapper d-flex align-items-center justify-content-between">
        <ul class="nav nav-pills d-none d-md-flex" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-company-tab" data-toggle="pill" href="#pills-company" role="tab" aria-controls="pills-company" aria-selected="true">Inicio</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-product" role="tab" aria-controls="pills-xproduct" aria-selected="false">Estudio</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news" aria-selected="false">Sondeo</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-expo-tab" data-toggle="pill" href="#pills-expo" role="tab" aria-controls="pills-expo" aria-selected="false">Exposiciones</a>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 h-75" src="./imagenes/Stock11.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-75" src="./imagenes/Stock222.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-75" src="./imagenes/Stock33.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--Termina main div-->
            </div>
        </div>
        <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab">
            <div class="container-fluid">
                <h2 class="mb-3 font-weight-bold">Estado del arte</h2>
                <p>La computación en la nube es un nuevo modelo de computación que podría cambiar de manera positiva a nuestra sociedad, aportando ventajas,
                    tanto al sector empresarial, gubernamental, como privado. Este estudio se pretende abordar las características, ventajas que tienen la
                    tecnología Computo en Las Nubes, para la informatización de la sociedad, su aplicación y su impacto en la educación cubana.</p>
                <p><i>Rojo, E. G. (2017). COMPUTO EN LAS NUBES, CARACTERÍSTICAS Y BENEFICIOS. CUBA Y LA NUBE. Universidad & Ciencia, 6, 15-30.</i></p>
                <p>El cómputo en la nube
                    consiste en una serie de servicios de
                    cómputo bajo demanda, entregados a través de internet desde
                    una ubicación remota o por medio de los servidores de una organización. Dado que aún se considera un concepto emergente,
                    el cómputo en la nube es un reflejo del cambio en el modelo
                    cliente-servidor hacia el modelo de red, a partir de entornos
                    aislados hasta la red mundial; lo cual permite una perspectiva
                    independiente de la plataforma y ubicación para la comunicación, la colaboración, el almacenamiento y la producción.
                </p>
                <p><i>Barnard, A., Delgado, A., & Voutssás, J. (2016). Introducción al cómputo en la nube. México: ICA/InterPARES.</i></p>
                <p>El cómputo en la nube es un modelo de servicio de infraestructura de TI que ofrece grandes
                    virtudes y disminución en costos comparado con el modelo tradicional, ya que prácticamente reduce el
                    departamento de TI por el servicio de pago por uso del mismo. Como todo sistema la nube tiene sus
                    ventajas, desventajas y riesgos. La nube no cambia los marcos de referencia de administración de TI pero
                    sí necesita una extensión.</p>
                <p><i>Beltrán, T. R. B., & González, O. G. (2016). ¿ Subirnos o no subirnos a la nube? El cómputo en la nube como factor de competitividad en las empresas.</i></p>
                <h2 class="mb-3 font-weight-bold">Exploracion de los servicios de un Proveedor</h2>
                <p>Lista completa de servicios de Google</p>
                <a href="https://cloud.google.com/products?hl=es#section-1" target="_blank">Lista con mas de 300     servicios</a><br>
                <h2>Caracteristicas</h2>
                <p><b>1. Autoservicio a la carta.</b>
                    Un   consumidor   puede   abastecerse   unilateralmente   de   capacidades   de computación, como tiempo de servidor y almacenamiento en red según sus necesidadesde forma automática sin requerir la interacción humana con cada proveedor de servicios.
                    <br><b>2. Amplio acceso a la red.</b>
                    Las capacidades están disponibles en la red y se accede a ellas a través de mecanismos estándar que promueven el uso de plataformas heterogéneas tanto ligeras como pesadas (por ejemplo, teléfonos móviles, computadoras portátiles y otros dispositivos).
                    <br><b>3. Reservas de recursos en común.</b>
                    Los recursos computacionales del proveedor proponen servir en común a varios consumidores que utilicen un modelo de multiposesión, con diferentes recursos físicos y virtuales dinámicos y reasignados de acuerdo con la demanda de los consumidores.
                    <br><b>4. Rapidez y elasticidad.</b>
                    Las capacidades puedensuministrarse de manera rápida y elástica, enalgunos casos, de   manera   automática, para   poder   realizar   de   forma   rápida   el redimensionado correspondiente.
                    <br><b>5. Servicio supervisado</b>
                    Los sistemas de nube controlan y optimizan el uso de los recursos de manera automática, utilizando una capacidad de medición en un cierto nivel de abstracción adecuada para el tipo de servicio (por ejemplo, almacenamiento, procesamiento, ancho de banda, y cuentas de usuario activas).
                </p>
                <p>
                    <h2>Tipos de nubes</h2>
                    <b>Nube privada.</b> La infraestructura de nube es operada únicamente por una organización. Puede ser manejada por la misma organización o por un tercero dentro o fuera de las instalaciones de ésta.
                    <br><b>Nube comunitaria.</b> La infraestructura de nube es compartida por varias organizaciones y apoya a una comunidad específica que comparte ciertas afinidades (por ejemplo, la misión, los requisitos de seguridad, políticas u objetivos). Puede ser administrada por la organización o por un tercero, y puede estar ubicada en las instalaciones o fuera de ellas.
                    <br><b>Nube pública.</b> La infraestructura de la nube pertenece a una organización que vende sus servicios en la nube; está disponible al público en general o a un gran grupo industrial.
                    <br><b>Nube híbrida.</b> La infraestructura de nube es una agregación de dos o más tipos de nubes (privada, comunitaria o pública) las cuales siguen siendo entidades únicas, pero unidas por tecnología estandarizada o propietaria que permite la portabilidad de datos y aplicaciones (por ejemplo, dispersión de recursos dentro de la nube para balancear la carga entre ellas).
                </p>
                <p>
                    <h2>Tipos de despliegue de nube</h2>
                <ul>
                    <li>Modelo de despliegue automatico (Nube pública)</li>
                    <li>Modelos de despliegue privado
                        <ul>
                            <li>Nube virtual privada</li>
                            <li>Nube privada</li>
                        </ul>
                    </li>
                    <li>Modelo de despliegue hibrido</li>
                </ul>
                </p>
                <p>
                    <h2>Ventajas</h2>
                    <ul>
                        <li>Disponible en cualquier sitio</li>
                        <li>Es multiplataforma</li>
                        <li>Puedes compartir con otros</li>
                        <li>Evita problemas con dispositivos físicos</li>
                    </ul>
                <h2>Desventajas</h2>
                <ul>
                    <li>Espacio limitado</li>
                    <li>Seguridad</li>
                    <li>Es necesario tener internet</li>
                    <li>No hay un control total sobre los archivos</li>
                </ul>
                </p>
                <p>
                    <h2>Modelos de servicio en la nube</h2>
                    <b>1.Almacenamiento como servicio:</b>este permite que los usuarios almacenen y compartan datos a distancia. Algunos ejemplos son Dropbox, Box.net, Amazon Scalable Storage Service (S3), Iron Mountain, EMC Atmos Online, Google Cloud Storage y SQL Azure de Microsoft.
                    <br><b>2.Software como servicio (SaaS):</b>este ofrece un entorno completo de software a distancia a los usuarios, por ejemplo, para el correo electrónico, el procesamiento de textos, la gestión de las relaciones con los clientes y muchas otras aplicaciones.  Algunos ejemplos incluyen Google Docs, Calendar y Gmail, Zimbra, Spotify, Salesforce.com, Microsoft Office 365 y SAP Business by Design.
                    <br><b>3.Plataforma como servicio (PaaS):</b> este permite que los desarrolladores de software diseñan aplicaciones en nubes, aprovechando la capacidad de   la nube   para   ofrecer   automáticamente   recursos adicionales   de computación y almacenamiento cuando sea necesario. Algunos ejemplos de PaaS son IBM Websphere, Force.com, Springsource, Morphlabs, Google   App   Engine, Microsoft   Windows   Azure   y Amazon   Elastic Beanstalk.
                    <br><b>4.Infraestructura como servicio (IaaS):</b>ofrece a los desarrolladores de software   un   control   directo   de   los   recursos   de   computación   y almacenamiento proporcionados por una nube. Esto proporciona mayor flexibilidad, a costa de una mayor complejidad para aprovechar todos los servicios de la nube. Algunos ejemplos de ello son Elastic Compute Cloud de Amazon, Zimory, Elastichosts y vCloud Express de VMWare.
                </p>
                <p>
                    <h2>Bibliografia</h2>
                Rojo, E. G. (2017). COMPUTO EN LAS NUBES, CARACTERÍSTICAS Y BENEFICIOS. CUBA Y LA NUBE. Universidad & Ciencia, 6, 15-30.<br>
                Barnard, A., Delgado, A., & Voutssás, J. (2016). Introducción al cómputo en la nube. México: ICA/InterPARES.<br>
                Del Vecchio, J. F., Paternina, F. J., & Henríquez Miranda, C. (2015). La computación en la nube: un modelo para el desarrollo de las empresas. Prospectiva, 13(2), 81-87.<br>

                </p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
            <div class="container-fluid">
                <h2 class="mb-3 font-weight-bold">Sondo de la opinion estudiantil y academica</h2>
                <form method="post" id="Encuesta" onsubmit="Registro()" name="Encuesta">
                    <p>¿Sabes o has escuchado del termino Cloud Computing (Computo en la nube)?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="si" required="true">Si
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="no">No
                        </label>
                    </div>

                    <p>¿Cree usted que es importante que la FIME enseñe sobre Cloud Computing?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio3">
                            <input type="radio" class="form-check-input" id="radio3" name="optradio2" value="si" required="true">Si
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio4">
                            <input type="radio" class="form-check-input" id="radio4" name="optradio2" value="no">No
                        </label>
                    </div>

                    <p>¿Conoce cuales son los servicios que se ofrecen Cloud Computing?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio5">
                            <input type="radio" class="form-check-input" id="radio5" name="optradio3" value="si" required="true">Si
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio6">
                            <input type="radio" class="form-check-input" id="radio6" name="optradio3" value="no">No
                        </label>
                    </div>

                    <p>¿Crees que la FIME se beneficia del Cloud Computing?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio7">
                            <input type="radio" class="form-check-input" id="radio7" name="optradio4" value="si" required="true">Si
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio8">
                            <input type="radio" class="form-check-input" id="radio8" name="optradio4" value="no">No
                        </label>
                    </div>

                    <p>¿Cual de los siguientes proveedores de servicios de Cloud Computing prefiere?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio9">
                            <input type="radio" class="form-check-input" id="radio9" name="optradio5" value="Google" required="true">Google
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio10">
                            <input type="radio" class="form-check-input" id="radio10" name="optradio5" value="Amazon">Amazon
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio11">
                            <input type="radio" class="form-check-input" id="radio11" name="optradio5" value="Microsoft">Microsoft
                        </label>
                    </div>

                    <p>¿Considera que el Cloud Computing es dificil de implementar?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio12">
                            <input type="radio" class="form-check-input" id="radio12" name="optradio6" value="si" required="true">Si
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio13">
                            <input type="radio" class="form-check-input" id="radio13" name="optradio6" value="no">No
                        </label>
                    </div><br>

                    <label for="txtArea">¿Cual de los servicios de Cloud Computing que usted conoce, cree que puedan ofrecer o aplicar a la FIME?</label>
                    <textarea class="form-control" rows="5" id="txtArea"></textarea>

                    <label for="txtArea2">¿Cuales serian los principales beneficios de Cloud Computing en la carrera?</label>
                    <textarea class="form-control" rows="5" id="txtArea2" required="true"></textarea>

                    <br><br><input type="submit" name="Enviar" value="Enviar" class="btn btn-lg btn-primary"/>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-expo" role="tabpanel" aria-labelledby="pills-expo-tab">
            <div class="container-fluid">
                <h2 class="mb-3 font-weight-bold">Exposiciones</h2>
                <p>Exposicion 1: Google Keep</p>
                <p>Google Keep es una aplicación desarrollada por Google Inc. que permite organizar la información personal
                    a través del archivo de notas. Fue lanzada el 20 de marzo de 2013, estando disponible en Google Play para
                    los dispositivos con sistema operativo Android, y en Google Drive como aplicación web. Google Keep es un reemplazo
                    el servicio Google Notebook.</p>
                <a href="./PDFs/Google%20keep.pdf" target="_blank">Visualiza el documento aqui</a><br>
                <a href="./PDFs/Google%20keep.pdf" download >Descarga el documento aqui</a>
                <br><br><br><br>
                <p>Exposicion 2: Google Cloud Worflows</p>
                <p>Combina los servicios y las API de Google Cloud para crear aplicaciones fiables de forma sencilla,
                    automatizar procesos y gestionar datos y flujos de procesamiento de aprendizaje automático.</p>
                <a href="./PDFs/Google%20cloud%20workflows.pdf" target="_blank">Visualiza el documento aqui</a><br>
                <a href="./PDFs/Google%20cloud%20workflows.pdf" download>Descarga el documento aqui</a>
            </div>
        </div>

    </div>
</div>
</body>
</html>
