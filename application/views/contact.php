<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url(); ?>img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>¡Contáctanos!</h1>
                        <hr class="small">
                        <span class="subheading">¿Tienes preguntas o comentarios?</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <div class="container show-after-intro">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Cualquier duda o comentario favor de llenar la siguiente forma</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <select class="form-control" placeholder="Asunto" id="reason" required>
                                <option value="-1">Por favor escoge tu asunto.</option>
                                <option value="0">Servicio Social</option>
                                <option value="1">Adopci&oacute;n</option>
                                <option value="2">Informaci&oacute;n</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Correo Electr&oacute;nico</label>
                            <input type="email" class="form-control" placeholder="Correo Electr&oacute;nico" id="email" required data-validation-required-message="Por favor ingresa tu correo electr&oacute;nico.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>N&uacute;mero Telef&oacute;nico</label>
                            <input type="tel" class="form-control" placeholder="N&uacute;mero Telef&oacute;nico" id="phone" required data-validation-required-message="Por favor ingresa tu n&uacute;mero telef&oacute;nico.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Comentario</label>
                            <textarea rows="5" class="form-control" placeholder="Comentario" id="message" required data-validation-required-message="Por favor ingresa tu comentario."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>