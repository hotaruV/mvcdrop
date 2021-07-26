<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?= $data['tag_pages'] ?></title>
    <?php require_once('estilos.php'); ?>
</head>

<body>
    <nav class="hero">
        <div class="hero__image"></div>
    </nav>
    <header class="header">
        <div class="header__content">
            <div class="header__text">
                <h1 class="header__title">
                    VUELOS PRIVADOS AL CARIBE <br><span class="dorado">Y OTRAS PARTES DEL MUNDO</span></h1>
            </div>
        </div>
    </header>
    <section class="destino">
        <div class="destino__contenedor">
            <div class="destino__img__con">
                <img src="<?= Utils::img() ?>foto1.webp" alt="" class="destino__img">
            </div>
            <div class="titulo">
                <h2 class="destino__titulo"><span class="dorado">VIAJE DE NEGOCIOS</span> <br> O DE PLACER</h2>
                <p class="destino__texto">
                    Vuela privado al caribe, disfruta tu viaje con comodidad, exclusividad y seguridad a cualquier
                    destino que decidas volar. <br><br>
                    Conoce la experiencia de viajar al caribe con FLY SELECT, somos tu mejor opción para viajar
                    privado de manera cómoda, segura y en la mejor flotilla.
                </p>
                <a href="#" class="boton">Más información</a>
            </div>
        </div>
    </section>
    <section class="porque">
        <div class="destino">
            <div class="porque__contenedor">
                <div class="titulo">
                    <h2 class="destino__titulo">¿POR QUÉ<span class="dorado"> FLY SELECT?</span></h2>
                    <p class="destino__texto">
                        En Fly Select contamos con más de 23 años de experiencia en la aviación privada, con decenas
                        de horas de vuelo realizadas y cientos de clientes satisfechos por la experiencia SELECT. Te
                        garantizamos la mayor seguridad y efectividad en cada vuelo.
                        <br><br>
                        En Fly Select tu tiempo,
                        seguridad y confort son nuestra prioridad, transformando cada viaje privado en una
                        experiencia única.
                    </p>
                    <a href="#" class="boton">Reserva ahora</a>
                </div>
                <div class="destino__img__con">
                    <img src="<?= Utils::img() ?>foto2.webp" alt="" class="destino__img">
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="banner__contenedor">
            <h2 class="banner__titulo">NUESTROS DESTINOS</h2>
        </div>
    </section>
    <section class="banner__contenedor__texto">
        <p class="banner__texto">
            Contamos con vuelos privados nacionales e internacionales, tú eliges el destino y nosotros te brindamos
            el mejor servicio de aviación privada.
            Contamos con planes personalizados adaptados a tus necesidades por lo que garantizamos una experiencia
            única con lujo y exclusividad que transformarán tu viaje.
        </p>
    </section>
    <section class="recomendacion">
        <div class="recomendacion__contenedor">
            <h2 class="recomendacion__titulo">NUESTRA RECOMENDACION</h2>
        </div>
        <div class="recomendacion__destino">
            <div class="recomendacion__card">
                <div class="recomendacion__img__con">
                    <img src="<?= Utils::destinos() ?>destino1.webp" alt="" class="recomendacion__img">
                </div>
                <div class="titulos">
                    <h2 class="destino__titulo"> LAS BAHAMAS</h2>
                    <p class="destino__texto">
                        Vuela a LAS BAHAMAS y disfruta tu estancia conociendo lugares como el parque acuático
                        aquaventure en atlantis Paradise Island o la famosa Blue Lagoon Island.
                        Reserva tu vuelo privado a precios increíbles.
                    </p>
                    <a href="#" class="boton">Más información</a>
                </div>
            </div>
            <div class="recomendacion__card">
                <div class="recomendacion__img__con">
                    <img src="<?= Utils::destinos() ?>destino2.webp" alt="" class="recomendacion__img">
                </div>
                <div class="titulos">
                    <h2 class="destino__titulo">MÉRIDA</h2>
                    <p class="destino__texto">
                        Viaja privado a MÉRIDA con tu familia o amigos. Disfruta de un vuelo seguro y con comodidad.
                        Reserva tu vuelo privado a precios increíbles.
                    </p>
                    <a href="#" class="boton">Más información</a>
                </div>
            </div>

            <div class="recomendacion__card">
                <div class="recomendacion__img__con">
                    <img src="<?= Utils::destinos() ?>destino3.webp" alt="" class="recomendacion__img">
                </div>
                <div class="titulos">
                    <h1 class="destino__titulo">LA HABANA</h1>
                    <p class="destino__texto">
                        Conoce LA HABANA viajando privado por negocios o por placer, disfruta la nueva forma de
                        viajar seguro.
                        Reserva tu vuelo privado a precios increíbles.
                    </p>
                    <a href="#" class="boton">Más información</a>
                </div>
            </div>
            <div class="recomendacion__card">
                <div class="recomendacion__img__con">
                    <img src="<?= Utils::destinos() ?>destino4.webp" alt="" class="recomendacion__img">
                </div>
                <div class="titulos">
                    <h2 class="destino__titulo">REPÚBLICA DOMINICANA</h2>
                    <p class="destino__texto">
                        Vuela privado de forma exclusiva a REPÚBLICA DOMINICANA, en Fly Select nos encargamos de
                        planear tu viaje privado y que sea la mejor experiencia de tu viaje.
                        Reserva tu vuelo privado a precios increíbles.
                    </p>
                    <a href="#" class="boton">Más información</a>
                </div>
            </div>
            <div class="recomendacion__card">
                <div class="recomendacion__img__con">
                    <img src="<?= Utils::destinos() ?>destino5.webp" alt="" class="recomendacion__img">
                </div>
                <div class="titulos">
                    <h2 class="destino__titulo">COSTA RICA</h2>
                    <p class="destino__texto">
                        Viaja a COSTA RICA y disfruta de tu viaje privado con Fly Select, comodidad y exclusividad
                        para tu vuelo.
                        Reserva tu vuelo privado a precios increíbles.
                    </p>
                    <a href="#" class="boton">Más información</a>
                </div>
            </div>
        </div>
        <div class="banner__contenedor pregunta">
            <h2 class="banner__titulo">PREGUNTAS FRECUENTES</h2>
        </div>
    </section>
    <section class="preguntas">
        <div class="preguntas__contenedor">
            <div class="pregunta__card">
                <div class="titulos">
                    <h2 class="pregunta__titulo"> TIPOS DE VUELOS</h2>
                    <p class="pregunta__texto">
                        En Fly Select contamos con distintos modelos de negocio,
                        nuestros vuelos privados son para viajeros frecuentes con
                        destinos nacionales o internacionales, viajes por negocios, viajes
                        de placer, vuelos urgentes, vuelos en ambulancia, traslados
                        especializados, recorridos en helicópteros, recorridos turísticos,
                        pedidas de matrimonio o gender reveal.
                    </p>
                </div>
                <div class="pregunta__img__con">
                    <img src="<?= Utils::img() ?>pregunta1.webp" alt="" class="pregunta__img">
                </div>
            </div>
            <div class="pregunta__card">
                <div class="titulos">
                    <h2 class="pregunta__titulo">¿DE QUÉ DEPENDE EL PRECIO DEL VUELO?</h2>
                    <p class="pregunta__texto">
                        Viajar en una aeronave privada tiene distintas bondades que
                        facilitan tu traslado a cualquier destino, mejora la experiencia de
                        volar de forma privada, el valor del tiempo es un costo
                        incalculable y la inmediatez de la disponibilidad del avión es
                        tuya.
                    </p>
                </div>
                <div class="pregunta__img__con">
                    <img src="<?= Utils::img() ?>pregunta2.webp" alt="" class="pregunta__img">
                </div>
            </div>
            <div class="pregunta__card">
                <div class="titulos">
                    <h2 class="pregunta__titulo">¿CÓMO SÉ QUÉ AVIÓN ELEGIR?</h2>
                    <p class="pregunta__texto">
                        En Fly Select contamos con distintos modelos de negocio,
                        nuestros vuelos privados son para viajeros frecuentes con
                        destinos nacionales o internacionales, viajes por negocios, viajes
                        de placer, vuelos urgentes, vuelos en ambulancia, traslados
                        especializados, recorridos en helicópteros, recorridos turísticos,
                        pedidas de matrimonio o gender reveal.
                    </p>
                </div>
                <div class="pregunta__img__con">
                    <img src="<?= Utils::img() ?>pregunta3.webp" alt="" class="pregunta__img">
                </div>
            </div>
        </div>
    </section>
    <section class="formulario">
        <div class="titulo">Solicita tu vuelo privado ¡AHORA MISMO!</div>
        <div class="content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#vueloredondo" role="tab" aria-controls="home" aria-selected="true">Vuelo Redondo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vuelosencillo" role="tab" aria-controls="profile" aria-selected="false">Vuelo Sencillo</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="vueloredondo" role="tabpanel" aria-labelledby="home-tab">
                    <div class="formulario__contenido">
                        <form class="formulario__registro__grid" id="redondo">
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">Salida</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label for="salida" class="salida">Destino</label>
                                <select name="detino" id="destino">
                                    <option value="0">Seleccione un Destino</option>
                                    <?php foreach ($data['paises'] as $pais) : ?>
                                        <option value="<?= $pais->id ?>"><?= ucwords($pais->nombre) ?></option>                   
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">Fecha de salida</label>
                                <input type="date" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">Fecha de llegada</label>
                                <input type="date" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">Numero de Pasajeros</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">Nombre</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">telefono</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">e-mail</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form">
                                <label class="reserva__form__label" for="empresa">Datos Adicionales</label>
                                <textarea name="adicionales" id="" cols="10" rows="10"></textarea>
                            </div>
                            <div class="reserva__form"></div>
                            <div class="reserva__form">
                                <button class="boton boton__formulario">Enviar</button>
                            </div>
                            <div class="reserva__form"></div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="vuelosencillo" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="formulario__contenido">
                        <form class="formulario__registro__grid" id="redondo">
                            <div class="reserva__form__obj">
                                <label for="salida" class="salida">Destino</label>
                                <select name="detino" id="destino">
                                    <option value="0">Seleccione un Destino</option>
                                    <?php foreach ($data['paises'] as $pais) : ?>
                                        <option value="<?= $pais->id ?>"><?= ucwords($pais->nombre) ?></option>                   
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">Fecha de salida</label>
                                <input type="date" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">Fecha de llegada</label>
                                <input type="date" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">Numero de Pasajeros</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">Nombre</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">telefono</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">e-mail</label>
                                <input type="text" name="nombre" id="nombre" required formControlName="nombre">
                            </div>
                            <div class="reserva__form__obj">
                                <label class="reserva__form__label" for="empresa">Datos Adicionales</label>
                                <textarea name="adicionales" id="" cols="10" rows="10"></textarea>
                            </div>
                            <div class="reserva__form__obj"></div>
                            <div class="reserva__form__obj">
                                <button class="boton boton__formulario">Enviar</button>
                            </div>
                            <div class="reserva__form__obj"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__imagen">
            <img src="<?= Utils::img() ?>logo_fs.png" alt="logo" class="footer__img">
        </div>
        <div class="footer__content">
            <div class="footer__titulo">
                <ul class="footer__lista">
                    <h2>Contacto</h2>
                    <li class="footer__item">Centro de Aviación</li>
                    <li class="footer__item">Calle 5, hangar 45</li>
                    <li class="footer__item"> Toluca de Lerdo, Méx.</li>
                    <li class="footer__item"> Telephone 722 799 7367</li>
                </ul>
                <ul class="footer__lista">
                    <h2 class="hide">s</h2>
                    <li class="footer__item">Oficinas Administrativas</li>
                    <li class="footer__item">Vega de la Plata 112</li>
                    <li class="footer__item">Lomas del Tecnológico, SLP, Mex.</li>
                    <li class="footer__item">Teléfono 444 204 6064</li>
                    <li class="footer__item">E-mail: moc.tceles-ylf@satnev</li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<?php require_once 'scripts.php' ?>

</html>