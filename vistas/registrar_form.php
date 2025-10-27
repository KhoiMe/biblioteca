<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrate</title>
    <!-- Favicon-->
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

</head>

<body class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Se uno de nosotros</h1>

                <br \>
                <br \>

                <!-- Contact-->
                <section id="contact">

                    <div class="row gx-2 gx-lg-5 justify-content-center mb-5">
                        <div class="col-lg-6">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form method="post" action="../controladores/registrar_usuario.ctr.php" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- doc_id -->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="doc_id" type="number" placeholder="Documento de Identidad..."
                                        data-sb-validations="required" />
                                    <label for="doc">Documento de identidad</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">
                                        El documento es obligatorio
                                    </div>
                                </div>
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..."
                                        data-sb-validations="required" />
                                    <label for="name">Nombre completo</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">
                                        El nombre es obligatorio
                                    </div>
                                </div>
                                <!-- Direccion input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="direccion" id="direccion" type="text" placeholder="Enter your name..."
                                        data-sb-validations="required" />
                                    <label for="name">Direccion</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">
                                        La direccion es obligatoria
                                    </div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com"
                                        data-sb-validations="required,email" />
                                    <label for="email">Correo electronico</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                        required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                    </div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890"
                                        data-sb-validations="required" />
                                    <label for="phone">Número de telefono</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                        reqauired.
                                    </div>
                                </div>
                                <!-- Fecha de nacimiento input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="fecha_nac" id="fecha_nac" type="date" placeholder="(123) 456-7890"
                                        data-sb-validations="required" />
                                    <label for="fecha">Fecha de nacimiento</label>
                                    <div class="invalid-feedback" data-sb-feedback="date:required">A phone number is
                                        required.
                                    </div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a
                                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Submit Button-->

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-xl" id="submitButton"
                                        type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <i class="bi-phone fs-2 mb-3 text-muted"></i>
                            <div>+57 310-1153490</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
